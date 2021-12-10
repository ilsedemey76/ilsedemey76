<?php

namespace App\Http\Controllers;

use App\Models\Data\Products;
use App\Models\Logic\ImageLogic;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //meta
        Meta::setTitleSeparator('-')
            ->setTitle('ielse')
            ->prependTitle('Beton - concrete')
            ->setDescription('test ilse');

        //Mail::to('ilsedemey1@gmail.com')->send(new MailtrapExample());
        $spells = array();
        /*$spells[0]['spell'] = 'Pluk de dag';
        $spells[0]['author'] = 'Pieter Jan';
        $spells[1]['spell'] = 'Life sucks';
        $spells[1]['author'] = 'Pieter Jan de loser';*/

        $results = array();
        $products = Products::where('active', 1)->orderBy('order','asc')->get();
        return view('content.homepage',
                [
                    'products' => $products,
                    'spells' => $spells,
                    'filenameExtra' => ImageLogic::getFileNameExtra(540, 540, 'crop')
                ]);
    }
}
