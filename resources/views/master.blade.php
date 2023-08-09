<!--

=========================================================
* Neumorphism UI - v1.0.0
=========================================================

* Product Page: https://themesberg.com/product/ui-kits/neumorphism-ui
* Copyright 2020 Themesberg MIT LICENSE (https://www.themesberg.com/licensing#mit)

* Coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Neumorphism UI</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Neumorphism UI">
<meta name="author" content="Themesberg">

<link rel="canonical" href="https://themesberg.com/product/ui-kits/neumorphism-ui/" />

<!--  Social tags -->
<meta name="keywords" content="neumorphism, neumorphism ui, neomorphism, neomorphism ui, neomorphism css, neumorphism css, neumorph, neumorphic, design system, login, form, table, tables, card, cards, navbar, modal, icons, icons, map, chat, carousel, menu, datepicker, gallery, slider, date, social, dropdown, search, tab, nav, footer, date picker, forms, tabs, time, button, select, input, timeline, cart, about us, account, log in, blog, profile, portfolio, landing page, ecommerce, shop, landing, register, app, contact, one page, sign up, signup, store, bootstrap 4, bootstrap4, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, themesberg, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit">
<meta name="description" content="Start developing neumorphic web applications and pages using Neumorphism UI. It features over 100 individual components and 5 example pages.">

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="Neumorphism UI by Themesberg">
<meta itemprop="description" content="Start developing neumorphic web applications and pages using Neumorphism UI. It features over 100 individual components and 5 example pages.">
<meta itemprop="image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/neumorphism-ui/neumorphism-thumbnail.jpg">

<!-- Twitter Card data -->
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@themesberg">
<meta name="twitter:title" content="Neumorphism UI by Themesberg">
<meta name="twitter:description" content="Start developing neumorphic web applications and pages using Neumorphism UI. It features over 100 individual components and 5 example pages.">
<meta name="twitter:creator" content="@themesberg">
<meta name="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/neumorphism-ui/neumorphism-thumbnail.jpg">

<!-- Open Graph data -->
<meta property="fb:app_id" content="214738555737136">
<meta property="og:title" content="Neumorphism UI by Themesberg" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://demo.themesberg.com/neumorphism-ui/" />
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/neumorphism-ui/neumorphism-thumbnail.jpg"/>
<meta property="og:description" content="Start developing neumorphic web applications and pages using Neumorphism UI. It features over 100 individual components and 5 example pages." />
<meta property="og:site_name" content="Themesberg" />

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="{{asset('./assets/img/favicon/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('./assets/img/favicon/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('./assets/img/favicon/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('./assets/img/favicon/site.webmanifest')}}">
<link rel="mask-icon" href="{{asset('./assets/img/favicon/safari-pinned-tab.svg')}}" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="{{asset('./vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

<!-- Bootstrap CSS -->
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}


<!-- Pixel CSS -->
<link type="text/css" href="{{asset('css/neumorphismPro.css')}}" rel="stylesheet">
<link type="text/css" href="{{asset('./css/neumorphism.css')}}" rel="stylesheet">


<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/plugins/wordCloud.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }
</style>
@yield('style')
@livewireStyles
</head>

<body>
<header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light navbar-transparent navbar-theme-primary">
        <div class="container position-relative">
            <a class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4" href="./index.html">
                <img class="navbar-brand-dark" src="{{asset('./assets/img/brand/dark.svg')}}" alt="Logo light">
                <img class="navbar-brand-light" src="{{asset('./assets/img/brand/dark.svg')}}" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="./index.html" class="navbar-brand shadow-soft py-2 px-3 rounded border border-light">
                                <img src="{{asset('./assets/img/brand/dark.svg')}}" alt="Themesberg logo">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a href="{{route('home')}}" class="nav-link">
                            <span class="nav-link-inner-text">Acceuil</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{route('about')}}" class="nav-link">
                            <span class="nav-link-inner-text">A propos de nous</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{route('candidates')}}" class="nav-link">
                            <span class="nav-link-inner-text">Candidats</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Statistiques</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('stat.ceni')}}">CENI</a></li>
                            <li><a class="dropdown-item" href="{{route('stat.our')}}">Neutral</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{route('contact')}}" class="nav-link">
                            <span class="nav-link-inner-text">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                {{-- <a href="https://themesberg.com/product/ui-kits/neumorphism-ui-pro" target="_blank" class="btn btn-primary text-secondary d-none d-md-inline-block mr-3"><i class="far fa-paper-plane mr-2"></i> Upgrade to PRO</a>
                <a href="" target="_blank" class="btn btn-primary" style="padding: 1.9px;">
                    <img src="{{asset('assets/img/team/big-profile-picture-1.jpg')}}" alt="" srcset="" style="width: 50px;height: 50px;border-radius: 90px;">
                </a> --}}
                <div class="nav-item dropdown">
                    {{-- <a href="#" class="nav-link" data-toggle="dropdown" >
                        <span class="nav-link-inner-text">Pages</span>
                        <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                    </a> --}}
                    <a href="" target="_blank" class="btn btn-primary" style="padding: 1.9px;" data-toggle="dropdown">
                        <img src="{{asset('assets/img/team/big-profile-picture-1.jpg')}}" alt="" srcset="" style="width: 50px;height: 50px;border-radius: 90px;">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../html/pages/about.html">About</a></li>
                        <li><a class="dropdown-item" href="../../html/pages/pricing.html">Pricing</a></li>
                        <li><a class="dropdown-item" href="../../html/pages/contact.html">Contact</a></li>
                        <li><a class="dropdown-item" href="../../html/pages/sign-in.html">Sign in</a></li>
                        <li><a class="dropdown-item" href="../../html/pages/sign-up.html">Sign up</a></li>
                    </ul>
                </div>
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    <div class="row" style="height: 5px;">
        <div class="col-4" style="background-color: #ffc800;"></div>
        <div class="col-4" style="background-color: #1893ff;"></div>
        <div class="col-4" style="background: red;"></div>
    </div>
</header>
<main>

    @yield('content')

</main>

    {{-- <a id="producthunt-badge" href="https://www.producthunt.com/posts/neumorphism-ui?utm_source=badge-featured&utm_medium=badge&utm_souce=badge-neumorphism-ui" target="_blank">
        <img src="https://api.producthunt.com/widgets/embed-image/v1/featured.svg?post_id=200908&theme=dark" alt="Neumorphism UI - Neumorphism inspired UI web components, sections and pages | Product Hunt Embed" style="width: 250px; height: 54px;" width="250px" height="54px" />
    </a> --}}

    <a id="producthunt-badge" href="#top" target="_blank">
        <button class="btn btn-primary btn-pill  btn-icon-only text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button">
            <span aria-hidden="true" class="fas fa-angle-up"></span>
        </button>
    </a>

    <a href=""><span class="fas fa-angle-down"></span></a>
<footer class="d-flex pb-5 pt-6 pt-md-7 border-top border-light bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <p><strong>Neumorphism UI PRO</strong> is a premium Bootstrap UI Kit built based on the newest design trend called Neumorphism.</p>
                <ul class="d-flex list-unstyled mb-5 mb-lg-0">
                    <li class="mr-2">
                        <a href="https://twitter.com/themesberg" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="twitter social link"
                        data-toggle="tooltip" data-placement="top" title="Follow @themesberg on Twitter">
                            <span aria-hidden="true" class="fab fa-twitter"></span>
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="https://www.facebook.com/themesberg/" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="facebook social link"
                        data-toggle="tooltip" data-placement="top" title="Like @themesberg on Facebook">
                            <span aria-hidden="true" class="fab fa-facebook"></span>
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="https://github.com/themesberg" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="github social link"
                        data-toggle="tooltip" data-placement="top" title="Open source projects">
                            <span aria-hidden="true" class="fab fa-github"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://dribbble.com/themesberg" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="dribbble social link"
                        data-toggle="tooltip" data-placement="top" title="Follow us on Dribbble">
                            <span aria-hidden="true" class="fab fa-dribbble"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-5 mb-lg-0">
                <h5>Themesberg</h5>
                <ul class="footer-links list-unstyled mt-2">
                    <li class="mb-1"><a class="p-2" target="_blank" href="https://themesberg.com/blog">Blog</a></li>
                    <li class="mb-1"><a class="p-2" target="_blank" href="https://themesberg.com/products">Products</a></li>
                    <li class="mb-1"><a class="p-2" target="_blank" href="https://themesberg.com/about">About Us</a></li>
                    <li><a class="p-2" target="_blank" href="https://themesberg.com/contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-5 mb-lg-0">
                <h5>Other</h5>
                <ul class="footer-links list-unstyled mt-2">
                    <li class="mb-1"><a class="p-2" href="https://themesberg.com/docs/pixel-bootstrap/getting-started/overview/" target="_blank">Docs
                        <span class="badge badge-gray text-uppercase ml-2">v1.0</span></a>
                    </li>
                    <li class="mb-1">
                        <a class="p-2" href="https://themesberg.com/docs/pixel-bootstrap/getting-started/changelog" target="_blank">Changelog</a>
                    </li>
                    <li class="mb-1">
                        <a class="p-2" target="_blank" href="https://themesberg.com/licensing">License</a>
                    </li>
                    <li>
                        <a class="p-2" target="_blank" href="https://github.com/themesberg/pixel-bootstrap-ui-kit/issues">Support</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                <h5>S’inscrire</h5>
                <p class="text-gray font-small mt-2">Inscrivez-vous à notre liste de diffusion. Nous écrivons rarement, mais seulement le meilleur contenu.</p>
                <form action="{{route('image')}}">
                    @csrf
                    <div class="form-row mb-2">
                        <div class="col-12">
                            <label class="h6 font-weight-normal d-none" for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control mb-2" placeholder="example@company.com" name="email" aria-label="Subscribe form" id="exampleInputEmail3" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block" data-loading-text="Sending">
                                <span>Subscribe</span>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="text-gray font-small m-0">Nous ne partagerons jamais vos coordonnées. Voir notre <a class="text-black" href="#">politique de confidentialité</a></p>
            </div>
        </div>
        <hr class="my-5">
        <div class="row">
            <div class="col">
                <a href="https://themesberg.com" target="_blank" class="d-flex justify-content-center">
                    <img src="./assets/img/themesberg.svg" height="25" class="mb-3" alt="Themesberg Logo">
                </a>
            <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                <p class="font-weight-normal font-small mb-0">Copyright © Themesberg
                    <span class="current-year">2020</span>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
@yield('script')
    <!-- Core -->
{{-- <script src="./vendor/jquery/dist/jquery.min.js"></script> --}}
<script src="{{asset('./vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('./vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('./vendor/headroom.js/dist/headroom.min.js')}}"></script>

<!-- Vendor JS -->
<script src="{{asset('./vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
<script src="{{asset('./vendor/nouislider/distribute/nouislider.min.js')}}"></script>
<script src="{{asset('./vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('./vendor/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('./vendor/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('./vendor/jarallax/dist/jarallax.min.js')}}"></script>
<script src="{{asset('./vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('./vendor/jquery-countdown/dist/jquery.countdown.min.js')}}"></script>
<script src="{{asset('./vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
<script src="{{asset('./vendor/prismjs/prism.js')}}"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Neumorphism JS -->
<script src="{{asset('./assets/js/neumorphism.js')}}"></script>

@livewireScripts
</body>

</html>
