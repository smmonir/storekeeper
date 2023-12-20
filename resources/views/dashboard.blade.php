<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <p>Total Sales: {{ $totalSell }}</p>
                  <p>Today Total Sales : {{ $todayTotalSell }}</p>
                  <p>Yesterday Total Sales : {{ $todayTotalSell }}</p>
                  <p>This Month Total Sales : {{ $todayTotalSell }}</p>
                  <p>Last Month Total Sales : {{ $todayTotalSell }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
