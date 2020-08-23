<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'cpf',
        'rg',
        'gender',
        'date_birth',
        'photo',
        'phone',
        'email',
        'obs',
        'cep',
        'street',
        'neighborhood',
        'city',
        'state',
        
    ];

    protected $dates = ['deleted_at'];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_students');
    }
   
}
