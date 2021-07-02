@extends('layouts.dash')
@section('content')
    
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Kalender Kegiatan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
  <div class="calender-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="response"></div>
                    <div id='calendar'></div>  
                </div>
            </div>
        </div>
    </div>
</div>
 
 
</body>

<script>
    $(document).ready(function () {
           
          var SITEURL = "{{url('/')}}";
          $.ajaxSetup({
            headers: {
                
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                
            }
          });
   
          var calendar = $('#calendar').fullCalendar({
              
              editable: true,
              eventLimit: true,
              events: SITEURL + "/fullcalendareventmaster",
              displayEventTime: true,
              editable: true,
              eventRender: function (event, element, view) {
                  if (event.allDay === 'true') {
                      event.allDay = true;
                  } else {
                      event.allDay = false;
                  }
              },
              selectable: true,
              selectHelper: true,
              select: function (start, end, allDay) {
                  var title = prompt('Event Title:');
   
                  if (title) {
                      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
   
                      $.ajax({
                          url: SITEURL + "/fullcalendareventmaster/create",
                          data: 'title=' + title + '&start=' + start + '&end=' + end,
                          type: "POST",
                          success: function (data) {
                              displayMessage("Added Successfully");
                          }
                      });
                      calendar.fullCalendar('renderEvent',
                              {
                                  title: title,
                                  start: start,
                                  end: end,
                                  allDay: allDay
                              },
                      true
                              );
                  }
                  calendar.fullCalendar('unselect');
              }
          });
    });
   
//     function displayMessage(message) {
//       $(".response").html("
//   "+message+"");
//       setInterval(function() { $(".success").fadeOut(); }, 1000);
//     }
  </script>
@endsection