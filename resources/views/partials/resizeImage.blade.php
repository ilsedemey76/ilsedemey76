<!DOCTYPE html>
<html>
<head>
    <title>Laravel Resize Image Tutorial - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
</head>
<body>

<div class="container">
    <h1>Laravel Resize Image Tutorial - ItSolutionStuff.com</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    <div class="row">
        <div class="col-md-4">
            <strong>Original Image:</strong>
            <br/>
            <img src="/images/{{ Session::get('imageName') }}" />
        </div>
        <div class="col-md-4">
            <strong>Thumbnail Image:</strong>
            <br/>
            <img src="/thumbnail/{{ Session::get('imageName') }}" />
        </div>
    </div>
    @endif

    <form action="{{ route('resizeImagePost') }}" method="post" enctype="multipart/form-data">
        @csrf

        @foreach ($products as $product)

            <h2>{{$product->name}}</h2>
            @foreach ($product->productImages as $image)
                    {{$image->images->width}} -- {{$image->images->height}}-- {{$image->images->filename}}
                    {{dirname($image->images->filename).'/resizes'}}
                    @php
                        $path_parts = pathinfo($image->images->filename);
                        //$resizeMap = config('app.asset_url').$path_parts['dirname'].'/resizes';
                        $resizeMap = public_path().'/'.$path_parts['dirname'].'/resizes';
                        if (!file_exists($resizeMap)) {
                            if (!mkdir($resizeMap, 0777, true)) {
                                die('Failed to create directories...');
                            }
                        }
                    @endphp

            @endforeach
        @endforeach

        <div class="row">
            <div class="col-md-4">
                <br/>
                <input type="text" name="title" class="form-control" placeholder="Add Title">
            </div>
            <div class="col-md-12">
                <br/>
                <input type="file" name="image" class="image">
            </div>
            <div class="col-md-12">
                <br/>
                <button type="submit" class="btn btn-success">Upload Image</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
