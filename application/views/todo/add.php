<html>
    <head>
        <title>Add</title>
        <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2>Add Todo</h2>
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
                            <label>Judul</label>
                            <input 
                            type="text"
                            name="title"  class="form-control"
                            required></input>
                        </div>
                        <div class="form-group">
                        <label>Deskripsi</label>
                            <textarea 
                            name="description"  class="form-control" rows="3"
                            required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>

                        <a href="<?= site_url('todo') ?>">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>