<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        {{ $category }}
    </div>
    @foreach ($products as $product)
        @if ($product->category === $category)
            <div>
                {{ $product->product_name }}
            </div>
        @endif
    @endforeach
</body>
</html>