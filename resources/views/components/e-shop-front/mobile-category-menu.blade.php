<div {{ $attributes->merge(['class' => 'shadow' ])}}>
    <div class="bg-primary rounded-1">
        <div class="btn btn-primary text-center w-100 rounded-1" 
            type="button"
            id="showCategoriesButton"
            >
            <i class="material-icons" style="vertical-align: text-bottom;">menu</i>
            <span style="vertical-align: text-bottom;">Show categories menu</span>
        </div>
        <div class="btn btn-primary text-center w-100 rounded-1" 
            type="button"
            id="hideCategoriesButton">
            <i class="material-icons" style="vertical-align: text-bottom;">close</i>
            <span style="vertical-align: text-bottom;">Hide categories menu</span>
        </div>

        <div class="" id="mobile-categories">
            @foreach ( $categories as  $category )
                <div>
                    <a class="btn btn-primary w-100" href="{{ route('category.show', $category->category) }}" style="padding: 5px">
                        {{ $category->category }}
                    </a>
                </div>
            @endforeach
        </div>

        <script>
            $(document).ready(function() {
                $('#mobile-categories').hide();
                $('#hideCategoriesButton').hide();
            
                $('#showCategoriesButton').click(function() {
                    $('#showCategoriesButton').hide();
                    $('#hideCategoriesButton').show();
                    $('#mobile-categories').show();
                });
            
                $('#hideCategoriesButton').click(function() {
                    $('#hideCategoriesButton').hide();
                    $('#showCategoriesButton').show();
                    $('#mobile-categories').hide();
                });
            });
        </script>

    </div>
