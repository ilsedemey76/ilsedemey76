@extends ('layouts.main')

@section ('content')

<div>









				<div class="wrapper row">
					<div class="preview col-md-6">
                        <!--
						<div class="preview-pic tab-content">
                            @if (isset($product->productImages))
                                  @foreach ($product->productImages as $image)
                                      <div class="tab-pane @if ($loop->first) active @endif" id="pic-{{$loop->iteration}}">
                                        <img src="{{$image->images->dir}}/resizes/{{$image->images->filename}}_{{$filenameExtra}}.{{$image->images->extension}}"
                                        width="150"  /></div>
                                  @endforeach
                            @endif
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
                            @if (isset($product->productImages))
                                  @foreach ($product->productImages as $image)
                                    <li @if ($loop->first) class="active" @endif>
                                        <a data-target="#pic-{{$loop->iteration}}" data-toggle="tab">
                                            <img src="{{$image->images->dir}}/resizes/{{$image->images->filename}}_{{$filenameExtra}}.{{$image->images->extension}}" />
                                        </a>
                                    </li>
                                  @endforeach
                            @endif

						</ul>
                    -->

                                <!-- https://codepen.io/bechster/pen/jgYzrq -->
                                <div class="container mt-5">
                                    <div class="carousel-container position-relative row">

                                    <!-- Sorry! Lightbox doesn't work - yet. -->

                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">

                                        @if (isset($product->productImages))
                                        {{--  <div id="carousel" class="carousel slide" data-pause="false" data-interval="900"> --}}
                                        {{--  <div class="carousel-inner"> --}}
                                            @foreach ($product->productImages as $image)


                                                <div class="carousel-item @if ($loop->index == 0) active @endif" data-slide-number="{{$loop->index}}">
                                                    <img src="{{$image->images->dir}}/resizes/{{$image->images->filename}}_{{$filenameLarge}}.{{$image->images->extension}}" class="d-block w-100" alt="{{$image->images->name}}" data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                                </div>

                                            @endforeach
                                        @endif

                                    </div>
                                    </div>

                                    <!-- Carousel Navigation -->
                                    @if (isset($product->productImages) && sizeof($product->productImages)>1)
                                        <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">

                                            @foreach ($product->productImages as $image)
                                                @if ($loop->index%6 == 0)
                                                    <div class="carousel-item @if ($loop->index == 0) active @endif">
                                                        <div class="row mx-0">
                                                @endif


                                                    <div id="carousel-selector-{{$loop->index}}" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="{{$loop->index}}">
                                                        <img src="{{$image->images->dir}}/resizes/{{$image->images->filename}}_{{$filenameThumbs}}.{{$image->images->extension}}" class="img-fluid" alt="{{$image->images->name}}">
                                                    </div>


                                                @if ($loop->index%6 == 5)
                                                        </div>
                                                    </div>
                                                @endif

                                            @endforeach
                                            @if ((count($product->productImages)-1)%6 != 5)
                                                    @php $indexje = count($product->productImages)-1; @endphp
                                                    @while ($indexje%6 != 5)
                                                            <div class="col-2 px-1 py-2"></div>
                                                        @php $indexje++; @endphp
                                                    @endwhile
                                                    </div>
                                                </div>
                                            @endif


                                            </div>


                                            <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    @endif



                                    </div>
                                    </div>



					</div>

					<div class="details col-md-6 pt-sm-5 pt-md-0">

                        <div class="d-flex justify-content-between">
                            @if ($previous != null)
                                <a href="{{config('app.url')}}/product/{{$previous->url}}" class="previous">&laquo; Previous</a>
                            @else
                                <div></div>
                            @endif
                            @if ($next != null)
                                <a href="{{config('app.url')}}/product/{{$next->url}}" class="next">Next &raquo;</a>
                            @else
                                <div></div>
                            @endif
                        </div>


						<h1 class="product-title">{{$product->name}}</h1>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
							</div>
							{{--<span class="review-no">41 reviews</span>--}}
						</div>
                        {{--<h2>Omschrijving</h2>--}}
						<p class="product-description">{{$product->description}}</p>
                        @if (sizeof($product->productPros)>0)
                            <h2>Pluspunten</h2>
                            <ul>
                            @foreach ($product->productPros as $pro)
                                <li>{{$pro->name}}</li>
                            @endforeach
                            </ul>
                        @endif
                        @if ($product->price_inc > 0)
                            <h2>Prijs: &euro; {{$product->price_inc}}</h2>
                        @endif


                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Contacteer me
                          </button>


                            <div class="p-2 @if(!$errors->any() && !(\Session::has('success'))) collapse @endif"  id="collapseExample">

                                @if (\Session::has('success'))
                                    <div class="alert alert-success">
                                        <ul>
                                            <li>{!! \Session::get('success') !!}</li>
                                        </ul>
                                    </div>
                                @else
                                    <form method="POST" action="{{route('site.contact')}}">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{$product->id}}" />
                                        <div class="form-group row">
                                            <label for="colFormLabelNaam" class="col-sm-2 col-form-label col-form-label-lg">Naam <sub>*</sub></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="colFormLabelNaam" name="name" placeholder="Naam" value="{{ old('name') }}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabelEmail" class="col-sm-2 col-form-label col-form-label-lg">E-mail <sub>*</sub></label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="colFormLabelEmail" name="email" aria-describedby="emailHelp" placeholder="E-mail" value="{{ old('email') }}" />
                                                {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabelMessage" class="col-sm-2 col-form-label col-form-label-lg">Bericht <sub>*</sub></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control @error('messages') is-invalid @enderror" id="colFormLabelMessage" name="messages" >{{ old('messages') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2 "></div>
                                            <div class="col-sm-10 pt-1">
                                                <button type="submit" class="btn btn-primary">Verzend bericht</button>
                                            </div>
                                        </div>
                                    </form>
                                @endif

                            </div>

						{{--<h4 class="price">current price: <span>$180</span></h4>--}}
						{{--<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>--}}
                        {{--$product->url--}}
                        {{--
						<h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
                                                     --}}

					</div>
				</div>
			</div>






<br/><br/>
@stop

@section ('scripts')
<script language="JavaScript" type="text/javascript">
    $(document).ready(function(){

        $('#myCarousel').carousel({
        interval: false
        });
        $('#carousel-thumbs').carousel({
        interval: false
        });

        // handles the carousel thumbnails
        // https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
        $('[id^=carousel-selector-]').click(function() {
        var id_selector = $(this).attr('id');
        var id = parseInt( id_selector.substr(id_selector.lastIndexOf('-') + 1) );
        $('#myCarousel').carousel(id);
        });
        // Only display 3 items in nav on mobile.
        if ($(window).width() < 575) {
        $('#carousel-thumbs .row div:nth-child(4)').each(function() {
            var rowBoundary = $(this);
            $('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll().addBack());
        });
        $('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function() {
            var boundary = $(this);
            $('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll().addBack());
        });
        }
        // Hide slide arrows if too few items.
        if ($('#carousel-thumbs .carousel-item').length < 2) {
        $('#carousel-thumbs [class^=carousel-control-]').remove();
        $('.machine-carousel-container #carousel-thumbs').css('padding','0 5px');
        }
        // when the carousel slides, auto update
        $('#myCarousel').on('slide.bs.carousel', function(e) {
        var id = parseInt( $(e.relatedTarget).attr('data-slide-number') );
        $('[id^=carousel-selector-]').removeClass('selected');
        $('[id=carousel-selector-'+id+']').addClass('selected');
        });
        // when user swipes, go next or previous

        $('#myCarousel').swipe({
        fallbackToMouseEvents: true,
        swipeLeft: function(e) {
            $('#myCarousel').carousel('next');
        },
        swipeRight: function(e) {
            $('#myCarousel').carousel('prev');
        },
        allowPageScroll: 'vertical',
        preventDefaultEvents: false,
        threshold: 75
        });


        /*
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
        });
        */

        $('#myCarousel .carousel-item img').on('click', function(e) {
        var src = $(e.target).attr('data-remote');
        if (src) $(this).ekkoLightbox();
        });

    });




</script>
@stop


