
        <x-app-layout>
            <div>
                {{ session('product_status_message') }}
            </div>
            <section>
                <x-e-shop-front.top-menu :categories="$categories"/>
            </section>
            <section>
                <x-e-shop-front.categorized-products-list :products="$products" :category="$category"/>
            </section>
        </x-app-layout>
