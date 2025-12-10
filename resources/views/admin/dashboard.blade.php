<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            🛡️ Dashboard Administrateur
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                <p class="text-gray-600">
                    Bienvenue sur le dashboard administrateur.
                </p>
                <p class="mt-2">
                    <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline">
                        → Aller au dashboard principal
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
