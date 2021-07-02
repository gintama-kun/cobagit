@extends('layouts.dash')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<style>


</style>
@include('layouts.mobile_menu')
<!-- Mobile Menu end -->
 
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject"><b>Data Siswa SMKN 2 Kec.Guguak</b></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp graph-rp-dl">
                                    <p>Tahun Pelajaran 2019/2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="extra-area-chart" style="height: 600px;" align="center"><canvas id="myChart"></canvas>
                    <img src="{{ asset('/new/smk.png')}}" style="height:150px;width:20%" alt=""></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Rekayasa Perangkat Lunak</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash"></div>
                        </li>
                        @php
                            $wl = App\formulirs::whereIn('jurusan', ['RPL'])->count();
                            $total = App\formulirs::where('jurusan',['RPL'])->count();
                            $percent = $wl / 5 * 100;
                        @endphp
                        <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success">{{$total}}</span></li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Multimedia</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash2"></div>
                        </li>
                        @php
                            $wl = App\formulirs::whereIn('jurusan', ['Multimedia'])->count();
                            $total = App\formulirs::where('jurusan',['Multimedia'])->count();
                            $percent = $wl / 5 * 100;
                        @endphp
                        <li class="text-right graph-two-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-purple">{{$total}}</span></li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Teknik Komputer Dan Jaringan</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        @php
                            $wl = App\formulirs::whereIn('jurusan', ['TKJ'])->count();
                            $total = App\formulirs::where('jurusan',['TKJ'])->count();
                            $percent = $wl / 5 * 100;
                        @endphp
                        <li class="text-right graph-three-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-dark">{{$total}}</span></li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs table-dis-n-pro tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Otomatisasi Tata Kelola Perkantoran</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash4"></div>
                        </li>
                        @php
                            $wl = App\formulirs::whereIn('jurusan', ['OTKP'])->count();
                            $totals = App\formulirs::where('jurusan',['OTKP'])->count();
                            $percent = $wl / 5 * 100;
                        @endphp
                        <li class="text-right graph-four-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-dark">{{$totals}}</span></li>
                        </li>
                    </ul>
                </div> <br>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Akuntansi</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        @php
                            $wl = App\formulirs::whereIn('jurusan', ['AKT'])->count();
                            $total = App\formulirs::where('jurusan',['AKT'])->count();
                            $percent = $wl / 5 * 100;
                        @endphp
                        <li class="text-right graph-rp-dl"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-dark">{{$total}}</span>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="traffic-analysis-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu">
                    <i class="fa fa-facebook"></i>
                    <div class="social-edu-ctn">
                        <h3>50k Likes</h3>
                        <p>You main list growing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu twitter-cl res-mg-t-30 table-mg-t-pro-n">
                    <i class="fa fa-twitter"></i>
                    <div class="social-edu-ctn">
                        <h3>30k followers</h3>
                        <p>You main list growing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <i class="fa fa-linkedin"></i>
                    <div class="social-edu-ctn">
                        <h3>7k Connections</h3>
                        <p>You main list growing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu youtube-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <i class="fa fa-youtube"></i>
                    <div class="social-edu-ctn">
                        <h3>50k Subscribers</h3>
                        <p>You main list growing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


                    <script>

                            var ctx = document.getElementById("myChart").getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'pie',
                                            data: {
                                            labels: ["proses", "diterima",'ditolak'],
                                            datasets: [{
                                                label: '',
                                                data: [
                                                <?php 
                                                $a = DB::table('formulirs')
                                                ->where('status',"proses")->count();
                                                echo $a;
                                                ?>, 
                                                <?php 
                                                $b = DB::table('formulirs')
                                                ->where('status',"diterima")->count();
                                                echo $b;
                                                ?>, 
                                                <?php 
                                                $c = DB::table('formulirs')
                                                ->where('status',"ditolak")->count();
                                                echo $c;
                                                ?>
                                                
                                            



                                                ],
                                                backgroundColor: [
                                                "#00BFFF",
                                                "#f17e5d",
                                                "#c56cf0",
                                                "#cccccc"
                                                ],
                                                borderColor: [
                                                "#6bd098",
                                                "#f17e5d",
                                                "#c56cf0",
                                                "#cccccc"
                                                ],
                                                borderWidth: 1
                                            }]
                                            },
                                            options: {
                                            scales: {
                                                yAxes: [{
                                                ticks: {
                                                    beginAtZero:true
                                                }
                                                }]
                                            }
                                            }
                                        });


                    </script>

@endsection