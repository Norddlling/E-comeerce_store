<div {{ $attributes->merge(['class' => 'container-lg bg-primary rounded-2 mb-3 shadow' ])}}>
    <x-e-shop-front.website-logo/>
    @if (Route::has('login'))
        <div class="sm:absolute sm:top-0 sm:right-0 p-6 text-right z-10 d-inline-block float-end">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold hover-text">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold hover-text">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold hover-text">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>

<style>
    .hover-text {
        color: white;
    }

    .hover-text:hover {
        color: darkgrey;
    }
</style>