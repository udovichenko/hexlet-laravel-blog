<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ArticleCategory extends Model
{
    protected $fillable = ['name', 'description', 'state'];

    public function articles(): HasMany
    {
        return $this->hasMany(__NAMESPACE__ . '\Article', 'category_id');
    }

    public function __toString()
    {
        return $this->name;
    }
}
