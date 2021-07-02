<!DOCTYPE html>
<html>
<head>
    <title>Rincian Pengguna</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/Data/bootstrap.min.css')}}" />
    <link href="{{ asset ('kiaalap-master/Data/tables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('kiaalap-master/Data/tables/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <script src="{{ asset ('kiaalap-master/Data/jquery.js')}}"></script>  
    <script src="{{ asset ('kiaalap-master/Data/jquery.validate.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/Data/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/Data/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/Data/tables/js/dataTables.bootstrap4.min.js')}}"></script>
</head>
<body>
    
<div class="container">
    <h1>Rincian Pengguna</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Alamat</th>
                <th>Email</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>
   
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('usdet') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'alamat', name: 'alamat'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
</html>