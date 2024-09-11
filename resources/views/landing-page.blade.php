<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporPak - Layanan Pengaduan Masyarakat</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.6.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.6.0/mapbox-gl.js"></script>


    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body class="bg-white">

    <header class="container-fluid bg-white fixed-top">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <div class="logo d-flex align-items-center">
                <img src="{{ asset('images/logo.png') }}" alt="LaporPak Logo" width="40" height="49">

                <span class="ms-2 fw-bold fs-4" style="color: #395bd7;">LaporPak</span>
            </div>
            <nav>
                <ul class="d-flex list-unstyled gap-3 mb-0">
                    <!-- Home Button -->
                    <li>
                        <a href="#" class="btn btn-danger px-4"
                            style="background-color: #FF323E; border-radius: 15px;">HOME</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-link text-decoration-none"
                            style="font-size: 15px; font-weight: bold; color: #395bd7;">TENTANG LaporPak</a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav>
            <ul class="d-flex list-unstyled gap-3 mb-0">
                <!-- Home Button -->
                <li>
                    <a href="{{ url('/landing-page') }}" class="btn btn-danger px-4"
                        style="background-color: #FF323E; border-radius: 15px;">HOME</a>
                </li>
                <li>
                    <a href="{{ url('/about-us') }}" class="btn btn-link text-decoration-none"
                        style="font-size: 15px; font-weight: bold; color: #395bd7;">TENTANG LaporPak</a>
                </li>

            </ul>
        </nav>
        </div>
    </header><!-- Hero Section -->
    <section class="hero-section container-fluid d-flex align-items-center justify-content-center py-5"
        style="min-height: 100vh; margin-top: -50px;">
        <div class="row align-items-center justify-content-center text-center">
            <!-- Left: Text in Blue Box -->
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="hero-content p-4"
                    style="background-color: #395bd7; border-radius: 40px; color: white; max-width: 600px; margin-top: -290px; position: relative;">
                    <h1 class="display-4 fw-bold mb-3" style="line-height: 1.2;">Lingkungan Kita<br>Tanggung Jawab
                        Bersama</h1>
                    <p class="lead">Lapor sekarang, bertindaklah demi masa depan yang lebih baik!</p>
                    <div style="position: absolute; bottom: -40px; left: 20px;">
                        <a href="#form-section" class="btn btn-danger"
                            style="background-color: #FF323E; border-radius: 15px;">Lapor Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Right: Hero Image -->
            <div class="col-md-6 text-center">
                <div class="hero-image" style="margin-top: 100px;">
                    <img src="{{ asset('images/humanhuman.png') }}" alt="Illustration Handshake" class="img-fluid"
                        style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </section>



    <!-- Middle Section with min-height and More Padding -->
    <section class="middle-section text-white text-center py-5"
        style="background-color: #395bd7; z-index: 2; margin-top: -270px; padding-top: 100px; padding-bottom: 200px; min-height: 800px; position: relative;">
        <div class="container">
            <img src="{{ asset('images/icon.png') }}" alt="Tracking Icon" class="mb-3" style="height: 60px;">
            <h2 class="mb-3">Laporkan, pantau, dan wujudkan perubahan</h2>
        </div>
    </section>

    <!-- Form Section with Extra Margin -->
    <section id="form-section" class="form-section container-fluid" style="margin-top: -550px; z-index: 3;">
        <div class="container">
            <div class="row">
                <!-- Left Column: Form -->
                <div class="col-md-8">
                    <!-- Custom Box with Rounded Edges Centered on Page -->
                    <div class="center-container">
                        <div class="custom-box">
                            Sampaikan Pengaduan Anda
                        </div>
                    </div>

                    <form action="submit.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control custom-input" id="email" name="email"
                                placeholder="Ketik Email untuk mengirim kode status pengaduan" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Aduan</label>
                            <select class="form-select custom-input" id="kategori" name="kategori" required>
                                <option value="" disabled selected>Pilih kategori aduan</option>
                                <option value="penipuan">Penipuan</option>
                                <option value="kekerasan">Kekerasan pada Anak/Kekerasan</option>

                                <option value="penipuan">Penipuan</option>
                                <option value="kekerasan">Kekerasan pada Anak/Kekerasan</option>
                                <option value="perjudian">Perjudian</option>
                                <option value="saparatisme">Separatisme/Organisasi Berbahaya</option>
                                <option value="penyalagunaan_obat">Penyalahgunaan Obat Terlarang</option>
                                <option value="konten_melanggar">Konten Melanggar Nilai Sosial Budaya</option>
                                <option value="hoax">Hoax</option>
                                <option value="kinen_negatif">Kinen Negatif yang Direkomendasikan Instansi Sektor
                                </option>
                                <option value="terorisme">Terorisme</option>
                                <option value="pelanggaran_hak_kekayaan">Pelanggaran Hak atas Kekayaan Intelektual
                                </option>
                                <option value="pemerasan">Pemerasan</option>
                                <option value="pelanggaran_keamanan">Pelanggaran Keamanan Informasi</option>
                                <option value="konten_meresahkan">Konten Meresahkan Masyarakat</option>
                                <option value="perdagangan_produk">Perdagangan Produk dengan Tujuan Khusus</option>
                                <option value="" disabled selected>Pilih kategori aduan</option>

                            </select>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="detail" class="form-label">Detail Aduan</label>
                            <textarea class="form-control custom-input" id="detail" name="detail" rows="5"
                                placeholder="Ketik detail aduan anda" required></textarea>
                        </div>

                        <!-- Location and Map Side by Side -->
                        <div class="mb-3 row align-items-center">
                            <div class="col-8">
                                <label for="lokasi" class="form-label">Lokasi Kejadian</label>
                                <div class="input-group">
                                    <input type="text" class="form-control custom-input" id="lokasi"
                                        name="lokasi" placeholder="Pilih lokasi kejadian" readonly required>
                                    <button type="button" class="btn btn-secondary">Pilih Lokasi</button>
                                </div>
                            </div>

                            <!-- Right: Hero Image -->
                            <div class="col-md-6 text-center">
                                <div class="hero-image" style="margin-top: 150px;">
                                    <img src="{{ asset('images/humanhuman.png') }}" alt="Illustration Handshake"
                                        class="img-fluid" style="max-width: 100%; height: auto;">
                                </div>
                            </div>
                        </div>
    </section>


    <!-- Middle Section with min-height and More Padding -->
    <section class="middle-section text-white text-center py-5"
        style="background-color: #395bd7; z-index: 2; margin-top: -270px; padding-top: 100px; padding-bottom: 200px; min-height: 800px; position: relative;">
        <div class="container">
            <img src="{{ asset('images/icon.png') }}" alt="Tracking Icon" class="mb-3" style="height: 60px;">
            <h2 class="mb-3">Laporkan, pantau, dan wujudkan perubahan</h2>
        </div>
    </section>

    <!-- Form Section with Extra Margin -->
    <section id="form-section" class="form-section container-fluid" style="margin-top: -550px; z-index: 3;">
        <div class="container">
            <div class="row">
                <!-- Left Column: Form -->
                <div class="col-md-8">
                    <!-- Custom Box with Rounded Edges Centered on Page -->
                    <div class="center-container">
                        <div class="custom-box">
                            Sampaikan Pengaduan Anda
                        </div>
                    </div>

                    <form onsubmit="submitReportForm(event)" id="report-form" method="POST"
                        enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control custom-input" id="email" name="email"
                                placeholder="Ketik Email untuk mengirim kode status pengaduan" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Aduan</label>
                            <select class="form-select custom-input" id="kategori" name="category_event" required>
                                <option value="" disabled selected>Pilih kategori aduan</option>
                                <option value="" disabled selected>Pilih kategori aduan</option>
                                <option value="kesehatan">Kesehatan</option>
                                <option value="ketertiban_umum">Ketertiban Umum</option>
                                <option value="pekerjaan_umum_dan_penataan_ruang">Pekerjaan Umum dan Penataan Ruang
                                </option>
                                <option value="pemberantasan_penyalahgunaan">Pemberantasan Penyalahgunaan</option>
                                <option value="peredaran_gelap_narkotika">Peredaran Gelap Narkotika</option>
                                <option value="prekursor_narkotika">Prekursor Narkotika</option>
                                <option value="kekerasan_di_satuan_pendidikan">Kekerasan di Satuan Pendidikan</option>
                                <option value="politik_dan_hukum">Politik dan Hukum</option>
                                <option value="peniadaan_mudik">Peniadaan Mudik</option>
                                <option value="perhubungan">Perhubungan</option>
                                <option value="perlindungan_konsumen">Perlindungan Konsumen</option>
                                <option value="topik_lainnya">Topik Lainnya</option>
                                <option value="" disabled selected>Pilih kategori aduan</option>

                            </select>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="detail" class="form-label">Detail Aduan</label>
                            <textarea class="form-control custom-input" id="detail" name="content" rows="5"
                                placeholder="Ketik detail aduan anda" required></textarea>
                        </div>

                        <!-- Location and Map Side by Side -->
                        <div class="mb-3 row align-items-center">
                            <div class="col-8">
                                <label for="lokasi" class="form-label">Lokasi Kejadian</label>
                                <div class="input-group">
                                    <input id="alamat" type="text" class="form-control custom-input"
                                        id="lokasi" name="address" placeholder="Pilih lokasi kejadian" readonly
                                        required>
                                </div>
                                <label for="lokasi" class="form-label mt-5">Detail Lokasi Kejadian</label>
                                <div class="input-group">
                                    <input type="text" class="form-control custom-input" id="lokasi"
                                        name="detail_address" placeholder="Pilih lokasi kejadian" required>
                                </div>
                                <label for="lokasi" class="form-label mt-5">Gambar</label>
                                <div class="input-group">
                                    <input type="file" class="form-control custom-input" id="lokasi"
                                        name="media">
                                </div>
                                {{-- <input type="file" id="fileUpload" name="media"> --}}

                            </div>
                            <div class="col-4">
                                <div id="map" class="map-container">
                                    {{-- <iframe
                                        src="https://www.google.com/maps?q=-6.200000,106.816666&hl=es;z=14&output=embed"
                                        style="width: 100%; height: 150px; border:0;" allowfullscreen=""
                                        loading="lazy"></iframe> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-submit" style="border-radius: 15px;">
                                SUBMIT
                            </button>

                        </div>
                    </form>
                </div>

                <!-- Right Column: Robot and Lampiran Button -->
                <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                    <!-- Lampiran Button with Checkmark -->
                    {{-- <div class="mb-3">
                        <label class="btn btn-outline-primary">
                            <input type="file" id="fileUpload" name="media">
                            <img src="{{ asset('images/camera.png') }}" alt="Camera Icon" class="camera-icon">
                            Lampiran
                        </label>
                        <!-- Placeholder for checkmark -->
                        <span id="upload-status" style="display: none; margin-left: 10px;">✅</span>
                    </div> --}}

                    <!-- Robot Illustration -->
                    <div class="illustration-container">
                        <img src="{{ asset('images/robot.png') }}" alt="Robot Illustration" class="img-fluid">

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        function handleFileUpload() {
            const fileInput = document.getElementById('fileUpload');
            const statusIcon = document.getElementById('upload-status');

            if (fileInput.files.length > 0) {
                statusIcon.style.display = 'inline'; // Show checkmark when a file is selected
            } else {
                statusIcon.style.display = 'none'; // Hide checkmark if no file is selected
            }
        }
    </script>



    <!-- Icon and Title Outside the Tracking Section -->
    <div class="container text-center my-5">
        <img src="{{ asset('images/Tracking.png') }}" alt="Tracking Icon" class="status-img mb-4"
            style="width: 100px; height: auto;">
        <!-- Change the text color to black -->
        <h2 class="status-text mb-4" style="color: black;">Lacak Status Pengaduan Anda</h2>
    </div>

    <!-- Tracking Section with Bootstrap and Styled Input -->
    <section class="tracking-section py-5"
        style="background-color: #395bd7; border-bottom-left-radius: 50px; border-bottom-left-radius: 0px;">
        <div class="container text-center">
            <!-- Title and Input -->
            <div class="row justify-content-start">
                <div class="col-md-6 text-start">
                    <label for="kodePelacakan" class="form-label text-white"
                        style="font-weight: 700; font-size: 1.25rem;">Kode Pelacakan</label>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <!-- Input Field -->
                        <input type="text" id="form-lacak" class="form-control"
                            style="max-width: 300px; padding: 10px; border-radius: 15px; background-color: #ffffff; color: #000000; border: 1px solid #dcdcdc;"
                            placeholder="Ketik kode pelacakan pengaduan">
                        <!-- Button -->
                        <button onclick="lacakLaporan()" class="btn btn-danger px-4 py-2"
                            style="border-radius: 15px; background-color: #FF323E; font-size: 0.875rem;">Lacak</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer Section -->
    <footer class="container-fluid">
        <div class="container">
            <div class="row text-center text-md-start">
                <!-- Company Section -->
                <div class="col-md-3 mb-4">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">About</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Products</a></li>
                    </ul>
                </div>

                <!-- Careers Section -->
                <div class="col-md-3 mb-4">
                    <h5>Careers</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Community Service</a></li>
                    </ul>
                </div>

                <!-- Get in Touch Section -->
                <div class="col-md-3 mb-4">
                    <h5>Get in Touch</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Help Center</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Our Location</a></li>
                    </ul>
                </div>

                <!-- Connect with Us Section -->
                <div class="col-md-3 mb-4">
                    <h5>Connect with Us</h5>
                    <div class="social-links">
                        <a href="#" class="text-white"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="text-white"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="text-white"><i class="bx bxl-linkedin"></i></a>
                        <a href="#" class="text-white"><i class="bx bxl-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Copyright Section -->
            <div class="text-center mt-4">
                <p class="mb-0 text-white">&copy; 2024 LaporPak. All rights reserved.</p>
            </div>
        </div>
    </footer>


    <script>
        async function lacakLaporan() {
            const code = document.querySelector('#form-lacak').value

            const res = await fetch('http://localhost:8000/api/lacak_laporan', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    code
                }),
            })

            const data = await res.json()
            let status;

            if (data.report.status === 'belum_diverifikasi') {
                status = "Dalam Pengajuan"
            } else if (data.report.status === 'sudah_diverifikasi') {
                status = "Sudah Diverifikasi"
            } else if (data.report.status === 'sudah_selesai') {
                status = "Sudah Selesai"
            } else if (data.report.status === 'ditolak') {
                status = 'Ditolak'
            }

            alert('Status laporan anda : ' + status)
        }
        async function submitReportForm(event) {
            event.preventDefault(); // Prevent the default form submission

            const form = event.target; // Get the form element

            // Collect form data
            const formData = new FormData(form);

            console.log('formData', formData)

            // for (const [key, value] of formData.entries()) {
            //     if (value instanceof File) {
            //         console.log(`${key}:`, value.name); // Log file name
            //     } else {
            //         console.log(`${key}: ${value}`);
            //     }
            // }
            // Send the data via fetch to the / api / insert_report endpoint
            const res = await fetch('http://localhost:8000/api/insert_report', {
                method: 'POST',
                body: formData,
            })

            const data = await res.json()

            console.log('data', data)

            alert(data.code + ' adalah kode laporan anda, silakan gunakan untuk mengecek progres laporan')


            // form.reset();

        }

        mapboxgl.accessToken =
            'pk.eyJ1IjoicmFzaWtoYWphIiwiYSI6ImNtMDRrcHpqdzA0eW8ycnB2cGh1NTAwejIifQ.R7nNGQD_7mtMQ1zvlu-iKw';

        function getCurrentCoordinates() {
            return new Promise((resolve, reject) => {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            const coordinates = [position.coords.longitude, position.coords.latitude];
                            console.log('coordinates', coordinates)
                            resolve(coordinates);
                        },
                        (error) => {
                            reject("Error getting location: " + error.message);
                        }
                    );
                } else {
                    reject("Geolocation is not supported by this browser.");
                }
            });
        }

        let map;

        getCurrentCoordinates()
            .then((coordinates) => {
                const map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    projection: 'globe', // Display the map as a globe, since satellite-v9 defaults to Mercator
                    zoom: 15,
                    center: coordinates
                });

                map.addControl(new mapboxgl.FullscreenControl());

                let marker;

                // Add a marker on click
                map.on('click', (e) => {
                    const lngLat = e.lngLat; // Get clicked coordinates [lng, lat]

                    // If a marker already exists, remove it
                    if (marker) marker.remove();

                    // Add a new marker at the clicked location
                    marker = new mapboxgl.Marker()
                        .setLngLat([lngLat.lng, lngLat.lat])
                        .addTo(map);

                    // Reverse geocode the coordinates to get the most accurate address
                    getAddressFromCoordinates(lngLat.lng, lngLat.lat);
                });

            })
            .catch((error) => {
                console.error(error);
            });


        // Function to get city name using reverse geocoding
        function getAddressFromCoordinates(lng, lat) {
            // const geocodingUrl =
            //     `https://api.mapbox.com/geocoding/v5/mapbox.places/${lng},${lat}.json?access_token=${mapboxgl.accessToken}&types=address`;
            const geocodingUrl =
                `https://api.mapbox.com/geocoding/v5/mapbox.places/${lng},${lat}.json?access_token=${mapboxgl.accessToken}&types=neighborhood&language=id`;

            fetch(geocodingUrl)
                .then(response => response.json())
                .then(data => {
                    console.log('data', data)

                    if (data.features.length > 0) {
                        const address = data.features[0].place_name;
                        console.log('Address: ', address);
                        document.querySelector('#alamat').value = address
                    } else {
                        console.log('Address not found');
                    }
                })
                .catch(error => {
                    console.error('Error with reverse geocoding: ', error);
                });
        }
    </script>
</body>

</html>
