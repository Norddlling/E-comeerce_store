<div {{ $attributes->merge(['class' => '' ])}}>
    <form action="{{ route('search.searchProduct') }}" method="GET">
        <input type="search" name="searched_product" class="rounded-2 shadow" placeholder="Find product" value=""/>
        <x-e-shop-front.button type="submit" class="py-2 btn btn-outline-primary mb-1">
            <i class="fa fa-search"></i> Search
        </x-e-shop-front.button>
    </form>
</div>