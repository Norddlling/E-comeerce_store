
        <x-app-layout>
            <div>{{ session('category_status_message') }}</div>
            
            <section>
                <x-e-shop-front.edit-product-fields :product="$product" :categories="$categories"/>
            </section>

        </x-app-layout>
