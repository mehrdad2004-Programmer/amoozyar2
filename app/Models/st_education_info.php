<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class st_education_info extends Model
{

    protected $table = 'st_education_info';

    protected $fillable = [
        'last_school', 'last_avrage', 'last_enzebat', 'last_karname'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
