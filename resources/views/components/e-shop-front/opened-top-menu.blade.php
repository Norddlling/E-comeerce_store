<div {{ $attributes->merge(['class' => 'opened-menu-container d-flex mb-2 w-100' ])}}>
    <div class="mb-2" style="min-width: 120px;">
        <x-e-shop-front.home-back-buttons class="opened-home-back-buttons"/>
    </div>
    <div class="d-flex opened-menu w-100">
        <nav>
            <x-e-shop-front.opened-product-category-menu :categories="$categories"/>
        </nav>
        <div class="opened-menu-search-basket flex-grow-1 d-flex justify-content-between">
            <x-e-shop-front.products-search-field class="d-inline-block"/>
            <x-e-shop-front.button onclick="window.location='{{ route('basket.index') }}'" class="float-end py-2 px-4">
                <i class="fa fa-shopping-basket"></i>
            </x-e-shop-front.button> 
        </div>
    </div>  
</div>

<style>

    .opened-menu-container {
        flex-direction: row;
    }

    .opened-menu {
        flex-direction: row;
    }

    .opened-menu-search-basket {
        margin-left: 20px;
        margin-bottom: 0px;
    }

    @media screen and (max-width: 768px) {
        .opened-menu-container {
            flex-direction: column;
        }

        .opened-menu {
            flex-direction: column-reverse;
        }

        .opened-menu-search-basket {
            margin-left: 0px;
            margin-bottom: 5px;
        }

        .opened-home-back-buttons {
            display: flex;
            justify-content: space-between;
        }
    }
</style>