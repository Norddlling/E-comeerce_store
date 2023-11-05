<div style="color: rgb(255, 191, 0);" {{ $attributes->merge(['class' => '' ])}}>
    @php
        $averageRating = $product->ratings->avg('users_raiting');
    @endphp

    @if ($averageRating)
        <div class="ratings">
            @for ($i = 1; $i <= 5; $i++)
                @if ($i <= $averageRating)
                    <i class="fa fa-star"></i>
                @else
                    <i class="fa fa-star-o"></i>
                @endif
            @endfor
        </div>
    @else
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
        <i class="fa fa-star-o"></i>
    @endif
</div>