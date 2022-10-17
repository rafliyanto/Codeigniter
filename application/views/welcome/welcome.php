<body>

    <nav class="navbar bg-primary fixed-top justify-content-center">
        <a class="navbar-brand text-white" href="<?= base_url('auth/login'); ?>">Permata</a>

        <div class="nav-item" id="navbarsExampleDefault">
            <a class="btn btn-light my-2 my-sm-0" href="<?= base_url('auth/login'); ?>">Login</a>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/slide-1.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Permata Printing</h5>
                    <p>Daftar - Pilih - Pesan - Siap Antar</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slide-2.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Permata Printing</h5>
                    <p>Daftar - Pilih - Pesan - Siap Antar</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slide-3.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Permata Printing</h5>
                    <p>Daftar - Pilih - Pesan - Siap Antar</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 my-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sudah Punya Akun?</h5>
                        <p class="card-text">Klik tombol dibawah ini!</p>
                        <a href="<?= base_url('auth/login') ?>" class="btn btn-primary">Klik Disini</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Belum Punya Akun?</h5>
                        <p class="card-text">Klik tombol dibawah ini!</p>
                        <a href="<?= base_url('daftar') ?>" class="btn btn-primary">Klik Disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>