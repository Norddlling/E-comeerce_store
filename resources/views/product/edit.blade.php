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
            <div>
                <img 
                    src = "{{ '/storage/products_images/'.$product->product_image }}" 
                    alt = "{{ $product->product_name }} image" 
                    width = "300"
                />
            </div>
            <form method="POST" action={{ route('product.update', ['product' => $product->product_name]) }} enctype="multipart/form-data">
                @csrf
                @method('patch')
                <label for="product_name">
                    product_name
                    <input type='text' id="product_name" name="product_name" value="{{ $product->product_name }}"/>
                </label>
                <br/>
                <label for="category">
                    category
                    <select id="category" name="category">
                        <option value={{ $product->category }} selected>{{ $product->category }}</option>
                        @foreach ( $categories as  $category )
                            <option value={{ $category->category }}>{{ $category->category }}</option>
                        @endforeach
                    </select>
                </label>
                <br/>
                <label for="quantity_of_product">
                    quantity_of_product
                    <input type="number" id="quantity_of_product" name="quantity_of_product" value="{{ $product->quantity_of_product }}"/>
                </label>
                <br/>
                <label for="product_characteristics">
                    product_characteristics
                    <input type='text' id="product_characteristics" name="product_characteristics" value="{{ $product->product_characteristics }}"/>
                </label>
                <br/>
                <label for="description">
                    description
                    <input type='text' id="description" name="description" value="{{ $product->description }}"/>
                </label>
                <br/>
                <label for="product_image">
                    product_image
                    <input type="file" id="product_image" name="product_image" accept="image/*" value="{{ $product->product_image }}"/>
                </label>
                <br/>
                <label for="users_raiting">
                    users_raiting
                    <input type="number" id="users_raiting" name="users_raiting" value="{{ $product->users_raiting }}"/>
                </label>
                <br/>
                <input type="submit"/>
            </form>
        </x-app-layout>
    </body>
</html>