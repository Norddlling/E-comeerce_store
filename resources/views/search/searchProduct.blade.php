<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <x-app-layout>
            <div>{{ session('product_status_message') }}</div>
            <div>
                <x-e-shop-front.top-menu :categories="$categories"/>
                <e-shop-front.category-menu :categories="$categories"/>
            </div>
            <div class="">
                @foreach ( $products as  $product )
                    <div class="d-inline-block">
                        <div onclick="window.location='{{ route('product.show', $product) }}'">
                            <img 
                                src = "{{ '/storage/products_images/'.$product->product_image }}" 
                                alt = "{{ $product->product_name }} image" 
                                width = "300"
                            />
                            <div>
                                {{ $product->product_name }} Price: {{ $product->price }}
                            </div>
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
        </x-app-layout>
    </body>
</html>