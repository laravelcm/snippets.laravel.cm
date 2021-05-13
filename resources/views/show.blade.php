@extends('layouts.app')

@section('content')

    <x-layout>

        <x-header>
            <x-header-item
                label="Copier"
                type="button"
                class="copy-btn border-gray-300 dark:border-gray-700 text-gray-700 dark:text-white bg-white dark:bg-dark-muted hover:bg-gray-50 dark:hover:bg-gray-800 focus:ring-flag-green"
                icon="heroicon-o-clipboard"
                data-clipboard-text="{{ $paste->code }}"
            />
            <x-header-item
                label="Fork"
                class="border-gray-300 dark:border-gray-700 text-gray-700 dark:text-white bg-white dark:bg-dark-muted hover:bg-gray-50 dark:hover:bg-gray-800 focus:ring-flag-green"
                icon="heroicon-o-document-duplicate"
                :link="route('edit', $paste->hash)"
            />
            <x-header-item
                label="Row"
                class="border-gray-300 dark:border-gray-700 text-gray-700 dark:text-white bg-white dark:bg-dark-muted hover:bg-gray-50 dark:hover:bg-gray-800 focus:ring-flag-green"
                icon="heroicon-o-external-link"
                :link="route('raw', $paste->hash)"
                blank
            />
            <x-header-item
                label="Nouveau"
                class="border-flag-green text-flag-green bg-white dark:bg-dark-muted hover:bg-green-50 dark:hover:bg-green-50 focus:ring-flag-green"
                :link="route('home')"
                icon="heroicon-o-document-add"
            />
        </x-header>

        <x-main>
            <pre
                id="code"
                class="h-full font-mono text-sm prettyprint linenums selectable" data-line-numbers="true"
            ><code>{{ $paste->code }}</code></pre>
        </x-main>

        <x-footer />
    </x-layout>

@endsection
