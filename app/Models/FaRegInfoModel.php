<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StRegInfoModel;

class FaRegInfoModel extends Model
{

    protected $table = 'st_fa_reg';

    protected $fillable = [
        'fa_fname', 
        'fa_lname', 
        'fa_job', 
        'fa_work_address',
        'fa_phone', 
        'fa_id_no', 
        'fa_education', 
        'st_id_no'
    ];

    public function student()
    {
        return $this->belongsTo(StRegInfoModel::class, 'st_id_no', 'st_id_no');
    }
}
