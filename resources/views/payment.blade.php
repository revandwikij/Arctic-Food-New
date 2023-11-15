@extends('layouting.payment.master')

@section('title', 'Payment')

@section('content')

    <div class="container mt-4 p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white pt-3 px-md-4 px-2">
            <a href="/hapuspayment" class="btn btn-secondary">Back</a>
        </nav>

        <div class="row px-md-4 px-2 pt-4">
            <div class="col-lg-8">
                <p class="pb-2 fw-bold">Alamat Pengiriman</p>
                <div class="card">
                    <div>
                        @foreach ($alamat as $data)
                            <div class="table-responsive px-md-4 px-2 pt-3">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ps-3 d-flex flex-column justify-content">
                                                        <p class="fw-bold">{{ $data->Label }}</p> <small class=" d-flex">
                                                            <span class=" text-muted">Nama Penerima :</span> <span
                                                                class=" fw-bold"> {{ $data->Nama_Penerima }}</span> </small>
                                                        <small class=""> <span class=" text-muted">No HP:</span> <span
                                                                class=" fw-bold">{{ $data->No_Hp }}</span> </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <p class="pe-3"><span class="red">{{ $data->Kota }}</span></p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <span class="pe-3 text-muted">Alamat
                                                        Lengkap</span>
                                                    <span class=" fw-bold">{{ $data->Alamat_Lengkap }}</span>

                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @foreach ($datapesan as $item)
            {{-- <form action="/bayar/{{$item->Id_Pesanan}}" method="POST"> --}}
            @csrf
            <div class="col-lg-4 payment-summary">
                <p class="fw-bold pt-lg-0 pt-4 pb-2">Rincian Pembayaran</p>
                <div class="card px-md-3 px-2 pt-4">
                    <div class="unregistered mb-4"> <span class="py-1">unregistered account</span> </div>
                    <div class="d-flex justify-content-between pb-3"> <small class="text-muted">Transaction code</small>
                        <p class="">VC115665</p>
                    </div>
                    {{-- <div class="d-flex justify-content-between b-bottom">
                          <input type="radio" id="cod" name="Metod_Pembayaran" value="COD">
                          <label for="html">COD</label>
                          <input type="radio" id="gopay" name="Metod_Pembayaran" value="GoPay">
                          <label for="css">GoPay</label>
                        </div> --}}

                    <div class="d-flex flex-column b-bottom">
                        <div class="d-flex justify-content-between py-3"> <small class="text-muted">Total Harga</small>
                            <p>Rp. {{ number_format($item->Total) }}</p>
                        </div>
                        <div class="d-flex justify-content-between pb-3"> <small class="text-muted">Ongkir</small>
                            <p>Rp. {{ number_format($item->Total_Shipping) }}</p>
                        </div>
                        <div class="d-flex justify-content-between"> <small class="text-muted">Total </small>
                            <p>Rp. {{ number_format($item->Total + $item->Total_Shipping) }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between pb-3" id="countdown"></div>

                    <button id="pay-button"
                        class="btn btn-upper btn-primary outer-left-xs mt-3"style="margin-top: 20px">Bayar</button>
                    <br>
                    <br>
                </div>
            </div>
        @endforeach



    </div>
    </div>




    {{-- <section style="background-color: #eee;">
    <div class="container py-5">
      <div class="card">
        <div class="card-body">
          <div class="row d-flex justify-content-center pb-5">
            <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
              <div class="py-4 d-flex flex-row">
                <h5><span class="far fa-check-square pe-2"></span><b>ELIGIBLE</b> |</h5>
                <span class="ps-2">Pay</span>
              </div>
              <h4 class="text-success">$85.00</h4>
              <h4>Diabetes Pump & Supplies</h4>
              <div class="d-flex pt-2">
                <div>
                  <p>
                    <b>Insurance Responsibility <span class="text-success">$71.76</span></b>
                  </p>
                </div>
                <div class="ms-auto">
                  <p class="text-primary">
                    <i class="fas fa-plus-circle text-primary pe-1"></i>Add insurance card
                  </p>
                </div>
              </div>
              <p>
                Insurance claims and all necessary dependencies will be submitted to your
                insurer for the coverred portion of this order
              </p>
              <div class="rounded d-flex" style="background-color: #f8f9fa;">
                <div class="p-2">Aetna-Open Access</div>
                <div class="ms-auto p-2">OAP</div>
              </div>
              <hr />
              <div class="pt-2">
                <div class="d-flex pb-2">
                  <div>
                    <p>
                      <b>Patient Balance <span class="text-success">$13.24</span></b>
                    </p>
                  </div>
                  <div class="ms-auto">
                    <p class="text-primary">
                      <i class="fas fa-plus-circle text-primary pe-1"></i>Add payment card
                    </p>
                  </div>
                </div>
                <p>
                  This is an estimate for the portion of your order (not covered by
                  insurance) due today . once insurance finalizes their review refunds
                  and/or balances will reconcile automatically.
                </p>
                <form class="pb-3">
                  <div class="d-flex flex-row pb-3">
                    <div class="d-flex align-items-center pe-2">
                      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1"
                        value="" aria-label="..." checked />
                    </div>
                    <div class="rounded border d-flex w-100 p-3 align-items-center">
                      <p class="mb-0">
                        <i class="fab fa-cc-visa fa-lg text-primary pe-2"></i>Visa Debit
                        Card
                      </p>
                      <div class="ms-auto">************3456</div>
                    </div>
                  </div>

                  <div class="d-flex flex-row">
                    <div class="d-flex align-items-center pe-2">
                      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2"
                        value="" aria-label="..." />
                    </div>
                    <div class="rounded border d-flex w-100 p-3 align-items-center">
                      <p class="mb-0">
                        <i class="fab fa-cc-mastercard fa-lg text-dark pe-2"></i>Mastercard
                        Office
                      </p>
                      <div class="ms-auto">************1038</div>
                    </div>
                  </div>
                </form>
                <input type="button" value="Proceed to payment" class="btn btn-primary btn-block btn-lg" />
              </div>
            </div>

            <div class="col-md-5 col-xl-4 offset-xl-1">
              <div class="py-4 d-flex justify-content-end">
                <h6><a href="#!">Cancel and return to website</a></h6>
              </div>
              <div class="rounded d-flex flex-column p-2" style="background-color: #f8f9fa;">
                <div class="p-2 me-3">
                  <h4>Order Recap</h4>
                </div>
                <div class="p-2 d-flex">
                  <div class="col-8">Contracted Price</div>
                  <div class="ms-auto">$186.76</div>
                </div>
                <div class="p-2 d-flex">
                  <div class="col-8">Amount toward deductible</div>
                  <div class="ms-auto">$0.00</div>
                </div>
                <div class="p-2 d-flex">
                  <div class="col-8">Coinsurance( 0% )</div>
                  <div class="ms-auto">+ $0.00</div>
                </div>
                <div class="p-2 d-flex">
                  <div class="col-8">Copayment</div>
                  <div class="ms-auto">+ $40.00</div>
                </div>
                <div class="border-top px-2 mx-2"></div>
                <div class="p-2 d-flex pt-3">
                  <div class="col-8">Total Deductible, Coinsurance, and Copay</div>
                  <div class="ms-auto">$40.00</div>
                </div>
                <div class="p-2 d-flex">
                  <div class="col-8">
                    Maximum out-of-pocket on Insurance Policy (not reached)
                  </div>
                  <div class="ms-auto">$6500.00</div>
                </div>
                <div class="border-top px-2 mx-2"></div>
                <div class="p-2 d-flex pt-3">
                  <div class="col-8">Insurance Responsibility</div>
                  <div class="ms-auto"><b>$71.76</b></div>
                </div>
                <div class="p-2 d-flex">
                  <div class="col-8">
                    Patient Balance <span class="fa fa-question-circle text-dark"></span>
                  </div>
                  <div class="ms-auto"><b>$71.76</b></div>
                </div>
                <div class="border-top px-2 mx-2"></div>
                <div class="p-2 d-flex pt-3">
                  <div class="col-8"><b>Total</b></div>
                  <div class="ms-auto"><b class="text-success">$85.00</b></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
    <br><br><br>



    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    // alert("payment success!");
                    window.location.href = '/thanks'
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>

    <script>
        var batasWaktu = new Date('{{ $datapesan[0]->waktu_kadaluarsa }}'); // Ambil batas waktu dari PHP
        function updateCountdown() {
            var now = new Date();
            var selisihWaktu = batasWaktu - now;

            var detik = Math.floor((selisihWaktu / 1000) % 60);
            var menit = Math.floor((selisihWaktu / 1000 / 60) % 60);
            var jam = Math.floor((selisihWaktu / (1000 * 60 * 60)) % 24);
            var hari = Math.floor(selisihWaktu / (1000 * 60 * 60 * 24));

            var countdown = document.getElementById('countdown');

            if (selisihWaktu <= 0) {
                countdown.innerHTML = "waktu seep";
                return;
            }

            var countdownText = "waktu tersisa : ";
            countdownText += (hari > 0 ? hari + " hari, " : "")
            countdownText += (jam > 0 ? jam + " jam, " : "")
            countdownText += (menit > 0 ? menit + " menit, " : "")
            countdownText += detik + " detik"

            countdown.innerHTML = countdownText;
        }

        // Memperbarui waktu mundur setiap detik
        setInterval(updateCountdown, 1000);

        // Memastikan waktu mundur diperbarui saat halaman dimuat
        updateCountdown();
    </script>



@endsection
