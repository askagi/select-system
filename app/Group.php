<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'description', 'local', 'num_students', 'price'];

    public function modality()
    {
        return $this->belongsTo(Modality::class); // pertence uma Modality, relação de 1 : N 
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'group_students'); // tem uma relação de n : n com Student
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'group_teachers'); // tem um relação de n : n com Teachers
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
