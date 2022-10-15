<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <section class="content ">
        <h1 class="ml-5">Form Edit Todolist</h1>
        <div class="col-lg-5 ml-5">
            <form action="/todo/{{ $todo->id }}" method="post"> 
                @csrf
                @method('PUT')   
                
                     <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control" name="judul"
                            value="{{ old('judul') ? old('judul') : $todo->judul }}"
                            >
                            @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>   
                            @enderror
                    </div>
        
                    <div class="form-group">
                        <label for="title">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi') ? old('deskripsi') : $todo->deskripsi }}" >
                        
                        @error('deskripsi')
                         <div class="alert alert-danger">{{ $message }}</div>   
                        @enderror
                    </div>
            
                 
                <button type="submit" class="btn btn-primary">Ubah</button>
               <a href="/todo" class="btn btn-primary">Back</a>
            </form>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>