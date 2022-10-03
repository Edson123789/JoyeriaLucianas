@extends('layouts.users')
@section('user-content')
<main class="main">

    <div class="home-slider owl-carousel owl-carousel-lazy owl-theme owl-theme-light">
        <div class="home-slide">
            <div class="owl-lazy slide-bg" data-src="assets/images/slider/slide-1.jpg"></div>
            <div class="home-slide-content text-white">
                <h3>Obten <span>60%</span> en</h3>
                <h1>Todos Smarthphones</h1>
                <p>Solo durante dos dias.</p>
                <a href="{{route('productos')}}" class="btn btn-dark">Ir a comprar</a>
            </div><!-- End .home-slide-content -->
        </div><!-- End .home-slide -->
        <div class="home-slide">
            <div class="owl-lazy slide-bg" data-src="assets/images/slider/slide-2.jpg"></div>
            <div class="home-slide-content text-white">
                <h3>Aprovecha <span>60%</span> de</h3>
                <h1>Descuento</h1>
                <p>En todo Eletro.</p>
                <a href="{{route('productos')}}" class="btn btn-dark">Ir a comprar</a>
            </div><!-- End .home-slide-content -->
        </div><!-- End .home-slide -->
        <div class="home-slide">
            <div class="owl-lazy slide-bg" data-src="assets/images/slider/slide-3.jpg"></div>
            <div class="home-slide-content text-white">
                <h3>Get up to <span>60%</span> off</h3>
                <h1>Summer Sale</h1>
                <p>Limited items available at this price.</p>
                <a href="{{route('productos')}}" class="btn">Ir a comprar</a>
            </div><!-- End .home-slide-content -->
        </div><!-- End .home-slide -->
    </div>

    <div class="row mx-auto my-auto text-center" style="background-color: #000; background-size: contain;">
        <div id="myCarousell" class="carousel slide w-100 mx-4" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item py-5 active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/pesas.jpg); ">
                                <div class="card-body">
                                    <h2 class="card-title-product">Pesas y Mancuernas</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/barras.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Barras</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/dominadas.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Barras Dominadas</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/discos.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Discos</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/trotadoras.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Trotadoras</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/spinning.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Bicicletas Spinning</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5 ">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/rusas.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Pesas Rusas</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/soga.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Sogas profesionales</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/banco.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Banca de Pesas</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5 ">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/matt.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Colchonetas</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/bandas.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Bandas resistencia</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/otros.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Otros Accesarios</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-2">
            <a class="carousel-control-prev text-end" href="#myCarousell" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" style="font-size: xlarge;" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousell" role="button" data-slide="next">
                <span class="carousel-control-next-icon" style="font-size: xlarge;" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="mb-5"></div>
    <div class="container text-center my-3">
        <h2 class="carousel-title">Productos nuevos</h2>
        <div class="home-featured-products owl-carousel owl-theme owl-dots-top">
            @foreach ($newest as $item)
            <div class="product-default">
                <figure>
                    <a href="{{route('producto',$item->slug)}}">
                        <img src="{{asset('poster/'. $item->poster)}}">
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
                    <div class="product-action">
                        <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>

                        <form action="{{route('agregar.carrito')}}" method="POST" style="margin:0 !important">
                            @csrf
                            <input type="hidden" name="cantidad" value="1">
                            <input type="hidden" value="{{$item->id}}" name="idproducto">
                            <button class="btn-icon btn-add-cart" type="submit"><i class="icon-bag"></i>AL
                                CARRITO</button>
                        </form>
                    </div>
                </div><!-- End .product-details -->
            </div>
            @endforeach


        </div>
        <div class="mb-5"></div>
    </div>

    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading mt-2">
                        <h2>Nuestros <em>Productos</em></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Garantía</h4>
                                <p>Tu producto llegará según lo acordado.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Soporte</h4>
                                <p>En línea 24/7 para resolver cualquier duda.</p>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Escríbenos</h4>
                                <p>Cualquier duda estamos dispuestos a atenderte.</p>

                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Nuestros Clientes</h4>
                                <p>Nos recomiendan, gracias por su preferencia!</p>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="mb-5"></div>

    <div class="container text-center my-3">
        <div class="container mt-4">
            <div class="product-column">
                <h3 class="title">LOS MÁS VENDIDOS</h3>
                <div class="home-featured-products owl-carousel owl-theme owl-dots-top">

                    @foreach ($newest as $item)
                    <div class="product-default">
                        <figure>
                            <a href="{{route('producto',$item->slug)}}">
                                <img src="{{asset('poster/'. $item->poster)}}">
                            </a>
                        </figure>
                        <div class="product-details">
                            <!--<div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div> End .product-container -->
                            <h2 class="product-title" style="text-align: center;">
                                <a href="{{route('producto',$item->slug)}}" style="white-space: normal">{{$item->titulo}}</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>
                            <div class="price-box">
                                <span class="product-price">
                                    @if ($config->tipo_moneda == 'Soles')
                                    S/.
                                    @elseif($config->tipo_moneda == 'Dolares')
                                    $
                                    @endif

                                    {{$item->precio_ahora}}</span>
                                <del>{{$item->precio_antes}}</del>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>

                                <form action="{{route('agregar.carrito')}}" method="POST" style="margin:0 !important">
                                    @csrf
                                    <input type="hidden" name="cantidad" value="1">
                                    <input type="hidden" value="{{$item->id}}" name="idproducto">
                                    <button class="btn-icon btn-add-cart" type="submit"><i class="icon-bag"></i>AL
                                        CARRITO</button>
                                </form>
                            </div>
                        </div><!-- End .product-details -->
                    </div>
                    @endforeach



                </div>
                <div class="mb-3"></div>
                <h3 class="title">RECOMENDADOS PARA TI</h3>
                <div class="home-featured-products owl-carousel owl-theme owl-dots-top">
                    @foreach ($reco as $item)
                    <div class="product-default">
                        <figure>
                            <a href="{{route('producto',$item->slug)}}">
                                <img src="{{asset('poster/'. $item->poster)}}">
                            </a>
                        </figure>
                        <div class="product-details">
                            <!--
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div> End .product-container -->
                            <h2 class="product-title" style="text-align: center;">
                                <a href="{{route('producto',$item->slug)}}" style="white-space: normal">{{$item->titulo}}</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>
                            <!--
                            <div class="price-box">
                                <span class="product-price">
                                    @if ($config->tipo_moneda == 'Soles')
                                    S/.
                                    @elseif($config->tipo_moneda == 'Dolares')
                                    $
                                    @endif

                                    {{$item->precio_ahora}}</span>
                                <del>{{$item->precio_antes}}</del>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>

                                <form action="{{route('agregar.carrito')}}" method="POST" style="margin:0 !important">
                                    @csrf
                                    <input type="hidden" name="cantidad" value="1">
                                    <input type="hidden" value="{{$item->id}}" name="idproducto">
                                    <button class="btn-icon btn-add-cart" type="submit"><i class="icon-bag"></i>AL
                                        CARRITO</button>
                                </form>
                            </div>
                            -->
                        </div><!-- End .product-details -->
                    </div>
                    @endforeach
                </div>



            </div>

        </div>

    </div>
    </div>



    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2 style="color: white; font-size: xx-large;">Don’t!</h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container text-center my-3">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">


                        <div class="col-6 col-md-4">
                            <div class="product-column">
                                <h3 class="title">Recomendado</h3>

                                @foreach ($hot as $item)
                                <div class="product-default left-details product-widget mb-3">
                                    <figure>
                                        <a href="{{route('producto',$item->slug)}}">
                                            <img src="{{asset('poster/'.$item->poster)}}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="{{route('producto',$item->slug)}}">{{$item->titulo}}</a>
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
                                            <del>{{$item->precio_antes}}</del>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                @endforeach
                            </div><!-- End .product-column -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->

                    <div class="mb-3"></div><!-- margin -->

                </div><!-- End .col-lg-9 -->

                <aside class="sidebar-home col-lg-3 order-lg-first">
                    <!-- <div class="side-menu-container">
                    <h2>MENÚ</h2>

                    <nav class="side-nav">
                        <ul class="menu menu-vertical sf-arrows">
                            <li class="active"><a href="{{route('inicio')}}"><i class="icon-home"></i>Inicio</a></li>
                            <li><a><i class="icon icon-heart"></i>Ofertas</a></li>
                            <li><a href="{{route('contacto')}}"><i class="icon icon-envolope"></i>Contacto</a></li>

                            <li><a href="{{route('best_seller')}}"><i class="icon icon-star"></i>Lo mas vendido</a></li>
                            <li><a href="https://1.envato.market/DdLk5" target="_blank"><i class="icon-star-empty"></i>Buy devctheme!</a></li>
                        </ul>
                    </nav>
                </div> -->
                    <?php

                    $config = DB::table('configuraciones')
                        ->first();
                    ?>
                    <div class="widget widget-banners">
                        <div class="widget-banners-slider owl-carousel owl-theme">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="{{asset('config/'.$config->banner_inicio_dos)}}" alt="banner">
                                </a>
                            </div><!-- End .banner -->

                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="{{asset('config/'.$config->banner_inicio_uno)}}" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .banner-slider -->
                    </div><!-- End .widget -->

                    <div class="widget widget-newsletters">
                        <h3 class="widget-title">Subscribete</h3>
                        <p>Para poder recibir los mejores descuentos. </p>
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" id="wemail">
                                <label for="wemail"><i class="icon-envolope"></i>Correo electrónico</label>
                            </div><!-- Endd .form-group -->
                            <input type="submit" class="btn btn-block" value="Registrar correo">
                        </form>
                    </div><!-- End .widget -->

                    <div class="widget widget-testimonials">
                        <div class="widget-testimonials-slider owl-carousel owl-theme">
                            <div class="testimonial">
                                <div class="testimonial-owner">
                                    <figure>
                                        <img src="assets/images/clients/client1.png" alt="client">
                                    </figure>

                                    <div>
                                        <h4 class="testimonial-title">Juan Gómez</h4>
                                        <span>Cliente</span>
                                    </div>
                                </div><!-- End .testimonial-owner -->

                                <blockquote>
                                    <p>Productos de calidad y de entrega inmediata 100% recomendado.</p>
                                </blockquote>
                            </div><!-- End .testimonial -->

                            <div class="testimonial">
                                <div class="testimonial-owner">
                                    <figure>
                                        <img src="assets/images/clients/client2.png" alt="client">
                                    </figure>

                                    <div>
                                        <h4 class="testimonial-title">Pablo Ramos</h4>
                                        <span>Cliente</span>
                                    </div>
                                </div><!-- End .testimonial-owner -->

                                <blockquote>
                                    <p>Excelente atención, acabo de recibir mi producto y todo conforme!</p>
                                </blockquote>
                            </div><!-- End .testimonial -->
                        </div><!-- End .testimonials-slider -->
                    </div><!-- End .widget -->

                    <!-- <div class="widget">
                    <div class="widget-posts-slider owl-carousel owl-theme">
                        <div class="post">
                            <span class="post-date">01- Jun -2018</span>
                            <h4 class="post-title"><a href="#">Fashion News</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi. </p>
                        </div>

                        <div class="post">
                            <span class="post-date">22- May -2018</span>
                            <h4 class="post-title"><a href="#">Shopping News</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non plasasyi. </p>
                        </div>

                        <div class="post">
                            <span class="post-date">13- May -2018</span>
                            <h4 class="post-title"><a href="#">Fashion News</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat. </p>
                        </div>
                    </div>
                </div> -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-clock"></i>
                        <div class="feature-box-content">
                            <h3>Beneficios</h3>
                            <p>El ahorro de tiempo y la privacidad son los principales beneficios de tener un gimnasio en
                                casa.</p>
                            <!-- <a href="#" class="btn btn-outline-dark">Get in touch</a> -->
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-md-4 -->

                <div class="col-sm-6 col-md-4">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-star"></i>
                        <div class="feature-box-content">
                            <h3>Rutinas</h3>
                            <p>Seguir una rutina de ejercicios es crucial tanto para desahogarse como para fortalecer el
                                sistema inmunitario.</p>
                            <!-- <a href="#" class="btn btn-outline-dark">Return Policy</a> -->
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-md-4 -->

                <div class="col-sm-6 col-md-4">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-check"></i>
                        <div class="feature-box-content">
                            <h3>Empieza ahora</h3>
                            <p>La situación actual no puede ser una excusa para volvernos sedentarios.</p>
                            <!-- <a href="#" class="btn btn-outline-dark">Lear More</a> -->
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-md-4 -->
            </div>
        </div><!-- End .container -->
    </div>
    <div class="mb-4"></div><!-- margin -->
</main><!-- End .main -->
@endsection

@section('scripts')
<script>
    $('#myCarousell').carousel({
        interval: 1000
    })
</script>
@endsection