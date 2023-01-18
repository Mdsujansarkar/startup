<?php

declare(strict_types=1);

namespace Castr\Domains\Catalog\Models;

use Castr\Domains\Shared\Models\User;
use Illuminate\Database\Eloquent\Model;
use Castr\Domains\Shared\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Podcast extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'uuid',
        'title',
        'generator',
        'description',
        'author',
        'copyright',
        'language',
        'external_url',
        'feed_url',
        'image',
        'user_id',
        'category_id',
    ];
    protected $cast = [
        'image' => AsArrayObject::class,
    ];
    public function owner(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(
            related: Category::class,
            foreignKey: 'category_id',
        );
    }
}
