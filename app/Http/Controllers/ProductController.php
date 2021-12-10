<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data\Products;
use App\Models\Logic\ImageLogic;
use Butschster\Head\Facades\Meta;
use Illuminate\Support\Facades\Validator;
use App\Mail\Contact;
use App\Models\Data\Logging;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProduct($product)
    {
        $product = Products::where('url', $product)->where('active', 1)->first();

        if ($product != null) {

            Meta::setTitleSeparator('-')
            ->setTitle('ielse.be')
            ->prependTitle($product->meta_title)
            ->setDescription($product->meta_description);

            return view('content.product',
            [
                'product' => $product,
                'next' => Products::where('order', '>', $product->order)->where('active', 1)->orderBy('order','asc')->first(),
                'previous' => Products::where('order', '<', $product->order)->where('active', 1)->orderBy('order','desc')->first(),
                'filenameExtra' => ImageLogic::getFileNameExtra(1500, 1500, 'crop'),
                'filenameLarge' => ImageLogic::getFileNameExtra(540, 540, 'crop'),
                'filenameThumbs' => ImageLogic::getFileNameExtra(100, 100, 'crop')

            ]);
        } else {
            return redirect()->route('site.home');
        }
    }

    public function contactMe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'messages' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $product = Products::where('id', $request->productId)->first();

        //add to loggin
        $log = new Logging();
        $log->name = 'contactinfo';
        $log->log = 'product='.$product->name.' / name='.$request->name.' / message='.$request->messages;
        $log->email = $request->email;
        $log->product_id = $product->id;
        $log->save();


        //send mail + add to log
        Mail::to($request->email)->send(new Contact($request, $product));

        return redirect()->back()->with('success', 'Bedankt voor uw bericht.<br/>U zal spoedig antwoord hierop ontvangen.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
