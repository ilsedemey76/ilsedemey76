<?php

namespace Database\Seeders;

use App\Models\Data\Images;
use App\Models\Data\ProductImages;
use App\Models\Data\ProductPros;
use App\Models\Data\Products;
use App\Models\Logic\ImageLogic;
use Illuminate\Database\Seeder;
use Image;

class ProductSeeder extends Seeder
{
    public $products = [
        /*['name' => 'octa', 'description' => 'test123', 'url' => 'octa', 'length' =>0, 'width'=>0, 'height'=>0, 'price_inc'=>890, 'price_ex'=>0,
            'images'=> [
                ['filename' => '/img/website/octa01.png', 'name' => 'test'],
                ['filename' => '/img/website/octa02.png', 'name' => 'test'],
                ['filename' => '/img/website/octa03.png', 'name' => 'test'],
            ]],*/
        //gsm houder


        //Beton-deco, eigenhandig gemaakt, weersbestendig, uniek. Uniek geschenk. Koop hier online.
        //Gsm-houder gsm-stand
        //Praktische en design stand. Voor gsm, tablet, boek,.... Kabelruimte voorzien.
        // Beton gsm houder stand design concrete cellphone, tablet, kitchen, loading, ...
        /*head title Universele telefoonhouder / tablethouder - telefoon houder van bamboe hout - tablet /... | bol.com (99 characters)
        description Universele telefoonhouder / tablethouder - telefoon houder van bamboe hout - tablet / iPad houder -
         standaard voor gsm - Decopatent®. Trendy bamboe... (
        ✅ Je telefoon of tablet netjes opgeborgen
        ✅ Compact - Neemt weinig ruimte in
        ✅ Ideaal voor thuis en op kantoor
        ✅ Geschikt voor alle soorten gsm's
        ✅ Gemaakt van hoogwaardig bamboe
        ✅ Bamboe heeft een natuurlijke look en past in elk interieur
        ✅ Je bureau netjes opgeruimd
            */
        [
            'name' => 'Universele telefoonhouder - design',
            'intro' => 'Decoratieve houder voor gsm, tablet, boek, ... Kabelruimte voorzien.',
            'description' => 'Praktische betonnen houder of stand voor gsm, table, boek, iphone, ...telefoonhouder, gsm-houder stand',
            'pros' => [
                'Decoratief element',
                'Uitsparing voor kabels voorzien',
                'Ideaal voor thuis en op kantoor',
                'Geschikt voor alle soorten gsm\'s, tablets, ... ',
                'Gemaakt uit zeer stevig materiaal.',
                'Praktisch en decoratief, past in elk interieur.',
            ],
            'meta_title' => 'Praktische gsm-houder uit beton - design',
            'meta_description' => 'Universele stand uit beton - voor gsm, telefoon, tablet, boek. Met kabelruimte.',
            'url' => 'gsm-houder',
            'order' => 1, 'active' => 1,
            'length' =>0, 'width'=>0, 'height'=>0,
            'price_inc'=>50, 'price_ex'=>50,
            'images'=> [
                ['filename' => '/img/products/gsmhouder/gsmhouder01.png', 'name' => ''],
                ['filename' => '/img/products/gsmhouder/gsmhouder02.png', 'name' => 'test123'],
                ['filename' => '/img/products/gsmhouder/gsmhouder09.png', 'name' => ''],
                ['filename' => '/img/products/gsmhouder/gsmhouder11.png', 'name' => ''],
                ['filename' => '/img/products/gsmhouder/gsmhouder14.png', 'name' => ''],
                ['filename' => '/img/products/gsmhouder/gsmhouder10.png', 'name' => ''],
                ['filename' => '/img/products/gsmhouder/gsmhouder15.png', 'name' => ''],
                //['filename' => '/img/products/gsmhouder/gsmhouder08.png', 'name' => 'test'],
            ]
        ],

        [
            'name' => 'hond',
            'intro' => '',
            'description' => 'hond123',
            'meta_title' => '',
            'meta_description' => '',
            'url' => 'hond',
            'order' => 20, 'active' => 1,
            'length' =>0, 'width'=>0, 'height'=>0,
            'price_inc'=>50, 'price_ex'=>50,
            'images'=> [
                ['filename' => '/img/products/hond/hond_beton01.png', 'name' => ''],
                ['filename' => '/img/products/hond/hond_beton02.png', 'name' => ''],
                ['filename' => '/img/products/hond/hond_beton03.png', 'name' => ''],
                ['filename' => '/img/products/hond/hond_beton04.png', 'name' => ''],
                ['filename' => '/img/products/hond/hond_beton05.png', 'name' => ''],
            ]
        ],

        [
            'name' => 'gedenktplaat rond',
            'intro' => '',
            'description' => 'gedenkplaat in beton - handgemaakt, met tekst',
            'meta_title' => 'gedenktplaat in betaon - handgemaakt s',
            'meta_description' => '',
            'url' => 'rip_round',
            'order' => 3, 'active' => 1,
            'length' =>0,
            'width'=>0, 'height'=>0,
            'price_inc'=>60, 'price_ex'=>60,
            'images'=> [
                ['filename' => '/img/products/rip_rond/round01.png', 'name' => ''],
                ['filename' => '/img/products/rip_rond/round02.png', 'name' => ''],

                ['filename' => '/img/products/rip_rond/round03.png', 'name' => ''],
                ['filename' => '/img/products/rip_rond/round04.png', 'name' => ''],
                ['filename' => '/img/products/rip_rond/round05.png', 'name' => ''],
                ['filename' => '/img/products/rip_rond/round06.png', 'name' => ''],
            ]
        ],

        [
            'name' => 'schaal groot',
            'intro' => 'schaal in goud, zilver of dieprood',
            'description' => 'betonnen schaal in goud, zilver of dieprood',
            'meta_title' => 'schaal in beton - handgemaakt ',
            'meta_description' => 'betonnen schaal - handgemaakt - rustiek. ',
            'url' => 'schaal_groot',
            'order' => 4, 'active' => 1,
            'length' =>0,
            'width'=>0, 'height'=>0,
            'price_inc'=>20, 'price_ex'=>20,
            'images'=> [
                ['filename' => '/img/products/schaal_bol_groot/schaal_groot_01.png', 'name' => ''],
                ['filename' => '/img/products/schaal_bol_groot/schaal_groot_02.png', 'name' => ''],
                ['filename' => '/img/products/schaal_bol_groot/schaal_groot_03.png', 'name' => ''],
                ['filename' => '/img/products/schaal_bol_groot/schaal_groot_04.png', 'name' => ''],
                ['filename' => '/img/products/schaal_bol_groot/schaal_groot_05.png', 'name' => ''],
                ['filename' => '/img/products/schaal_bol_groot/schaal_groot_06.png', 'name' => ''],
                ['filename' => '/img/products/schaal_bol_groot/schaal_groot_07.png', 'name' => ''],
            ]
        ],

        [
            'name' => 'schaal klein',
            'intro' => 'schaal in goud, zilver of dieprood',
            'description' => 'betonnen schaal in goud, zilver of dieprood',
            'meta_title' => 'schaal in beton - handgemaakt ',
            'meta_description' => 'betonnen schaal - handgemaakt - rustiek. ',
            'url' => 'schaal_klein',
            'order' => 5, 'active' => 1,
            'length' =>0,
            'width'=>0, 'height'=>0,
            'price_inc'=>15, 'price_ex'=>15,
            'images'=> [
                ['filename' => '/img/products/schaal_bol_klein/schaal_klein_01.png', 'name' => ''],
                ['filename' => '/img/products/schaal_bol_klein/schaal_klein_02.png', 'name' => ''],
                ['filename' => '/img/products/schaal_bol_klein/schaal_klein_03.jpg', 'name' => ''],
                ['filename' => '/img/products/schaal_bol_klein/schaal_klein_04.png', 'name' => ''],
                ['filename' => '/img/products/schaal_bol_klein/schaal_klein_05.jpg', 'name' => ''],
            ]
        ],

        // naamkaartje
        /*
        ['name' => 'naamkaartje', 'description' => 'test123', 'url' => 'naamkaartje', 'length' =>0, 'width'=>0, 'height'=>0, 'price_inc'=>890, 'price_ex'=>0,
             'images'=> [
                ['filename' => '/img/website/naamkaartje01.png', 'name' => 'test'],
                ['filename' => '/img/website/naamkaartje02.png', 'name' => 'test'],
                ['filename' => '/img/website/naamkaartje03.png', 'name' => 'test'],
            ]],*/
            /*
        ['name' => 'vaas', 'description' => 'test123', 'url' => 'vaas', 'length' =>0, 'width'=>0, 'height'=>0, 'price_inc'=>890, 'price_ex'=>0,
            'images'=> [
                ['filename' => '/img/website/vaas01.png', 'name' => 'test'],
                ['filename' => '/img/website/vaas02.png', 'name' => 'test'],
                ['filename' => '/img/website/vaas03.png', 'name' => 'test'],
            ]],
        ['name' => 'test', 'description' => 'test123', 'url' => 'test', 'length' =>0, 'width'=>0, 'height'=>0, 'price_inc'=>890, 'price_ex'=>0,
            'images'=> [
                ['filename' => '/img/website/vaas01.png', 'name' => 'test'],

            ]],*/

    ];


    public $img_sizes = [
        ['width' => 1500, 'height' => 1500, 'type' => 'crop'],
        ['width' => 540, 'height' => 540, 'type' => 'crop'],
        ['width' => 100, 'height' => 100, 'type' => 'crop'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // delete all products
        Products::truncate();
        Images::where('active', 1)->update(['active' => 0]);
        ProductImages::truncate();
        ProductPros::truncate();
        foreach($this->products as $product) {
            $item = Products::updateOrCreate(
                ['name' => $product['name']],
                [
                    'intro' => $product['intro'],
                    'description' => $product['description'],
                    'meta_title' => $product['meta_title'],
                    'meta_description' => $product['meta_description'],
                    'url' => $product['url'],
                    'order' => $product['order'],
                    'active' => $product['active'],
                    'length' =>$product['length'], 'width'=>$product['width'], 'height'=>$product['height'],
                    'price_inc'=>$product['price_inc'], 'price_ex'=>$product['price_ex']
                ],
            );
            //Images::truncate();
            $order = 0;
            if (isset($product["pros"]) && sizeof($product["pros"])>0){
                foreach($product["pros"] as $pro) {
                    ProductPros::create([
                        'product_id' => $item->id, 'name' => $pro, 'order' => $order
                    ]);
                    $order++;
                }
            }


            $position = 0;
            if (sizeof($product['images'])>0){
                foreach($product['images'] as $image) {
                    $path_parts = pathinfo($image['filename']);
                    $dirname = $path_parts["dirname"];
                    $filename = $path_parts["filename"];
                    $imgname = $image["name"];
                    $ext = $path_parts["extension"];

                    $data = getimagesize(public_path($image['filename']));
                    $width = $data[0];
                    $height = $data[1];
                    //dump($width.'--'.$height);
                    /*$img = Images::updateOrCreate(
                        ['dir'=>$dirname, 'filename' => $filename, 'extension' => $ext],
                        ['name' => $product['name'], 'width'=>$width, 'height'=>$height, 'active' =>1]
                    );*/


                    //empty resizes
                    $img = Images::updateOrCreate(
                        ['dir'=>$dirname, 'filename' => $filename, 'extension' => $ext],
                        ['name' => ($imgname!=''?$imgname:$product['name']), 'width'=>$width, 'height'=>$height, 'resizes'=>'', 'active' =>1]
                    );

                    //koppeling
                    ProductImages::updateOrCreate(
                        ['product_id' => $item->id, 'image_id' => $img->id],
                        ['position' => $position++],
                    );
                }
            }
        }


        $products = Products::all();
        foreach ($products as $product) {
            foreach ($product->productImages as $image) {

                $pathImage = $image->images->dir.'/'.$image->images->filename.'.'.$image->images->extension;

                $path_parts = pathinfo($pathImage);
                //$resizeMap = config('app.asset_url').$path_parts['dirname'].'/resizes';
                $resizeMap = public_path().'/'.$path_parts['dirname'].'/resizes';
                if (!file_exists($resizeMap)) {
                    if (!mkdir($resizeMap, 0777, true)) {
                        die('Failed to create directories...');
                    }
                }

                //get filename without extension
                $filename = $path_parts['filename'];
                //get file extension
                $extension = $path_parts['extension'];
                dump($path_parts['filename']);

                $resize_field = '';
                foreach($this->img_sizes as $size) {


                    //resize
                    $width=$size['width'];
                    $height=$size['height'];
                    //$size['type']=='crop'
                    dump($width.'-'.$height);
                    /*
                    //filename to store
                    $filenametostore = $filename.'_'.$width.'_'.$height.'_r.'.$extension;
                    //create thumbnail
                    $thumbnailPath = public_path().'/'.$path_parts['dirname'].'/resizes/'.$filenametostore;
                    $this->resizeImage(public_path().$pathImage, $thumbnailPath, $width, $height);
                    */

                    $filenameExt = ImageLogic::getFileNameExtra($width, $height, 'crop');

                    //filename to store
                    $filenametostore = $filename.'_'.$filenameExt.'.'.$extension;
                    //create thumbnail
                    $thumbnailPath = public_path().'/'.$path_parts['dirname'].'/resizes/'.$filenametostore;
                    $this->resizeAndCrop(public_path().$pathImage, $thumbnailPath, $width, $height);

                    $resizeName = $filenameExt;
                    /*
                    //update database
                    $thumExists = false;
                    $resizes = explode(';', $image->images->resizes);
                    if (sizeof($resizes)>0) {
                        foreach($resizes as $resize) {
                            if($resize == $resizeName) {
                                $thumExists = true;
                            }
                        }
                    }
                    if (!$thumExists){
                        array_push($resizes, $resizeName);
                        Images::where('id', $image->images->id)->update(['resizes' => implode(';', array_filter($resizes))]);

                        dump($image->images->id.'-'.implode(';', array_filter($resizes)) );
                    }
                    */
                    $resize_field = $resize_field.';'.$resizeName;
                }

                //update db
                Images::where('id', $image->images->id)->update(['resizes' => $resize_field ]);
            }
        }
    }

    public function resizeImage($source, $thumbnail, $width, $height){

        //resize
        //die($source);
        $img = Image::make($source)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($thumbnail);

    }

    public function resizeAndCrop($source, $thumbnail, $width, $height){

        // resize and crop
        //$img = Image::make($source)->resize($width, $height)->save($thumbnail);
        // add callback functionality to retain maximal original image size
        $img = Image::make($source)->fit($width, $height, function ($constraint) {
            $constraint->upsize();
        });
        $img->save($thumbnail);

    }
}
