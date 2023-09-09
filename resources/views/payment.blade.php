@extends('layouting.payment.master')

@section('title', 'Payment')

@section('content')

    <div class="container mt-4 p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white pt-3 px-md-4 px-2">

        </nav>

        <div class="row px-md-4 px-2 pt-4">
            <div class="col-lg-8">
                <p class="pb-2 fw-bold">Alamat Pengiriman</p>
                <div class="card">
                    <div>
                        @foreach ($test as $data)
                            <div class="table-responsive px-md-4 px-2 pt-3">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="ps-3 d-flex flex-column justify-content">
                                                        <p class="fw-bold">{{ $data->Nama_Barang }}</p> <small
                                                            class=" d-flex">
                                                            <span class=" text-muted">Color:</span> <span
                                                                class=" fw-bold">Red/White</span> </small> <small
                                                            class=""> <span class=" text-muted">Size:</span> <span
                                                                class=" fw-bold">L</span> </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <p class="pe-3"><span class="red">{{ $data->Sub_Total }}</span></p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"> <span
                                                        class="pe-3 text-muted">Quantity</span>
                                                    <span class="pe-3"> <input class="ps-2" type="number"
                                                            value="{{ $data->Kuantitas }}"></span>
                                                    <div class="round"> <span class=""> L </span> </div>
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
            <form action="">
                @csrf
                <div class="col-lg-4 payment-summary">
                    <p class="fw-bold pt-lg-0 pt-4 pb-2">Rincian Pembayaran</p>
                    <div class="card px-md-3 px-2 pt-4">
                        <div class="unregistered mb-4"> <span class="py-1">unregistered account</span> </div>
                        <div class="d-flex justify-content-between pb-3"> <small class="text-muted">Transaction code</small>
                            <p class="">VC115665</p>
                        </div>
                        <div class="d-flex justify-content-between b-bottom">
                            <input type="radio" name="Metod_Pembayaran" id="">COD
                            <input type="radio" name="Metod_Pembayaran" id="">Gopay
                        </div>
                        @foreach ($pesanan as $item)
                            <div class="d-flex flex-column b-bottom">
                                <div class="d-flex justify-content-between py-3"> <small class="text-muted">Total Harga</small>
                                    <p>{{ $item->Total }}</p>
                                </div>
                                <div class="d-flex justify-content-between pb-3"> <small class="text-muted">Ongkir</small>
                                    <p>{{ $item->Total_Beban }}</p>
                                </div>
                                <div class="d-flex justify-content-between"> <small class="text-muted">Total </small>
                                    <p>{{ $item->Total + $item->Total_Beban }}</p>
                                </div>
                            </div>
                            @endforeach
                        <a href="/thanks" class="btn btn-upper btn-primary outer-left-xs mt-3"
                            style="margin-top: 20px">Bayar</a>
                        <br>
                        <br>
                    </div>
                </div>
            </form>



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
@endsection
