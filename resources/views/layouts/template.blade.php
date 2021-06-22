<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>Dashboard | SMA Kertha Wisata Singaraja</title> --}}
    <link rel="icon" type="image/png" href="{{ asset('img/logo1.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


</head>
<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-dark border-right" id="sidebar-wrapper">
          <div class="sidebar-heading">
            <a href="{{ route('dashboard') }}">
                <div class="h-30 w-40">
                <img src="{{ asset('img/logosma1.png') }}" alt="">
                </div>
            </a>
            {{-- <div class="text-white pt-2">
              <font size="2" class="font-bold">
              SMA Kertha Wisata Singaraja
              </font>
            </div> --}}
          </div>
    {{-- sidebard --}}
          <div class="list-group list-group-flush">
            <a href="{{ route('dashboard') }}" class="text-white list-group-item list-group-item-action bg-dark"><i class="fas fa-home pr-2 md:pr-3" aria-hidden="true"></i>Dashboard</a>
            <a href="{{ route('dataguru.index') }}" class="text-white list-group-item list-group-item-action bg-dark"> <i class="fa fa-chalkboard-teacher pr-2 md:pr-3" aria-hidden="true"></i>Data Guru</a>
            <a href="{{ route('datasiswa.index') }}" class="text-white list-group-item list-group-item-action bg-dark"><i class="fa fa-user pr-2 md:pr-3" aria-hidden="true"></i>Data Siswa</a>
          </div>
        </div>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper">
    
          <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn hover:border-transparent" id="menu-toggle"><i class="fa fa-bars fa-lg"></i></button>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                {{-- profil --}}
                <li>
                <div class="relative inline-block">
                    <button onclick="toggleDD('myDropdown')" class="drop-button text-black-600 focus:outline-none"> <span class="pr-2"><i class="em em-male-technologist"></i></span> Hello, {{ Auth::user()->name }} <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>

                    <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                        <a href="{{ route('profile.show') }}" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                        
                            @csrf
                        <div class="border border-gray-800"></div>
                        <form method="POST" action="{{ route('logout') }}" >
                          @csrf
      
                          <a href="{{ route('logout') }}" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"
                                         onclick="event.preventDefault();
                                          this.closest('form').submit();"><i class="fas fa-sign-out-alt fa-fw"></i>
                              {{ __('Log Out') }}
                          </a>
                      </form>
                      
                    </div>
                </div>
                </li>
              </ul>
            </div>
          </nav>
    
          <div class="container-fluid">
            <main>
            {{$slot}}
            </main>
          </div>
        </div>
        <!-- /#page-content-wrapper -->
      </div>

      
   <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
      $("#wrapper").toggleClass("toggled");
      });
    $("#menu-toggle-2").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled-2");
      $('#menu ul').hide();
    });

    function initMenu() {
      $('#menu ul').hide();
      $('#menu ul').children('.current').parent().show();
      //$('#menu ul:first').show();
      $('#menu li a').click(
          function() {
            var checkElement = $(this).next();
            if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                return false;
            }
            if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                $('#menu ul:visible').slideUp('normal');
                checkElement.slideDown('normal');
                return false;
            }
          }
      );
    }
    $(document).ready(function() {
      initMenu();
    });
   </script>
    
    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>

    {{-- Javascript --}}

    <script src="{{ asset ('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('js/script.js') }}"></script>

        @stack('modals')

        @livewireScripts
</body>

</html>