<div {{ $attributes->merge(['class' => '' ])}}>
    @auth
        @if (auth()->user()->role === 'admin')
            <div >
                <button 
                    onclick="window.location='{{ route('product.create') }}'" 
                    type="button" 
                    class="btn btn-light bg-light text-secondary shadow">
                    <i class="fa fa-plus"></i> 
                    Create product
                </button>
            </div>
        @endif
    @endauth
</div>