<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRom extends Model
{
    use HasFactory;
    protected $table = "class_roms";
    protected $fillable = ['id','name_ar','name_en','number_count','number_st_avilable','created_at','upadated_at'];


    public function teachers(){
        return $this->hasMany('App\Models\Teacher','teacher_id');

    }

}
