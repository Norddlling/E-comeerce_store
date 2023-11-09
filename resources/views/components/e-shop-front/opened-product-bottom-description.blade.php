<div>
    <div>
        category: {{ $product->category }}
    </div>

    <div class="">
        <h1 class="fs-3 my-3">Characteristics:</h1>
        {!! nl2br(e($product->product_characteristics)) !!}
    </div>
    <div class="">
        <h1 class="fs-3 my-3">About {{ $product->product_name }}</h1>
        {!! nl2br(e($product->description)) !!}
    </div>
</div>