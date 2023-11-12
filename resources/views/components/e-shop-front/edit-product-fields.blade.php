<div class="edit-product-container">
    <section class="edit-product-section">
    <fieldset style="width: 100%">
        <legend>Edit product</legend>
        <div>
            <img 
                src = "{{ '/storage/products_images/'.$product->product_image }}" 
                alt = "{{ $product->product_name }} image" 
                width = "300"
                class="rounded-2"
                style="width: 100%"
            />
        </div>
        <form method="POST" action={{ route('product.update', ['product' => $product->product_name]) }} enctype="multipart/form-data">
            @csrf
            @method('patch')
            
            <div class="input-group rounded border">
                <label class="input-group-text py-0 border border-0" for="product_image">
                    Product image
                </label>
                <input 
                    type="file" 
                    id="product_image" 
                    name="product_image" 
                    class="form-control"
                    aria-label="Product image"
                    accept="image/*" 
                    value="{{ $product->product_image }}"
                />
            </div>

            <x-e-shop-front.input-group>
                <x-slot:text>
                    Product name
                </x-slot>

                <input 
                    type='text' 
                    id="product_name" 
                    name="product_name" 
                    class="form-control rounded-end border"
                    aria-label="product_name"
                    value="{{ $product->product_name }}"
                />
            </x-e-shop-front.input-group>

            <x-e-shop-front.input-group>
                <x-slot:text>
                    Select category
                </x-slot>
                <select id="category" name="category" class="form-control py-2" aria-label="Select category">
                    <option value="{{ $product->category }}" selected>{{ $product->category }}</option>
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
                    value="{{ $product->quantity_of_product }}"
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
                    value="{{ $product->price }}"
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
                    {{ e($product->product_characteristics) }}
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
                    {{ e($product->description) }}
                </textarea>
            </div>
            <input type="submit" class="btn btn-outline-primary mb-3" value="Save changes"/>
        </form>
    </fieldset>
    </section>

    <section class="edit-product-section mb-3">
        <x-e-shop-front.edit-category-fields :categories="$categories" :category="$category"/>
    </section>
</div>

<style>
    .edit-product-container {
        display: flex;
        flex-direction: row;
    }

    .edit-product-section {
        width: 50%;
        padding-right: 25px;
    }

    @media screen and (max-width: 768px) {
        .edit-product-container {
            flex-direction: column;

        }

        .edit-product-section {
            width: 100%;
            padding-right: 0;
        }
    }
</style>