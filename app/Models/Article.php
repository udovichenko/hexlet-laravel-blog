<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $state
 * @property int $likes_count
 * @property int $category_id
 */
class Article extends Model
{
    protected $fillable = [
        'name',
        'body',
        'views_count',
        'likes_count',
    ];

    public function isPublished(): bool
    {
        return $this->state == 'published';
    }
}
