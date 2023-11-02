<div {{ $attributes->merge(['class' => 'shadow' ])}}>
    <div class="bg-primary rounded-1">
        <div class="py-2 bg-primary text-center text-light w-100 rounded-1">
            <i class="fa fa-th-list"></i>
            <span> Product categories</span>
        </div>
        <div>
            @foreach ( $categories as  $category )
                <div >
                    <a class="category btn btn-primary w-100" href="{{ route('category.show', $category->category) }}">
                        {{ $category->category }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .category {
        padding: 10px;
    }


</style>