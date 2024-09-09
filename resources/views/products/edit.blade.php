<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Products</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 d-flex justify-content-end">
                <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-lg my-4">
                    
                    <div class="card-header bg-dark">
                        <h2 class="text-white">Edit Products</h2>
                    </div>

                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{ route('products.update',$product->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label h4">Name</label>
                                <input value="{{ old('name',$product->name) }}" type="text" name="name"
                                    class="@error('name') is-invalid @enderror form-control" id="name"
                                    placeholder="Name">
                                @error('name')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="sku" class="form-label h4">Sku</label>
                                <input value="{{ old('sku', $product->sku) }}" type="text" name="sku"
                                    class="@error('sku') is-invalid @enderror form-control" id="sku" placeholder="Sku">
                                @error('sku')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label h4">Price</label>
                                <input value="{{ old('price', $product->price) }}" type="text" name="price"
                                    class="@error('price') is-invalid @enderror form-control" id="price"
                                    placeholder="Price">
                                @error('price')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label h4">Description</label><br>
                                <textarea class="form-control" name="description" id="desc" cols="30" rows="5">{{ old('price', $product->description) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label h4">Image</label>
                                <input type="file" class="form-control form-control-lg" name="image" id="image"
                                    placeholder="Image">
                                @if($product->image != "")
                                <img class="w-50 my-3" src="{{ asset('uploads/products/' . $product->image) }}" alt="image">
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>