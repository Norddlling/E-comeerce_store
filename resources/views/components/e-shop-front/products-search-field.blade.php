<div {{ $attributes->merge(['class' => '' ])}}>
    <form action="{{ route('search.searchProduct') }}" method="GET">
        <input type="search" name="searched_product" value="" class="rounded-2"/>
        <x-e-shop-front.button type="submit" class="py-2 btn btn-outline-primary mb-1">
            Search
        </x-e-shop-front.button>
    </form>
</div>