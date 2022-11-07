<div class="bg-white border rounded p-3">
    <a href="#" class="h6 d-block">
        {{ $product->name }}
    </a>
    <div class="h6 small">
        <a href="#" class="link-secondary">
            {{ $product->category->name }}</a>
    </div>
    <div class="h6 small">
        {{ number_format($product->price, 2, '.', ' ') }} <small>TMT</small>
    </div>
    <div class="h6 small">
        @if($product->active)
            <i class="bi-record-fill text-success"></i>
            @else
            <i class="bi-record-fill text-success"></i>
        @endif
    </div>
</div>