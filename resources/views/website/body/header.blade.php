@php
    $onlineclass = DB::table('courses')->where('mode_of_class' , 'online')->get() ;
    $virtualclass = DB::table('courses')->where('mode_of_class' , 'virtual')->get() ;
@endphp

@php
use App\Http\Controllers\cart\ManageCourseCartController ;
$total = ManageCourseCartController::CartItems() ;
@endphp

<div class="navbar-area">
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="{{asset('frontend/assets/images/logo2 (2).png')}}" class="main-logo" alt="logo" />
            <img src="{{asset('frontend/assets/images/logo2 (2).png')}}" class="white-logo" alt="logo" />
        </a>
    </div>
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('frontend/assets/images/logo2 (2).png')}}" class="main-logo" alt="logo" />
                    <img src="{{asset('frontend/assets/images/logo2 (2).png')}}" class="white-logo" alt="logo" />
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav text-right">
                        <li class="nav-item">
                            <a href="/" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('about') }}" class="nav-link">About</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ Route('course-list') }}" class="nav-link dropdown-toggle">Online Courses</a>
                            <ul class="dropdown-menu">
                                {{-- <li class="nav-item">
                                    <a href="All-courses.html" class="nav-link">Courses-1</a>
                                </li> --}}

                                @foreach ($onlineclass as $navdata)
                                    <li class="nav-item">
                                        <a href="{{ Route('course',$navdata->id) }}" class="nav-link"> {{ $navdata->course_name }} </a>
                                    </li>
                                @endforeach
                                

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ Route('course-list-virtual') }}" class="nav-link dropdown-toggle">Virtual Courses</a>
                            <ul class="dropdown-menu">
                                {{-- <li class="nav-item">
                                    <a href="All-courses.html" class="nav-link">Courses-1</a>
                                </li> --}}

                                @foreach ($virtualclass as $vir)
                                    <li class="nav-item">
                                        <a href="{{ Route('course',$vir->id) }}" class="nav-link"> {{ $vir->course_name }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ Route('gallery') }}" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ Route('admission') }}" class="nav-link">Admission</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">Pricing</a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="{{ Route('gallery') }}" class="nav-link">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ Route('testimonials') }}" class="nav-link">Testimonials</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ Route('terms-and-condition') }}" class="nav-link">Terms & Conditions</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ Route('Privacy-policy') }}" class="nav-link">Privacy Policy</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('contact-us') }}" class="nav-link">Contact </a>
                        </li>

                        <!-- button -->

                        <div class="login-button  ms-5 w-100">
                            <button class="btn btn-outline-success h-100 " type="submit">
                                <a href="{{ route('loginpage') }}">
                                    @php
                                        if(!Auth::user()) {
                                            echo "Login" ;
                                        }
                                        else{
                                            $id = Auth::user()->name ;
                                            echo "$id" ;
                                        }
                                    @endphp
                                </a>
                            <button class="btn btn-outline-success ms-2 h-100" type="submit"><a
                                    href="{{ Route('register') }}">Sign up</a></button>
                        </div>
                        <!-- cart -->
                        <div class="cart-button"><a href="Add-to-cart.html">
                            <i class="fas fa-cart-arrow-down"></i></a>
                            <span class="position-absolute top-1 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ $total }}
                            </span>
                        </div>
                {{-- <div class="cart-button"><a href="#"><i class="fas fa-bell"></i></a></div> --}}
                        <!-- button close -->
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</div>
