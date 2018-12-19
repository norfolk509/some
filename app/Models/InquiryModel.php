<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class InquiryModel extends Eloquent
{
    protected $connection = 'mgdbmessages';
    protected $collection = 'message';

    protected $fillable = [
        'user_id', 'partner_id', 'in_out', 'type', 'subject', 'body',
        'app_id', 'url_pc', 'url_sp', 'url_fp', 'inquiry_id', 'return_message_id',
        'is_read', 'is_delete', 'create_date', 'update_date', 'expire_date'
    ];

    /**
     * @param array $params
     * @return bool
     */
    public function saveGameInquiry(array $params)
    {
        foreach ($params as $name => $value) {
            if(in_array($name, $this->fillable)) {
                $this->$name = $value;
            }
        }
        $this->save();
        return $this->getKey();
    }
}