<?php

declare(strict_types=1);

namespace Castr\Domains\Shared\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Castr\Domains\Catalog\Models\Podcast;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name'
    ];

    public $timestamps = false;

    public function podcasts(): HasMany
    {
        return $this->hasMany(
            related: Podcast::class,
            foreignKey: 'category_id',
        );
    }

    public function newEloquentBuilder($query): Builder
    {
        return new Builder(
            query: $query,
        );
    }
}
