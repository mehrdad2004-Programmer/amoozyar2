<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class st_reg_info extends Model
{

    protected $table = 'st_reg_info';

    protected $fillable = [
        'st_lname', 'st_faname', 'st_id_no', 'st_birth_date',
        'st_birth_place', 'st_grade', 'st_field', 'st_exp_place',
        'st_series', 'st_fname', 'st_phone', 'st_telephone',
        'st_personal_pic', 'st_address'
    ];

    public function mother()
    {
        return $this->hasOne(Mother::class, 'st_id_no', 'st_id_no');
    }

    public function father()
    {
        return $this->hasOne(Father::class, 'st_id_no', 'st_id_no');
    }

    public function education()
    {
        return $this->hasOne(StudentEducation::class);
    }

}
