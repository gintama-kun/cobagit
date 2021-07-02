@extends('layouts.dash')
@section('content')
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="charts-single-pro responsive-mg-b-30">
            <div class="alert-title">
                <h2>Pie Chart</h2>
                <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
            </div>
            <div id="pie-chart">
                <canvas id="piechart"></canvas>
            </div>
        </div>
    </div>

     <!-- Charts JS
		============================================ -->
        <script src="{{ asset ('kiaalap-master/js/charts/Chart.js')}}"></script>
        <script src="{{ asset ('kiaalap-master/js/charts/rounded-chart.js')}}"></script>
@endsection