<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_images';
    protected $primaryKey = 'id';

    /**
     * Get the comments for the blog post.
     */
    public function images()
    {
        return $this->hasOne(Images::class, "id", "image_id");
    }
}
