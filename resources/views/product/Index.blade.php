<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
            <div>{{ session('product_status_message') }}</div>
            @auth
                @if (auth()->user()->role === 'admin')
                    <div>
                        <button onclick="window.location='{{ route('product.create') }}'">
                            Create product
                        </button>
                    </div>
                @endif
            @endauth
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
                <button onclick="window.location='{{ route('basket.index') }}'">
                    Basket
                </button>
            </div>
            <div>
                <form action="{{ route('search.searchProduct') }}" method="GET">

                    <input type="search" name="searched_product" value=""/>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div>
                @foreach ( $products as  $product )
                    <div>
                        <div onclick="window.location='{{ route('product.show', $product) }}'">
                            <img 
                                src = "{{ '/storage/products_images/'.$product->product_image }}" 
                                alt = "{{ $product->product_name }} image" 
                                width = "300"
                            />
                            {{ $product->product_name }}
                        </div>
                        @auth
                            @if (auth()->user()->role === 'admin')
                                <div>
                                    <button onclick="window.location='{{ route('product.edit', $product) }}'">
                                        Edit
                                    </button>
                                </div>

                                <form action={{ route('product.destroy', $product->id) }} method="POST">
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="Delete"/>
                                </form>
                             @endif
                        @endauth
                        </div>
                @endforeach
            </div>
    </body>
</html>