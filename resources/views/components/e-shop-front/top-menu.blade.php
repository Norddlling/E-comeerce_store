<div class="">
    <div class="container-lg">
        <div class="top-menu d-flex position-relative">
            <div class="categories-block text-white rounded-1">
                <div class="bg-primary rounded-1">
                <div class="py-2 btn btn-primary w-100">
                    <i class="fa fa-th-list"></i>
                    <span> Product categories</span>
                </div>
                <x-e-shop-front.category-menu :categories="$categories" class="categories menu"/>
                </div>
            </div>
            <div class="d-flex flex-column w-100 ">
            <div class="search-menu-block ">
                <x-e-shop-front.products-search-field class="d-inline-block"/>
                <x-e-shop-front.button onclick="window.location='{{ route('basket.index') }}'" class="float-end py-2 px-4">
                    <i class="fa fa-shopping-basket"></i>
                </x-e-shop-front.button>            
            </div>
            <div class="d-flex justify-content-center align-items-center h-100 mx-2">
                <x-e-shop-front.top-promo/>
            </div>
            </div>
            
        </div>
        
    </div>
</div>

<style>
    .categories-block, .search-menu-block {
        min-width: 300px;
    }
 
    .top-menu {
        min-width: 300px;
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
