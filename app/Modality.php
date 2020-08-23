<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modality extends Model
{
    protected $fillable = ['name', 'photo', 'description'];

   public function groups()
   {
       return $this->hasMany(Group::class);
   }
}
