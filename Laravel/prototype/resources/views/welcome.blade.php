@extends ('layout')
@section ('content')
    <header class="page-header header container-fluid">
        <div class="overlay">
            <div class="description my-auto">
                <h1>Welcome to the Landing Page!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat
                    ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis. Suspendisse
                    consectetur mi id libero fringilla, in pharetra sem ullamcorper.</p>
                <button class="btn btn-outline-secondary btn-lg" onclick="window.location.href='/#home'">Tell Me More!
                </button>
            </div>
        </div>
    </header>

    <section id="home">
        <div class="container features">
            <div class="row wow fadeIn">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Lorem ipsum</h3>
                    <img src="https://picsum.photos/id/237/300/300" class="img-fluid">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis
                        placerat
                        ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Lorem ipsum</h3>
                    <img src="https://picsum.photos/id/238/300/300" class="img-fluid">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis
                        placerat
                        ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Lorem ipsum</h3>
                    <img src="https://picsum.photos/id/239/300/300" class="img-fluid">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis
                        placerat
                        ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container features">
            <div class="row wow fadeIn">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia, ipsum sit amet mattis
                        porttitor, diam ipsum euismod turpis, eget aliquam felis mauris eget dolor. Vivamus suscipit ac
                        magna in tempor. Aliquam erat volutpat. Phasellus nulla nunc, facilisis id tempor at, volutpat
                        at tortor. Morbi ac porta purus. Proin dignissim elit in maximus vestibulum. Cras sit amet
                        pellentesque tortor, eu ultrices sapien. Proin placerat nulla in malesuada pretium. Maecenas
                        tempus sem eget velit fringilla, tempus posuere purus auctor. Maecenas ultrices dignissim diam,
                        quis ultrices odio.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia, ipsum sit amet mattis
                        porttitor, diam ipsum euismod turpis, eget aliquam felis mauris eget dolor. Vivamus suscipit ac
                        magna in tempor. Aliquam erat volutpat. Phasellus nulla nunc, facilisis id tempor at, volutpat
                        at tortor. Morbi ac porta purus. Proin dignissim elit in maximus vestibulum. Cras sit amet
                        pellentesque tortor, eu ultrices sapien. Proin placerat nulla in malesuada pretium. Maecenas
                        tempus sem eget velit fringilla, tempus posuere purus auctor. Maecenas ultrices dignissim diam,
                        quis ultrices odio.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Lorem ipsum</h3>
                    <img src="https://picsum.photos/id/250/300/300" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container features">
            <div class="row wow fadeIn">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Lorem ipsum</h3>
                    <img src="https://picsum.photos/id/240/300/300" class="img-fluid">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis
                        placerat
                        ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                </div>
                <div>
                    <h3 class="feature-title">Get in Touch!</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address" name="email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <input type="submit" class="btn btn-outline-secondary btn-block btn-lg" value="Send" name="">
                </div>
            </div>
        </div>
    </section>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis
                        placerat
                        ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis
                        placerat
                        ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <p>1640 Riverside Drive, Hill Valley, California
                        <br/>info@mywebsite.com
                        <br/>+ 01 234 567 88
                        <br/>+ 01 234 567 89</p>
                </div>
            </div>
            <div class="footer-copyright text-center">© 2020 Copyright: wongus.xyz</div>
        </div>
    </footer>
@endsection
