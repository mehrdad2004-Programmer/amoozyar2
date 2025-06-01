<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fa_reg_info extends Model
{

    protected $table = 'fa_reg_info';

    protected $fillable = [
        'fa_fname', 'fa_lname', 'fa_job', 'fa_work_address',
        'fa_phone', 'fa_id_no', 'fa_education', 'st_id_no'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'st_id_no', 'st_id_no');
    }
}
