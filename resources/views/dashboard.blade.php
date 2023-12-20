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
                  <div style="width: 20%; float: left;"><strong>Total Sales:</strong> {{ $totalSell }}</div>
                  <div style="width: 20%; float: left;"><strong>Today Total Sales:</strong> {{ $todayTotalSell }}</div>
                  <div style="width: 20%; float: left;"><strong>Yesterday Total Sales:</strong> {{ $yesterdayTotalSell }}</div>
                  <div style="width: 20%; float: left;"><strong>This Month Total Sales:</strong> {{ $thismonthTotalSell }}</div>
                  <div style="width: 20%; float: left;"><strong>Last Month Total Sales:</strong> {{ $lastmonthTotalSell }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                 
                  <table style="width:100%">
                    <tr>
                        <td><strong>Name</strong></td>
                        <td><strong>Price</strong></td>
                        <td><strong>Stock</strong></td>
                        <td><strong>Action</strong></td>
                    </tr>
                  @foreach($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td><a href="/sellproduct/{{ $product->id }}"><button>Sell Product</button></a></td>
                    </tr>
                    @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
