<footer class="pt-20 pb-4"  style="background-image: url({{ asset('assets/images/background_pattern.png') }});">
    <div class="section-shape top-0" style="background-image: url({{ asset('assets/images/shape8.png') }});"></div>
    <!-- Instagram starts -->
    <div class="insta-main pb-10">
        <div class="container">
            <div class="insta-inner">
                <div class="row attract-slider">
                    @foreach($pictures as $picture)
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image rounded">
                            <a href="{{ $picture->image }}" data-lightbox="{{ $picture->destination->name }}" data-title="{{ $picture->destination->name }}">
                                <img src="{{ $picture->image }}" alt="{{ $picture->destination->name }}">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram ends -->
    <div class="footer-upper pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 pe-4">
                    <div class="footer-about">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" width="200px" alt="{{ config('app.name') }}">
                        <p class="mt-3 mb-3 white">
                            Website Pemesanan tiket Elektronik (E-Ticket) Bolamlombok.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <ul>
                            <li class="white"><strong>Location:</strong> JL SWAKARYA NO.46KEKALIK JAYA SEKARBELAKOTA MATARAM NUSA TENGGARA BARAT</li>
                            <li class="white"><strong>Email:</strong> bolamlombok@gmail.com</li>
                            <li class="white"><strong>Website:</strong> <a href="https://bolamlombok.com">bolamlombok.com</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
<div class="footer-copyright">
        <div class="container">
            <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                <div class="copyright-text">
                    <p class="m-0 white">{{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
                </div>
                <div class="social-links">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</footer>
