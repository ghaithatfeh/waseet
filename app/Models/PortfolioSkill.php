<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioSkill extends Model
{
    use HasFactory;
    protected $fillable = ['skill_id', 'portfolio_id'];
    public $timestamps = false;
}
