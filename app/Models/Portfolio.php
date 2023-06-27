<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'image',
        'title',
        'category_id',
        'client',
        'project_date',
        'project_url',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
