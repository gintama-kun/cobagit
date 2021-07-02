@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-tab"></i>
                        Promosi Sekolah
                    </h4>
                </div>
            </div>

        </div>
    </header>
    <div class="container-fluid pt-5">
        <div class="text-center p-5">
            <i class="icon-note-important s-64 text-primary"></i>
            <h4 class="my-3">Upload Poster</h4>
            <p>Buat Promosi</p>
           
            <button type="button" class="btn btn-primary shadow btn-lg" data-toggle="modal" data-target="#posted">
                <i class="icon-plus-circle mr-2 "></i>Tambah Data</a>
              </button>



              <div class="modal fade" id="posted" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                 
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload</h5>
                      </div>
                      <div class="modal-body">
                        <div class="panel panel-primary">
                          
                            <div class="panel-body">
                         
                              @if ($message = Session::get('success'))
                              <div class="alert alert-success alert-block">
                                  <button type="button" class="close" data-dismiss="alert">×</button>
                                      <strong>{{ $message }}</strong>
                              </div>
                              <img src="uploads/{{ Session::get('file') }}">
                              @endif
                        
                              @if (count($errors) > 0)
                                  <div class="alert alert-danger">
                                      <strong>Whoops!</strong> There were some problems with your input.
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif
                        
                              <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <div class="row">
                        
                                      <div class="col-md-6">
                                          <input type="file" name="file" class="form-control">
                                      </div>
                                  
                                    <div class="col-md-6">
                                    
                                        @foreach ((array)$file_uploads as $p)

                                        @if ($p)
                                        <a href="/file-upload/delete" class="btn btn-danger"> Delete
                                            <i class="icon-close2 text-danger-o text-danger"></i>
                                            
                                        </a>
                                        @endif
                                       
                                        @endforeach
                                        
                                      
                                        <button type="submit" class="btn btn-success">Upload</button>
                                       
                                      
                                       
                                     
                                  </div>
                                   
                         
                                  </div>
                              </form>
                        
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