
    <x-app-layout>
        <div>{{ session('basket_status_message') }}</div>
        <section>
            <x-e-shop-front.opened-top-menu :categories="$categories">
                <x-e-shop-front.basket-button class="float-end py-2 px-4"/>
            </x-e-shop-front.opened-top-menu>
        </section>
        <div>
            <x-e-shop-front.opened-product-top-description :product="$product"  :ratings="$ratings"/>
        </div>
        <div>
            <x-e-shop-front.opened-product-bottom-description :product="$product"/>
        </div>
    </x-app-layout>