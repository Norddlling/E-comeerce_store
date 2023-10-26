<div {{ $attributes->merge(['class' => 'd-inline-block' ])}}>
    <form action="{{ route('search.searchProduct') }}" method="GET">
        <input type="search" name="searched_product" value=""/>
        <x-e-shop-front.button type="submit" >
            Search
        </x-e-shop-front.button>
    </form>
</div>