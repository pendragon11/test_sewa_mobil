<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="mb-5">

      
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark" data-bs-theme="primary">
            <div class="container-fluid" >
              <div class="collapse navbar-collapse" id="navbarNav">
              <a class="navbar-brand">Navbar</a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/beranda">beranda</a>
                </li>

              </div>

              <form class="d-flex" role="search" action="/datamobil" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>
          
        </nav>
    </div>
      
    <h1 class="text-center mb-5">Data Mobil</h1>
    

  
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container">
        <a href="tambahdata"  class="btn btn-success">Tambah Data</a>

      

        <div class="row mt-2">
          @if($message = Session::get('success'))
            <div  class="alert alert-success " role="alert" >
              {{$message}}
            </div>
          @endif
              
            <table class="table">
                <thead>
                  <tr>
                    
                    <th scope="col">no</th>
                    <th scope="col">foto</th>
                    <th scope="col">merek</th>
                    <th scope="col">model</th>
                    <th scope="col">tarif sewa</th>
                    <th scope="col">disewa</th>
                    <th scope="col">aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>
                           <img src="{{asset('fotomobil/'.$row->foto)}}" style="width: 60px;"  alt="">
                        </td>
                        <td>{{$row ->merek}}</td>
                        <td>{{$row ->model}}</td>
                        <td>{{$row ->nomorplat}}</td>
                        <td>{{$row ->tarifsewa}}</td>
                        
                        <td>
                            <a href="/delete/{{$row->id}}"  class="btn btn-danger">delate</a>
                            <a href="/tampilkandata/{{$row ->id}}"  class="btn btn-info">update</a>
                        </td>
                      </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>

        
    </div>




    
  </body>
</html>