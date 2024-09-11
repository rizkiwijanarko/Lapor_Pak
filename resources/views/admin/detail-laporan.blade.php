@extends('admin.layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="p-10">
        <button onclick="window.history.back()"
            class="py-2 px-3 rounded bg-blue-100 flex items-center mb-5 transition-all hover:bg-blue-200 ">
            <box-icon name='chevron-left' color="grey"></box-icon>
        </button>
        <h1 class="text-gray-700 mb-10 text-3xl font-semibold">Detail Laporan</h1>

        @if ($report->media)
            <img src="{{ asset('storage/media/y3AEmhaK4R0dFfSogc891PFeIm2kSLmtLyjRaJKT.jpg') }}"
                class="w-[600px] rounded-lg object-cover mb-5" alt="">
            tes
        @endif

        <div class="flex gap-5 mb-3 items-center">
            <box-icon name='info-circle' color="grey"></box-icon>
            <div class="text-sm">{{ $report->status }}</div>
        </div>
        <div class="flex gap-5 mb-3 items-center">
            <box-icon name='map-pin' color='grey'></box-icon>
            <div class="text-sm">{{ $report->address }}</div>
        </div>
        <div class="flex gap-5 mb-5 items-center">
            <box-icon name='calendar' color='grey'></box-icon>
            <div class="text-sm">{{ $formattedDate }}</div>
        </div>
        <div class="flex gap-5 mb-5 items-center">
            <box-icon name='purchase-tag-alt' color='grey'></box-icon>
            <div class="text-sm">{{ $report->category_event }}</div>
        </div>

        <div class="w-[600px]">{{ $report->content }}</div>
    </div>
@endsection
