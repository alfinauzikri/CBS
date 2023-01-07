{{-- errors --}}
@if ($errors->any())
    <div class="alert alert-important alert-danger alert-dismissible" role="alert">
        <div class="d-flex">
            <div>
                <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="12" r="9" />
                    <line x1="12" y1="8" x2="12" y2="12" />
                    <line x1="12" y1="16" x2="12.01" y2="16" />
                </svg>
            </div>
            <div>
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        </div>
        <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
    </div>
@endif

{{-- error --}}
@if (session('error'))
    <div class="alert alert-important alert-danger alert-dismissible" role="alert">
        <div class="d-flex">
            <div>
                <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="12" r="9" />
                    <line x1="12" y1="8" x2="12" y2="12" />
                    <line x1="12" y1="16" x2="12.01" y2="16" />
                </svg>
            </div>
            <div>
                {{ session('error') }}
            </div>
        </div>
        <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
    </div>
@endif

{{-- success --}}
@if (session('success'))
    <div class="alert alert-important alert-success alert-dismissible" role="alert">
        <div class="d-flex">
            <div>
                <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l5 5l10 -10" />
                </svg>
            </div>
            <div>
                {{ session('success') }}
            </div>
        </div>
        <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
    </div>
@endif

{{-- info --}}
@if (session('info'))
    <div class="alert alert-important alert-info alert-dismissible" role="alert">
        <div class="d-flex">
            <div>
                <!-- Download SVG icon from http://tabler-icons.io/i/info-circle -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="12" r="9" />
                    <line x1="12" y1="8" x2="12.01" y2="8" />
                    <polyline points="11 12 12 12 12 16 13 16" />
                </svg>
            </div>
            <div>
                {{ session('info') }}
            </div>
        </div>
        <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
    </div>
@endif

{{-- warning --}}
@if (session('warning'))
    <div class="alert alert-important alert-warning alert-dismissible" role="alert">
        <div class="d-flex">
            <div>
                <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 9v2m0 4v.01" />
                    <path
                        d="M7.8 4.6l-1.6 9a1 1 0 0 0 .4 1l9 5a1 1 0 0 0 1 0l9 -5a1 1 0 0 0 .4 -1l-1.6 -9a1 1 0 0 0 -.8 -.8l-9 -1.6a1 1 0 0 0 -1 0z" />
                </svg>
            </div>
            <div>
                {{ session('warning') }}
            </div>
        </div>
        <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
    </div>
@endif
