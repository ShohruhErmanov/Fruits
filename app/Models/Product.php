<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Filter;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function filter()
    {
        return $this->belongsTo(Filter::class);
    }
}
