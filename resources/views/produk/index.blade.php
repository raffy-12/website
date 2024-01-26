<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rumah Makan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h2></h2><button class="btn btn-success"><a href="{{route('produk.create')}}">Tambah </a></button>

    <table class="table"> 
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>

        </tr>
        
        @foreach ($produks as $produk)
        <tr>

           <td>{{$produk->id}}</td>
           <td>{{$produk->name}}</td>
           <td>{{$produk->price}}</td>

          <td><button class="btn btn-warning"><a href="{{route('produk.edit', $produk->id)}}">edit</a></button>
            <form action="{{route('produk.destroy', $produk->id)}}" method="POST" class="d-inline"
              onsubmit="return confirm('Apakah data akan dihapus?')">
              @method('delete')
              @csrf
              <button class="btn btn-danger">Delete</button>
            </form>
          </td>

        </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>