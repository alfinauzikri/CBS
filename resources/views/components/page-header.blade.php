<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                @if (isset($pretitle))
                    <div class="page-pretitle">
                        {{ $pretitle }}
                    </div>
                @endif
                <h2 class="page-title">
                    {{ $title }}
                </h2>
            </div>
            @if (isset($actions))
                {!! $actions !!}
            @endif
        </div>
    </div>
</div>
