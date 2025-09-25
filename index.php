<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- My CSS -->
     <link rel="stylesheet" href="style.css">

    <title>my company profile</title>
  </head>
  <body>

     <!--- awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand text-light" href="#">PT. Warung Makan</a>"
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-light active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Portfolio</a>
         <li class="nav-item">
          <a class="nav-link text-light" href="#">staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">about</a>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">contact</a>
      </li>
      </ul>
      <span class="navbar-text text-light">
    Navbar text with an inline element
</span>
      </span>
    </div>
  </div>
</nav>
<!--- akhir navbar -->

<!--- awal banner -->

<section class="banner text-center">
  <img src="kopi.jpg" alt="logo perusahaan" class="img-top rounded-circle img-thumbnail" style="width: 200px; height: 200px; object-fit: cover;">
  <h1 class="display-4">WELCOME</h1>
  <p class="lead">RUMAH MAKAN</p>
</section>


    <!-- akhir banner -->
<!-- SERVICE SECTION -->
<section id="service">
  <div class="container">
    <div class="section-title">
     <h2 class="text-center">Our Services</h2>
<p class="text-center">We offer the best services for you</p>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <h5>Web Development</h5>
        <p>Build modern and responsive websites.</p>
      </div>
      <div class="col-md-4">
        <h5>Mobile App</h5>
        <p>iOS & Android application solutions.</p>
      </div>
      <div class="col-md-4">
        <h5>Design & Branding</h5>
        <p>Logo, UI/UX, and brand identity design.</p>
      </div>
    </div>
  </div>
</section>

<!-- PORTFOLIO SECTION -->
<section id="portfolio" class="bg-light">
  <div class="container">
    <div class="section-title">
      <h2 class="text-center">Portfolio</h2>
<p class="text-center">Our latest projects</p>
    </div>
    <div class="row">
      <div class="col-md-4 mb-3"><img src="Project 3.jpg" class="img-fluid rounded" alt="Project 1"></div>
      <div class="col-md-4 mb-3"><img src="Project 3.jpg" class="img-fluid rounded" alt="Project 2"></div>
      <div class="col-md-4 mb-3"><img src="Project 3.jpg" class="img-fluid rounded" alt="Project 3"></div>
    </div>
  </div>
</section>

<!-- STAFF SECTION -->
<section id="staff">
  <div class="container">
    <div class="section-title">
      <h2 class="text-center">Our Team</h2>
<p class="text-center">Meet our professional staff</p>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <img src="Project 3.jpg" class="rounded-circle mb-2" width="100" height="100" alt="Staff 1">
        <h6>Andi</h6>
        <p>CEO</p>
      </div>
      <div class="col-md-4">
        <img src="Project 3.jpg" class="rounded-circle mb-2" width="100" height="100" alt="Staff 2">
        <h6>Budi</h6>
        <p>Lead Developer</p>
      </div>
      <div class="col-md-4">
        <img src="Project 3.jpg" class="rounded-circle mb-2" width="100" height="100" alt="Staff 3">
        <h6>Citra</h6>
        <p>Designer</p>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="bg-light">
  <div class="container">
    <div class="section-title">
      <h2>About Us</h2>
    </div>
    <p>
      PT. Angling Darma adalah perusahaan teknologi yang bergerak di bidang pengembangan perangkat lunak dan solusi digital untuk berbagai kebutuhan industri. Dengan tim profesional dan berpengalaman, kami siap membantu Anda meraih kesuksesan di era digital.
    </p>
  </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact">
  <div class="container">
    <div class="section-title">
      <h2>Contact Us</h2>
    </div>
    <form>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Your name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" rows="3" placeholder="Your message..."></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="container">
    <p>&copy; 2025 PT. Angling Darma. All rights reserved.</p>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>