<div {{ $attributes->merge(['class' => 'dropdown' ])}}>
    <x-e-shop-front.button class="dropdown-toggle shadow py-2 mb-1 opened-cetagory-menu" data-bs-toggle="dropdown">
      Product Categories
    </x-e-shop-front.button>
    <ul class="dropdown-menu p-0 bg-primary rounded-2 shadow opened-cetagory-menu" style="overflow: hidden;">
        @foreach ( $categories as  $category )
            <li> 
                <a href="{{ route('category.show', $category->category) }}"
                    class="dropdown-item  text-light rounded-1 category-button">
                    
                    {{ $category->category }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

<style>
    .category-button{
        background-color: rgb(13, 110, 253);
    }
    .category-button:hover {
        background-color: rgb(21, 74, 200);
    }

    @media screen and (max-width: 650px) {
        .opened-cetagory-menu {
            width: 100%;
            text-align: center;
        }
    }
</style>