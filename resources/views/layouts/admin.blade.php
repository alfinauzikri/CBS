@extends('app')
@php
    $title = View::getSection('title');
    $pretitle = View::getSection('pretitle');
    $actions = View::getSection('actions');
    
    $menu = [
        [
            'title' => 'Dashboard',
            'link' => route('index'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                    <rect x="10" y="12" width="4" height="4"></rect>
                    </svg>',
        ],
        [
            'title' => 'Master',
            'link' => route('master.index'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                        <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                        <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                        </svg>',
        ],
        [
            'title' => 'Users',
            'link' => route('users.index'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                        </svg>',
        ],
        [
            'title' => 'Filters',
            'link' => '#',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-filter" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5.5 5h13a1 1 0 0 1 .5 1.5l-5 5.5l0 7l-4 -3l0 -4l-5 -5.5a1 1 0 0 1 .5 -1.5"></path>
                        </svg>',
        ],
        [
            'title' => 'Tools',
            'link' => '#',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4"></path>
                        <line x1="14.5" y1="5.5" x2="18.5" y2="9.5"></line>
                        <polyline points="12 8 7 3 3 7 8 12"></polyline>
                        <line x1="7" y1="8" x2="5.5" y2="9.5"></line>
                        <polyline points="16 12 21 17 17 21 12 16"></polyline>
                        <line x1="16" y1="17" x2="14.5" y2="18.5"></line>
                        </svg>',
        ],
        [
            'title' => 'Feedback',
            'link' => '#',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-flag" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="5" y1="5" x2="5" y2="21"></line>
                        <line x1="19" y1="5" x2="19" y2="14"></line>
                        <path d="M5 5a5 5 0 0 1 7 0a5 5 0 0 0 7 0"></path>
                        <path d="M5 14a5 5 0 0 1 7 0a5 5 0 0 0 7 0"></path>
                        </svg>',
        ],
        [
            'title' => 'Query Log',
            'link' => '#',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-text" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                        <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                        <path d="M9 12h6"></path>
                        <path d="M9 16h6"></path>
                        </svg>',
        ],
        [
            'title' => 'Settings',
            'link' => route('settings.index'),
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                        </svg>',
        ],
    ];
@endphp
@section('body')
    <div class="page">
        {{-- Header --}}
        @include('components.header')
        {{-- Menu --}}
        @include('components.menu', ['menu' => $menu])
        {{-- Content --}}
        <div class="page-wrapper">
            @include('components.page-header')
            <div class="page-body">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>
            {{-- Footer --}}
            @include('components.footer')
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('js/theme.min.js') }}" defer></script>
@endpush
