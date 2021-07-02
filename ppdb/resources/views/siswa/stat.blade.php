@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left">
<header class="blue accent-3 relative nav-sticky">
    <div class="container-fluid text-white">
        <div class="row p-t-b-10 ">
            <div class="col">
                <h4>
                    <i class="icon-tab"></i>
                    Hasil Seleksi PPDB
                </h4>
            </div>
        </div>

    </div>
</header>
<div class="container-fluid pt-5">
    <div class="text-center p-5">
        <i class="icon-note-important s-64 text-primary"></i>
        <h4 class="my-3">Apapun hasilnya</h4>
        <p>itulah yang terbaik,,semangat!!</p>
       
        <button type="button" class="btn btn-primary shadow btn-lg" data-toggle="modal" data-target="#posted">
            <i class="icon-fingerprint mr-2 "></i>Cek</a>
          </button>



          <div class="modal fade" id="posted" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
             
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Token</h5>
                  </div>
                  <div class="modal-body">
                    <div class="panel panel-primary">
                      
                        <div class="panel-body">
                     
                         
                            <form action="/data/cari" method="GET">
                               
                               

                                <div class="form-group-inner input-with-success">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Kode/Token Pendaftaran</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-select-list">
                                                <input type="text" name="cari" required class="form-control" placeholder="Cek Hasil .." value="{{ old('cari') }}">
                                               <br>
                                                <input type="submit" class="btn btn-primary" value="Lihat">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                         
                            <a href="/siswa/data">Lupa Kode?</a>
                          
                    
                        </div>
                      </div>
                  </div>
                </div>
              
            </div>
          </div>
        
  
    </div>
</div>
</div>
@endsection