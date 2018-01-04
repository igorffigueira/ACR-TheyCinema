<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Theycinema</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript">

            $(window).on('scroll', function(){
                if ($(window).scrollTop()){
                    $('nav').addClass('black');
                }
                else{
                    $('nav').removeClass('black');
                }})</script>        
        <!--link href="/css/app.css" rel="stylesheet"-->
        <link href="/css/ourCSS.css" rel="stylesheet">
        <link href="/css/register.css" rel="stylesheet">
        <link href="/css/addmin.css" rel="stylesheet">
        <link href="/css/infomovie1.css" rel="stylesheet">
        <link href="/css/buyticked.css" rel="stylesheet">
        <link href="/css/payment.css" rel="stylesheet">
        <link href="/css/team.css" rel="stylesheet">
        <script> 
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?></script>  
    </head>
    
    <body>
        <ul class = "ulnav" >        
            @if (Auth::guest())
                <li class="navegador"><a href="{{ url('/login') }}">Login</a></li>
                <li class="navegador navborder"><a href="{{ url('/register') }}">Register</a></li>             
            @else
                <li class="navegador" ><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
                <li class="navegador navborder"> <a href="#" role="button" > {{ Auth::user()->name }} </a></li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}</form></li>              
            @endif
        </ul>
        <nav>
            <div class="logo">
                <img src="/images/logo.png" onclick="clickImage()">
            </div>
            <ul>
                <li><a class="first" href="/">Home</a></li>
                <li><a href="/parceiros">Partners</a></li>
                <li><a href="/localizacao">Location</a></li>
                <li><a href="/team">Team</a></li>
                @if(Auth::check() && Auth::user()->usertype=="admin") 
                <li><a href="{{ url('/admin')}}"> Admin Area </a></li>
                @endif       
            </ul>
        </nav>
        <br><br><br><br><br><br><br>      
        <section class=middle> 
    @yield('content')
    <br><br><br><br><br>
        </section>

        <section class=middledireito>

            <table class="middlerighttable">
                <th class="thh" colspan="2"><strong> Most expected</strong><th>  
                <tr>
                    <td class="tdwidth" ><a class="iconmen1" href="#" > <img class="iconn1" src="/images/img1.jpg"></a>
                        <a href="#" ><img class="iconn2" src="/images/icon.png" ></a>
                    </td>         
                    <td><a class="iconmen" href="#">The Amazing Spider-Man</a></td>
                </tr>
                <tr>
                    <td class="tdwidth" ><a href="#">Harry Potter and the Order of the Phoenix </a></td>
                    <td class="vv"><a href="#"><img class="iconn" src="/images/icon.png"> </a></td>
                </tr>
                <tr>
                    <td class="tdwidth"><a href="#">Insidious 2</a></td>
                    <td class="vv"><a href="#"><img class="iconn" src="/images/icon.png"> </a></td>
                </tr>
                <tr>
                    <td class="tdwidth"><a href="#">Jumanji</a></td>
                    <td class="vv"><a href="#"><img class="iconn" src="/images/icon.png"> </a></td>
                </tr>
                <tr>
                    <td class="tdwidth"><a href="#">Logan</a></td>
                    <td class="vv"><a href="#"><img class="iconn" src="/images/icon.png"> </a></td>
                </tr>
                <tr>
                    <td class="tdwidth"><a href="#">Harry Potter</a></td>
                    <td class="vv"><a href="#"><img class="iconn" src="/images/icon.png"> </a></td>
                </tr>

            </table>
        </section>
                <br><br>
                <footer>
                    <ul class="footerr">
                        <li>- - - Contact Us! - - -</li>
                        <li>theycinema@team.uma.pt</li>
                        <li>54 Street Maia, Portugal</li>
                    </ul>
                    <ul class="footerr1">
                        <li><a href="http://facebook.com" target="_blank" ><img class="iconn3" src="/images/facebook.png" ></a></li>
                        <li><a href="http://twitter.com" target="_blank" ><img class="iconn3" src="/images/twitter.png" ></a></li>
                        <li><a href="http://instagram.com" target="_blank" ><img class="iconn3" src="/images/instagram.jpg" ></a></li>
                    </ul>
              </footer>
    @yield('content2')
            <script>
               function clickImage(){
                window.location = '/';
               }
            </script>
            <script src="/js/app.js"></script>

            <script
                src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous">
            </script> 
            <script 
                src="https://unpkg.com/axios/dist/axios.min.js">
            </script>

   @yield('jscall')


</body>
</html>
