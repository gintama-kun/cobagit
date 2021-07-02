@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left bg-light height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row">
                <div class="col">
                    <h3 class="my-3">
                        <i class="icon icon-calendar"></i>
                        Kalender <span class="s-14"></span>
                    </h3>
                </div>
            </div>
        </div>
    </header>

    <div class="content-wrapper animatedParent animateOnce">
        <div class="container">
            <section class="paper-card">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Kalender Sekolah</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="response"></div>
                                <div id='calendars'></div> 
                            </div>
                           </div>
                      </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection