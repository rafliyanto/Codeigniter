<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-5">LOGIN</h1>
                                    </div>
                                    <?= $this->session->flashdata('pesan') ?>
                                    <form method="post" action="<?= base_url('auth/login') ?>" class="user">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control" placeholder="Username anda" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Password anda" required>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary btn-block mb-3 form-control">
                                            Login
                                        </button>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('daftar/index'); ?>">Belum punya akun? Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>