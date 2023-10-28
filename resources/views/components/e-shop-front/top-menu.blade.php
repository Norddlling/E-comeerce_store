<div class="">
    <div class="container-lg">
        <div class="top-menu d-flex">
            <div class="categories-block bg-primary text-white rounded-1">
                <div class="py-2 btn btn-primary w-100">
                    <span class="px-2">Product categories</span>
                </div>
                <x-e-shop-front.category-menu :categories="$categories" class="categories menu"/>
            </div>
            <div class="search-menu-block w-100 ">
                <x-e-shop-front.products-search-field class="d-inline-block"/>
                <x-e-shop-front.button onclick="window.location='{{ route('basket.index') }}'" class="float-end py-2">
                    Basket
                </x-e-shop-front.button>
            </div>
        </div>
    </div>
</div>

<style>
    .categories-block {
        min-width: 300px;
    }
 
    .search-menu-block {
        min-width: 300px;
    }
    .top-menu {
        
        flex-direction: row;
    }

    .search-menu-block {
        padding-left: 10px;
    }

    @media screen and (max-width: 768px) {
        .top-menu {
            
            flex-direction: column-reverse;
        }

        .categories-block {
            text-align: center;
        }

        .search-menu-block {
            padding-left: 0px;
        }
    }
</style>
