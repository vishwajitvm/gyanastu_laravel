@extends('website.indexmaster')
@section('website')

@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
    
@endphp


<div class="banner-area special-class">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>
                        @if ($route == 'course-list')
                            All Online Courses
                        @else
                            All Virtual Courses
                        @endif
                    </h2>
                    <ul>
                        <li>
                            <a href="index.html"> Home </a>
                            <i class="flaticon-fast-forward"></i>
                            <p class="active">
                                @if ($route == 'course-list')
                                    Online Courses
                                @else
                                    Virtual Courses
                                @endif
                            </p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- all corses -->
<section class="home-news pb-100 pt-100">
    <div class="container">
        <div class="section-tittle text-center">
            <h2>
                @if ($route == 'course-list')
                All Online Courses
            @else
                All Virtual Courses
            @endif

            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>

        <!-- 1 -->
        <div class="row">

            @foreach ($data as $item)
            <div class="col-lg-4 col-md-6">

                <div class="single-home-news">

                    <div class="col-3 package "><span> {{ $item->type_of_course }} </span></div>
                    <div class="col-2 package-2  float-end  "><span class='bg-{{$item->mode_of_class == "virtual"?"danger":"success"  }}'> {{ $item->mode_of_class }} </span></div>


                    <a href="{{ Route('course' , $item->id ) }}">
                        <img src="frontend/assets/images/news/img1.png" alt="news" />
                    </a>

                    <div class="single-home-content">
                        <a href="{{ Route('course' , $item->id ) }}">
                            <p class="calender">
                                <i class="fa-solid fa-user"></i> {{ $item->publisher_name }}
                            </p>
                            <h2> {{ Str::title($item->course_name) }} </h2>
    
    
                            <p>
                                {{ Str::words($item->short_description , 25) }}
                            </p>
    
                            <div class="type-course">
                                <button class="btn btn-outline-success h-100 my-2" type="submit">Board</button>
                                <button class="btn btn-outline-success h-100 " type="submit"> Medium</button>
                                <button class="btn btn-outline-success h-100 my-2" type="submit">Board</button>
                            </div>
                            <hr>
                        </a>
                            <!-- <a href="Courses-details.html" class="line-bnt mt-4">Read More <i class="flaticon-next"></i></a> -->
                            <div class="row mt-4  justify-content-between">
                                <div class="col-sm-7">
                                    <form action="/add-to-cart" method="POST">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{ $item->id }}">
                                        <button class="btn btn-danger  border border-dark">
                                            <i class="fas fa-cart-plus"></i> Rs.{{$item->course_total_price}}
                                        </button>
                                    </form>
                                </div>

                                <div class="col-sm-5  read-more text-end">
                                    <a href="{{ Route('course' , $item->id ) }}" class="mt-2">Read More </i></a>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection