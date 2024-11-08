<html>
    <head>
        <title>Todo</title>
        <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h2>Todo List</h2>
                        <div>
                            <a href="<?= site_url('todo/add')?>"class="btn btn-primary">Tambah</a>
                            <a href="<?= site_url('auth/logout')?>"class="btn btn-danger">Logout</a>
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($todos as $item){ ?>
                                <tr>
                                    <td><?= $item['title'] ?></td>
                                    <td><?= $item['description'] ?></td>
                                    <td><?= $item['status'] ?></td>
                                    <td><?= $item['id'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>