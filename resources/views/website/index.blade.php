@extends('website.indexmaster')
@section('website')

<section class="slider-area">
    <div class="home-slider owl-carousel owl-theme">
        <div class="single-slider single-slider-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 text-center">
                                <div class="slider-tittle one">
                                    <h1>
                                        We Focus on Your <span>Children’s Development</span>
                                    </h1>
                                    <p>
                                        In addition to these core schools, students in a given country may also
                                        attend schools before and after primary elementary in the and secondary
                                        middle school in the us education. Kindergarten or preschool.
                                    </p>
                                </div>
                                <div class="slider-btn bnt1 text-center">
                                    <a href="admission.html" class="box-btn">Admission</a>
                                    <a href="special-class.html" class="border-btn">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider single-slider-bg-2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 text-center">
                                <div class="slider-tittle two">
                                    <h1>
                                        We Focus on Your <span>Children’s Development</span>
                                    </h1>
                                    <p>
                                        In addition to these core schools, students in a given country may also
                                        attend schools before and after primary elementary in the and secondary
                                        middle school in the us education. Kindergarten or preschool.
                                    </p>
                                </div>
                                <div class="slider-btn bnt2">
                                    <a href="admission.html" class="box-btn">Admission</a>
                                    <a href="special-class.html" class="border-btn">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="choose-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 ps-0">
                <div class="home-choose-img">
                    <img src="{{asset('frontend/assets/images/choose1.png')}}" alt="choose" />
                </div>
            </div>
            <div class="col-lg-6 home-choose">
                <div class="home-choose-content">
                    <div class="section-tittle">
                        <h2>Why Choose Gyanastu?</h2>
                        <p>
                            School choice theory assumes that parents are rational actors that can gather and
                            consume information to find a school that matches their child's needs. Parents' desires
                            and ability to choose quality schools.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 col-md-5">
                            <ul class="choose-list-left">
                                <li><i class="flaticon-check-mark"></i>Top 10 Rated School</li>
                                <li> <i class="flaticon-check-mark"></i>Great Behaviour</li>
                                <li><i class="flaticon-check-mark"></i>Helpful & Kindnesss</li>
                                <li><i class="flaticon-check-mark"></i>Learning With Fun</li>
                                <li><i class="flaticon-check-mark"></i>Children Safety</li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-md-7">
                            <div class="choose-list-home">
                                <ul>
                                    <li> <i class="flaticon-check-mark"></i>Eco Freindly Environment</li>
                                    <li> <i class="flaticon-check-mark"></i>Healthy Food & Water in Canteen</li>
                                    <li> <i class="flaticon-check-mark"></i>Health Care With Certified Dorctors</li>
                                    <li><i class="flaticon-check-mark"></i>Huge Playground With Children Park</li>
                                    <li><i class="flaticon-check-mark"></i>Physically Fit Buses With Experienced
                                        Driver</li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="box-btn">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home-admission">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-addmission">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="admission-circle">
                                <h2>Admission <span> on Going</span></h2>
                                <div class="admission-shape1">
                                    <img src="{{asset('frontend/assets/images/admission/shape1.png')}}" alt="shape" />
                                </div>
                                <div class="admission-shape2">
                                    <img src="{{asset('frontend/assets/images/admission/shape2.png')}}" alt="shape" />
                                </div>
                                <div class="admission-shape3">
                                    <img src="{{asset('frontend/assets/images/admission/shape3.png')}}" alt="shape" />
                                </div>
                                <div class="admission-shape4">
                                    <img src="{{asset('frontend/assets/images/admission/shape4.png')}}" alt="shape" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="admission-content">
                                <h2>Spring Term 2021 Admission for All Standard</h2>
                                <p>Admission will Close 30th March 2021. Time Remaining:</p>
                                <ul class="admission-list">
                                    <li>
                                        <p id="days">21</p>
                                        <span>Days</span>
                                    </li>
                                    <li>
                                        <p id="hours">15</p>
                                        <span>Hours</span>
                                    </li>
                                    <li>
                                        <p id="minutes">10</p>
                                        <span>Minute</span>
                                    </li>
                                    <li>
                                        <p id="seconds">50</p>
                                        <span>Seconds</span>
                                    </li>
                                </ul>
                                <a href="admission.html" class="box-btn">Admission Now</a>
                            </div>
                        </div>
                    </div>
                    <span class="loon">
                        <img src="{{asset('frontend/assets/images/admission/shape5.png')}}" alt="shape" />
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Educaton center  -->
<section class="course-slider-area">
    <div class="container">
        <div class="course-slider owl-carousel owl-theme">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="course-slider-img">
                        <img src="{{asset('frontend/assets/images/courses/slider-img.png')}}" alt="course" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="course-slider-content">
                        <h2>Our Education Center</h2>
                        <p>
                            Enrol your child or yourself in Gyanastu Education Center (GEC). GEC is the perfect
                            tuition/training centre that looks after all the students learning needs. Gyanastu
                            Education Center (GEC) helps them to study in a comfortable atmosphere and get best
                            learning experience by expert teachers and improve command on the subjects.
                        </p>
                        <div class="course-slider-btn">
                            <!-- <a href="#" class="box-btn">Registation Now</a> -->
                            <!-- <a href="#" class="border-btn">See More Events</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="course-slider-img">
                        <img src="{{asset('frontend/assets/images/courses/slider-img.png')}}" alt="course" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="course-slider-content">
                        <h2>Our Education Center</h2>
                        <p>
                            Enrol your child or yourself in Gyanastu Education Center (GEC). GEC is the perfect
                            tuition/training centre that looks after all the students learning needs. Gyanastu
                            Education Center (GEC) helps them to study in a comfortable atmosphere and get best
                            learning experience by expert teachers and improve command on the subjects.
                        </p>
                        <div class="course-slider-btn">
                            <!-- <a href="#" class="box-btn">Registation Now</a> -->
                            <!-- <a href="#" class="border-btn">See More Events</a> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Eduction center close -->


<!-- registration area -->
<section class="home-contact-area pb-100 pt-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 ps-0">
                <div class="contact-img">
                    <img src="{{asset('frontend/assets/images/contact.png')}}" alt="contact" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home-contact-content">
                    <h2>Register Now</h2>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Your Name" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Your Email" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required
                                        data-error="Please enter your number" class="form-control"
                                        placeholder="Your Phone" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">

                                    <select id="disabledSelect" class="form-select" name="" required>
                                        <option> Select Board</option>
                                        @foreach ($board as $item1)
                                            <option value=" {{ $item1->board_name }} ">{{ Str::upper($item1->board_name) }}</option>
                                        @endforeach
                                    </select>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">

                                    <select id="disabledSelect" class="form-select" name="" required>
                                        <option> Select Stream</option>
                                        @foreach ($courseStream as $item2)
                                        
                                        <option value="{{ $item2->stream_name }}">{{ Str::upper($item2->stream_name) }}</option>
                                        @endforeach
                                    </select>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">

                                    <select id="disabledSelect" class="form-select " name="" required>
                                        <option> Select Medium</option>
                                        @foreach ($language as $item3)
                                            <option value="{{ $item3->medium_name }}">{{ $item3->medium_name }}</option>
                                        @endforeach
                                    </select>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">

                                    <select id="disabledSelect" class="form-select" name="" required>
                                        <option> Mode of class</option>
                                        <option value="virtual">Virtual or Offline Classes</option>
                                        <option value="online">Online Classes</option>

                                    </select>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="7"
                                        placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn page-btn box-btn">
                                    Send Message
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--************* registration area closed ***************-->

<span class="left-shape">
    <img src="{{asset('frontend/assets/images/left-shape.png')}}" alt="shape" />
</span>

<!-- special courses -->
<section class="special-single-class">
    <div class="container">
        <div class="section-tittle text-center">
            <h2>Our Special courses</h2>
            <p>
                A best courses is provided
            </p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-sm-6">
                <div class="single-sp-class">
                    <div class="course-img">
                        <img src="{{asset('frontend/assets/images/courses/img4.png')}}" alt="course" />
                        <div class="course-content">
                            <h2>Painting Class</h2>
                            <p>
                                Paint lessons are a type of formal instruction in playing a musical instrument or
                                singing.
                            </p>
                            <a href="single-class.html" class="box-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-sp-class">
                    <div class="course-img">
                        <img src="{{asset('frontend/assets/images/courses/img5.png')}}" alt="course" />
                        <div class="course-content">
                            <h2>Science Class</h2>
                            <p>
                                Science lessons are a type of formal instruction in playing a musical instrument or
                                singing.
                            </p>
                            <a href="single-class.html" class="box-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-sp-class">
                    <div class="course-img">
                        <img src="{{asset('frontend/assets/images/courses/img6.png')}}" alt="course" />
                        <div class="course-content">
                            <h2>Music Class</h2>
                            <p>
                                Music lessons are a type of formal instruction in playing a musical instrument or
                                singing.
                            </p>
                            <a href="single-class.html" class="box-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>

<!-- ***********news and events********** -->
<section class="home-news pb-100 pt-100">
    <div class="container">
        <div class="section-tittle text-center">
            <h2>News And Events</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-home-news">
                    <a href="single-news.html">
                        <img src="{{asset('frontend/assets/images/news/img1.png')}}" alt="news" />
                    </a>
                    <div class="single-home-content">
                        <h2>News 1</h2>
                        <p class="calender">
                            <i class="flaticon-calendar"></i> 01 April, 2021
                        </p>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page.
                        </p>
                        <a href="single-news.html" class="line-bnt">Read More <i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-home-news">
                    <a href="single-news.html">
                        <img src="{{asset('frontend/assets/images/news/img2.png')}}" alt="news" />
                    </a>
                    <div class="single-home-content">
                        <h2>News-2</h2>
                        <p class="calender">
                            <i class="flaticon-calendar"></i> 01 April, 2021
                        </p>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page.
                        </p>
                        <a href="single-news.html" class="line-bnt">Read More <i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sst-10">
                <div class="single-home-news">
                    <a href="single-news.html">
                        <img src="{{asset('frontend/assets/images/news/img3.png')}}" alt="news" />
                    </a>
                    <div class="single-home-content">
                        <h2>News-3</h2>
                        <p class="calender">
                            <i class="flaticon-calendar"></i> 01 April, 2021
                        </p>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page.
                        </p>
                        <a href="single-news.html" class="line-bnt">Read More <i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection