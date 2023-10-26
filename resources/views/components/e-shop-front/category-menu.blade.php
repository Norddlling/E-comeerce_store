<div {{ $attributes->merge(['class' => 'bg-info p-1 w-25' ])}}>
    @foreach ( $categories as  $category )
        <div>
            <a href="{{ route('category.show', $category->category) }}">
                {{ $category->category }}
            </a>
        </div>
    @endforeach
</div>