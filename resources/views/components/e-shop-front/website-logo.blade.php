<div 
    {{ $attributes->merge(['class' => 'd-inline-block text-light  my-1 ms-3' ])}} 
    style="font-size: 40px">
    
    <i class="fa fa-desktop logo-icon" onclick="window.location='{{ route('product.index') }}'"></i>
</div>

<style>
    .logo-icon:hover {
        color: darkgrey;
    }
</style>