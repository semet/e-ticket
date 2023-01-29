<x-layouts.main>
    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="payment-book">
                        <div class="booking-box">
                            <div class="customer-information mb-4">
                                <h3 class="border-b pb-2 mb-2">Informasi Pemumpang</h3>
                                <form class="mb-2">
                                    @if(request()->get('bookingType') == 'quantity')
                                        @for($i = 0; $i <= (int)request()->get('quantity') - 1; $i++)
                                        <h5>Penumpang {{ $i+1 }}</h5>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-2">
                                                    <label>NIK</label>
                                                    <input type="text" placeholder="NIK">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-2">
                                                    <label>Nama</label>
                                                    <input type="text" placeholder="Nama Lengkap">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-2">
                                                    <label>Email</label>
                                                    <input type="text" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        @endfor
                                    @else
                                        <h5>Detail Penumpang</h5>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-2">
                                                    <label>NIK</label>
                                                    <input type="text" placeholder="NIK">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-2">
                                                    <label>Nama</label>
                                                    <input type="text" placeholder="Nama Lengkap">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-2">
                                                    <label>Email</label>
                                                    <input type="text" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </form>
                            </div>
                            <div class="customer-information mb-4 d-flex align-items-center bg-grey rounded p-4">
                                <i class="fa fa-grin-wink rounded fs-1 bg-theme white p-3 px-4"></i>
                                <div class="customer-info ps-4">
                                    <h6 class="mb-1">Good To Know:</h6>
                                    <small>Free Cancellation until 14:00 pn 11 Feb 2022</small>
                                </div>
                            </div>
                            <div class="customer-information card-information">
                                <h3 class="border-b pb-2 mb-2">Lanjutkan ke pembayaran?</h3>

                                <button class="btn btn-primary">Bayar sekarang</button>

                                <div class="booking-terms border-t pt-3 mt-3">
                                    <form class="d-lg-flex align-items-center">
                                        <div class="form-group mb-2 w-75">
                                            <input type="checkbox"> By continuing, you agree to the <a href="#">Terms and Conditions.</a>
                                        </div>
                                        <a href="#" class="nir-btn float-lg-end w-25">CONFIRM BOOKING</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 ps-ld-4">
                    <x-shared.booking-sidebar/>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
