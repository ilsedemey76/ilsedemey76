<?php
namespace Database\Seeders;

use App\Models\Data\Products;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{

    public $products = [
        ['id' => 1, 'name' => 'octa', 'description' => 'test123', 'url' => 'octa', 'length' =>0, 'width'=>0, 'height'=>0, 'price_inc'=>890, 'price_ex'=>0],
        ['id' => 2, 'name' => 'gsmhouder', 'description' => 'test123', 'url' => 'gsm-houder', 'length' =>0, 'width'=>0, 'height'=>0, 'price_inc'=>890, 'price_ex'=>0],
        ['id' => 3, 'name' => 'naamkaartje', 'description' => 'test123', 'url' => 'naamkaartje', 'length' =>0, 'width'=>0, 'height'=>0, 'price_inc'=>890, 'price_ex'=>0],
        ['id' => 4, 'name' => 'vaas', 'description' => 'test123', 'url' => 'vaas', 'length' =>0, 'width'=>0, 'height'=>0, 'price_inc'=>890, 'price_ex'=>0],
        ['id' => 5, 'name' => 'test', 'description' => 'test123', 'url' => 'test', 'length' =>0, 'width'=>0, 'height'=>0, 'price_inc'=>890, 'price_ex'=>0],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // delete all products
       /* Products::truncate();
        foreach($this->products as $product) {
            Products::updateOrCreate(
                ['id' => $product['id']],
                ['name' => $product['name'], 'description' => $product['description'], 'url' => $product['url'], 'length' =>$product['length'], 'width'=>$product['width'], 'height'=>$product['height'], 'price_inc'=>$product['price_inc'], 'price_ex'=>$product['price_ex']],
            );
        }*/

    }
}
