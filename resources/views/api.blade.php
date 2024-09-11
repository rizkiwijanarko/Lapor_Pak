<!DOCTYPE html>
<html style="scroll-behavior: smooth;" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/styles/atom-one-dark.min.css"
        rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Api</title>
</head>

<body class="font-['Poppins']">
    <header class="">
        <div class="px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <button type="button"
                    class="inline-flex p-1 text-black transition-all duration-200 border border-black lg:hidden focus:bg-gray-100 hover:bg-gray-100">
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="hidden ml-auto lg:flex lg:items-center lg:justify-center lg:space-x-10">
                    <a href="#home" title=""
                        class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80">
                        Home </a>

                    <a href="#contoh_request" title=""
                        class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80">
                        Contoh Request</a>

                    <a href="#query_parameter" title=""
                        class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80">
                        Query Parameter </a>

                    <a href="#contoh_response" title=""
                        class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80">
                        Contoh Response </a>
                </div>
            </div>
        </div>
    </header>
    <div class="bg-gradient-to-b from-green-50 to-green-100">
        <section id="home" class="py-10 sm:py-16 lg:py-24 h-screen">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex flex-col w-[800px] mx-auto items-center">
                    <h1 class="text-4xl font-bold text-center text-black sm:text-6xl lg:text-6xl">
                        Pantau Laporan Sambil Ngupi!
                        <div class="relative inline-flex">
                            <span class="absolute inset-x-0 bottom-0 border-b-[30px] border-[#4ADE80]"></span>
                            <h1 class="relative text-4xl font-bold text-black sm:text-6xl lg:text-6xl">LaporPak API.
                            </h1>
                        </div>
                    </h1>

                    <p class="mt-8 text-base text-center text-black sm:text-xl">Jembatan digital super canggih! Bantu
                        pemerintah tahu masalah kamu, tanpa perlu teriak-teriak di balai kota. Yuk, bikin kota kita
                        makin kece!</p>

                    <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                        <button onclick="toggleModal()"
                            class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 bg-orange-500 hover:bg-orange-600 focus:bg-orange-600"
                            role="button">Dapatkan API key</button>

                        <a href="#contoh_request" title=""
                            class="inline-flex gap-3 items-center mt-6 text-base font-semibold transition-all duration-200 sm:mt-0 hover:opacity-80">
                            <svg width="40px" height="40px" viewBox="-8 0 58 58" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title></title>
                                    <desc></desc>
                                    <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none"
                                        stroke-width="1">
                                        <g id="008---Book">
                                            <path
                                                d="M19.342,57.973 L17.158,57.221 C17.0555695,57.186028 16.9444305,57.186028 16.842,57.221 L14.658,57.973 C14.502887,58.0247526 14.3322694,57.9973884 14.2011203,57.8997242 C14.0699712,57.80206 13.9948647,57.6464381 14,57.483 L14,50 L20,50 L20,57.483 C20.0051353,57.6464381 19.9300288,57.80206 19.7988797,57.8997242 C19.6677306,57.9973884 19.497113,58.0247526 19.342,57.973 Z"
                                                fill="#763636" id="Path"></path>
                                            <path
                                                d="M1,0 L36,0 C39.3137085,6.66133815e-16 42,2.6862915 42,6 L42,46 C42,49.3137085 39.3137085,52 36,52 L1,52 C0.44771525,52 0,51.5522847 0,51 L0,1 C0,0.44771525 0.44771525,0 1,0 Z"
                                                fill="#766458" id="Path"></path>
                                            <path
                                                d="M8,0 L8,52 L1,52 C0.44771525,52 0,51.5522847 0,51 L0,1 C0,0.44771525 0.44771525,0 1,0 L8,0 Z"
                                                fill="#63544A" id="Path"></path>
                                            <path
                                                d="M38,16 C37.4477153,16 37,15.5522847 37,15 L37,13 C37,12.4477153 37.4477153,12 38,12 C38.5522847,12 39,12.4477153 39,13 L39,15 C39,15.5522847 38.5522847,16 38,16 Z"
                                                fill="#8A7567" id="Path"></path>
                                            <path
                                                d="M38,10 C37.4477153,10 37,9.55228475 37,9 L37,6 C37,5.44771525 36.5522847,5 36,5 L32,5 C31.4477153,5 31,4.55228475 31,4 C31,3.44771525 31.4477153,3 32,3 L36,3 C37.6568542,3 39,4.34314575 39,6 L39,9 C39,9.55228475 38.5522847,10 38,10 Z"
                                                fill="#8A7567" id="Path"></path>
                                            <path
                                                d="M4,47 C3.44771525,47 3,46.5522847 3,46 L3,34 C3,33.4477153 3.44771525,33 4,33 C4.55228475,33 5,33.4477153 5,34 L5,46 C5,46.5522847 4.55228475,47 4,47 Z"
                                                fill="#766458" id="Path"></path>
                                            <path
                                                d="M4,31 C3.44771525,31 3,30.5522847 3,30 L3,28 C3,27.4477153 3.44771525,27 4,27 C4.55228475,27 5,27.4477153 5,28 L5,30 C5,30.5522847 4.55228475,31 4,31 Z"
                                                fill="#766458" id="Path"></path>
                                            <rect fill="#F9E6A1" height="12" id="Rectangle" width="34" x="8"
                                                y="30"></rect>
                                            <path
                                                d="M31,35 L15,35 C14.4477153,35 14,34.5522847 14,34 C14,33.4477153 14.4477153,33 15,33 L31,33 C31.5522847,33 32,33.4477153 32,34 C32,34.5522847 31.5522847,35 31,35 Z"
                                                fill="#B8AA77" id="Path"></path>
                                            <path
                                                d="M24,39 L15,39 C14.4477153,39 14,38.5522847 14,38 C14,37.4477153 14.4477153,37 15,37 L24,37 C24.5522847,37 25,37.4477153 25,38 C25,38.5522847 24.5522847,39 24,39 Z"
                                                fill="#B8AA77" id="Path"></path>
                                            <path
                                                d="M29,39 L28,39 C27.4477153,39 27,38.5522847 27,38 C27,37.4477153 27.4477153,37 28,37 L29,37 C29.5522847,37 30,37.4477153 30,38 C30,38.5522847 29.5522847,39 29,39 Z"
                                                fill="#B8AA77" id="Path"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            Lihat Petunjuk
                        </a>
                    </div>
                </div>

                {{-- <div>
                        <img class="w-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/2/hero-img.png"
                            alt="" />
                    </div> --}}
            </div>
        </section>
        <section id="contoh_request">
            <div class="flex gap-10 mx-auto p-12">
                <!-- Adjusted width and height of the code block -->
                <div>
                    <pre>
                        <code class="rounded shadow">
async function getData() {
    const baseUrl = 'http://localhost:8000/api/v1/get_data';

    // Create a new URL object
    const url = new URL(baseUrl);
    url.searchParams.append('apikey', 'your_api_key');

    // Add optional query parameters
    url.searchParams.append('category', 'something');
    url.searchParams.append('start_date', '28_09_2023');
    url.searchParams.append('end_date', '28_09_2024');
    url.searchParams.append('province', 'jawa_tengah');

    // fetch with the constructed URL
    const res = await fetch(url.toString())
    const data = await res.json()

    return data
}
                        </code>
                    </pre>
                </div>
                <div class="flex flex-col gap-7 w-[500px] justify-center">
                    <h1 class="text-5xl text-gray-800 font-bold">Cari Tahu Masalah Warga, Sambil Ngopi! ☕</h1>
                    <div class="text-gray-600">Intip isu lokal se-Jawa Tengah dengan API canggih. Cukup set tanggal,
                        kategori, dan lokasi, lalu fetch data masalah warga secepat bikin kopi instan!</div>
                </div>
            </div>
        </section>
        <section id="query_parameter" class="h-screen px-12 py-10">
            <h1 class="text-center text-5xl font-semibold text-gray-800">Query Parameter</h1>
            <div class="text-center text-gray-500 mt-5">Daftar parameter-parameter yang bisa ditambahkan untuk
                mendapatkan data</div>

            <table class="w-full mt-10 text-sm">
                <thead>
                    <tr>
                        <th class="py-3 px-4 font-medium border-b border-gray-300 text-start">Parameter</th>
                        <th class="py-3 px-4 font-medium border-b border-gray-300 text-start">Deskripsi</th>
                        <th class="py-3 px-4 font-medium border-b border-gray-300 text-start">Contoh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-3 px-4 border border-gray-300 align-top">
                            <pre class="px-2 rounded bg-gray-300 w-fit">category</pre>
                        </td>
                        <td class="py-3 align-top px-4 border border-gray-300">Mengambil data berdasarkan
                            kategori
                            permasalahan
                            warga</td>
                        <td class="py-3 px-4 border border-gray-300 w-80 align-top">
                            <div>Kategori-kategori yang bisa digunakan:</div>
                            <div class="mt-2 flex flex-wrap gap-1">
                                <pre class="px-2 rounded bg-gray-300 w-fit">agama</pre>
                                <pre class="px-2 rounded bg-gray-300 w-fit">kesehatan</pre>
                                <pre class="px-2 rounded bg-gray-300 w-fit">ketertiban_umum</pre>
                                <pre class="px-2 rounded bg-gray-300 w-fit">pekerjaan_umum_dan_penataan_ruang</pre>
                                <pre class="px-2 rounded bg-gray-300 w-fit">pemberantasan_penyalahgunaan</pre>
                                <pre class="px-2 rounded bg-gray-300 w-fit">peredaran_gelap_narkotika</pre>
                                <pre class="px-2 rounded bg-gray-300 w-fit">prekursor_narkotika</pre>
                                <pre class="px-2 rounded bg-gray-300 w-fit">kekerasan_di_satuan_pendidikan</pre>
                                <pre class="px-2 rounded bg-gray-300 w-fit">politik_dan_hukum</pre>
                                <pre class="px-2 rounded bg-gray-300 w-fit">peniadaan_mudik</pre>
                                <pre class="px-2 rounded bg-gray-300 w-fit">perhubungan</pre>
                                <pre class="px-2 rounded bg-gray-300 w-fit">perlindungan_konsumen</pre>
                                <pre class="px-2 rounded bg-gray-300 w-fit">topik_lainnya</pre>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 border border-gray-300 align-top">
                            <pre class="px-2 rounded bg-gray-300 w-fit">start_date</pre>
                        </td>
                        <td class="py-3 align-top px-4 border border-gray-300">Tanggal mulai pengambilan data dengan
                            format
                            <pre class="px-2 rounded bg-gray-300 w-fit inline ml-1">dd_mm_yyyy</pre>
                        </td>
                        <td class="py-3 align-top px-4 border border-gray-300">
                            <pre class="px-2 rounded bg-gray-300 w-fit">26_09_2023</pre>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 border border-gray-300 align-top">
                            <pre class="px-2 rounded bg-gray-300 w-fit">end_date</pre>
                        </td>
                        <td class="py-3 align-top px-4 border border-gray-300">Tanggal akhir pengambilan data dengan
                            format
                            <pre class="px-2 rounded bg-gray-300 w-fit inline ml-1">dd_mm_yyyy</pre>
                        </td>
                        <td class="py-3 align-top px-4 border border-gray-300">
                            <pre class="px-2 rounded bg-gray-300 w-fit">26_09_2024</pre>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 border border-gray-300 align-top">
                            <pre class="px-2 rounded bg-gray-300 w-fit">province</pre>
                        </td>
                        <td class="py-3 align-top px-4 border border-gray-300">
                            Data berdasarkan semua provinsi yang ada di Indonesia, nama provinsi dalam bentuk
                            <pre class="px-2 rounded bg-gray-300 w-fit inline">snake_case</pre>
                        </td>
                        <td class="py-3 align-top px-4 border border-gray-300">
                            <pre class="px-2 rounded bg-gray-300 w-fit">jawa_tengah</pre>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section id="contoh_response">


            <!-- Modal toggle -->
            {{-- <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Toggle modal
            </button> --}}

            <!-- Main modal -->
            <div id="authentication-modal"
                class="fixed bg-black/90 hidden top-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-screen flex">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Dapatkan API Key
                            </h3>
                            <button type="button" onclick="toggleModal()"
                                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="authentication-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <form class="space-y-4" action="#">
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                                        Email Kamu</label>
                                    <input type="email" name="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="name@company.com" required />
                                </div>

                                <div id="email-message">

                                </div>




                                <button id="submit-button" type="button" onclick="makeKey()"
                                    class="w-full text-white bg-[#F97316] hover:bg-[#D06114] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Dapatkan
                                    Key</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <footer class="py-12 bg-gradient-to-r from-fuchsia-600 to-blue-600">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="text-center xl:flex xl:items-center xl:justify-between xl:text-left">
                <div class="xl:flex xl:items-center xl:justify-start">
                    <p class="mt-5 text-sm text-white xl:ml-6 xl:mt-0">© Copyright 2024 LaporPak API</p>
                </div>

                <div class="items-center mt-8 xl:mt-0 xl:flex xl:justify-end xl:space-x-8">
                    <ul class="flex flex-wrap items-center justify-center gap-x-8 gap-y-3 xl:justify-end">
                        <li>
                            <a href="#home" title=""
                                class="text-sm text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                Home </a>
                        </li>

                        <li>
                            <a href="#contoh_request" title=""
                                class="text-sm text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                Contoh Request </a>
                        </li>

                        <li>
                            <a href="#query_parameter" title=""
                                class="text-sm text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                Query Parameter</a>
                        </li>

                        <li>
                            <a href="#contoh_response" title=""
                                class="text-sm text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                Contoh Response </a>
                        </li>
                    </ul>

                    <div class="w-full h-px mt-8 mb-5 xl:w-px xl:m-0 xl:h-6 bg-gray-50/20"></div>

                    <ul class="flex items-center justify-center space-x-8 xl:justify-end">
                        <li>
                            <a href="#" title=""
                                class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                                    </path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        hljs.highlightAll();

        function toggleModal() {
            const modal = document.querySelector('#authentication-modal')
            document.body.classList.toggle('overflow-hidden')
            modal.classList.toggle('hidden')
        }

        async function makeKey() {
            const email = document.querySelector('#email').value
            const buttonEl = document.querySelector('#submit-button')

            buttonEl.disabled = true
            buttonEl.innerText = 'Tunggu ...'
            const res = await fetch('http://localhost:8000/api/make_key', {
                method: 'post',
                headers: {
                    'Content-Type': "application/json"
                },
                body: JSON.stringify({
                    email
                })
            })

            const data = await res.json()

            if (data.success) {
                document.querySelector('#email-message').innerHTML =
                    `<div class="mt-1 text-green-500 text-sm">Api key sudah kami kirim ke email kamu, tunggu sebentar</div>`
            } else {
                document.querySelector('#email-message').innerHTML =
                    `<div class="mt-1 text-red-600 text-sm">Email ini sudah pernah mendapatkan key, cek lagi emailmu</div>`
            }

            buttonEl.disabled = false
            buttonEl.innerText = 'Dapatkan Key'
        }
    </script>

</body>

</html>
