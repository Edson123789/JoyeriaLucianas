@extends('layouts.users')
@section('user-content')
<main class="main">
    <div class="banner banner-cat" style="background-image: url('/assets/images/banners/oro3.jpg');">
        <div class="banner-content container">
            <h2 style="color:black" class="banner-subtitle"><span>Compramos joyas de oro</span></h2>
            <h1 style="color:black" class="banner-title">
            21k, 18k, 14k, 10k
            </h1>
            <a href="https://api.whatsapp.com/send?phone=+51960538333&amp;text=Buen%20d%C3%ADa%20quiero%20solicitar%20mas%20informaci%C3%B3n%20sobre%20los%20servicios%20que%20brindan%20" class="btn btn-product" style="color: #fff;">Cotizar ahora</a>
        </div><!-- End .banner-content -->
    </div><!-- End .banner -->

    <?php

    $config = DB::table('configuraciones')
        ->first();

    ?>

    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-lg-9">


                <div class="row row-sm">
                    
                    @foreach ($productos as $item)
                    <div class="col-6 col-md-4">
                        <div class="product-default">
                            <figure>
                                <a href="{{route('producto',$item->slug)}}">
                                    <img src="{{asset('poster/'.$item->poster)}}">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title" style="text-align: center;">
                                    <a href="{{route('producto',$item->slug)}}" style="white-space: normal">{{$item->titulo}}</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">
                                        @if ($config->tipo_moneda == 'Soles')
                                        S/.
                                        @elseif($config->tipo_moneda == 'Dolares')
                                        $
                                        @endif
                                        {{$item->precio_ahora}}</span>
                                    <del>{{$item->precio_antes}}</del>
                                </div><!-- End .price-box -->
                                @if (auth::check())
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>

                                    <form action="{{route('agregar.carrito')}}" method="POST" style="margin:0 !important">
                                        @csrf
                                        <input type="hidden" name="cantidad" value="1">
                                        <input type="hidden" value="{{$item->id}}" name="idproducto">
                                        <button class="btn-icon btn-add-cart" type="submit"><i class="icon-bag"></i>AL CARRITO</button>
                                    </form>


                                </div>
                                @endif
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    @endforeach


                </div>

                <nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">
                        <label>Resultado {{$productos->currentPage()}}–{{$productos->count()}} de 15 productos</label>
                    </div><!-- End .toolbox-item -->

                    <ul class="pagination">
                        {{$productos->render()}}
                    </ul>
                </nav>
            </div><!-- End .col-lg-9 -->

            <aside class="sidebar-shop col-lg-3 order-lg-first">
                <div class="sidebar-wrapper">
                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-1" role="button" aria-expanded="true" aria-controls="widget-body-1">CATEGORIAS</a>
                        </h3>

                        <div class="collapse show" id="widget-body-1">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    @foreach ($categorias as $item)
                                    <li><a style="text-decoration: none;" href="{{route('productos.categoria',strtolower($item->titulo))}}"><i class="{{$item->icono}}"></i> {{$item->titulo}}</a></li>
                                    @endforeach


                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->
<!--
                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Precio</a>         
                        </h3>

                        <div class="collapse show" id="widget-body-2">
                            <div class="widget-body">
                                {!! Form::open(array('url'=>'productos','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
                                    <div class="price-slider-wrapper">
                                        <div id="price-slider"></div>
                                    </div>
                                    <input type="hidden" name="pminor" id="pminor" value="{{$pminor}}">
                                    <input type="hidden" name="pmajor" id="pmajor" value="{{$pmajor}}">
                                    <div class="filter-price-action">
                                        <button id="btn-price" type="submit" class="btn btn-primary">Filtrar</button>
                                        <div class="filter-price-text">
                                            <span id="filter-price-range"></span>
                                        </div>
                                    </div>
                                {{Form::close()}}
                            </div>
                        </div>
                    </div>
-->


                    <!-- <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">MARCAS</a>
                        </h3>

                        <div class="collapse show" id="widget-body-4">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <li>
                                        {!! Form::open(array('url'=>'productos','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
                                        <input type="hidden" name="marca" value="banco">
                                        <button type="submit" class="btn-marca">Banco</button>
                                        {{Form::close()}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true" aria-controls="widget-body-6">Color</a>
                        </h3>

                        <div class="collapse show" id="widget-body-6">
                            <div class="widget-body">
                                <ul class="config-swatch-list">
                                    <li>
                                        <a href="#" style="background-color: #4090d5;"></a>
                                    </li>
                                    <li class="active">
                                        <a href="#" style="background-color: #f5494a;"></a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #fca309;"></a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #11426b;"></a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #f0f0f0;"></a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #3fd5c9;"></a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #979c1c;"></a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #7d5a3c;"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

                    <div class="widget widget-featured">
                        <h3 class="widget-title">DE TU INTERÉS</h3>

                        <div class="widget-body">
                            <div class="owl-carousel widget-featured-products">
                                <div class="featured-col">
                                    @foreach ($features as $item)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="{{route('producto',$item->slug)}}">
                                                <img src="{{asset('poster/'.$item->poster)}}">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="{{route('producto',$item->slug)}}" title="{{$item->titulo}}">{{$item->titulo}}</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">
                                                    @if ($config->tipo_moneda == 'Soles')
                                                    S/.
                                                    @elseif($config->tipo_moneda == 'Dolares')
                                                    $
                                                    @endif
                                                    {{$item->precio_ahora}}</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                    @endforeach

                                </div><!-- End .featured-col -->


                            </div><!-- End .widget-featured-slider -->
                        </div><!-- End .widget-body -->
                    </div><!-- End .widget -->

                    <!-- <div class="widget widget-block">
                        <h3 class="widget-title">Custom HTML Block</h3>
                        <h5>This is a custom sub-title.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi. </p>
                    </div> -->
                </div><!-- End .sidebar-wrapper -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</main>
@push('scripts')
<script>
    $(document).ready(function() {
        var t = document.getElementById("price-slider");
        let pminor = $('#pminor').val();
        let pmajor = $('#pmajor').val();

        noUiSlider.create(t, {
            start: [pminor, pmajor],
            connect: !0,
            step: 100,
            margin: 100,
            range: {
                min: 0,
                max: 3000
            }
        });

        t.noUiSlider.on('update', function(values) {
            $("#filter-price-range").text(values.join(" - "));
        })

    });


    $('#btn-price').click(function() {
        var price = $('#filter-price-range').text();
        var price_array = price.split("-");
        let pminor = parseInt(price_array[0].trim());
        let pmajor = parseInt(price_array[1].trim());
        $('#pminor').val(pminor);
        $('#pmajor').val(pmajor);


    });
</script>
@endpush
@endsection