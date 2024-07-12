<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a product</h1>

    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{ route('products.update', ['products' => $products]) }}" method="post">

        @csrf

        @method('put')

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" value="{{ $products->name }}">
        </div>

        <div>
            <label for="Qty">Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{ $products->qty }}">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Price" value="{{ $products->price }}">
        </div>

        <div>
            <label for="name">Description</label>
            <input type="text" name="description" placeholder="Description" value="{{ $products->description }}">
        </div>

        <div>
            <input type="submit" value="Update">
        </div>

    </form>
</body>
</html>