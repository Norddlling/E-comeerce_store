<div {{ $attributes->merge(['class' => '' ])}}>
    @foreach ( $categories as  $category )
        <div >
            <a class="category btn btn-primary w-100" href="{{ route('category.show', $category->category) }}">
                {{ $category->category }}
            </a>
        </div>
    @endforeach
</div>

<style>
    .category {
        padding: 10px;
    }

    @media screen and (max-width: 768px) {
        .category {
            padding: 5px;
        }
    }
</style>