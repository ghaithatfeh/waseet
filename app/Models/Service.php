<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'deadline', 'price', 'category_id', 'user_id'];

    public function user(){
        return $this->belongsTo('users');
    }
    public function category(){
        return $this->belongsTo('categories');
    }
    public function skills(){
        return $this->belongsToMany('skills', 'service_skill');
    }
    public function images(){
        return $this->hasMany('service_images');
    }
}
