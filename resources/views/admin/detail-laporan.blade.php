@extends('admin.layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="p-10">
        <button onclick="window.history.back()"
            class="py-2 px-3 rounded bg-blue-100 flex items-center mb-5 transition-all hover:bg-blue-200 ">
            <box-icon name='chevron-left' color="grey"></box-icon>
        </button>
        <h1 class="text-gray-700 mb-5 text-3xl font-semibold">Detail Laporan</h1>

        <img src="https://awsimages.detik.net.id/community/media/visual/2023/05/08/10-km-jalan-kali-cbl-rusak-parah-dan-bahayakan-pengendara.jpeg?w=1200"
            class="w-[600px] rounded-lg object-cover mb-5" alt="">

        <div class="flex gap-5 mb-3 items-center">
            <box-icon name='info-circle' color="grey"></box-icon>
            <div class="text-sm">Belum Diverifikasi</div>
        </div>
        <div class="flex gap-5 mb-3 items-center">
            <box-icon name='map-pin' color='grey'></box-icon>
            <div class="text-sm">Gunung Pati, Semarang, Jawa Tengah</div>
        </div>
        <div class="flex gap-5 mb-5 items-center">
            <box-icon name='calendar' color='grey'></box-icon>
            <div class="text-sm">Belum Diverifikasi</div>
        </div>

        <div class="w-[600px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim accusantium asperiores quis
            quidem
            corrupti dolor facere minus, incidunt quisquam omnis iste nemo aspernatur, consequatur, sapiente repellat culpa?
            Optio, aut iusto?</div>

        {{-- <button onclick="getLocation()">Get My Location</button>

        <p id="location">Coordinates will appear here</p> --}}
    </div>
@endsection
{{-- 
@section('scripts')
    <script></script>
@endsection --}}
