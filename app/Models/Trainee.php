<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;
    public function users() {
        return $this->hasMany('App\Models\Course');
    }
    public function courses() {
        return $this->hasMany('App\Models\Course');
    }
}
