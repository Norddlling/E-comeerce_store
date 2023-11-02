<div {{ $attributes->merge(['class' => 'shadow' ])}}>
    <div class="bg-primary rounded-1">
        <div class=" btn btn-primary text-center w-100 rounded-1 collapse multi-collapse show" 
            type="button"
            data-bs-toggle="collapse" 
            data-bs-target=".multi-collapse" 
            aria-expanded="false" 
            aria-controls="mobile-categories hideCategoriesButton showCategoriesButton"
            id="showCategoriesButton"
            >
            <i class="material-icons" style="vertical-align: text-bottom;">menu</i>
            <span style="vertical-align: text-bottom;">Show categories menu</span>
        </div>
        <div class="btn btn-primary text-center w-100 rounded-1 collapse multi-collapse" 
            type="button"
            data-bs-toggle="collapse" 
            data-bs-target=".multi-collapse" 
            aria-expanded="false" 
            aria-controls="mobile-categories hideCategoriesButton showCategoriesButton"
            id="hideCategoriesButton">
            <i class="material-icons" style="vertical-align: text-bottom;">close</i>
            <span style="vertical-align: text-bottom;">Hide categories menu</span>
        </div>

        <div class="collapse multi-collapse" id="mobile-categories">
            @foreach ( $categories as  $category )
                <div>
                    <a class="btn btn-primary w-100" href="{{ route('category.show', $category->category) }}" style="padding: 5px">
                        {{ $category->category }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>