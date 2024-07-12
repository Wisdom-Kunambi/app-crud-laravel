<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a product</h1>

    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{ route('products.store') }}" method="post">

        @csrf

        @method('post')

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>

        <div>
            <label for="Qty">Qty</label>
            <input type="text" name="qty" placeholder="Qty">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Price">
        </div>

        <div>
            <label for="name">Description</label>
            <input type="text" name="description" placeholder="Description">
        </div>

        <div>
            <input type="submit" value="Save a new product">
        </div>

    </form>
</body>
</html>