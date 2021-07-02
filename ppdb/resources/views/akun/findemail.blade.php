@extends('layouts.app')


@section('content')
@include('layouts.mobile_menu')
<div class="login-form-area edu-pd mg-b-15">
    <div class="container-fluid">
        <div class="row">
            
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div align="center" class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
                    
                    <div class="modal-area-button">
                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Email</a>
                        
                    </div>
                </div>
                <div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                            <br>
                            <form action="/data/cari/email" method="GET">
                               
                               

                                <div class="form-group-inner input-with-success">
                                    <div class="row">
                                       
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-select-list">
                                                <input type="text" name="cari" required class="form-control" placeholder="Cek Hasil .." value="{{ old('cari') }}">
                                               <br>
                                                <input type="submit" class="btn btn-primary" value="CARI">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                
                            <br/>

                         
                           
                         
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
       
    </div>
</div>
@endsection