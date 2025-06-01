<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MoRegInfoModel;
use App\Models\FaRegInfoModel;
use App\Models\StEducationInfoModel;
class StRegInfoModel extends Model
{

    protected $table = 'st_reg_info';

    protected $fillable = [
        'st_lname', 
        'st_faname', 
        'st_id_no',
        'st_series',
        'st_birthdate',
        'st_birthplace', 
        "st_id_card_exportion",
        "st_home_phone",
        'st_grade', 
        'st_field', 
        "st_group",
        'st_series', 
        'st_fname', 
        'st_phone', 
        "request_date",
        "st_reg_code",
        "st_condition",
        "status",
        'st_personal_pic', 
        'st_address'
    ];

    public function mother()
    {
        return $this->hasOne(MoRegInfoModel::class, 'st_id_no', 'st_id_no');
    }

    public function father()
    {
        return $this->hasOne(FaRegInfoModel::class, 'st_id_no', 'st_id_no');
    }

    public function education()
    {
        return $this->hasOne(StEducationInfoModel::class, "st_id_no", "st_id_no");
    }

}
