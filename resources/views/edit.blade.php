@extends('layouts.app')

@section('content')
    <form action="{{ route('edit', $paste) }}" method="POST">
        @csrf

        <x-layout>
            <x-header>
                <x-header-item
                    label="Retour"
                    class="border-gray-300 dark:border-gray-700 text-gray-700 dark:text-white bg-white dark:bg-dark-muted hover:bg-gray-50 dark:hover:bg-gray-800 focus:ring-flag-green"
                    icon="heroicon-o-arrow-circle-left"
                    :link="route('show', $paste->hash)"
                />
                <x-header-item
                    label="Réinitialiser"
                    class="border-gray-300 dark:border-gray-700 text-gray-700 dark:text-white bg-white dark:bg-dark-muted hover:bg-gray-50 dark:hover:bg-gray-800 focus:ring-flag-green"
                    type="reset"
                    icon="heroicon-o-ban"
                />
                <x-header-item
                    label="Enregistrer"
                    class="border-flag-green text-flag-green bg-white dark:bg-dark-muted hover:bg-green-50 dark:hover:bg-green-50 focus:ring-flag-green"
                    type="submit"
                    icon="heroicon-o-save"
                />
            </x-header>

            <x-main>
                @include('_editor')
            </x-main>

            <x-footer />
        </x-layout>
    </form>
@stop
