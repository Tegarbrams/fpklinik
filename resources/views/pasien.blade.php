<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
              <li class="nav-item d-flex justify-content-center"><a class="nav-link link-success fw-bold bg-primary text-white px-4 py-2 d-inline-block rounded fs-5" href="#">Dashboard</a></li>
              <li class="nav-item d-flex justify-content-center"><a class="nav-link link-success fw-bold fs-5 text-primary" href="#">Pasien</a></li>
              <li class="nav-item d-flex justify-content-center"><a class="nav-link link-success fw-bold fs-5 text-primary" href="#">Antrian</a></li>
              <li class="nav-item d-flex justify-content-center"><a class="nav-link link-success fw-bold fs-5 text-primary" href="#">Stok Obat</a></li>
              <li class="nav-item d-flex justify-content-center"><a class="nav-link link-success fw-bold fs-5 text-primary" href="#">Tenaga Medis</a></li>
              <li class="nav-item d-flex justify-content-center"><a class="nav-link link-success fw-bold fs-5 text-primary" href="#">Logout</a></li>
            </div>
            </ul>
          </div>
          <!-- content -->
          <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary text-white mt-5">
                  <h5 class="mb-0">Daftar Antrian</h5>
                </div>
                <div class="card-body p-0">
                  <!-- Table -->
                  <table class="table table-bordered table-striped mb-0">
                    <thead class="table-primary">
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Poli</th>
                        <th>Asuransi</th>
                        <th>Jenis Antrian</th>
                        <th>No Antrian</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Muhammad Faruq</td>
                        <td>Umum</td>
                        <td>BPJS</td>
                        <td>Online</td>
                        <td>A001</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Muhammad Tegar</td>
                        <td>Umum</td>
                        <td>KIS</td>
                        <td>Offline</td>
                        <td>B002</td>
                      </tr>
                      <!-- Tambahkan baris tambahan di sini -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>