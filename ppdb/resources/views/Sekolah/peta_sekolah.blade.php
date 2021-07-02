@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Peta
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-home2"></i>Home</a>
                    </li>
                    
                </ul>
                
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <!--Today Tab Start-->
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row my-3">
                    <div class="col-md-3">
                        
                    </div>
                      <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div class="card-title">
                                <h5> Peta SMKN 2 Kec.Guguak</h5>
                            </div>
                            

                                <div class="box-body">
                                    <table id="example2" class="table table-bordered table-hover "
                                   data-options='{
                                        "scrollY": true,
                                        "scrollX": true
                                    }'>
                                <thead>
                                <tr>
                                    <th colspan="27" style="background-color:#85C1E9; color:white;">Peta SMKN 2 Kec.Guguak</th>
                                </tr>
                                
                                <tr>
                                    
                                   
                                    <th>SMKN 2 Kec.Guguak</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                       
                                    <tr>
                                        
                                        <td>
                                            <div class="map-responsive"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.810013097138!2d100.53242711426975!3d-0.11692023550004788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd55229288ae08f%3A0x5e9f21acedf350c8!2sSMK%20STATE%202%20KEC.GUGUAK!5e0!3m2!1sen!2s!4v1586361531881!5m2!1sen!2s" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                            </div>
                                            </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>
                            {{-- <div class="card-footer white">
                                <a href="#" class="btn btn-outline-primary btn-xs">Tambah Data</a>
                                <a href="#" class="btn btn-outline-danger btn-xs">Delete All</a>
                            </div> --}}
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
            </div>
        </div>
    </div>
</div>
@endsection