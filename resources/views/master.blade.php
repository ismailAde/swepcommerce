<!DOCTYPE html>
<html>

    <title>SWEPcommerce</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/style.css">
    <script type="text/javascript">
        function navLeft(){

            //get element and store as variable
            var slider = document.getElementById("slider-img");

            if(slider.getAttribute("src") == "images/1.jpg"){
                slider.setAttribute("src", "images/2.jpg");
            }else if(slider.getAttribute("src") == "images/2.jpg"){
                slider.setAttribute("src", "images/3.jpg");
            }else if(slider.getAttribute("src") == "images/3.jpg"){
                slider.setAttribute("src", "images/4.jpg");
            }else{
                slider.setAttribute("src", "images/1.jpg")
            }
        }
        function navRight(){

            //get element and store as variable
            var slider = document.getElementById("slider-img");

            if(slider.getAttribute("src") == "images/4.jpg"){
                slider.setAttribute("src", "images/3.jpg");
            }else if(slider.getAttribute("src") == "images/3.jpg"){
                slider.setAttribute("src", "images/2.jpg");
            }else if(slider.getAttribute("src") == "images/2.jpg"){
                slider.setAttribute("src", "images/1.jpg");
            }else{
                slider.setAttribute("src", "images/4.jpg")
            }
        }
    </script>
</head>
<body>
<header><!-- Header section -->
    <div class="sub-header">
        <div id="logo-bar">
            <img src="{{ file_exists("images/swep.png")? null: ".." }}/images/swep.png">
        </div>
        <div class="menu-bar-2">
            {{ link_to_route('home_path', 'Home', [], ['class'=>'menuu menuu1']) }}
            {{ link_to_route('products_path', 'Products', [], ['class'=>'menuu menuu2']) }}
            {{ link_to_route('faq_path', 'FAQ', [], ['class'=>'menuu menuu3']) }}
            @if((!Session::has('userStatus')) && (Session::get('userStatus')!= 'active'))
                {{ link_to_route('login_path', 'Login', [], ['class'=>'menuu menuu4']) }}
                {{ link_to_route('signup_path', 'Sign up', [], ['class'=>'menuu menuu5']) }}
            @endif
            @if((Session::has('userStatus') && Session::has('userId') && Session::get('userStatus')=='active'))
                {{ link_to_route('profile_path', 'Profile', ['id'=>Session::get('userId')], ['class'=>'menuu menuu6']) }}
                {{ link_to_route('action_logout_path', 'Logout', [],['class'=>'menuu menuu4']) }}
            @endif
        </div>
    </div>

    <div id="search-bar">
        {{ Form::open(['route'=>'product_search_path', 'method'=>'POST']) }}
            {{ Form::text('tags', null, ['class'=>'searchText', 'placeholder'=>'Tags Separated By Space']) }}
            {{ Form::submit('Search') }}
        {{ Form::close() }}

        {{--{{ Form::open(['route'=>'search_path', 'method'=>'POST']) }}--}}
            {{--{{ Form::text('tags', null, ['class'=>'searchText', 'placeholder'=>'Tags separated by space']) }}--}}
            {{--{{ Form::submit('Search') }}--}}
        {{--{{ Form::close() }}--}}
        <!--input type="text" name="searchLocation"-->
    </div>
</header>

@yield('body')


<!-- Footer Sectio -->
<footer>
    <div class="footer-row-1 footer-row">
        <!--span class="footer-logo">SWEPcommerce</span-->
        <div class="footer-logo-light">
            <img src="{{ file_exists("images/swep.png")? null: ".." }}/images/swep.png">
        </div>
        <div class="social-icon fb"> f</div>
        <div class="social-icon tw"> t</div>
        <div class="social-icon yt"> v</div>
    </div>
    <div class="footer-row-2 footer-row">
        <span class="footer-left">All Rights Reserved (c) SWEPcommerce 2017</span>
        <span class="footer-right"><a href="">Customer Support: 08061687426</a></span>
    </div>
</footer>

</body>
</html>