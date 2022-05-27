@extends('website.indexmaster')
@section('website')

<div class="banner-area gallery">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Gallery</h2>
                    <ul>
                        <li>
                            <a href="index.html"> Home </a>
                            <i class="flaticon-fast-forward"></i>
                            <p class="active"> Gallery </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="gallery-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="all-gall">
                    <li class="active" data-filter="*"><span>All</span></li>
                    <li data-filter=".students"><span>Students</span></li>
                    <li data-filter=".teacher"><span>Teachers</span></li>
                    <li data-filter=".staff"><span>Staff</span></li>
                    <li data-filter=".others"><span>Others</span></li>
                </ul>
            </div>
        </div>
        <div class="row gall-list">
            <div class="col-lg-4 col-md-6 item students">
                <div class="single-gall">
                    <div class="gall-img">
                        <a href="frontend/assets/images/gallery/img1.png" class="image-pop">
                            <img src="frontend/assets/images/gallery/img1.png" alt="gallery" />
                        </a>
                    </div>
                    <div class="gall-content ">
                        <h3>Maria Doe</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 item teacher staff">
                <div class="single-gall">
                    <div class="gall-img">
                        <a href="frontend/assets/images/gallery/img6.png" class="image-pop">
                            <img src="frontend/assets/images/gallery/img6.png" alt="gallery" />
                        </a>
                    </div>
                    <div class="gall-content">
                        <h3>Evana Doe</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 item students">
                <div class="single-gall">
                    <div class="gall-img">
                        <a href="frontend/assets/images/gallery/img2.png" class="image-pop">
                            <img src="frontend/assets/images/gallery/img2.png" alt="gallery" />
                        </a>
                    </div>
                    <div class="gall-content">
                        <h3>Marida Doe</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 item teacher">
                <div class="single-gall">
                    <div class="gall-img">
                        <a href="frontend/assets/images/gallery/img8.png" class="image-pop">
                            <img src="frontend/assets/images/gallery/img8.png" alt="gallery" />
                        </a>
                    </div>
                    <div class="gall-content">
                        <h3>Luca Doe</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 item others">
                <div class="single-gall">
                    <div class="gall-img">
                        <a href="frontend/assets/images/gallery/img4.png" class="image-pop">
                            <img src="frontend/assets/images/gallery/img4.png" alt="gallery" />
                        </a>
                    </div>
                    <div class="gall-content">
                        <h3>Maria Doe</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 item staff teacher">
                <div class="single-gall">
                    <div class="gall-img">
                        <a href="frontend/assets/images/gallery/img7.png" class="image-pop">
                            <img src="frontend/assets/images/gallery/img7.png" alt="gallery" />
                        </a>
                    </div>
                    <div class="gall-content">
                        <h3>John Doe</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 item students teacher">
                <div class="single-gall">
                    <div class="gall-img">
                        <a href="frontend/assets/images/gallery/img3.png" class="image-pop">
                            <img src="frontend/assets/images/gallery/img3.png" alt="gallery" />
                        </a>
                    </div>
                    <div class="gall-content">
                        <h3>Alva Doe</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 item students teacher">
                <div class="single-gall">
                    <div class="gall-img">
                        <a href="frontend/assets/images/gallery/img1.png" class="image-pop">
                            <img src="frontend/assets/images/gallery/img1.png" alt="gallery" />
                        </a>
                    </div>
                    <div class="gall-content">
                        <h3>Getty Doe</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 item teacher staff others">
                <div class="single-gall">
                    <div class="gall-img">
                        <a href="frontend/assets/images/gallery/img5.png" class="image-pop">
                            <img src="frontend/assets/images/gallery/img5.png" alt="gallery" />
                        </a>
                    </div>
                    <div class="gall-content">
                        <h3>Marida Doe</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="flaticon-left-arrow"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="flaticon-next"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection