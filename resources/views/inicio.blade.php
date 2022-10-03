@extends('layouts.users')
@section('user-content')
<main class="main">

    <div class="home-slider owl-carousel owl-carousel-lazy owl-theme owl-theme-light">
        <div class="home-slide">
            <div class="owl-lazy slide-bg" data-src="assets/images/slider/slide-5.jpg"></div>
            <div class="home-slide-content text-white">
                <h3 style ="color:black">Santiago de Surco - Urb. Chacarilla del estanque</h3>
                <h3 style ="color:black">calle monte grande 120 - Centro Comercial Galax</h3>
                <p style ="color:black"><span><i>oficina 228 - segundo piso</i></span> </p>
                <a href="{{route('productos')}}" class="btn btn-dark">Ir a comprar</a>
            </div><!-- End .home-slide-content -->
        </div><!-- End .home-slide -->
        <div class="home-slide">
            <div class="owl-lazy slide-bg" data-src="assets/images/slider/slide-8.jpg"></div>
            <div class="home-slide-content text-white">
                <h3 style ="color:black"> <span>Compramos joyas de oro de 21k 18k 14k 10k,</span></h3><br>
                <p style ="color:black"><i>Joyas con piedras preciosas - brillantes - Plateria <br> Monedas de oro y Plata - Relojes de alta gama suizos.</i></p>
                <a href="{{route('productos')}}" class="btn btn-dark">Ir a comprar</a>
            </div><!-- End .home-slide-content -->
        </div><!-- End .home-slide -->
        <div class="home-slide">
            <div class="owl-lazy slide-bg" data-src="assets/images/slider/slide-13.jpg"></div>
            <div class="home-slide-content text-white">
            <h3 style ="color:black">Santiago de Surco - Urb. Chacarilla del estanque</h3>
                <h3 style ="color:black">calle monte grande 120 - Centro Comercial Galax</h3>
                <p style ="color:black"><span><i>oficina 228 - segundo piso</i></span> </p>
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
                            <div class="card-product-img" style="background-image: url(assets/images/products/joya.jpg); ">
                                <div class="card-body">
                                    <h2 class="card-title-product">Joyas con piedras preciosas</h2>

                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/brillantes.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Brillantes</h2>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/plateria.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Platería</h2>
                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/monedas.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Monedas de oro y plata</h2>

                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/relojes.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Relojes de alta gama</h2>

                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/otros2.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Otros productos</h2>

                                    <!--<a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="carousel-item py-5 ">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/rusas.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Pesas Rusas</h2>

                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/soga.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Sogas profesionales</h2>

                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/banco.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Banca de Pesas</h2>

                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
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

                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/bandas.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Bandas resistencia</h2>

                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/otros.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Otros Accesarios</h2>

                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
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
                    <!-- 
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                    </div>End .product-container -->
                    <h2 class="product-title" style="text-align: center;">
                        <a href="{{route('producto',$item->slug)}}" style="white-space: normal">{{$item->titulo}}</a>
                    </h2>
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
                    </div> End .price-box 
                    <div class="product-action">
                        <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>

                        <form action="{{route('agregar.carrito')}}" method="POST" style="margin:0 !important">
                            @csrf
                            <input type="hidden" name="cantidad" value="1">
                            <input type="hidden" value="{{$item->id}}" name="idproducto">
                            <button class="btn-icon btn-add-cart" type="submit"><i class="icon-bag"></i>AL
                                CARRITO</button>
                        </form>
                    </div>-->
                </div><!-- End .product-details -->
            </div>
            @endforeach


        </div>
        <div class="mb-5"></div>
    </div>

    <!-- <section class="section" id="features">
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
    </section> -->

    <section class="section p-5" id="features">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="carousel-title">JOYERÍA LUCIANA MÁXIMAS TAZACIONES <br><br>
                <a href="https://api.whatsapp.com/send?phone=+51960538333&amp;text=Buen%20d%C3%ADa%20quiero%20solicitar%20mas%20informaci%C3%B3n%20sobre%20los%20servicios%20que%20brindan%20" class="btn btn-product btn-primary" style="text-decoration: none;">Cotizar</a></h2>
                
            </div>
            <div class="col-sm-3">
                <div class="card mb-3 text-center" style="border-radius: 25px;">
                    <img src="assets/images/icon.png" class="center card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">21K</h3>
                        <p class="card-text">$45</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3 text-center" style="border-radius: 25px;">
                    <img src="assets/images/icon.png" class="center card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">18K</h3>
                        <p class="card-text">$40</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3 text-center" style="border-radius: 25px;">
                    <img src="assets/images/icon.png" class="center card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">16K</h3>
                        <p class="card-text">$35</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card mb-3 text-center" style="border-radius: 25px;">
                    <img src="assets/images/icon.png" class="center card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">14K</h3>
                        <p class="card-text">$30</p>
                    </div>
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

                    @foreach ($mejor as $item)
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
                            </div> End .product-details -->
                        </div>
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
                            <!-- <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>End .product-container -->
                            <h2 class="product-title" style="text-align: center;">
                                <a href="{{route('producto',$item->slug)}}" style="white-space: normal">{{$item->titulo}}</a>
                            </h2>
                            <!-- 
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
                            </div>End .product-details -->
                        </div>
                    </div>
                    @endforeach
                </div>



            </div>

        </div>

    </div>
    </div>

    
    <div class="mb-3"></div>
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2 style="color: black; font-size: xxx-large;">Compramos </h2>
                        <h3 style="color: black;">Nos dedicamos a la compra de todo tipo de joyas de oro y plata.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container text-center my-3">
        <div class="container mt-4">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-clock"></i>
                        <div class="feature-box-content">
                            <h3>Beneficios</h3>
                            <p>texto</p>
                            <!-- <a href="#" class="btn btn-outline-dark">Get in touch</a> -->
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-md-4 -->

                <div class="col-sm-6 col-md-4">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-star"></i>
                        <div class="feature-box-content">
                            <h3>Compras</h3>
                            <p>texto</p>
                            <!-- <a href="#" class="btn btn-outline-dark">Return Policy</a> -->
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-md-4 -->

                <div class="col-sm-6 col-md-4">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-check"></i>
                        <div class="feature-box-content">
                            <h3>Pedidos</h3>
                            <p>texto</p>
                            <!-- <a href="#" class="btn btn-outline-dark">Lear More</a> -->
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-md-4 -->
            </div>
        </div><!-- End .container -->
    </div>
    <div class="mb-4"></div><!-- margin -->

<!-- 
    <div class="container text-center my-3">
        <h2 class="carousel-title">Rutinas de Ejercicio</h2>
        <div class="container mt-4">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card" style="border-radius: 20px">
                        <a href="https://www.youtube.com/watch?v=xzECUCrx9dE">
                            <img src="{{asset('assets/images/rutinas/favpecho.jpg')}}" class="card-img-top" alt="Rutina Pecho">
                            <div class="card-body">
                                <h3 class="card-title">Mis Ejercicios de Pecho - Rutina MÁXIMA</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border-radius: 20px">
                        <a href="https://www.youtube.com/watch?v=3ms9adhunP8">
                            <img src="{{asset('assets/images/rutinas/abs.jpg')}}" class="card-img-top" alt="Rutina Abs">
                            <div class="card-body">
                                <h3 class="card-title">Rutina de Abdominales en circuito</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border-radius: 20px">
                        <a href="https://www.youtube.com/watch?v=fRuOnft3oQY">
                            <img src="{{asset('assets/images/rutinas/hombros.jpg')}}" class="card-img-top" alt="Rutina Hombros">
                            <div class="card-body">
                                <h3 class="card-title">Espalda sin Máquinas - Rutina Practica y Fuerte</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border-radius: 20px">
                        <a href="https://www.youtube.com/watch?v=8QhXUFpW2zU">
                            <img src="{{asset('assets/images/rutinas/piernas.jpg')}}" class="card-img-top" alt="Rutina Piernas">
                            <div class="card-body">
                                <h3 class="card-title">Piernas y Gluteos de Acero - Rutina FUERTE!</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center my-3">
        <div class="container mt-4">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card" style="border-radius: 20px">
                        <a href="https://www.youtube.com/watch?v=WZVTwyMPT_c">
                            <img src="{{asset('assets/images/rutinas/hombrosb.jpg')}}" class="card-img-top" alt="Rutina Hombros">
                            <div class="card-body">
                                <h3 class="card-title">Hombros Bestiales con Mancuernas - Rutina completa</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border-radius: 20px">
                        <a href="https://www.youtube.com/watch?v=ejMvVV_-NAA">
                            <img src="{{asset('assets/images/rutinas/piernas2.jpg')}}" class="card-img-top" alt="Rutina Piernas">
                            <div class="card-body">
                                <h3 class="card-title">Piernas Enormes - Rutina Alto volumen</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border-radius: 20px">
                        <a href="https://www.youtube.com/watch?v=HkBXXPY2qUo">
                            <img src="{{asset('assets/images/rutinas/pecho.jpg')}}" class="card-img-top" alt="Rutina Pecho">
                            <div class="card-body">
                                <h3 class="card-title">Pecho y Triceps - Rutina combinación SPLIT CANDELA!</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border-radius: 20px">
                        <a href="https://www.youtube.com/watch?v=o1PQsXC0fiY">
                            <img src="{{asset('assets/images/rutinas/piernas3.jpg')}}" class="card-img-top" alt="Rutina Piernas">
                            <div class="card-body">
                                <h3 class="card-title">Piernas sin Máquinas - Rutina completa</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->


    <div class="mb-5"></div>
</main><!-- End .main -->
@endsection

@section('scripts')
<script>
    $('#myCarousell').carousel({
        interval: 1000
    })
</script>
@endsection