@extends('admin.layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="p-10">
        <h1 class="text-gray-700 text-3xl font-semibold">Laporan</h1>
        <p class="mt-4 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint dolorem repellat ?
            Deleniti, assumenda.</p>

        <div id="wrapper" class="mt-10"></div>

        {{-- <button onclick="getLocation()">Get My Location</button>

        <p id="location">Coordinates will appear here</p> --}}
    </div>
@endsection

@section('scripts')
    <script>
        function toggleStatus(id) {
            console.log('tes')
            const statusDropdownEl = document.querySelector(`#data-${id}`)
            statusDropdownEl.classList.toggle('hidden')
        }

        new gridjs.Grid({
            columns: [{
                    name: 'Kode',
                    sort: false
                }, {
                    name: 'Laporan',
                    sort: false
                },
                "Status",
                "Tanggal",
                "Alamat",
                {
                    name: 'Aksi',
                    sort: false
                }
            ],
            data: [
                ["sldkjf234",
                    " Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptatum odit quae voluptates soluta perferendis laborum? Perferendis ex, sint tenetur quasi, alias commodi quidem a eveniet nostrum eos, quas repudiandae?  ",
                    gridjs.html(
                        `
                        <div class="relative">
                            <button onclick="toggleStatus(1)" class="text-[10px] hover:bg-red-600 transition-all p-1 rounded bg-red-500 w-fit mx-auto whitespace-nowrap text-white">Belum Diverifikasi</button>
                            <div id="data-1" class="absolute p-1.5 hidden top-0 rounded border left-[calc(100%+4px)] w-52 bg-white flex flex-col">
                                <a href="#" class="flex justify-between hover:bg-gray-100 p-2 rounded">
                                    <div class="text-[10px] p-1 rounded bg-gray-500 w-fit whitespace-nowrap text-white">Belum Diverifikasi</div>
                                    <box-icon name='check' color='grey' ></box-icon>
                                </a>
                                <a href="#" class="flex justify-between hover:bg-gray-100 p-2 rounded">
                                    <div class="text-[10px] p-1 rounded bg-yellow-500 w-fit whitespace-nowrap text-white">Sudah Diverifikasi</div>
                                </a>
                                <a href="#" class="flex justify-between hover:bg-gray-100 p-2 rounded">
                                    <div class="text-[10px] p-1 rounded bg-green-500 w-fit whitespace-nowrap text-white">Sudah Selesai</div>
                                </a>
                                <a href="#" class="flex justify-between hover:bg-gray-100 p-2 rounded">
                                    <div class="text-[10px] p-1 rounded bg-red-500 w-fit whitespace-nowrap text-white">Dibatalkan</div>
                                </a>
                            </div>
                        </div>
                        `
                    ),
                    "23 Desember 2024", "Gunung Pati, Semarang, Jawa Tengah", gridjs.html(
                        `<a href="{{ url('admin/laporan/1') }}" class="flex justify-center items-center size-8 bg-gray-100 rounded hover:bg-gray-200"><box-icon type='solid' name='show' size='20px' color="grey"></box-icon></a>`
                    )
                ],
                ["sldkjf234",
                    " Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptatum odit quae voluptates soluta perferendis laborum? Perferendis ex, sint tenetur quasi, alias commodi quidem a eveniet nostrum eos, quas repudiandae?  ",
                    gridjs.html(
                        `<div class="text-[10px] p-1 rounded bg-yellow-500 w-fit mx-auto whitespace-nowrap text-white">Sudah Diverifikasi</div>`
                    ),
                    "23 Desember 2024", "Gunung Pati, Semarang, Jawa Tengah", gridjs.html(
                        `<a href="{{ url('admin/laporan/1') }}" class="flex justify-center items-center size-8 bg-gray-100 rounded hover:bg-gray-200"><box-icon type='solid' name='show' size='20px' color="grey"></box-icon></a>`
                    )
                ],
                ["sldkjf234",
                    " Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptatum odit quae voluptates soluta perferendis laborum? Perferendis ex, sint tenetur quasi, alias commodi quidem a eveniet nostrum eos, quas repudiandae?  ",
                    gridjs.html(
                        `<div class="text-[10px] p-1 rounded bg-green-500 w-fit mx-auto whitespace-nowrap text-white">Sudah Selesai</div>`
                    ),
                    "23 Desember 2024", "Gunung Pati, Semarang, Jawa Tengah", gridjs.html(
                        "<a href='{{ url('admin/laporan/1') }}' class='flex justify-center items-center size-8 bg-gray-100 rounded hover:bg-gray-200'><box-icon type='solid' name='show' size='20px' color='grey'></box-icon></a>"
                    )
                ],
            ],
            className: {
                container: 'text-xs',
            },
            search: true,
            sort: true,
            pagination: {
                limit: 10,
                summary: false
            }
        }).render(document.getElementById("wrapper"));
    </script>
@endsection
