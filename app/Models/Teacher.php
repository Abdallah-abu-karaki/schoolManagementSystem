<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $fillable = ['name_ar','name_en','phon_number','address_ar','address_en','user_id','created_at','updated_at'];

    public function students(){
      return  $this->belongsTo('App\Models\Student','teacher_id');
    }

    public function classRoom(){
        return $this->belongsTo('App\Models\ClassRom','teacher_id');
    }

}
