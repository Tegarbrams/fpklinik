<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          <!-- Sidebar -->
          <div class="col-md-2 bg-light vh-100">
            <h4 class="p-5 d-flex justify-content-center">Klinik</h4>
            <ul class="nav flex-column">
                <div class="container mt-5">
              <li class="nav-item d-flex justify-content-center"><a class="nav-link link-success fw-bold bg-primary text-white px-4 py-2 d-inline-block rounded fs-5" href="/dashboard">Dashboard</a></li>
              <li class="nav-item d-flex justify-content-center"><a class="nav-link link-success fw-bold fs-5 text-primary" href="/pasien">Pasien</a></li>
              <li class="nav-item d-flex justify-content-center"><a class="nav-link link-success fw-bold fs-5 text-primary" href="/antrian">Antrian</a></li>
              <li class="nav-item d-flex justify-content-center"><a class="nav-link link-success fw-bold fs-5 text-primary" href="#">Stok Obat</a></li>
              <li class="nav-item d-flex justify-content-center"><a class="nav-link link-success fw-bold fs-5 text-primary" href="#">Tenaga Medis</a></li>
              <li class="nav-item d-flex justify-content-center"><a class="nav-link link-success fw-bold fs-5 text-primary" href="#">Logout</a></li>
            </div>
            </ul>
          </div>
          <!-- Main Content -->
          <div class="col-md-9">
            <h1 class="p-3 text-primary">Dashboard</h1>
          
            <div class="container mt-4 row">
            <div class="d-flex flex-warp p-3 col-md-5">
            <div class="card bg-primary rounded p-4" style="width: 28rem; height: 19rem;">
                <div class="card-body text-white">
                  <h1 class="card-title">Total Pasien</h1>
                  <!-- <p class="card-text">Ini adalah teks kartu dengan header dan footer.</p> -->
                </div>
              </div>
            </div>
            <div class="d-flex flex-warp p-3 col-md-5">
            <div class="card bg-primary rounded p-4" style="width: 28rem; height: 19rem;">
                <div class="card-body text-white">
                  <h1 class="card-title">Total Obat</h1>
                  <!-- <p class="card-text">Ini adalah teks kartu dengan header dan footer.</p> -->
                </div>
              </div>
            </div>
            <div class="d-flex flex-warp p-3 col-md-5">
            <div class="card bg-primary rounded p-4" style="width: 28rem; height: 19rem;">
                <div class="card-body text-white">
                  <h1 class="card-title">Kunjungan Hari Ini</h1>
                  <!-- <p class="card-text">Ini adalah teks kartu dengan header dan footer.</p> -->
                </div>
              </div>
            </div>
            <div class="d-flex flex-warp p-3 col-md-5">
            <div class="card bg-primary rounded p-4" style="width: 28rem; height: 19rem;">
                <div class="card-body text-white">
                  <h1 class="card-title">Dokter Yang Hadir</h1>
                  <!-- <p class="card-text">Ini adalah teks kartu dengan header dan footer.</p> -->
                </div>
              </div>
            </div>
            </div>
            
          </div>
        </div>
      </div>
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>