@extends("master");

@section("body")

    <section class="slider"><!-- Slider Section -->
        <div class="nav-div left-nav" onclick="navLeft()"><</div>
        <img src="images/4.jpg" id="slider-img">
        <div class="nav-div right-nav" onclick="navRight()">></div>
    </section>

    <section id="categories"><!-- categories section -->
        <div class="row">
            <div class="cat cat1"><!-- Category one -->
                <div class="col-1"><!-- First column -->
                    <div class="col-1-head col-1-head-1"><!-- column Head -->
                        <span class="col-1-head-text">Phones</span>
                    </div>
                    <a href="{{ route('product_search_get_path', 'techno') }}"><div class="col-1-divlet"><span class="cat-entry">Techno</span></div></a>
                    <a href="{{ route('product_search_get_path', 'injoo') }}"><div class="col-1-divlet"><span class="cat-entry">Injoo</span></div></a>
                    <a href="{{ route('product_search_get_path', 'nokia') }}"><div class="col-1-divlet"><span class="cat-entry">Nokia</span></div></a>
                    <a href="{{ route('product_search_get_path', 'samsung') }}"><div class="col-1-divlet"><span class="cat-entry">Samsung</span></div></a>
                    <a href="{{ route('product_search_get_path', 'itel') }}"><div class="col-1-divlet"><span class="cat-entry">Itel</span></div></a>
                    <a href="{{ route('product_search_get_path', 'alcatel') }}"><div class="col-1-divlet"><span class="cat-entry">Alcatel</span></div></a>
                    <a href="{{ route('product_search_get_path', 'nexus') }}"><div class="col-1-divlet"><span class="cat-entry">Nexus</span></div></a>
                    <a href="{{ route('product_search_get_path', 'sony ericson') }}"><div class="col-1-divlet"><span class="cat-entry">Sony Ericson</span></div></a>
                    <a href="{{ route('product_search_get_path', 'motorola') }}"><div class="col-1-divlet"><span class="cat-entry">Motorola</span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                </div>
                <div class="col-2-1">
                    <a href="{{ route('product_search_get_path', 'iphone iphone8') }}"><img src="images/i.png"></a>
                </div>
                <div class="col-2-5">
                    <a href="{{ route('product_search_get_path', 'samsung') }}"><img src="images/samsung.jpg"></a>
                </div>
                <div class="col-2-3">
                    <a href="{{ route('product_search_get_path', 'iphone iphone6') }}"><img src="images/i2.jpg"></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="cat cat2">
                <div class="col-2">
                    <div class="col-1-head col-1-head-2"><!-- column Head -->
                        <span class="col-1-head-text">Apparel</span>
                    </div>
                    <a href="{{ route('product_search_get_path', 'male wears') }}"><div class="col-1-divlet"><span class="cat-entry">Male Wears</span></div></a>
                    <a href="{{ route('product_search_get_path', 'female wears') }}"><div class="col-1-divlet"><span class="cat-entry">Female Wears</span></div></a>
                    <a href="{{ route('product_search_get_path', 'kid wears') }}"><div class="col-1-divlet"><span class="cat-entry">Kid wears</span></div></a>
                    <a href="{{ route('product_search_get_path', 'unisex wears') }}"><div class="col-1-divlet"><span class="cat-entry">Unisex Wears</span></div></a>
                    <a href="{{ route('product_search_get_path', 'wrist watches') }}"><div class="col-1-divlet"><span class="cat-entry">Wrist Watches</span></div></a>
                    <a href="{{ route('product_search_get_path', 'shoes men shoe') }}"><div class="col-1-divlet"><span class="cat-entry">Shoes Men</span></div></a>
                    <a href="{{ route('product_search_get_path', 'shoe shoes women') }}"><div class="col-1-divlet"><span class="cat-entry">Shoes Women</span></div></a>
                    <a href="{{ route('product_search_get_path', 'shoe shoes kids kid') }}"><div class="col-1-divlet"><span class="cat-entry">Shoes Kids</span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                </div>
                <div class="col-2-3">
                    <a href="{{ route('product_search_get_path', 'women red dress shoes') }}"><img src="images/apparel.jpg">
                </div>
                <div class="col-2-1">
                    <a href="{{ route('product_search_get_path', 'shoe men') }}"><img src="images/shoe.jpg"></a>
                </div>
                <div class="col-2-2">
                    <a href="{{ route('product_search_get_path', 'shoe men') }}"><img src="images/jordan.jpg"></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="cat cat3">
                <div class="col-3">
                    <div class="col-1-head col-1-head-3"><!-- column Head -->
                        <span class="col-1-head-text">Electronics</span>
                    </div>
                    <a href="{{ route('product_search_get_path', 'home theatre') }}"><div class="col-1-divlet"><span class="cat-entry">Home Theatre</span></div></a>
                    <a href="{{ route('product_search_get_path', 'freezer') }}"><div class="col-1-divlet"><span class="cat-entry">Freezer</span></div></a>
                    <a href="{{ route('product_search_get_path', 'fan') }}"><div class="col-1-divlet"><span class="cat-entry">Fan</span></div></a>
                    <a href="{{ route('product_search_get_path', 'plasma tv') }}"><div class="col-1-divlet"><span class="cat-entry">Plasma TV</span></div></a>
                    <a href="{{ route('product_search_get_path', 'air conditioner') }}"><div class="col-1-divlet"><span class="cat-entry">Air Conditioner</span></div></a>
                    <a href="{{ route('product_search_get_path', 'blender') }}"><div class="col-1-divlet"><span class="cat-entry">Blender</span></div></a>
                    <a href="{{ route('product_search_get_path', 'electric oven') }}"><div class="col-1-divlet"><span class="cat-entry">Electric Oven</span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                </div>
                <div class="col-2-4"></div>
                <div class="col-2-2">
                    <a href="{{ route('product_search_get_path', 'home theatre black') }}"><img src="images/theatre.png"></a>
                </div>
                <div class="col-2-5">
                    <a href="{{ route('product_search_get_path', 'electronics freezer tv washing machine laptop cooker') }}"><img src="images/elect.png"></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="cat cat4">
                <div class="col-4">
                    <div class="col-1-head col-1-head-4"><!-- column Head -->
                        <span class="col-1-head-text">Others</span>
                    </div>
                    <a href="{{ route('product_search_get_path', 'generator') }}"><div class="col-1-divlet"><span class="cat-entry">Generator</span></div></a>
                    <a href="{{ route('product_search_get_path', 'mower') }}"><div class="col-1-divlet"><span class="cat-entry">Mower</span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                    <a href=""><div class="col-1-divlet"><span class="cat-entry"></span></div></a>
                </div>
                <div class="col-2-1">
                    <a href="{{ route('product_search_get_path', 'men watch silver') }}"><img src="images/watch.png"></a>
                </div>
                <div class="col-2-2">
                    <a href="{{ route('product_search_get_path', 'printer hp') }}"><img src="images/npr.jpg"></a>
                </div>
                <div class="col-2-3">
                    <a href="{{ route('product_search_get_path', 'generator') }}"><img src="images/mkt.png"></a>
                </div>
            </div>
        </div>
    </section>

@stop