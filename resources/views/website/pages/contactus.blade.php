@extends('website.indexmaster')
@section('website')

<div class="banner-area contact">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="container">
    <div class="page-title-content">
    <h2>Contact Us</h2>
    <ul>
    <li>
    <a href="index.html"> Home </a>
    <i class="flaticon-fast-forward"></i>
    <p class="active">Contact</p>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <div class="shape-ellips-contact">
    <img src="frontend/assets/images/contact-shape.png" alt="shape" />
    </div>
    
    <div class="contact-service">
    <div class="container">
    <div class="row">
    <div class="col-lg-4 col-sm-6">
    <div class="single-service text-center">
    <div class="service-icon">
    <i class="flaticon-clock"></i>
    </div>
    <div class="service-content">
    <p>Sun - Thu : 10:00AM - 06:00PM</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-sm-6">
    <div class="single-service text-center">
    <div class="service-icon">
    <i class="flaticon-pin"></i>
    </div>
    <div class="service-content">
    <p>28/A Street, New York City, USA</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-sm-12">
    <div class="single-service text-center sst-10">
    <div class="service-icon">
    <i class="flaticon-telephone"></i>
    </div>
    <div class="service-content">
    <p>+1 (321) 984 754</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <section class="home-contact-area pb-100">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-lg-6 ps-0">
    <div class="contact-img">
    <img src="frontend/assets/images/contact.png" alt="contact" />
    </div>
    </div>
    <div class="col-lg-6">
    <div class="home-contact-content">
    <h2>What Do You Want to Know?</h2>
    <form id="contactForm">
    <div class="row">
    <div class="col-lg-6 col-sm-6">
    <div class="form-group">
    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name" />
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <div class="col-lg-6 col-sm-6">
    <div class="form-group">
    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email" />
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <div class="col-lg-6 col-sm-6">
    <div class="form-group">
    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone" />
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <div class="col-lg-6 col-sm-6">
    <div class="form-group">
    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject" />
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <div class="col-lg-12 col-md-12">
    <div class="form-group">
    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
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
    

@endsection