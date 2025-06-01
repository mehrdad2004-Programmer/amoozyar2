<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StRegInfoModel;
class StEducationInfoModel extends Model
{

    protected $table = 'st_education_info';

    protected $fillable = [
        'last_school', 
        'last_avrage', 
        'last_enzebat', 
        'last_karname',
        "st_id_no"
    ];

    public function student()
    {
        return $this->belongsTo(StRegInfoModel::class, "st_id_no", "st_id_no");
    }
}
