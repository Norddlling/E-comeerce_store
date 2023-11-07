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
        <div>{{ session('basket_status_message') }}</div>
        <section>
            <x-e-shop-front.opened-top-menu :categories="$categories"/>
        </section>
        <div>
            <x-e-shop-front.opened-product-top-description :product="$product"  :ratings="$ratings"/>
        </div>


        <div>
            category: {{ $product->category }}
        </div>

        <div>
            characteristics: {!! html_entity_decode($product->product_characteristics) !!}
        </div>
        <div>
            description: {!! html_entity_decode($product->$product->description) !!}
        </div>

        


    </x-app-layout>
</body>
</html>