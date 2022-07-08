<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    use HasFactory;

    protected $fillable = ['image_name', 'portfolio_id'];
    public $timestamps = false;

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
