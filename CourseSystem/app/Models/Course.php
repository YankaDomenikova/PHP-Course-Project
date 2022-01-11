<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function organization(){
        return $this->belongsTo(Organization::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }


}