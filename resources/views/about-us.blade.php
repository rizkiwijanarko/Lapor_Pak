<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporPak - Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/stylesaboutus.css') }}">

   
</head>
<body class="about-page">

<!-- Header -->
<header class="container-fluid bg-white fixed-top">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <div class="logo d-flex align-items-center">
            <img src="{{ asset('images/logo.png') }}" alt="LaporPak Logo" width="40" height="49">
            <span class="ms-2 fw-bold fs-4" style="color: #395bd7;">LaporPak</span>
        </div>
        <nav>
            <ul class="d-flex list-unstyled gap-3 mb-0">
                <li>
                    <a href="{{ url('/landing-page') }}" class="btn text-decoration-none" style="font-size: 15px; font-weight: bold; color: #395bd7; background-color: transparent; border-radius: 15px; padding: 6px 12px;">HOME</a>
                </li>
                <li>
                    <a href="{{ url('/about-us') }}" class="btn btn-danger px-4" style="background-color: #FF323E; border-radius: 15px; padding: 6px 12px;">TENTANG LaporPak</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section class="hero-section container-fluid" style="padding-top: 100px;">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <!-- Left Text -->
        <div class="hero-text d-flex justify-content-end" style="flex: 1; padding-right: 20px; text-align: right;">
    <h1 style="font-size: 3rem; line-height: 1.2;">Laporan <br>Anda<br>membantu <br>kami<br>Melayani<br>Lebih <br> Baik</h1>
</div>


        <!-- Center Image -->
        <div class="hero-image" style="flex: 1; text-align: center; margin-top: 20px;">
            <img src="{{ asset('images/aboutushuman.png') }}" alt="Man with crossed arms" class="img-fluid larger-image">
        </div>

        <!-- Right Text -->
        <div class="hero-text d-flex align-items-center justify-content-start" style="flex: 1; padding-left: 20px;">
            <h1 style="font-size: 3rem; line-height: 1.2;">Mari <br>Ciptakan<br>Lingkungan<br>yang Lebih <br>Indah</h1>
        </div>
    </div>
</section>

<!-- Middle Section (Blue background) with Images Overlapping into the Features Section -->
<section class="middle-section text-white text-center py-5" style="background-color: #395bd7; position: relative; z-index: 2; margin-top: -50px;"> <!-- Added negative margin-top to raise the section -->
    <div class="container">
        <h2 class="mb-4" style="font-weight: 700; font-size: 48px;">LaporPak</h2>
        <p class="mb-5" style="font-weight: 700; font-size: 17px; text-align: left; max-width: 750px; margin: 0 auto; padding-left: 30px; padding-right: 30px;">Di LaporPak, kami percaya bahwa setiap masalah yang terjadi di lingkungan sekitar bisa diselesaikan jika kita semua peduli dan mengambil tindakan. LaporPak hadir untuk membantu Anda melaporkan masalah sekitar dengan mudah dan cepat secara online. Setiap laporan yang masuk akan diteruskan ke pihak berwenang terkait yang kompeten dalam menangani masalah tersebut.</p>

        <!-- Row with three images inside the middle section -->
        <div class="row justify-content-center" style="position: relative; margin-top: 50px;">
            <div class="col-md-4">
                <img src="{{ asset('images/1.png') }}" alt="Pelaporan Mudah" class="img-fluid feature-img" style="width: 292px; height: 292px; margin-bottom: -150px;">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/2.png') }}" alt="Pelayanan Optimal" class="img-fluid feature-img" style="width: 316px; height: 316px; margin-bottom: -150px;">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/3.png') }}" alt="Cepat Tanggap" class="img-fluid feature-img" style="width: 196px; height: 272px; margin-bottom: -150px;">
            </div>
        </div>
    </div>
</section>


<!-- Features Section with Curved Top -->
<section class="features-section bg-white py-5" style="border-radius: 120px 120px 0 0; margin-top: 100px; position: relative; z-index: 1;">
    <div class="container text-center">
        <!-- Row with text under each image -->
        <div class="row">
            <div class="col-md-4">
                <h3 class="my-3">Pelaporan Mudah</h3>
                <p class="custom-paragraph">Pengguna dapat dengan mudah mengajukan laporan berbagai masalah publik secara online.</p>
            </div>
            <div class="col-md-4">
                <h3 class="my-3">Pelayanan Optimal</h3>
                <p class="custom-paragraph">Setiap laporan yang diterima akan diproses dengan cepat untuk meningkatkan kualitas layanan masyarakat.</p>
            </div>
            <div class="col-md-4">
                <h3 class="my-3">Cepat Tanggap</h3>
                <p class="custom-paragraph">Menerima laporan secara real-time dan segera ditangani oleh tim profesional yang kompeten.</p>
            </div>
        </div>
    </div>
</section>




<!-- Vision and Mission Section -->
<!-- Vision and Mission Section -->
<!-- Vision and Mission Section -->
<section class="container my-5">
    <!-- Title centered -->
    <h2 class="text-center visi-misi-title">Visi dan Misi LaporPak</h2>
    <div class="row justify-content-center mt-4">
        <div class="col-md-5">
            <div class="bg-light p-4 rounded">
                <h3 class="visi-misi-heading">Visi</h3>
                <p class="visi-misi-paragraph">LaporPak adalah platform yang memiliki visi besar dalam menciptakan lingkungan yang lebih baik dan indah. Dengan semangat kolaborasi, kami berupaya menjadi penghubung antara masyarakat dan pihak terkait demi menyelesaikan masalah publik di seluruh wilayah Indonesia.</p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="bg-light p-4 rounded">
                <h3 class="visi-misi-heading">Misi</h3>
                <p class="visi-misi-paragraph">Kami memanfaatkan teknologi LaporPak untuk membantu masyarakat melaporkan berbagai permasalahan publik dengan cepat dan mudah. Kami akan memastikan setiap laporan diproses dan ditangani oleh pihak yang berwenang dengan transparan dan akurat.</p>
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

</body>
</html>
