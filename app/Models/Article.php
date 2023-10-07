<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $state
 * @property int $likes_count
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
