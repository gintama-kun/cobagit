@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left bg-light height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row">
                <div class="col">
                    <h3 class="my-3">
                        <i class="icon icon-note-important"></i>
                        Profile Sekolah <span class="s-14"> <a class="btn btn-outline-primary btn-xs"
                                                            href="#"
                                                            target="_blank"> SMKN 2 Kec.Guguak</a> </span>
                    </h3>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid my-3">
        <div class="d-flex row">
            <div class="col-md-7">
                    <!-- Basic Validation -->
                    <div class="card mb-3 shadow no-b r-0">
                        <div class="card-header white">
                            <h6>SMKN 2 Kec.Guguak</h6>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" novalidate>
                                @foreach ($data as $data)
                                    
                              
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Kepala Sekolah</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend"><i class="icon icon-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $data->kepsek}}" readonly id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Operator</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend"><i class="icon icon-tap_and_play"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $data->operator}}" readonly id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Akreditasi</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend"><i class="icon-star"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $data->akreditasi}}" readonly id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Kurikulum</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend"><i class="icon-book-bookmark"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $data->kurikulum}}" readonly id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        
                                        <div class="input-group">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Waktu</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend"><i class="icon-timer"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{ $data->waktu}}" readonly id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">NPSN</label>
                                        <input type="text" value="{{ $data->NPSN}}" readonly class="form-control" id="validationCustom03"  required>
                                       
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom04">Status</label>
                                        <input type="text" value="{{ $data->status}}" readonly class="form-control" id="validationCustom04" required>
                                       
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom05">Bentuk Pendidikan</label>
                                        <input type="text" value="{{ $data->bentuk_pendidikan}}" readonly  class="form-control" id="validationCustom05"  required>
                                        
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">Status Kepemilikan</label>
                                        <input type="text" class="form-control" value="{{ $data->status_kepemilikan}}" readonly id="validationCustom03"  required>
                                       
                                    </div>
                                </div>
                                
                            </form>

                            
                        </div>
                    </div>
                   
                    
                </div>
            <div class="col-md-5" align="center">
               
                <hr>
                <img width="200px" src="{{ url('/images/sekolah/'.$data->image)}}"><br>
                <a href="https://www.google.com/maps/uv?hl=en&pb=!1s0x2fd55229288ae08f%3A0x5e9f21acedf350c8!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMyf7NwbtXCr6WlNf_TLvd47f7EIS7cM3aewu2y%3Dw160-h160-k-no!5sSMKN%202%20GUGUAK%20-%20Google%20Search&imagekey=!1e10!2sAF1QipMagTdDBpp8XO0sirbCxQMmiqOwjGHacDYh6FBz&sa=X&ved=2ahUKEwj3icaJh97oAhURXSsKHTLKAsUQoiowCnoECBkQBg" target="_blank"
                   class="btn btn-xs btn-primary">Gallery</a>
                <hr>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection