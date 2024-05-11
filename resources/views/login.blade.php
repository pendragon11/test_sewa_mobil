<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-5 mt-5">Login</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container">
      
        <div class="row justify-content-center">
         <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/loginproses" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">email</label>
                  <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                @error('nama')
                <small>
                  
                  {{$message}}
                </small>

                @enderror
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">password</label>
                  <input type="text" name="password" class="form-control" id="exampleInputPassword1">
                  <a href="/register"  class="form-text">belum punya akun ? daftar disini</a>
                </div>
                @error('password')
                <small>
                  
                  {{$message}}
                </small>

                @enderror
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        
         </div>
                
        </div>

        
    </div>




    
  </body>
</html>