<div class="m-2 d-flex opened-menu">
    <nav>
        <x-e-shop-front.opened-product-category-menu :categories="$categories"/>
    </nav>
    <div class="opened-menu-search-basket flex-grow-1">
        <x-e-shop-front.products-search-field class="d-inline-block"/>
        <x-e-shop-front.button onclick="window.location='{{ route('basket.index') }}'" class="float-end py-2 px-4">
            <i class="fa fa-shopping-basket"></i>
        </x-e-shop-front.button> 
    </div>  
</div>

<style>
    .opened-menu {
        flex-direction: row;
    }

    .opened-menu-search-basket {
        margin-left: 20px;
        margin-bottom: 0px;
    }

    @media screen and (max-width: 650px) {
        .opened-menu {
            flex-direction: column-reverse;
        }

        .opened-menu-search-basket {
            margin-left: 0px;
            margin-bottom: 5px;
        }
    }
</style>