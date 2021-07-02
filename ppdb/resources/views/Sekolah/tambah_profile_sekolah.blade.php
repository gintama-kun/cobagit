@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Tambah Data Sekolah
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="animatedParent animateOnce">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <h4>SMKN 2 Kec.Guguak</h4>
                            <form class="form-material"action="/Admin/TambahDataSekolah" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <!-- Input -->
                                <div class="body">
                                    <h6>Data Sekolah</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="kepsek" type="text" class="form-control" placeholder="Nama Kepala Sekolah">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="operator" type="text" class="form-control" placeholder="Nama Operator">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="image" type="file" id="input-file-now" class="file-upload required" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="card-title">Akreditasi</div>
                                            <select class="custom-select select2" name="akreditasi" required>
                                                <option value="">Pilih</option>
                                                <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="card-title">Kurikulum</div>
                                            <select class="custom-select select2" name="kurikulum" required>
                                                <option value="">Pilih</option>
                                                <option value="kurikulum 2013">kurikulum 2013</option>
                                                <option value="kurikulum 2006">kurikulum 2006</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="card-title">Waktu</div>
                                            <select class="custom-select select2" name="waktu" required>
                                                <option value="">Pilih</option>
                                                <option value="Pagi">Pagi</option>
                                                <option value="Siang">Siang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="NPSN" type="text" class="form-control" placeholder="NPSN">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="card-title">Status</div>
                                            <select class="custom-select select2" name="status" required>
                                                <option value="">Pilih</option>
                                                <option value="Negeri">Negeri</option>
                                                <option value="Swasta">Swasta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="card-title">Bentuk Pendidikan</div>
                                            <select class="custom-select select2" name="bentuk_pendidikan" required>
                                                <option value="">Pilih</option>
                                                <option value="SMK">SMK</option>
                                                <option value="SMA">SMA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="status_kepemilikan" type="text" class="form-control" placeholder="Status Kepemilikan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            
                                            @foreach ((array)$sekolahs as $p)

                                            @if ($p)
                                            <a href="/Admin/Sekolah/Delete" class="btn btn-danger"> Delete
                                                <i class="icon-close2 text-danger-o text-danger"></i>
                                                
                                            </a>
                                            @endif
                                           
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                           
                                                <button type="submit" class="btn btn-primary"> Simpan <i class="icon-save"></i></button>
                                            
                                        </div>
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
@endsection