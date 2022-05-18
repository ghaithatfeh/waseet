<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name'];

    public function project()
    {
        return $this->belongsToMany(Project::class, 'project_skills');
    }
    public function skills()
    {
        return $this->belongsToMany('services', 'service_skill');
    }
}
