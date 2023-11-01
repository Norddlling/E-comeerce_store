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
                {{ session('product_status_message') }}
            </div>
            <div>
                <x-e-shop-front.top-menu :categories="$categories"/>
            </div>
            <div>
                <x-e-shop-front.products-list :products="$products"/>
            </div>
            <div>
                <x-e-shop-front.footer />
            </div>
        </x-app-layout>
    </body>
</html>