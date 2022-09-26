<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Joyería Luciana</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/icon.png')}}">


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->


    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Segoe Script:300,400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- {!! Html::style('assets/css/bootstrap.min.css') !!} -->

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fontaweasome-free/css/all.min.css')}}">

    <!-- {!! Html::style('assets/css/style.min.css') !!}
    {!! Html::style('css/admin.css') !!}
    {!! Html::style('assets/vendor/fontawesome-free/css/all.min.css') !!} -->

</head>

<body>


    <?php
    if (auth::check()) {
        $carrito = DB::table('carrito as c')
            ->join('producto as p', 'c.idproducto', '=', 'p.id')
            ->select('c.cantidad', 'p.poster', 'p.titulo', 'p.precio_ahora', 'c.id')
            ->where('iduser', '=', auth()->user()->id)
            ->orderby('c.id', 'desc')
            ->limit(2)
            ->get();

        $carrito_total = DB::table('carrito')
            ->where('iduser', '=', auth()->user()->id)
            ->get();

        $num_compras = count($carrito_total);
    }

    $config = DB::table('configuraciones')
        ->first();
    ?>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top" style="background: #000000 !important; color: white !important;border: none !important">
                <div class="container">
                    <!-- <div class="header-left header-dropdowns">
                        <div class="header-dropdown">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="header-dropdown">
                            <a href="#"><img src="{{asset('assets/images/flags/en.png')}}" alt="England flag">ENGLISH</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><img src="{{asset('assets/images/flags/en.png')}}" alt="England flag">ENGLISH</a></li>
                                    <li><a href="#"><img src="{{asset('assets/images/flags/fr.png')}}" alt="France flag">FRENCH</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="dropdown compare-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-retweet"></i> Compare (2)
                            </a>

                            <div class="dropdown-menu" >
                                <div class="dropdownmenu-wrapper">
                                    <ul class="compare-products">
                                        <li class="product">
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            <h4 class="product-title"><a href="product.html">Lady White Top</a></h4>
                                        </li>
                                        <li class="product">
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            <h4 class="product-title"><a href="product.html">Blue Women Shirt</a></h4>
                                        </li>
                                    </ul>

                                    <div class="compare-actions">
                                        <a href="#" class="action-link">Clear All</a>
                                        <a href="#" class="btn btn-primary">Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="header-right">
                        <!-- <p class="welcome-msg">Default welcome msg! </p> -->

                        <div class="header-dropdown dropdown-expanded">
                            <a href="#"><i class="icon-home"></i></a>
                            <div class="header-menu">
                                <ul>
                                    <!-- <li>ENVÍOS A TODO EL PERÚ! <i class="fas fa-truck"></i> 24 A 48 HORAS</li> -->
                                    <li><a style="text-decoration: none;" href="{{route('contacto')}}">CONTACTO</a></li>
                                    @if (!auth::check())
                                    <li><a style="text-decoration: none;" href="{{route('login.user')}}">INICIAR SESIÓN</a></li>

                                    @else
                                    <li><a style="text-decoration: none;" href="{{route('cuenta')}}">MI CUENTA </a></li>
                                    <li>
                                        <form method="POST" action="{{route('logout')}}" style="margin-bottom: 0px !important">
                                            @csrf
                                            <button type="submit" style="background: #ff0000; color: white; border: none; cursor: pointer">CERRAR SESIÓN</button>
                                        </form>
                                    </li>
                                    @endif
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle" style="background: #F7EC03"><!-- previous color  #E02007-->
                <div class="container">
                    <div class="header-left">
                        <a href="{{route('inicio')}}" class="logo">
                             <!--<img src="{{asset('config/'.$config->logo)}}" alt="Logo" width="181" height="51"> -->
                            <img src="{{asset('assets/images/log.png')}}" alt="Logo" width="300" height="50">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search">
                            <a class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            {!! Form::open(array('url'=>'productos','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control" placeholder="Buscar producto" name="buscar" required>
                                <button class="btn" type="submit" type="submit"><i class="icon-magnifier"></i></button>
                            </div><!-- End .header-search-wrapper -->
                            {{Form::close()}}
                        </div><!-- End .header-search -->
                    </div><!-- End .headeer-center -->

                    <div class="header-right">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        <div class="header-contact">
                            <span><i style="font-size: larger;" class="fab fa-whatsapp"></i> Contáctanos </span>
                            <!-- <a href="tel:#"><strong><i class="icon-phone"></i>{{$config->telefono}}</strong></a> -->
                            <a href="https://api.whatsapp.com/send?phone=+51960538333"><strong> {{$config->telefono}}</strong></a>
                        </div><!-- End .header-contact -->
<!--
                        <div class="header-contact">
                            <span>ENVÍOS A TODO EL PERÚ! <br><i class="fas fa-truck"></i> 24 A 48 HORAS</span>
                        </div>
-->
 
                        
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header" style="background: #000000 !important; color: white !important;border: none !important">
                <div class="container">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li><a class="item-primary" href="{{route('inicio')}}">Inicio</a></li>
                            <li><a class="item-primary" href="{{route('productos')}}">Productos</a></li>
                            <!--
                            @if (auth::check())
                            <li><a href="{{route('mis_compras')}}" class="item-primary">Mis compras</a></li>
                            @endif
-->
                            <li>
                                <?php

                                $categorias = DB::table('categoria')
                                    ->orderby('id', 'asc')
                                    ->get();

                                ?>
                                <a href="#" class="sf-with-ul item-primary">Categorías</a>
                                <div class="megamenu megamenu-fixed-width">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    
                                                    <ul>
                                                        @foreach ($categorias as $item)
                                                        <li><a href="{{route('productos.categoria',strtolower($item->titulo))}}"><i class="{{$item->icono}}"></i> {{$item->titulo}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>



                        </ul>
                    </nav>
                </div><!-- End .header-bottom -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
        @yield('user-content')

        <footer class="footer" style="background: #000000!important"> <!-- previous color 232f3e  -->
            <div class="footer-middle">
                <div class="container">
                    <div class="footer-ribbon" style="background: #E02007 !important">
                        {{$config->titulo}}
                    </div><!-- End .footer-ribbon -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Contáctanos</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Dirección:</span><?php echo $config->direccion ?>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Teléfono:</span><a href="tel:+51960538333"><?php echo $config->telefono ?></a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Correo:</span> <a href="mailto:joyerialuciana.chacarilla@gmail.com"><?php echo $config->correo ?></a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Atención:</span>
                                        <?php echo $config->horario ?>
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <a href="https://www.facebook.com/Joyer%C3%ADa-Luciana-100366469182879" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                                    <a href="https://www.instagram.com/joyeria.luciana/" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=+51960538333" class="social-icon" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                </div><!-- End .social-icons -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-9">


                            <div class="row">
                                <div class="col-md-5">
                                    <div class="widget">
                                        <h4 class="widget-title">MI CUENTA</h4>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-5">
                                                <ul class="links">
                                                    <li><a href="{{route('cuenta')}}"><i class="icon-chevron-right"></i>Perfil</a></li>
                                                    <li><a href="{{route('contacto')}}"><i class="icon-chevron-right"></i>Contáctanos</a></li>
                                                    <!--<li><a href="{{route('mis_compras')}}"><i class="icon-chevron-right"></i>Compras</a></li>-->
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                            <div class="col-sm-6 col-md-5">
                                                <ul class="links">
                                                    <!-- <li><a href="{{route('carrito')}}"><i class="icon-chevron-right"></i>Mi carrito</a></li>-->
                                                    <li><a href="{{route('productos')}}"><i class="icon-chevron-right"></i>Productos</a></li>
                                                    <li><a href="{{route('login.user')}}"><i class="icon-chevron-right"></i>Login</a></li>
                                                </ul><!-- -->
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-5 -->

                                <div class="col-md-7">
                                    <div class="widget">
                                        <h4 class="widget-title">NOSOTROS</h4>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="{{route('nosotros')}}"><i class="icon-chevron-right"></i>Nosotros</a></li>
                                                    <!-- <li><a href="{{route('nosotros')}}"><i class="icon-chevron-right"></i>Misión y Visión</a></li> -->
                                                    <li><a href="{{route('contacto')}}"><i class="icon-chevron-right"></i>Contacto</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <!--<li><a href="#"><i class="icon-chevron-right"></i>Políticas de Garantía </a></li>-->
                                                    <!--<li><a href="#"><i class="icon-chevron-right"></i>Políticas de Privacidad</a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-7 -->
                            </div>
                            <!-- 
                            <div class="row">
                                <div class="col-md-5">
                                    <h4 class="widget-title">SUSCRÍBETE</h4>
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Correo electrónico" required>

                                        <input type="submit" class="btn" value="Inscribirme">
                                    </form>
                                </div>
                            </div>
                            -->

                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom">
                    <p class="footer-copyright">{{$config->titulo}}. &copy; 2022. Todos los derechos reservados.</p>

                    <img src="{{asset('assets/images/payments.png')}}" alt="payment methods" class="footer-payments">
                </div><!-- End .footer-bottom -->
            </div><!-- End .container -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="{{route('inicio')}}">Inicio</a></li>
                    @if (!auth::check())
                    <li class="active"><a href="{{route('login.user')}}">Iniciar sesión</a></li>
                    @endif
                    <li>
                        <a href="">Categorias</a>
                        <ul>

                            @foreach ($categorias as $item)
                            <li><a style="text-decoration: none;" href="{{route('productos.categoria',strtolower($item->titulo))}}"><i class="{{$item->icono}}"></i> {{$item->titulo}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a class="item-primary" href="{{route('productos')}}">Productos</a></li>
                    <li><a class="item-primary" href="{{route('contacto')}}">Contacto</a></li>
                    @if (auth::check())
                    <li><a href="{{route('mis_compras')}}" class="item-primary">Mis compras</a></li>

                    @endif
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="https://www.facebook.com/Joyer%C3%ADa-Luciana-100366469182879" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="https://api.whatsapp.com/send?phone=+51960538333" class="social-icon" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/joyeria.luciana/" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->


    <div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body add-cart-box text-center">
                    <p>You've just added this product to the<br>cart:</p>
                    <h4 id="productTitle"></h4>
                    <img src="" id="productImage" width="100" height="100" alt="adding cart image">
                    <div class="btn-actions">
                        <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                        <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="whatsapp">
        <div class="icono">
            <a href="https://api.whatsapp.com/send?phone=+51960538333&amp;text=Buen%20d%C3%ADa%20quiero%20solicitar%20mas%20informaci%C3%B3n%20sobre%20los%20servicios%20que%20brindan%20" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 636.32 639.38">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #FFFFFF;
                            }
                        </style>
                    </defs>
                    <g id="Capa_2" data-name="Capa 2">
                        <g id="Capa_1-2" data-name="Capa 1">
                            <path class="cls-1" d="M543.61,92.92A314.79,314.79,0,0,0,319.49,0C144.85,0,2.73,142.12,2.66,316.8A316.28,316.28,0,0,0,45,475.2L0,639.38l168-44.06a316.59,316.59,0,0,0,151.4,38.56h.13c174.62,0,316.76-142.13,316.83-316.82A314.9,314.9,0,0,0,543.61,92.92ZM319.49,580.38h-.11a263,263,0,0,1-134-36.71L175.74,538,76.07,564.11l26.61-97.18-6.27-10A262.74,262.74,0,0,1,56.15,316.82C56.21,171.63,174.34,53.51,319.59,53.51A263.37,263.37,0,0,1,582.83,317c-.07,145.2-118.19,263.34-263.34,263.34ZM463.93,383.15c-7.91-4-46.83-23.11-54.09-25.76s-12.54-4-17.81,4-20.45,25.75-25.07,31-9.23,5.94-17.15,2-33.42-12.33-63.66-39.3c-23.53-21-39.42-46.91-44-54.83s0-11.8,3.47-16.16c8.57-10.64,17.15-21.8,19.79-27.08s1.32-9.91-.66-13.87-17.81-42.92-24.41-58.78c-6.42-15.43-12.94-13.35-17.81-13.59-4.61-.23-9.89-.28-15.17-.28s-13.86,2-21.11,9.91-27.71,27.08-27.71,66,28.37,76.61,32.33,81.9,55.82,85.24,135.23,119.53a451.68,451.68,0,0,0,45.13,16.67c19,6,36.22,5.18,49.86,3.14,15.21-2.27,46.84-19.15,53.44-37.64s6.6-34.34,4.62-37.64-7.26-5.29-15.18-9.25Z"></path>
                        </g>
                    </g>
                </svg>
            </a>
        </div>

    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    {!! Html::script('assets/js/jquery.min.js') !!}
    {!! Html::script('assets/js/bootstrap.bundle.min.js') !!}
    {!! Html::script('assets/js/plugins.min.js') !!}
    {!! Html::script('assets/js/main.min.js') !!}
    {!! Html::script('assets/js/nouislider.min.js') !!}
    <!-- {!! Html::script('https://checkout.culqi.com/js/v3') !!} -->



    <!-- <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('assets/js/main.min.js')}}"></script>
    <script src="{{asset('assets/js/nouislider.min.js')}}"></script> -->
    <script src="https://checkout.culqi.com/js/v3"></script>

    @stack('scripts')
</body>

</html>