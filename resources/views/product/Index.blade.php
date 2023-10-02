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
                        <div onclick="window.location='{{ route('product.show', $product->id) }}'">
                            <img 
                                src = "{{ '/storage/products_images/'.$product->product_image }}" 
                                alt = "{{ $product->product_name }} image" 
                                width = "300"
                            />
                            {{ $product->product_name }}
                        </div>
                        @auth
                            @if (auth()->user()->role === 'admin')
                                <form action={{ route('product.destroy', $product->id) }} method="POST">
                                    @method('delete')
                                    @csrf
                                    <input type="submit"/>
                                </form>
                            @endif
                        @else
                            <div></div>
                        @endauth
                    </div>
                @endforeach
            </div>
    </body>
</html>