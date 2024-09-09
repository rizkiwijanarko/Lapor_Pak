<aside class="w-[289px] h-full bg-[#1C2434] p-5">
    <div class="flex items-center gap-3 mt-5">
        <img src="{{ asset('img/logo tail.png') }}" alt="">
        <h1 class="text-white text-2xl font-medium">LaporPak</h1>
    </div>

    <div class="border-t border-[#343C4B] mt-10"></div>

    <div class="mt-10 text-[#8796AB] text-sm">MENU</div>

    <a href="{{ url('/admin') }}"
        class="flex items-center px-5 py-3 gap-3 mt-3 hover:bg-[#333A48] @if (request()->path() == 'admin') bg-[#333A48] @endif">
        <box-icon type='solid' name='dashboard' color="white"></box-icon>
        <div class="text-white">Dashboard</div>
    </a>

    <a href="{{ url('/admin/laporan') }}"
        class="flex items-center px-5 py-3 gap-3 mt-3 hover:bg-[#333A48] @if (request()->path() == 'admin/laporan') bg-[#333A48] @endif">
        <box-icon type='solid' name='report' color="white"></box-icon>
        <div class="text-white">Laporan</div>
    </a>

    {{-- <a href="{{ url('/admin/kategori') }}"
        class="flex items-center px-5 py-3 gap-3 mt-3 hover:bg-[#333A48] @if (request()->path() == 'admin/kategori') bg-[#333A48] @endif">
        <box-icon name='purchase-tag-alt' color='#ffffff'></box-icon>
        <div class="text-white">Kategori</div>
    </a> --}}
</aside>
