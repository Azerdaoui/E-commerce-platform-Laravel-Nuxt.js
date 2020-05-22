<?php

namespace App\Models;

use App\Models\Traits\CanBeScoped;
use App\Scoping\Scoper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use CanBeScoped;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function categories()
    {
        return $this->BelongsToMany(Category::class);
    }

    public function variations()
    {
        return $this->hasMany(ProductVariation::class)->orderBy('order', 'asc');
    }
}
