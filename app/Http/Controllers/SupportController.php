<?php

namespace App\Http\Controllers;

use App\Models\SupportModel;
use App\Models\NoticesModel;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    // Variables for the Models
    private $supportModel;
    private $noticesModel;

    // Variables for the FAQ elements
    private $faqCategories;
    private $faqList;

    // General Inquiries variables
    private $subjectSelection;

    // Tracking variables
    private $trackAction;

    public function __construct(SupportModel $supportModel, NoticesModel $noticesModel)
    {
        $this->supportModel = $supportModel;
        $this->noticesModel = $noticesModel;

        $this->faqCategories = array_flip($this->supportModel->getCategories());
        $this->faqList = $this->supportModel->getFAQList();

        $this->subjectSelection = [
            'loggingInToNutaku'     => 'Logging in to Nutaku',
            'signingUpForNutaku'    => 'Signing up for Nutaku',
            'myAccountLockedBanned' => 'My Account is Locked/Banned',
            'downloadableGames'     => 'Downloadable Games',
            'drm'                   => 'DRM',
            'userProfile'           => 'User Profile',
            'adobeFlash'            => 'Adobe Flash',
            'websiteBugs'           => 'Website Bugs',
            'other'                 => 'Other',
        ];

        // TODO: Define the tracking
        $this->trackAction = 'TEST123';
    }

    /**
     * This function displays the main support page
     * @param string|null $title_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(string $title_id = null)
    {
        // Get the FAQ elements for the view
        $faqList = $this->faqList;

        // Track stuff
        $trackAction = $this->trackAction;

        return view('support.index', compact('faqList', 'trackAction', 'title_id'));
    }

    /**
     * This function displays the FAQ page
     * @param int $category_id
     * @param int $question_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function faq(int $category_id, int $question_id)
    {
        // Get the elements for the view
        $faqList = $this->faqList;

        // Get the selected question and the corresponding answer
        $selectedCategory = null;
        $selectedQuestion = null;
        $answer = null;
        foreach ($faqList as $questions) {
            foreach ($questions as $question) {
                if ($question['category_no'] == $category_id) {
                    $selectedCategory = $this->faqCategories[$question['category_no']];
                    if ($question['qa_no'] == $question_id) {
                        $selectedQuestion = $question['question'];
                        $answer = $question['answer'];
                    }
                }
            }
        }

        // If the question does not exist, redirect to default ones
        if (!$selectedQuestion) {
            return \redirect()->route('/faq/1/1');
        }

        // Track stuff
        $trackAction = $this->trackAction;

        return view('support.faq', compact('faqList', 'selectedCategory', 'selectedQuestion', 'answer', 'category_id', 'question_id', 'trackAction'));
    }

    /**
     * This function displays the main form for general inquiries
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function generalInquiriesIndex(Request $request)
    {
        // Get notices list
        $noticeList = $this->noticesModel->getNoticeList(1, 'contact_us');

        // Get parameters (form fields)
        $params = $request->all();

        // Form errors
        $errorMessage = null;
        $errorList = [];

        // Check if user is logged in
        $isLogin = false;

        // Subject List
        $subjectSelection = $this->subjectSelection;

        // Track stuff
        $partialTrack = $this->trackAction;
        $trackAction = $this->trackAction;

        return view('support.general_inquiries', compact('noticeList', 'params', 'errorMessage', 'errorList', 'isLogin', 'subjectSelection', 'partialTrack', 'trackAction'));
    }

    public function generalInquiriesConfirm(Request $request)
    {
        // Validate the data
        $validate = $this->generalInquiriesValidate($request);

        // Get parameters (form fields)
        $params = $request->all();

        // Send $csrf value
        $csrf = 'xXxXxXxXxXxXxXx';

        // Send the subjects array
        $subjects = $this->subjectSelection;

        return view('support.general_inquiries_confirm', compact('params', 'subjects', 'csrf'));
    }

    private function generalInquiriesValidate(Request $request)
    {
        $rules = [
            'yourName' => 'required',
            'mailAddress' => 'required',
            'reenterMailAddress' => 'required|same:mailAddress',
            'message' => 'required',
        ];
        if($request->input('mySelection') == 'other') {
            $rules['subject'] ='required';
        }

        $customMessages = [
            'yourName.required' => 'Please enter your name.',
            'mailAddress.required' => 'Please enter your email address.',
            'reenterMailAddress.required' => 'Please confirm your email address.',
            'reenterMailAddress.same' => 'The email addresses you provided don\'t match',
            'message.required' => 'Please enter a message',
            'subject.required' => 'Please enter a subject',
        ];

        return $request->validate($rules, $customMessages);

    }
}
