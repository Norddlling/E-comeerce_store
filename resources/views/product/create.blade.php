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
            <div class="admin-panel-container">
                <section class="admin-panel-section">
                    <form method="POST" action={{ route('product.store') }} enctype="multipart/form-data" id="create_product_form">
                        @csrf
                        <fieldset>
                            <legend>
                                Create new product
                            </legend>
                            <x-e-shop-front.input-group>
                                <x-slot:text>
                                    Product name
                                </x-slot>
                
                                <input 
                                    type='text' 
                                    id="product_name" 
                                    name="product_name" 
                                    class="form-control rounded-end border"
                                    aria-label="Product name"
                                />
                            </x-e-shop-front.input-group>

                            <x-e-shop-front.input-group>
                                <x-slot:text>
                                    Select category
                                </x-slot>
                                <select id="category" name="category" class="form-control py-2" aria-label="Select category">
                                    @foreach ( $categories as  $category )
                                        <option value="{{ $category->category }}">{{ $category->category }}</option>
                                    @endforeach
                                </select>
                            </x-e-shop-front.input-group>

                            <x-e-shop-front.input-group>
                                <x-slot:text>
                                    Quantity of product
                                </x-slot>
                                <input 
                                    type="number" 
                                    id="quantity_of_product" 
                                    class="form-control rounded-end border" 
                                    name="quantity_of_product" 
                                    min="0"
                                    aria-label="Quantity of product"
                                />
                            </x-e-shop-front.input-group>

                            <x-e-shop-front.input-group>
                                <x-slot:text>
                                    Price
                                </x-slot>
                                <input 
                                    type="number" 
                                    id="price" 
                                    class="form-control rounded-end border" 
                                    name="price" 
                                    min="0"
                                    aria-label="Price"
                                />
                            </x-e-shop-front.input-group>

                            <div class="my-3">
                                <label for="product_characteristics">
                                    Product characteristics
                                </label>
                                <textarea 
                                    id="product_characteristics" 
                                    class="form-control" 
                                    rows="5"
                                    name="product_characteristics">
                                </textarea>
                            </div>

                            <div class="my-3">
                                <label for="description">
                                    Description
                                </label>
                                <textarea 
                                    id="description" 
                                    class="form-control" 
                                    rows="5"
                                    name="description">
                                </textarea>
                            </div>

                            <div class="input-group rounded border">
                                <label class="input-group-text py-0 border border-0" for="product_image">
                                    Add image
                                </label>
                                <input 
                                    type="file" 
                                    id="product_image" 
                                    name="product_image" 
                                    class="form-control"
                                    aria-label="Product image"
                                    accept="image/*" 
                                />
                            </div>

                            <input type="submit" class="btn btn-outline-primary my-3" value="Cteate product"/>
                        <fieldset>
                    </form>
                </section>

                <section class="edit-product-section mb-3 admin-panel-section">
                    <x-e-shop-front.create-category-field />
                    <x-e-shop-front.edit-category-fields :categories="$categories" :category="$category"/>
                </section>
            </div>
        </x-app-layout>
    </body>

    <style>
        .admin-panel-container {
            display: flex;
            flex-direction: row;
        }

        .admin-panel-section {
            width: 50%;
            padding-right: 25px;
        }

        @media screen and (max-width: 768px) {
            .admin-panel-container {
                flex-direction: column;

            }

            .admin-panel-section {
                width: 100%;
                padding-right: 0;
            }
        }
    </style>
</html>