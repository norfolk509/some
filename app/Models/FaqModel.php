<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqModel extends Model
{
    protected $table = 'faq';

    public function index() {

        $allFaq = FaqModel::on('slcontent')->get();

        return $allFaq;
    }

    public function show($id) {

        $faq = FaqModel::on('slcontent')->findOrFail($id);

        return $faq;
    }
}
