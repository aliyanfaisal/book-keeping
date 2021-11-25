<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
        <!-- === wrapper section === -->
    <section id="wrapper" class="d-flex w-100">
        <!-- aside nav-->
        <aside class="border-right shadow-sm" id="aside-nav">
            <!-- aside logo brand -->
            <a href="#" class="aside-brand text-decoration-none border-bottom mb-3">
                <!-- svg -->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" width="24px" height="24px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                    xml:space="preserve">
                    <path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
                      C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z"></path>
                    <path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
                      c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z"></path>
                    <path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
                      c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z"></path>
                </svg>
                <!-- /svg -->
                <span class="ms-2">Dashboard</span>
            </a>
            <!-- /aside logo brand -->

            <!-- aside nav ul list -->
            <ul class="nav flex-column" id="aside-nav-ul">
                <li class="nav-item">
                    <a class="nav-link @if(strpos($_SERVER['REQUEST_URI'], 'home' )!=false) active @endif   " href="/home">
                        <!-- svg -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-sliders align-middle">
                            <line x1="4" y1="21" x2="4" y2="14"></line>
                            <line x1="4" y1="10" x2="4" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12" y2="3"></line>
                            <line x1="20" y1="21" x2="20" y2="16"></line>
                            <line x1="20" y1="12" x2="20" y2="3"></line>
                            <line x1="1" y1="14" x2="7" y2="14"></line>
                            <line x1="9" y1="8" x2="15" y2="8"></line>
                            <line x1="17" y1="16" x2="23" y2="16"></line>
                        </svg>
                        <!-- /svg -->
                        <span class="ms-2">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(strpos($_SERVER['REQUEST_URI'], 'cash-in' )!=false) ecgo active @endif  " href="/cash-in">
                        <!-- svg -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-layout align-middle">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="3" y1="9" x2="21" y2="9"></line>
                            <line x1="9" y1="21" x2="9" y2="9"></line>
                        </svg>
                        <!-- /svg -->
                        <span class="ms-2">Cash In</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(strpos($_SERVER['REQUEST_URI'], 'cash-out' )!=false) ecgo active @endif  " href="/cash-out">
                        <!-- svg -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-book-open align-middle">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                        <!-- /svg -->
                        <span class="ms-2">Cash Out</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if(strpos($_SERVER['REQUEST_URI'], 'notification' )!=false) ecgo active @endif  " href="#">
                        <!-- svg -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bell align-middle">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                        <!-- /svg -->
                        <span class="ms-2">Notifications</span>
                        <span class="aside-badge ms-2">40</span>
                    </a>
                </li>

                <li class="nav-item aside-dropdown">
                    <a class="nav-link @if(strpos($_SERVER['REQUEST_URI'], 'settings' )!=false) ecgo active @endif   position-relative" data-bs-toggle="collapse" href="#collapsePricing"
                        role="button" aria-expanded="false" aria-controls="collapseExample">
                        <!-- svg -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            fit="" height="24" width="24" preserveAspectRatio="xMidYMid meet" focusable="false">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <!-- /svg -->
                        <span class="ms-2">Settings</span>
                        <span class="dropdown-caret-svg">
                            <!-- svg -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" fit=""
                                height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <!-- svg -->
                        </span>
                    </a>
                    <ul class="collapse list-unstyled aside-dropdown-menu" id="collapsePricing">
                        <li><a class="nav-link @if(strpos($_SERVER['REQUEST_URI'], 's' )!=false) ecgo active @endif  " href="#">Basic Plan</a></li>
                        <li><a class="nav-link @if(strpos($_SERVER['REQUEST_URI'], 's' )!=false) ecgo active @endif  " href="#">Single Plan</a></li>
                        <li><a class="nav-link @if(strpos($_SERVER['REQUEST_URI'], 's' )!=false) ecgo active @endif  " href="#">Modern Plan</a></li>
                    </ul>
                </li>
                

            </ul>
            <!-- /aside nav ul list -->
        </aside>
        <!-- /aside nav-->

        <!-- === main === -->
        <main class="w-100 bg-light d-flex flex-column" id="main">
            <!-- === header === -->
            <header id="header-navbar" class="sticky-top w-100">
                <nav class="navbar navbar-expand navbar-light bg-white shadow-sm w-100">
                    <div class="container-fluid">

                        <div class="border rounded-circle shadow-sm p-2" id="aside-toggle-btn">
                            <!-- svg -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <!-- /svg -->
                        </div>

                        <div>
                            <ul class="navbar-nav ms-auto">                              
                                <li class="nav-item dropdown user-dropdown">
                                    <a class="nav-link @if(strpos($_SERVER['REQUEST_URI'], 's' )!=false) ecgo active @endif  " href="#">
                                        <!--svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart align-middle">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                            </path>
                                        </svg>
                                        <!--/svg-->
                                    </a>                                   
                                </li>
                                <li class="nav-item dropdown user-dropdown">
                                    <a class="nav-link @if(strpos($_SERVER['REQUEST_URI'], 's' )!=false) ecgo active @endif  " href="#">
                                        <!--svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell align-middle">
                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                        </svg>
                                        <!--/svg-->
                                    </a>                                   
                                </li>
                                <li class="nav-item dropdown user-dropdown">
                                    <a class="nav-link @if(strpos($_SERVER['REQUEST_URI'], 's' )!=false) ecgo active @endif   dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <!--svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                          </svg>
                                        <!--/svg-->
                                        <span>{{Auth::user()->name}}</span>                                        
                                    </a>
                                    <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li>
                                            <form action="/logout" method="post">
                                                @csrf
                                            <button type="submit" class="dropdown-item btn btn-light" href="#">Logout</button>
                                            </form>
                                            
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- === /header === -->

            <!-- === main body section start === -->

            <section class="container-fluid">
                @yield('content')
            </section>

            <!-- === /main body section end === -->

            <!-- === footer === -->
            <footer id="footer" class="bg-dark py-3 text-white text-center shadow-sm mt-auto">
                <div>© All Rights Reserved. Powered By <a href="http://afbinc.epizy.com"> AFB.inc</a></div>
            </footer>
            <!-- === /footer === -->

        </main>
        <!-- === /main === -->


    </section>
    <!-- === /wrapper section === -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script >
$(document).ready(function(){

//side nav toggle button hide/show
$("#aside-toggle-btn").click(function(){       
   $("#aside-nav, main").toggleClass("active");   
}); 

//aside nav dropdown caret icon rotate
$("#aside-nav-ul .nav-link").click(function(){     
 $(this).find(".dropdown-caret-svg").toggleClass("rotate-svg");
});

//aside nav > nav link remove/add active class on click
$("#aside-nav-ul .nav-link").click(function(){
    $("#aside-nav-ul .nav-link").removeClass("active");
    $(this).addClass("active");
});

//click on one dropdown second one automatically hide and change svg icon to
 $("#aside-nav-ul").on('click','.nav-item',function(){      
    const liElement = $(this);
    liElement.siblings().children().children(".dropdown-caret-svg").removeClass("rotate-svg");
    liElement.siblings().children(".aside-dropdown-menu").removeClass("show");
    if($(this).hasClass("active")){
    liElement.siblings().children(".aside-dropdown-menu").addClass("show");
    }
    });
});



    </script>



@yield('js')
</body>
</html>