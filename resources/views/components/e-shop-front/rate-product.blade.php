<div {{ $attributes->merge(['class' => '' ])}}>
    <form method="POST" action="{{ route('product.rateProduct', ['product' => $product]) }}">
        @csrf

        @auth
            @foreach ($ratings as $rating)
                @if($rating->product_id === $product->id && $rating->user_id === auth()->user()->id) 
                    @php
                        $ratingValue = $rating->users_raiting;
                    @endphp
                @endif 
            @endforeach

            <div>
                <fieldset>
                    <legend>Reate product:</legend>
                    <div class="rating d-inline-block me-2" style="color: rgb(255, 191, 0);">
                        @if ( isset($ratingValue) )
                            @for ($i = 1; $i <= 5 ; $i++)
                                @if ($i <= $ratingValue)
                                    <input type="radio" id="star{{ $i }}" name="users_raiting" value="{{ $i }}" style="display: none">
                                    <label for="star{{ $i }}" title="{{ $i }} star">
                                        <i class="fa fa-star"></i>
                                    </label>
                                @else
                                    <input type="radio" id="star{{ $i }}" name="users_raiting" value="{{ $i }}" style="display: none">
                                    <label for="star{{ $i }}" title="{{ $i }} star">
                                        <i class="fa fa-star-o"></i>
                                    </label>
                                @endif
                            @endfor
                        @else
                            @for ($i = 1; $i <= 5; $i++)
                                <input type="radio" id="star{{ $i }}" name="users_raiting" value="{{ $i }}" style="display: none">
                                <label for="star{{ $i }}" title="{{ $i }} star">
                                    <i class="fa fa-star-o"></i>
                                </label>
                            @endfor    
                        @endif
                    </div>
        
                    <div class="d-inline-block">
                        <x-e-shop-front.button class="btn btn-outline-primary" type="submit">
                            Submit
                        </x-e-shop-front.button> 
                    </div>
                </fieldset>
            </div>
           
        @endauth

       
    </form>
</div>

<script>
    const stars = document.querySelectorAll('.rating label');

    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            const ratingValue = index + 1;

            // Toggle star icons
            for (let i = 0; i < stars.length; i++) {
                if (i < ratingValue) {
                    stars[i].innerHTML = '<i class="fa fa-star"></i>';
                } else {
                    stars[i].innerHTML = '<i class="fa fa-star-o"></i>';
                }
            }

            // Set the corresponding radio input value
            document.querySelector(`#star${ratingValue}`).checked = true;
        });
    });
</script>