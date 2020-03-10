@extends ('layout')
@section ('content')
    <head>
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
        <link rel="stylesheet" type="text/css" href="prototype.css">
    </head>
    <div id="carouselExampleControls" class="carousel slide w-100" data-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active w-40 card-mb-2">
                <div class="card">
                    <div class="card-img img-fluid">
                        <img class="d-block rounded" src="https://picsum.photos/id/238/750" alt="Second slide">
                        <div class="card-body text-center">
                            <h4 class="card-title">John Doe, 21</h4>
                            <p class="card-text"><em>"insert description here"</em></p>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-auto col-md-auto col-sm-auto">
                                    <img class="flagIcon" src="flags/PNG/70/United states of america.png"></div>
                                <div class="col-lg-auto col-md-auto col-sm-auto">
                                    <p>United states of America</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item w-40 card-mb-2">
                <div class="card">
                    <div class="card-img img-fluid">
                        <img class="d-block rounded" src="https://picsum.photos/id/235/750" alt="Second slide">
                        <div class="card-body text-center">
                            <h4 class="card-title">John Doe, 21</h4>
                            <p class="card-text"><em>"insert description here"</em></p>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-auto col-md-auto col-sm-auto">
                                    <img class="flagIcon" src="flags/PNG/70/bhutan.png"></div>
                                <div class="col-lg-auto col-md-auto col-sm-auto">
                                    <p>Bhutan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item w-40 card-mb-2">
                <div class="card">
                    <div class="card-img img-fluid">
                        <img class="d-block rounded" src="https://picsum.photos/id/190/750" alt="Second slide">
                        <div class="card-body text-center">
                            <h4 class="card-title">John Doe, 21</h4>
                            <p class="card-text"><em>"insert description here"</em></p>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-auto col-md-auto col-sm-auto">
                                    <img class="flagIcon" src="flags/PNG/70/Belgium.png"></div>
                                <div class="col-lg-auto col-md-auto col-sm-auto">
                                    <p>Belgium</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item w-40 card-mb-2">
                <div class="card">
                    <div class="card-img img-fluid">
                        <img class="d-block rounded" src="https://picsum.photos/id/200/750" alt="Second slide">
                        <div class="card-body text-center">
                            <h4 class="card-title">John Doe, 21</h4>
                            <p class="card-text"><em>"insert description here"</em></p>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-auto col-md-auto col-sm-auto">
                                    <img class="flagIcon" src="flags/PNG/70/Italy.png"></div>
                                <div class="col-lg-auto col-md-auto col-sm-auto">
                                    <p>Italy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item w-40 card-mb-2">
                <div class="card">
                    <div class="card-img img-fluid">
                        <img class="d-block rounded" src="https://picsum.photos/id/210/750" alt="Second slide">
                        <div class="card-body text-center">
                            <h4 class="card-title">Juan Doe, 21</h4>
                            <p class="card-text"><em>"insert description here"</em></p>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-auto col-md-auto col-sm-auto">
                                    <img class="flagIcon" src="flags/PNG/70/Mexico.png"></div>
                                <div class="col-lg-auto col-md-auto col-sm-auto">
                                    <p>Mexico</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
@endsection
