<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>@yield('title', "titolo")</title>
</head>
<body class="bg-dark">

    @section("header")
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
        <a class="navbar-brand" href="{{ route("boolpress.index") }}">Boolpress</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route("boolpress.index") }}"><strong>Home</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><strong>Manage</strong></a>
            </li>
          </ul>
        </div>
    </div>
      </nav>
    
    @show

    @section("main")
    <div class="row">
        <div class="col-8 offset-2 mt-5 ">
            
        </div>
    </div>
    @show
    
</body>
</html>