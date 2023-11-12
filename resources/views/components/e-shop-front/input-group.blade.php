<div {{ $attributes->class([ 'input-group my-3 rounded ' ])}}>
    <span class="input-group-text" style="width: 50%;">
        {{ $text }}
    </span>
    {{ $slot }}
</div>