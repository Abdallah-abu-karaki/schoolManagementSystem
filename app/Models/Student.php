<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = ['name_ar','name_en','phon_number','address_ar','address_en','image_student','user_id','teacher_id','created_at','updated_at'];

    public function teacher(){
      return   $this->hasOne('App\Models\Teacher','teacher_id');
    }
}
