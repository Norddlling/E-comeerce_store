<div>
    @auth
        @if (auth()->user()->role === 'admin')
            <div>
                <button onclick="window.location='{{ route('product.create') }}'" type="button" class="btn btn-outline-secondary">
                    <i class="fa fa-plus"></i> Create product
                </button>
            </div>
        @endif
    @endauth
</div>