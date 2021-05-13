<x-banner />
<header class="bg-white dark:bg-dark-muted sticky top-0 z-50">
    <nav class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
        <div class="w-full h-16 flex items-center justify-between">
            <div class="flex items-center">
                <a href="https://laravel.cm">
                    <span class="sr-only">{{ __('Laravel Cameroun') }}</span>
                    <img class="h-8 w-auto sm:hidden" src="{{ asset('/images/laravelcm-icon.svg') }}" alt="Laravel.cm">
                    <img class="h-10 w-auto hidden sm:dark:inline" src="{{ asset('/images/laravelcm-white.svg') }}" alt="Laravel.cm">
                    <img class="h-10 w-auto hidden sm:inline dark:hidden" src="{{ asset('/images/laravelcm.svg') }}" alt="Laravel.cm">
                </a>
            </div>
            <div class="ml-10 hidden sm:flex items-center space-x-4">
                {!! $slot !!}
            </div>
        </div>
        <div class="py-4 flex flex-wrap justify-center space-x-6 sm:hidden">
            {!! $slot !!}
        </div>
    </nav>
</header>
