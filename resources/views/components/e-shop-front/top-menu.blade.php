<div {{ $attributes->merge(['class' => '' ])}}>
    <div class="top-menu d-flex position-relative">
        
        <section class="d-flex flex-column w-100 ">
            <section class="search-nav-menu-block">
                <div class="">
                    <x-e-shop-front.home-back-buttons class="home-back-buttons mb-2"/>
                </div>
                <div class="d-flex justify-content-between w-100">
                <x-e-shop-front.products-search-field class="d-inline-block"/>
                <x-e-shop-front.button 
                    type="button"
                    onclick="window.location='{{ route('basket.index') }}'" 
                    class="btn btn-primary py-2 px-4">
                    <i class="fa fa-shopping-basket"></i>
                </x-e-shop-front.button>  
                </div>          
            </section>
            <nav >
                <x-e-shop-front.mobile-category-menu :categories="$categories" class="mobile-category-menu mt-2 mb-1"/>
            </nav>

            <div class="flex-row w-100">
            
            <section class="d-flex justify-content-center h-100 m-2">
                <nav class="categories-block">
                    <x-e-shop-front.category-menu :categories="$categories" class="category-menu mr-2"/>
                </nav>
                <x-e-shop-front.top-promo/>
            </section>
            </div>
        </section>  
    </div>  
</div>

<style>
    .search-nav-menu-block {
        display: flex;
        flex-direction: row;
        min-width: 300px;
        padding-left: 10px;
    }

    .category-menu {
        min-width: 200px;
    }

    .top-menu {
        min-width: 300px;
        flex-direction: row;
    }

    .home-back-buttons {
        display: flex;
        min-width: 200px;
    }

    @media screen and (max-width: 768px) {
        .category-menu {
            display: none;
        }

        .search-nav-menu-block {
            flex-direction: column;
            padding-left: 0px;
        }

        .home-back-buttons {
            justify-content: space-between;
        }
    }

    @media screen and (min-width: 768px) {
        .mobile-category-menu {
            display: none;
        }
    }
</style>
