<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'publisher', 'author', 'excerpt', 'body', 'publish_at'];
    protected $guarded = ['id'];

    public function setCategoryAttribute($value)
    {
        $this->attributes['category_id'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['category_id'] = json_decode($value);
    }

    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}

