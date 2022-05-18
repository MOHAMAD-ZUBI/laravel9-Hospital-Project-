<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use HasFactory;
    #one To Many
    //each category has many policlinics
    public function policlinics(){
        return $this->hasMany(Policlinic::class);
    }
    public function parent(){
        return $this->belongTo(Category::class, 'parent_id');
    }
    public function children(){
        return $this->HasMany(Category::class, 'parent_id');
    }
}
