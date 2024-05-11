<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-5">Sewa mobil</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container">
      
        <div class="row justify-content-center">
         <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/sewa/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">merek</label>
                    <input  value= "{{ $data->merek }}"" type="text" name="merek" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">tanggal awal</label>
                    <input  value= "" type="text" name="tanggalawal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">tanggal akhir</label>
                    <input  value= "" type="text" name="tanggalakhir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  
                  
                    <button type="submit" class="btn btn-primary">sewa</button>
              </form>
            </div>
          </div>
        
         </div>
                
        </div>

        
    </div>




    
  </body>
</html>