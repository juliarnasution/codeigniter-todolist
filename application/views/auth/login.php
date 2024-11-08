<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2>Login</h2>
                    <?php if($this->session->flashdata('success')){ ?>
                        <div class="alert alert-success">
                            <?= $this->session->flashdata('success') ?>
                        </div>
                    <?php
                        }
                    ?>

                    <?php if($this->session->flashdata('error')){ ?>
                        <div class="alert alert-danger">
                            <?= $this->session->flashdata('error') ?>
                        </div>
                    <?php
                        }
                    ?>
                    <form method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input 
                            type="text"
                            name="username"  class="form-control"
                            required></input>
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                            <input 
                            type="password"
                            name="password"  class="form-control"
                            required></input>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                    </form>
                    <p class="mt-3">Belum punya akun ? <a href="<?= site_url('auth/register') ?>">Registrasi Disini</a></p>
                </div>
            </div>
        </div>
    </body>
</html>