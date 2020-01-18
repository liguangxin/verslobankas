<div class="container">
    @repeat(5)
        @if($iteration < 2)
            @include('partials.ad', ['promoted' => true])
        @else
            @include('partials.ad', ['promoted' => false])
        @endif
    @endrepeat
</div>
