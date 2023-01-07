<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    @foreach ($menu as $item)
                        <li class="nav-item me-1 @if (URL::current() == $item['link']) active @endif">
                            <a class="nav-link" href="{{ $item['link'] }}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    {!! $item['icon'] !!}
                                </span>
                                <span class="nav-link-title">
                                    {{ $item['title'] }}
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
