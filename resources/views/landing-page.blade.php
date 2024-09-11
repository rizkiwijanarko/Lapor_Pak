

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

 
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body class="bg-white">

<header class="container-fluid bg-white fixed-top">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <div class="logo d-flex align-items-center">
        <img src="{{ asset('images/logo.png')}}" alt="LaporPak Logo" width="40" height="49">
            <span class="ms-2 fw-bold fs-4" style="color: #395bd7;">LaporPak</span>
        </div>
        <nav>
            <ul class="d-flex list-unstyled gap-3 mb-0">
                <!-- Home Button -->
                <li>
                    <a href="#" class="btn btn-danger px-4" style="background-color: #FF323E; border-radius: 15px;">HOME</a>
                </li>
                <li>
                    <a href="#" class="btn btn-link text-decoration-none" style="font-size: 15px; font-weight: bold; color: #395bd7;">TENTANG LaporPak</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- Hero Section -->
<section class="hero-section container-fluid d-flex align-items-center justify-content-center py-5" style="min-height: 100vh;">
  <div class="row align-items-center justify-content-center text-center">
    <!-- Left: Text in Blue Box -->
    <div class="col-md-6 mb-3 mb-md-0">
      <div class="hero-content p-4" style="background-color: #395bd7; border-radius: 40px; color: white; max-width: 600px; margin-top: -260px; position: relative;">
        <h1 class="display-4 fw-bold mb-3" style="line-height: 1.2;">Lingkungan Kita<br>Tanggung Jawab Bersama</h1>
        <p class="lead">Lapor sekarang, bertindaklah demi masa depan yang lebih baik!</p>
        <div style="position: absolute; bottom: -40px; left: 20px;">
          <a href="#form-section" class="btn btn-danger" style="background-color: #FF323E; border-radius: 15px;">Lapor Sekarang</a>
        </div>
        <!-- Lapor Sekarang Button Positioned at Bottom Left of Text -->
        <div style="position: absolute; bottom: -40px; left: 20px;">
          <a href="#form-section" class="btn btn-danger" style="background-color: #FF323E; border-radius: 15px;">Lapor Sekarang</a>
        </div>
      </div>
    </div>

    <!-- Right: Hero Image -->
    <div class="col-md-6 text-center">
      <div class="hero-image" style="margin-top: 150px;">
        <img src="{{ asset('images/humanhuman.png') }}" alt="Illustration Handshake" class="img-fluid" style="max-width: 100%; height: auto;">
      </div>
    </div>
  </div>
</section>


<!-- Middle Section with min-height and More Padding -->
<section class="middle-section text-white text-center py-5" 
    style="background-color: #395bd7; z-index: 2; margin-top: -270px; padding-top: 100px; padding-bottom: 200px; min-height: 800px; position: relative;">
  <div class="container">
    <img  src="{{ asset('images/icon.png') }}" alt="Tracking Icon" class="mb-3" style="height: 60px;">
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
              <input type="email" class="form-control custom-input" id="email" name="email" placeholder="Ketik Email untuk mengirim kode status pengaduan" required>
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
              <option value="kinen_negatif">Kinen Negatif yang Direkomendasikan Instansi Sektor</option>
              <option value="terorisme">Terorisme</option>
              <option value="pelanggaran_hak_kekayaan">Pelanggaran Hak atas Kekayaan Intelektual</option>
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
              <textarea class="form-control custom-input" id="detail" name="detail" rows="5" placeholder="Ketik detail aduan anda" required></textarea>
            </div>

            <!-- Location and Map Side by Side -->
            <div class="mb-3 row align-items-center">
              <div class="col-8">
                <label for="lokasi" class="form-label">Lokasi Kejadian</label>
                <div class="input-group">
                  <input type="text" class="form-control custom-input" id="lokasi" name="lokasi" placeholder="Pilih lokasi kejadian" readonly required>
                  <button type="button" class="btn btn-secondary">Pilih Lokasi</button>
                </div>
              </div>
              <div class="col-4">
                <div class="map-container">
                  <iframe src="https://www.google.com/maps?q=-6.200000,106.816666&hl=es;z=14&output=embed" style="width: 100%; height: 150px; border:0;" allowfullscreen="" loading="lazy"></iframe>
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
          <div class="mb-3">
            <label class="btn btn-outline-primary">
              <input type="file" id="fileUpload" name="fileUpload" style="display: none;" onchange="handleFileUpload()">
              <img src="{{ asset('images/camera.png') }}" alt="Camera Icon" class="camera-icon"> Lampiran
            </label>
            <!-- Placeholder for checkmark -->
            <span id="upload-status" style="display: none; margin-left: 10px;">✅</span>
          </div>

          <!-- Robot Illustration -->
          <div class="illustration-container">
            <img src="{{ asset('images/robot.png') }}" alt="Robot Illustration" class="img-fluid">
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
  <img src="{{ asset('images/Tracking.png') }}" alt="Tracking Icon" class="status-img mb-4" style="width: 100px; height: auto;">
  <!-- Change the text color to black -->
  <h2 class="status-text mb-4" style="color: black;">Lacak Status Pengaduan Anda</h2>
</div>

<!-- Tracking Section with Bootstrap and Styled Input -->
<section class="tracking-section py-5" style="background-color: #395bd7; border-bottom-left-radius: 50px; border-bottom-left-radius: 0px;">
  <div class="container text-center">
    <!-- Title and Input -->
    <div class="row justify-content-start">
      <div class="col-md-6 text-start">
        <label for="kodePelacakan" class="form-label text-white" style="font-weight: 700; font-size: 1.25rem;">Kode Pelacakan</label>
        <div class="d-flex align-items-center gap-3 mb-4">
          <!-- Input Field -->
          <input type="text" id="kodePelacakan" class="form-control" style="max-width: 300px; padding: 10px; border-radius: 15px; background-color: #ffffff; color: #000000; border: 1px solid #dcdcdc;" placeholder="Ketik kode pelacakan pengaduan">
          <!-- Button -->
          <button class="btn btn-danger px-4 py-2" style="border-radius: 15px; background-color: #FF323E; font-size: 0.875rem;">Lacak</button>
        </div>
      </div>
    </div>

    <!-- Progress Bar -->
    <div class="progress-bar" style="margin-top: 40px;">
      <div class="progress d-flex align-items-center justify-content-center" style="gap: 20px;">
        <div id="circle1" class="circle bg-danger rounded-circle" style="width: 40px; height: 40px;"></div>
        <div id="line1" class="line bg-danger flex-grow-1" style="height: 6px;"></div>
        <div id="circle2" class="circle bg-danger rounded-circle" style="width: 40px; height: 40px;"></div>
        <div id="line2" class="line bg-secondary flex-grow-1" style="height: 6px;"></div>
        <div id="circle3" class="circle bg-secondary rounded-circle" style="width: 40px; height: 40px;"></div>
      </div>

      <!-- Status Labels with Icons -->
      <!-- Adding more space between the status labels and the progress bar -->
      <div class="status-labels d-flex justify-content-between mt-5" style="gap: 50px; padding-top: 30px;">
        <span class="status-item d-flex align-items-center">
          <img src="{{ asset('images/pengaduan_dikirim.png') }}" alt="Pengaduan dikirim" class="status-icon me-2" style="width: 30px; height: auto;">
          <span class="text-white fs-5">Pengaduan dikirim</span>
        </span>
        <span class="status-item d-flex align-items-center">
          <img ssrc="{{ asset('images/telahdiverivikasi.png') }}" alt="Telah diverifikasi" class="status-icon me-2" style="width: 30px; height: auto;">
          <span class="text-white fs-5">Telah diverifikasi</span>
        </span>
        <span class="status-item d-flex align-items-center">
          <img src="{{ asset('images/telahdiselesaikan.png') }}"alt="Telah diselesaikan" class="status-icon me-2" style="width: 30px; height: auto;">
          <span class="text-white fs-5">Telah diselesaikan</span>
        </span>
      </div>
    </div>
  </div>
</section>






  <!-- Carousel Section -->
  <section class="carousel-section py-5">
    <div id="pengaduanCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img ssrc="{{ asset('images/berita1.png') }}"class="d-block w-100" alt="Pengaduan 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>4 ekor Satwa yang Dilindungi berhasil dievakuasi sebelum sempat dijual oknum</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/berita2.png') }}"class="d-block w-100" alt="Pengaduan 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Pohon tumbang di jalan protokol berhasil dibersihkan dengan cepat oleh petugas</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/berita3.png') }}"class="d-block w-100" alt="Pengaduan 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Kecelakaan lalu lintas yang melibatkan dua kendaraan berhasil ditangani</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#pengaduanCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#pengaduanCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
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


</body>
</html>