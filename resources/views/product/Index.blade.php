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
        @foreach ( $categories as  $category )
            <div class="text-danger">
                <a href="{{ route('category.show', $category->category) }}">
                    {{ $category->category }}
                </a>
            </div>
        @endforeach
    </div>
    <div>
        @foreach ( $products as  $product )
            <div>
                {{ $product->product_name }}
            </div>
        @endforeach
    </div>
</body>
</html>