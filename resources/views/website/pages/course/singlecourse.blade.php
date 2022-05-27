@extends('website.indexmaster')
@section('website')

<div class="banner-area class-details">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Class V-VI</h2>
                    <ul>
                        <li>
                            <a href="index.html"> Home </a>
                            <i class="flaticon-fast-forward"></i>
                            <a href="single-class.html"> Classes</a>
                            <i class="flaticon-fast-forward"></i>
                            <p class="active"> Class(V-VI)</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="single-class-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="single-class">
                    <div class="class-img">
                        <img src="{{asset('frontend/assets/images/classs-img.png')}}" alt="about" />
                    </div>
                    <div class="class-contnet">
                        <h2>Regular Class V-VI</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                            Risus commodo viverra maecenas accumsan lacus vel facilisis.typesetting, remaining
                            essentially
                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                            containing Lorem Ipsum passages, and more recently with desktop publishing software like
                            Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                            Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="class-btn">
                        <a href="admission.html" class="box-btn">Get Admission</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="class-content-right">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control about-search" placeholder="Search..." />
                        </div>
                        <button type="submit"> <i class="flaticon-search"></i></button>
                    </form>


                    <p class="sp-class">Courses</p>
                    <ul class="class-list">
                        <li>
                            <a href="special-class.html">
                                <i class="flaticon-next"></i>Course-1</a>
                        </li>
                        <li>
                            <a href="special-class.html">
                                <i class="flaticon-next"></i>Course-2</a>
                        </li>
                        <li>
                            <a href="special-class.html"><i class="flaticon-next"></i>Course-3</a>
                        </li>
                        <li>
                            <a href="special-class.html"><i class="flaticon-next"></i>Course-4</a>
                        </li>
                        <li>
                            <a href="special-class.html"><i class="flaticon-next"></i>Course-5</a>
                        </li>
                        <li>
                            <a href="special-class.html"><i class="flaticon-next"></i>Course-6</a>
                        </li>
                    </ul>
                    <div class="consultation-area">
                        <h2>Get Free Consultation</h2>
                        <form class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Full name" />
                                </div>
                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Your Email" />
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Phone" />
                                </div>
                                <div class="col-md-12">
                                    <textarea placeholder="Message" class="form-control"></textarea>
                                </div>
                            </div>
                        </form>
                        <a href="#" class="box-btn">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home-contact-area pb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 ps-0">
                <div class="contact-img">
                    <img src="{{asset('frontend/assets/images/contact.png')}}" alt="contact" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home-contact-content">
                    <h2>Resgister Now</h2>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Your Name" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Your Email" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required
                                        data-error="Please enter your number" class="form-control"
                                        placeholder="Your Phone" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                        required data-error="Please enter your subject"
                                        placeholder="Your Subject" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                        required data-error="Write your message"
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

@endsection