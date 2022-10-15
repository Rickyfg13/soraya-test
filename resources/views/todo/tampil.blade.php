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
    <h1>Welcome Di TODO App</h1>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
            </div>
          </div>

            <div class="row">
              <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <div class="card-header">
                      <a href="{{ route('todo.create') }}" class="btn btn-sm btn-primary">
                          <i class="fas fa-plus"> Tambah Kegiatan</i>
                      </a>
                    </div>

                    <div class="card-body">
                          <table class="table table-hover table align-middle table-striped table-bordered table-sm display">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>Judul</th>
                                      <th>Deskripsi</th>
                                      <th>Dibikin Pada</th>
                                      <th>Keterangan</th>
                                     
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($todo as $item)
                                  <tr>
                                      <td>{{ $loop->iteration }}</td>
                                      <td>{{ $item->judul}}</td>
                                      <td>{{ $item->deskripsi}}</td>
                                      <td>{{ $item->created_at }}</td>
                                     
                                      
                                      <td>
                                        <a href="/todo/{{ $item->id }}/edit" class=" btn btn-secondary">Edit</a>
                                        <form action="/todo/{{ $item->id }}" method="post" style="display: inline-block;">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btn btn-primary" >Sudah Terlaksana</button>
                                      </form>
                                      </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                          
                    </div>
                  </div>
                </div>
              </section>
              
            </div>    
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