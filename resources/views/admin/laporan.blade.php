@extends('admin.layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="p-10">
        <h1 class="text-gray-700 text-3xl font-semibold">Laporan</h1>
        <p class="mt-4 text-gray-500">Berikut adalah data-data laporan yang sudah diterima</p>

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

        function transformToNormal(category) {
            return category
                .split('_') // Split by underscores
                .map(word => word.charAt(0).toUpperCase() + word.slice(1)) // Capitalize first letter of each word
                .join(' '); // Join back with spaces
        };

        function formatDate(timestamp) {
            const date = new Date(timestamp);

            const options = {
                day: 'numeric',
                month: 'short',
                year: 'numeric'
            };
            return date.toLocaleDateString('en-GB', options);
        }

        async function update_status(id, status) {
            fetch('http://localhost:8000/api/update_status', {
                method: 'put',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id,
                    status
                })
            })

            location.reload();
        }

        new gridjs.Grid({
            columns: [{
                    name: 'Kode',
                    sort: false
                },
                "Kategori",
                {
                    name: 'Laporan',
                    sort: false
                },
                "Status",
                {
                    name: 'Tanggal',
                    sort: true,
                    formatter: cell => formatDate(cell)
                },
                "Alamat",
                {
                    name: 'Aksi',
                    sort: false
                }
            ],
            server: {
                url: 'http://localhost:8000/api/get_all_reports',
                then: (data) => data.map(report => ([
                    report.code,
                    transformToNormal(report.category_event),
                    report.content,
                    gridjs.html(`
                <div class="relative">
                    <button onclick="toggleStatus(${report.id})" class="text-[10px] hover:bg-red-600 transition-all p-1 rounded bg-red-500 w-fit mx-auto whitespace-nowrap text-white">
                        ${transformToNormal(report.status)}
                    </button>
                    <div id="data-${report.id}" class="absolute p-1.5 hidden top-0 rounded border left-[calc(100%+4px)] w-52 bg-white flex flex-col">
                        <button onclick="update_status(${report.id}, 'belum_diverifikasi')" class="flex justify-between hover:bg-gray-100 p-2 rounded ${report.status === 'belum_diverifikasi' ? 'bg-gray-100' : ''}">
                            <div class="text-[10px] p-1 rounded  bg-red-500 w-fit whitespace-nowrap text-white">Belum Diverifikasi</div>
                            ${report.status === 'belum_diverifikasi' ? "<box-icon name='check' color='grey'></box-icon>" : ''}
                        </button>
                        <button onclick="update_status(${report.id}, 'sudah_diverifikasi')" class="flex justify-between hover:bg-gray-100 p-2 rounded ${report.status === 'sudah_diverifikasi' ? 'bg-gray-100' : ''}">
                            <div class="text-[10px] p-1 rounded  bg-yellow-500 w-fit whitespace-nowrap text-white">Sudah Diverifikasi</div>
                            ${report.status === 'sudah_diverifikasi' ? "<box-icon name='check' color='grey'></box-icon>" : ''}
                        </button>
                        <button onclick="update_status(${report.id}, 'sudah_selesai')" class="flex justify-between hover:bg-gray-100 p-2 rounded ${report.status === 'sudah_selesai' ? 'bg-gray-100' : ''}">
                            <div class="text-[10px] p-1 rounded bg-green-500 w-fit whitespace-nowrap text-white">Sudah Selesai</div>
                            ${report.status === 'sudah_selesai' ? "<box-icon name='check' color='grey'></box-icon>" : ''}
                        </button>
                        <button onclick="update_status(${report.id}, 'ditolak')" class="flex justify-between hover:bg-gray-100 p-2 rounded ${report.status === 'ditolak' ? 'bg-gray-100' : ''}">
                            <div class="text-[10px] p-1 rounded bg-red-500 w-fit whitespace-nowrap text-white">Ditolak</div>
                            ${report.status === 'ditolak' ? "<box-icon name='check' color='grey'></box-icon>" : ''}
                        </button>
                    </div>
                </div>
            `),
                    report.created_at,
                    report.address,
                    gridjs.html(`
                <a href='{{ url('admin/laporan/${report.id}') }}' class='flex justify-center items-center size-8 bg-gray-100 rounded hover:bg-gray-200'>
                    <box-icon type='solid' name='show' size='20px' color='grey'></box-icon>
                </a>
            `)
                ]))
            },
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
