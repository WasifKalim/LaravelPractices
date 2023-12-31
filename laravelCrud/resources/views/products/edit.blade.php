<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, inial-scale=1" >
    <title>Laravel Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="/">Products</a>
          </li>
        </ul>
    </nav>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block"> {{$message}} </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h3 class="text-muted">Product Edit ${{ $product->id}}</h3>
                    <form method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" 
                                class="form-control" 
                                value="{{ $product->name}}"  
                                {{-- value will not get remove after other row error --}}
                            />
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            {{-- old is only used for creating data --}}
                            <textarea class="form-control" rows="4" name="description">{{ $product->description}}</textarea> 
                            @if ($errors->has('description', $product->description))
                                <span class="text-danger">{{ $errors->first('description')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control"/>
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $error->first('image')}}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>