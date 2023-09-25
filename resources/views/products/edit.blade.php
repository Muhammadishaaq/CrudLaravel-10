<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Laravel 10 CRUD</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">

        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="/">Products</a>
            </li>
          </ul>
        </div>
      
      </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                @if($message=Session::get('success'))
                  <div class="alert alert-success alert-block mt-3">
                      <strong>{{ $message }}</strong>
                    </div>    
                @endif
                <h3 class="text-muted">Product Edit #{{ $product->id }}</h3>
                <div class="card mt-3 p-3">
                    <form method="post" action="/products/{{ $product->id }}/update" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name',$product->name) }}"/>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="4" class="form-control">{{ old('description',$product->description) }}</textarea>
                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control"/>
                            @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>