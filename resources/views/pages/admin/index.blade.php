@extends('layouts.admin')
@section('title', 'Dashboard')
@section('dashboard', 'bg-gray-100 dark:bg-gray-700')

@section('content')
    <div class="w-full bg-white dark:bg-gray-900 border border-gray-200 rounded-lg shadow-lg p-6">
        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-bold text-gray-900 dark:text-white">List Pesanan</h2>
        </div>
        <hr class="my-4 border-gray-200 dark:border-gray-700">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    <table
                        class="w-full mb-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left font-semibold text-gray-900 dark:text-white">No</th>
                                <th class="px-4 py-2 text-left font-semibold text-gray-900 dark:text-white">Menu</th>
                                <th class="px-4 py-2 text-left font-semibold text-gray-900 dark:text-white">Jumlah</th>
                                <th class="px-4 py-2 text-left font-semibold text-gray-900 dark:text-white">No Meja</th>
                                <th class="px-4 py-2 text-left font-semibold text-gray-900 dark:text-white">Amount</th>
                                <th class="px-4 py-2 text-left font-semibold text-gray-900 dark:text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalAmount = 0;
                            @endphp
                            @foreach ($pesanan as $key => $item)
                                {{-- @foreach ($item->detailTransaksi as $detail) --}}
                                <tr>
                                    <td class="px-4 py-2 text-left text-gray-900 dark:text-white">{{ $loop->iteration }}
                                    </td>
                                    <td class="px-4 py-2 text-left text-gray-900 dark:text-white">
                                        {{ $item->Menu }}
                                    </td>
                                    <td class="px-4 py-2 text-left text-gray-900 dark:text-white">{{ $item->qty }}
                                    </td>
                                    <td class="px-4 py-2 text-left text-gray-900 dark:text-white">{{ $item->meja }}
                                    </td>
                                    <td class="px-4 py-2 font-semibold text-left text-gray-900 dark:text-white">
                                        {{ $item->harga }}</td>
                                    <td class="px-4 py-2 font-semibold text-left text-gray-900 dark:text-white">
                                        <a href="{{ url('pesanan/update/' . $item->id) }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                            Selesai
                                        </a>
                                    </td>
                                </tr>

                                @php
                                    $totalAmount += $item->harga;
                                @endphp
                                {{-- @endforeach --}}
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="px-4 py-2 text-left font-semibold text-gray-900 dark:text-white">
                                    Total
                                </td>
                                <td class="px-4 py-2 font-semibold text-left text-gray-900 dark:text-white">
                                    {{ $totalAmount }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
