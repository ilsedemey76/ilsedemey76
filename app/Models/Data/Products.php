<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';
    protected $primaryKey = 'id';

    /**
     * Get the comments for the blog post.
     */
    public function productImages()
    {
        return $this->hasMany(ProductImages::class, "product_id", "id");
    }

    public function productPros()
    {
        return $this->hasMany(ProductPros::class, "product_id", "id")->orderBy('order');
    }
}
