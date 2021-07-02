<!DOCTYPE html>
<html>
 <head>
   <title>PPDB SMK Negeri 2 Kec.Guguak</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
    border-color:#4A235A;
    border-style: dotted;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
   body 
   {
   background-color:#A9CCE3;
  
   }
   
  </style>
 </head>
 <body>
  <br />
  <br />
  <br />
  <div class="container box">
   <h3 align="center">Hubungi Admin</h3><br />
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" action="{{url('sendemail/send')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Nama</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Pesan</label>
     <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
   </form>
   
  </div>
 </body>
</html>