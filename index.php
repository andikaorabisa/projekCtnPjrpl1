<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Pusat data kesehatan Indonesia yang menyajikan informasi interaktif dalam bentuk dasbor.">
    <meta name="keywords" content="satusehat, satusehat kemkes, portal satusehat, kemkes, 
      kementerian kesehatan indonesia, peduli lindungi, bian, komorbid, profil nakes, 
      monitoring perjalanan, monitoring mobilitas">
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <title>Beranda - SATUSEHAT Dashboard</title>

    <!-- Matomo -->
    <script>
      var _paq = window._paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//matomo.kemkes.go.id/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '19']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- End Matomo Code -->
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/dashboard">
            <img src="assets/img/logo.png" alt="Biomedical" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarNav">
            <ul class="navbar-nav ms-auto flex-nowrap">
              <li class="nav-item">
                <a class="nav-link px-4 active" aria-current="page" href="/dashboard">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" aria-current="page" href="dasbor-publik.html">Dasbor Publik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4" aria-current="page" href="tentang-satusehat.html">Tentang SATUSEHAT</a>
              </li>
              <li class="nav-item">
                <a aria-current="page" href="/dashboard/private/login">
                  <button type="button" class="btn btn-outline-primary ms-4 px-5">Masuk</button>
                </a>
              </li>
            </ul>
          </div>
          <!-- /collapse navbar -->
        </div>
        <!-- /container -->
      </nav>
      <!-- /navbar -->
    </header>
    <section
      class="bg-header-dashboard"
      style="padding: 80px 0 0 0; margin-bottom: 0"
    >
      <div class="container index-header-container">
        <div class="index-custom-width col-md-8" id="header-title">
          <div class="index-header-title-container">
            <h1 class="header-title">
              SATUSEHAT Dashboard<br />untuk Satu Indonesia
            </h1>
            <p class="header-description">
              Pusat data kesehatan Indonesia yang menyajikan informasi
              interaktif dalam bentuk dasbor.
            </p>
          </div>
        </div>
        <div class="col-md-4" id="header-image">
          <img src="assets/img/home-web-img.png" class="img-fluid" />
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container" style="display: flex; flex-wrap: wrap">
        <div class="col-md-5" style="padding: 16px">
          <img
            src="assets/img/index_satu_data.png"
            style="
              width: 100%;
              min-width: 240px;
              max-width: 100%;
              height: 400px;
              display: flex;
              border-radius: 12px;
              object-fit: contain;
            "
            alt="index_satu_data"
          />
        </div>
        <div class="col-md-7" style="display: flex; align-items: center">
          <div>
            <h1 class="general-title">Mengapa SATUSEHAT Dashboard?</h1>
            <p class="general-description">
              Portal SATUSEHAT yang menjadi sumber data dan informasi kesehatan
              Indonesia dalam bentuk dasbor interaktif untuk mendukung
              pengawasan, perumusan kebijakan dan pengambilan keputusan yang
              terukur serta tepat sasaran.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-centers py-5">
      <div class="container text-center">
        <h1 class="general-title">Misi SATUSEHAT Dashboard</h1>
        <div class="col-md-12 mission-container">
          <div class="mission-card">
            <img
              src="assets/img/index_aksesibilitas.png"
              class="mission-image"
              alt="Aksesibilitas"
            />
            <h5 class="general-title">Aksesibilitas</h5>
            <p class="general-description">
              Menyediakan data yang mudah diakses untuk semua
            </p>
          </div>
          <div class="mission-card">
            <img
              src="assets/img/index_validitas.png"
              class="mission-image"
              alt="Validitas"
            />
            <h5 class="general-title">Validitas</h5>
            <p class="general-description">
              Memastikan ketepatan data yang disampaikan kepada publik
            </p>
          </div>
          <div class="mission-card">
            <img
              src="assets/img/index_akuntabilitas.png"
              class="mission-image"
              alt="Akuntabilitas"
            />
            <h5 class="general-title">Akuntabilitas</h5>
            <p class="general-description">
              Menyajikan data yang dapat dipertanggung jawabkan
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container" style="display: flex; flex-wrap: wrap">
        <div class="col-md-5" style="padding: 16px">
          <img
            src="assets/img/index_dashboard_public.png"
            style="
              width: 100%;
              min-width: 240px;
              max-width: 100%;
              height: 400px;
              display: flex;
              border-radius: 12px;
              object-fit: contain;
            "
            alt="index_satu_data"
          />
        </div>
        <div class="col-md-7" style="display: flex; align-items: center">
          <div>
            <h1 class="general-title">Dasbor Publik</h1>
            <p class="general-description mb-4">
              Menu Dasbor Publik ini merupakan kumpulan dasbor interaktif
              kesehatan yang disediakan oleh Kementerian Kesehatan untuk dapat
              diakses publik. Dasbor publik ini memvisualisasikan data terkait
              kesehatan.
            </p>
            <a class="btn btn-secondary" href="dasbor-publik.html">Lihat sekarang</a>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer>
      <div class="container">
        <div class="row custom-footer">
          <div class="col-md-8">
            <a href="#" class="nav-link pe-2 footer-link">© 2023 Pusat Data dan Teknologi Informasi. Kementerian Kesehatan Republik Indonesia</a>
          </div>
          <div
            class="col-md-4 custom-footer text-center"
            style="display: flex; justify-content: flex-end"
          >
            <a href="#" class="nav-link pe-2 footer-link">Peta Situs</a>
            <a href="#" class="nav-link pe-2 footer-link">Kebijakan Privasi</a>
            <a href="#" class="nav-link footer-link">Syarat Penggunaan</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- /footer -->
    <!-- js -->
    <script 
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous">
    </script>
  </body>
</html>
