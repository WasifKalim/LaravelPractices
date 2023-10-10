<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>How to upload and store file to MySQL database – Laravel 9</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >

</head>
<body>

    <div class="container">
         <div class="row">
              <div class="col-md-8 mt-5" style="margin: 0 auto;">

                    <!-- Alert message (start) -->
                    @if(Session::has('message'))
                        <div class="alert {{ Session::get('alert-class') }} ">
                             {{ Session::get('message') }}
                        </div>
                    @endif
                    <!-- Alert message (end) -->

                    <form method="post" action="{{ route('submitform') }}" enctype="multipart/form-data">

                          @csrf

                          <div class="form-group mb-4">

                                <label class="control-label col-sm-2" for="name">Name:</label>

                                <div class="col-sm-10">
                                      <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{ old('name') }}">
                                </div>

                                <!-- Error -->
                                @if($errors->has('name'))

                                    <div class='text-danger mt-2'>
                                         * {{ $errors->first('name') }}
                                    </div>

                                @endif
                          </div>

                          <div class="form-group mb-4">

                                <label class="control-label col-sm-2" for="file">File:</label>
                                <div class="col-sm-10">
                                    <input type="file" name="file" class="form-control">
                                </div>

                                <!-- Error -->
                                @if($errors->has('file'))

                                    <div class='text-danger mt-2'>
                                         * {{ $errors->first('file') }}
                                    </div>
  
                                @endif

                          </div>

                          <div class="form-group "> 
                                <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                          </div>

                    </form>

              </div>

         </div>

         <!-- File list -->
         <div class="row">
              <div class="col-md-12">
                    <table class="table">
                         <thead>
                               <tr>
                                    <th>Name</th>
                                    <th>File</th>
                               </tr>
                         </thead>
                         <tbody>
                         @foreach($files as $file)
                              @php

                                  $ext = strtolower(pathinfo($file->filepath, PATHINFO_EXTENSION));

                                  $imgext_arr = array("jpg","jpeg","png");

                                  $isImage = false;
                                  if(in_array($ext,$imgext_arr)){
                                        $isImage = true;
                                  }
                              @endphp
                              <tr>
                                  <td>{{ $file->name }}</td>
                                  <td>
                                      @if($isImage)
                                           <img src="{{ $file->filepath }}" width="100px" height="100px;">
                                      @else
                                           <a href="{{ $file->filepath }}" target="_blank">View file</a>
                                      @endif
                                  </td>
                              </tr>
                         @endforeach
                         </tbody>
                    </table>
              </div>
         </div>
    </div>

</body>
</html>