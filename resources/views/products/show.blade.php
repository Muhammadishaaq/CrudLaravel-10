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
            <div class="col-sm-8 mt-3">
                <div class="card p-4">
                    <p>Name : <b>{{$product->name}}</b></p>
                    <p>Description : <b>{{$product->description}}</b></p>
                    <img src="/products/{{$product->image}}" class="rounded" width="100%"/>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>