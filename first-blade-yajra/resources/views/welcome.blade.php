<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    {{-- 3 css k liye aur 3 js k liye links attach krna hn --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    {{-- step 1 add jquery js min--}}
    <script rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap.min.js" integrity="sha512-F0E+jKGaUC90odiinxkfeS3zm9uUT1/lpusNtgXboaMdA3QFMUez0pBmAeXGXtGxoGZg3bLmrkSkbK1quua4/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- step 2: add css datatables min --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
      <h2 class="mb-4">laravel 9 Yajra DataTables Examples</h2>
      <table class="table table-bordered yajra-datatables" >
        <thead>
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Slug</th>
            <th>keywords</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    {{-- step  --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js" ></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js" integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
      $(function(){
        var table = $('.yajra-datatables').DataTable({
          processing:true,
          serverSide:true,
          ajax:"{{ route('blog.list') }}",
          columns:[
          {data:'id',name: 'id'},
            {data:'title', name:'title'},
            {data:'slug',name:'slug'},
            {data:'keywords', name:'keywords'},
            {
              data:'action',
              name:'action',
              orderable:'true',  
              searchable:'false',
            },
          ]
        })
      });
    </script>
  </body>
</html>



{{-- 
    Yajra datatable steps to add:
    1. add js jquery min 
    2: add css datatables min
    3: add jquery min.js cdn version
    4: add jquery validate
    5: jquery datatables min.js
  
  --}}