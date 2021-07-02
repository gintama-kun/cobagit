@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Dashboard
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
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-laptop_chromebook text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">Rekayasa Perangkat Lunak</div>
                                    @php
                                        $wl = App\Daftar::whereIn('jurusan', ['RPL'])->count();
                                        $total = App\Daftar::where('jurusan',['RPL'])->count();
                                        $percent = $wl / 5 * 100;
                                    @endphp
                                <h5 class="sc-counter mt-3">{{$wl}}</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 29%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="1"></div>
                            </div>
                        </div>
                    </div>
                      <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-paint-brush s-48"></span>
                                </div>
                                <div class="counter-title">Multimedia</div>
                                    @php
                                        $wl = App\Daftar::whereIn('jurusan', ['Multimedia'])->count();
                                        $total = App\Daftar::where('jurusan',['Multimedia'])->count();
                                        $percent = $wl / 5 * 100;
                                    @endphp
                                <h5 class="sc-counter mt-3">{{$wl}}</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-wifi s-36"></span>
                                </div>
                                <div class="counter-title">Teknik Komputer Dan jaringan</div>
                                    @php
                                        $wl = App\Daftar::whereIn('jurusan', ['TKJ'])->count();
                                        $total = App\Daftar::where('jurusan',['TKJ'])->count();
                                        $percent = $wl / 5 * 100;
                                    @endphp
                                <h5 class="sc-counter mt-3">{{$wl}}</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-line-chart s-48"></span>
                                </div>
                                <div class="counter-title">Akuntansi</div>
                                    @php
                                        $wl = App\Daftar::whereIn('jurusan', ['AKT'])->count();
                                        $total = App\Daftar::where('jurusan',['AKT'])->count();
                                        $percent = $wl / 5 * 100;
                                    @endphp
                                    
                                <h5 class="sc-counter mt-3">{{$wl}}</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div class="card-title">
                                <h5> Data Siswa</h5>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3">
                                    <div class="my-3 mt-4">
                                    <?php 
                                        $RPL = App\Daftar::whereIn('jurusan', ['RPL'])->count();
                                        $MM = App\Daftar::whereIn('jurusan', ['Multimedia'])->count();
                                        $TKJ = App\Daftar::whereIn('jurusan', ['TKJ'])->count();
                                        $Akuntansi = App\Daftar::whereIn('jurusan', ['AKT'])->count();
                                        $OTKP = App\Daftar::whereIn('jurusan', ['OTKP'])->count();
                                        ?>
                                        @if ($RPL > $MM)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Rekayasa Perangkat Lunak</span></h5>

                                    @elseif($RPL > $TKJ)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Rekayasa Perangkat Lunak</span></h5>

                                    @elseif($RPL > $Akuntansi)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Rekayasa Perangkat Lunak</span></h5>

                                    @elseif($RPL > $OTKP)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Rekayasa Perangkat Lunak</span></h5>

    
                                    @elseif ($MM > $RPL)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Multimedia</span></h5>
                                    
                                    @elseif ($MM > $TKJ)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Multimedia</span></h5>
                                    
                                        @elseif ($MM > $Akuntansi)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Multimedia</span></h5>
                                    
                                    @elseif ($MM > $OTKP)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Multimedia</span></h5>

                                    

                                    @elseif ($TKJ > $MM)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Teknik Komputer Dan Jaringan</span></h5>

                                    @elseif ($TKJ > $RPL)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Teknik Komputer Dan Jaringan</span></h5>

                                    
                                    @elseif ($TKJ > $Akuntansi)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Teknik Komputer Dan Jaringan</span></h5>
                                        
                                    @elseif ($TKJ > $OTKP)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Teknik Komputer Dan Jaringan</span></h5>
                                    
                                    @elseif ($Akuntansi > $MM)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Akuntansi</span></h5>

                                     @elseif ($Akuntansi > $TKJ)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Akuntansi</span></h5>
                                    
                                    @elseif ($Akuntansi > $RPL)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Akuntansi</span></h5>

                                    @elseif ($Akuntansi > $OTKP)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Akuntansi</span></h5>
                                    
                                    @elseif ($OTKP > $RPL)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Otomatisasi Tata Kelola Perkantoran</span></h5>
                                    
                                    @elseif ($OTKP > $TKJ)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Otomatisasi Tata Kelola Perkantoran</span></h5>
                                    
                                    @elseif ($OTKP > $MM)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Otomatisasi Tata Kelola Perkantoran</span></h5>
                                    
                                     @elseif ($OTKP > $Akuntansi)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Otomatisasi Tata Kelola Perkantoran</span></h5>


                                    @elseif ($RPL == $MM)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Sebanding</span></h5>
                                    
                                     @elseif ($RPL == $TKJ)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Sebanding</span></h5>
                                    
                                    @elseif ($RPL == $Akuntansi)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Sebanding</span></h5>

                                    @elseif ($RPL == $OTKP)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Sebanding</span></h5>

                                    @elseif ($MM == $TKJ)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Sebanding</span></h5>

                                    @elseif ($MM == $Akuntansi)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Sebanding</span></h5>
                                    
                                    @elseif ($MM == $OTKP)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Sebanding</span></h5>
                                    
                                    @elseif ($TKJ == $RPL)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Sebanding</span></h5>

                                    @elseif ($TKJ == $Aakuntansi)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Sebanding</span></h5>

                                    @elseif ($TKJ == $OTKP)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Sebanding</span></h5>

                                    @elseif ($Akuntansi == $OTKP)
                                        <p>Berdasarkan Grafik Tersebut Maka:</p>
                                        <h5>Populer <span class="green-text"> Sebanding</span></h5>

                                    @endif
                                    </div>
                                    <div class="row no-gutters bg-light r-3 p-2 mt-5">
                                        <div class="col-md-6 b-r p-3">
                                                <h5>Kepala Sekolah</h5>
                                                <span>Drs.H Deri Nofia </span>
                                        </div>
                                        <div class="col-md-6 p-3">
                                            <div class="">
                                                @php
                                                $status = App\Daftar::whereIn('status', ['diterima'])->count();
                                                @endphp
                                                @if ($status <= 50)
                                                {{-- <h5>Costs <span class="amber-text">+87.4</span></h5>
                                                <span>$900.09</span> --}}

                                                    <h5>Terdaftar <span class="red-text">{{$status}}</span></h5>
                                                        <span>Siswa</span>
                                                @elseif ($status >= 200)

                                                <h5>Terdaftar <span class="amber-text">{{$status}}</span></h5>
                                                <span>Siswa</span>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9" style="height: 350px">
                                    <canvas data-chart="line" data-dataset="[
                                                            [
                                                               <?php 
                                                                $RPL = App\Daftar::whereIn('jurusan', ['RPL'])->count();
                                                                echo $RPL;
                                                                ?>,
                                                                 <?php 
                                                                $MM = App\Daftar::whereIn('jurusan', ['Multimedia'])->count();
                                                                echo $MM;
                                                                ?>,
                                                                 <?php 
                                                                $TKJ = App\Daftar::whereIn('jurusan', ['TKJ'])->count();
                                                                echo $TKJ;
                                                                ?>,
                                                                 <?php 
                                                                $Akuntansi = App\Daftar::whereIn('jurusan', ['Akuntansi'])->count();
                                                                echo $Akuntansi;
                                                                ?>,
                                                                 <?php 
                                                                $OTKP = App\Daftar::whereIn('jurusan', ['OTKP'])->count();
                                                                echo $OTKP;
                                                                ?>
                                                            ],
                                                            
                                                
                                                            ]" data-labels="['RPL', 'MM', 'TKJ', 'AKT', 'OTKP']"
                                            data-dataset-options="[
                                                            {   label:'Grafik Siswa SMKN 2 Kec.Guguak TP 2020/2021',
                                                                fill: true,
                                                                backgroundColor: 'rgba(50,141,255,.2)',
                                                                borderColor: '#328dff',
                                                                pointBorderColor: '#328dff',
                                                                pointBackgroundColor: '#fff',
                                                                pointBorderWidth: 2,
                                                                borderWidth: 1,
                                                                borderJoinStyle: 'miter',
                                                                pointHoverBackgroundColor: '#328dff',
                                                                pointHoverBorderColor: '#328dff',
                                                                pointHoverBorderWidth: 1,
                                                                pointRadius: 3,
                                                                
                                                            },
                                                            {  
                                                                label:'Wordpress',
                                                                fill: false,
                                                                borderDash: [5, 5],
                                                                backgroundColor: 'rgba(87,115,238,.3)',
                                                                borderColor: '#2979ff',
                                                                pointBorderColor: '#2979ff',
                                                                pointBackgroundColor: '#2979ff',
                                                                pointBorderWidth: 2,
                                                
                                                                borderWidth: 1,
                                                                borderJoinStyle: 'miter',
                                                                pointHoverBackgroundColor: '#2979ff',
                                                                pointHoverBorderColor: '#fff',
                                                                pointHoverBorderWidth: 1,
                                                                pointRadius: 3,
                                                                
                                                            }
                                                            ]"
                                            data-options="{
                                                                    maintainAspectRatio: false,
                                                                    legend: {
                                                                        display: true
                                                                    },
                                                        
                                                                    scales: {
                                                                        xAxes: [{
                                                                            display: true,
                                                                            gridLines: {
                                                                                zeroLineColor: '#eee',
                                                                                color: '#eee',
                                                                            
                                                                                borderDash: [5, 5],
                                                                            }
                                                                        }],
                                                                        yAxes: [{
                                                                            display: true,
                                                                            gridLines: {
                                                                                zeroLineColor: '#eee',
                                                                                color: '#eee',
                                                                                borderDash: [5, 5],
                                                                            }
                                                                        }]
                                                        
                                                                    },
                                                                    elements: {
                                                                        line: {
                                                                        
                                                                            tension: 0.4,
                                                                            borderWidth: 1
                                                                        },
                                                                        point: {
                                                                            radius: 2,
                                                                            hitRadius: 10,
                                                                            hoverRadius: 6,
                                                                            borderWidth: 4
                                                                        }
                                                                    }
                                                                }">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-work s-48"></span>
                                </div>
                                <div class="counter-title">Otomatisasi Tata Kelola Perkantoran</div>
                                    @php
                                        $wl = App\Daftar::whereIn('jurusan', ['OTKP'])->count();
                                        $totals = App\Daftar::where('jurusan',['OTKP'])->count();
                                        $percent = $wl / 5 * 100;
                                    @endphp
                                <h5 class="sc-counter mt-3">{{$wl}}</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
            </div>
            <!--Today Tab End-->
            <!--Yesterday Tab Start-->

            <!--Yesterday Tab Start-->
        </div>
    </div>
</div>
@endsection