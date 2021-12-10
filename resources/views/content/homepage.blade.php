@extends ('layouts.main')

@section ('content')



<!--   <div id="carouselExampleIndicators" class="carousel slide mb-4" data-ride="carousel">
       <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       </ol>
      <div class="carousel-inner">
           <div class="carousel-item active">
               <img class="d-block w-100" src="/img/website/octa01.png" alt="First slide" />
           </div>
           <div class="carousel-item">
               <img class="d-block w-100" src="/img/website/octa02.png" alt="Second slide" />
           </div>
           <div class="carousel-item">
              <img class="d-block w-100" src="/img/website/octa03.png" alt="Third slide" />
           </div>
       </div>
       <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
   </div>-->




<div class="row" data-masonry='{"percentPosition": true }'  styleXX="position: relative; height: 719px;">

        <?php $spellKey = 0?>
        @foreach($products as $product)
            <div class="col-sm-6 col-lg-4 mb-4" styleXX="position: absolute; left: 0%; top: 0px;">
                <div class="card  @if ($product->productImages == null) text-center @endif">
                    @if ($product->productImages != null)
                        <div id="carousel" class="carousel slide" data-pause="false" data-interval="900">
                          <div class="carousel-inner">
                              @foreach ($product->productImages as $image)
                                <div class="carousel-item @if($loop->first) active @endif">
                                  <img class="d-block w-100" src="{{$image->images->dir}}/resizes/{{$image->images->filename}}_{{$filenameExtra}}.{{$image->images->extension}}" alt="{{$product->name}}" />
                                </div>
                              @endforeach
                        </div>
                      </div>
                    @endif
                    <div class="card-body">
                        @if ($product->name != null)
                          <h5 class="card-title"><a href="{{config('app.url')}}/product/{{$product->url}}">{{$product->name}} </a>{{--$loop->iteration--}}</h5>
                        @endif
                        @if ($product->intro != null)
                          <p class="card-text">{{$product->intro}}</p>
                          <!--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                        @endif
                      </div>
                </div>
            </div>

            <!-- @if ($loop->iteration % 3 == 1)
                @if (isset($spells[$spellKey]['spell']))
                    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 33.3333%; top: 201px;">
                      <div class="card bg-primary text-white text-center p-3">
                        <figure class="mb-0">
                          <blockquote class="blockquote">
                            <p>{{$spells[$spellKey]['spell']}}</p>
                          </blockquote>
                          @if (isset($spells[$spellKey]['author']))
                            <figcaption class="blockquote-footer mb-0 text-white">
                              {{$spells[$spellKey]['author']}}
                            </figcaption>
                          @endif
                        </figure>
                      </div>
                    </div>
                    <?php $spellKey++?>
                @endif
            @endif -->
        @endforeach

</div>
@stop

@section ('scripts')
{{--    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>--}}
       <!-- or -->
       <!--<script src="http://testlaravel.localhost/js/masonry.pkgd.min.js"></script>-->
{{--       <script  type="application/javascript">--}}
{{--       var $grid = $('.grid').masonry({--}}
{{--         itemSelector: '.grid-item',--}}
{{--         percentPosition: true,--}}
{{--         columnWidth: '.grid-sizer'--}}
{{--       });--}}
{{--    </script>--}}

<!-- Calling jquery first -->
{{--<script language="JavaScript" type="text/javascript" src="scripts/jquery.js"></script>--}}
{{--<script language="JavaScript" type="text/javascript" src="scripts/bootstrap.min.js"></script>--}}
<!-- Carousel -->
<script language="JavaScript" type="text/javascript">
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 1000
        })

        $(".carousel").on("mouseenter",function() {
          $(this).carousel('cycle');
        }).on("mouseleave", function() {
          $(this).carousel('pause');
        });

    });



</script>
@stop


