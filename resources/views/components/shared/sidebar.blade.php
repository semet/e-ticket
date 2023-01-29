<div class="col-lg-4">
    <div class="sidebar-sticky">
        <div class="list-sidebar">
            <div class="author-news border-all box-shadow p-4 rounded">
                <div class="author-news-content">

                    <div class="author-content">
                        <h3 class="title"><a href="#">Pilih Tanggal dan Waktu</a></h3>
                        <form action="{{ route('booking') }}" method="GET">
                            <div class="my-2">
                                <label for="bookingDate" class="form-label text-white">Tanggal</label>
                                <input type="date" name="bookingDate" id="bookingDate" class="form-control form-control-sm">
                            </div>
                            <div class="my-2">
                                <label for="date" class="form-label text-white">Jam</label>
                                <select name="time" id="time" class="form-select">
                                    <option value="">--Pilih Jam--</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="my-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bookingType" id="quantity" value="quantity" checked>
                                    <label class="form-check-label text-white" for="quantity">Quantity</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bookingType" id="paket" value="paket">
                                    <label class="form-check-label text-white" for="paket">Paket</label>
                                </div>
                            </div>
                            <div class="my-2" id="passengerQuantity">
                                <label for="date" class="form-label text-white">Quantity</label>
                                <input type="number" name="quantity" class="form-control form-control-sm" min="1" max="8" value="1" />
                            </div>
                            <div class="my-2">
                                <button class="btn btn-primary" type="submit">
                                    Check <i class="fas fa-filter"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function () {
            $('input[type=radio][name=bookingType]').change(function(e) {
                if(e.target.value !== 'quantity')
                {
                    $('#passengerQuantity').hide()
                }else{
                    $('#passengerQuantity').show();
                }
            })
        });
    </script>
@endpush
