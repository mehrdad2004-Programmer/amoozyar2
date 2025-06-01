<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mo_reg_info extends Model
{

    protected $table = 'mo_reg_info';

    protected $fillable = [
        'mo_fname', 'mo_lname', 'mo_job', 'mo_work_address',
        'mo_phone', 'mo_id_no', 'mo_education', 'st_id_no'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'st_id_no', 'st_id_no');
    }
}
