<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<form action="{{route('produk.update', $produk->id)}}" method="POST">

    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Product Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$produk->name}}">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Price</label>
      <input type="number" class="form-control" id="exampleInputEmail1" name="price" value="{{$produk->price}}">
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <button type="submit" class="btn btn-primary">update produk</button>
  </form>