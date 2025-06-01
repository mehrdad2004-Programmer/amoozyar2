<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StRegInfoModel;

class MoRegInfoModel extends Model
{

    protected $table = 'st_mo_reg';

    protected $fillable = [
        'mo_fname',
        'mo_lname', 
        'mo_job', 
        'mo_work_address',
        'mo_phone', 
        'mo_id_no', 
        'mo_education', 
        'st_id_no'
    ];

    public function student()
    {
        return $this->belongsTo(StRegInfoModel::class, 'st_id_no', 'st_id_no');
    }
}
