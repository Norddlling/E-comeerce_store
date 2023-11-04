<div class="container-lg">
    <div class="top-menu d-flex position-relative">
        <nav class="categories-block">
            <x-e-shop-front.category-menu :categories="$categories" class="category-menu"/>
        </nav>
        <section class="d-flex flex-column w-100 ">
            <section class="search-menu-block ">
                <x-e-shop-front.products-search-field class="d-inline-block"/>
                <x-e-shop-front.button onclick="window.location='{{ route('basket.index') }}'" class="float-end py-2 px-4">
                    <i class="fa fa-shopping-basket"></i>
                </x-e-shop-front.button>            
            </section>
            <nav class="">
                <x-e-shop-front.mobile-category-menu :categories="$categories" class="mobile-category-menu mt-2 mb-1"/>
            </nav>
            <section class="d-flex justify-content-center align-items-center h-100 m-2">
                <x-e-shop-front.top-promo/>
            </section>
        </section>  
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

        .category-menu {
            display: none;
        }

        .search-menu-block {
            padding-left: 0px;
        }
    }
    @media screen and (min-width: 768px) {
        .mobile-category-menu {
            display: none;
        }
    }
</style>
