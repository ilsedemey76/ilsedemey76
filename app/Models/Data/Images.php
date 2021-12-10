<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'images';
    protected $primaryKey = 'id';
    /**
     * Get the comments for the blog post.
     */
//    public function images()
//    {
//        return $this->hasMany(Images::class);
//    }
}
