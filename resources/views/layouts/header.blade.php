<!-- header begin -->
<?php
$cats=App\Category::orderBy('id','desc')->get();
$abouts=App\About::orderBy('id','desc')->get();
?>

<header class="">
    <!-- top header begin -->
    <div class="info">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="info-list">
                        <li><i class="fa fa-phone"></i>
                            phone: <strong>1800.899.900</strong></li>
                        <li><i class="fa fa-envelope-o"></i>
                            Email us:
                            <strong>contact@archi.com</strong></li>

                    </ul>
                </div>
                <div class="col-md-3">
                    <!-- social icons -->
                    <ul class="social-list">

                        <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-github"></i></a></li>

                    </ul>
                    <!-- social icons close -->
                </div>
            </div>
        </div>
    </div>
    <!-- top header close -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="logo">
                    <!-- Edit code for demo here "template-functions.php" and "header.php" files. -->
                    <a href="{{ route('landing') }}">
                        <img class="logo-static" src="{{asset('public/publics/images/logo.png')}}" alt="mkdesigns">
                        <img class="logo-scroll" src="{{asset('public/publics/images/logo.png')}}" alt="mkdesigns">
                        <img class="logo-dark" src="{{asset('public/publics/images/logo.png')}}" alt="mkdesigns">
                    </a>
                </div>
                <span id="menu-btn"></span>
                <!-- mainmenu begin -->
                <nav>
                    <ul id="mainmenu" >
                        <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-631 current_page_item menu-item-773 active"><a  title="Home" href="{{route('landing')}}">Home</a></li>
                        <li id="menu-item-775" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-775 "><a  title="Projects" href="">About <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                @foreach($abouts as $about)
                                    <li id="menu-item-777" class="menu-item menu-item-type-post_type menu-item-object-Projects menu-item-777"><a  title="{{$about->en_name}}" href="{{route('about',['permalink'=>$about->permalink])}}">{{$about->en_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li id="menu-item-775" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-775 "><a  title="Projects" href="">Projects <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                 @foreach($cats as $cat)
                                <li id="menu-item-777" class="menu-item menu-item-type-post_type menu-item-object-Projects menu-item-777"><a  title="{{$cat->en_name}}" href="{{ route('cats',['id'=>$cat->id]) }}">{{$cat->en_name}}</a></li>
                                  @endforeach
                            </ul>
                        </li>
                        <li id="menu-item-761" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-761"><a  title="Blog" href="{{route('blogs')}}">Blog</a></li>
                        <li id="menu-item-776" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-776"><a  title="Contact" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- mainmenu close -->
        </div>
    </div>
</header>
<!-- header close -->