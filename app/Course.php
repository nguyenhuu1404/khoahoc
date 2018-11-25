<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = ['slug', 'name'];

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
    function lessons(){
        return $this->belongsToMany('App\Lesson', 'course_lesson', 'course_id', 'lession_id');
    }
    function packages(){
        return $this->belongsToMany('App\Package', 'course_package', 'package_id', 'course_id');
    }
}
