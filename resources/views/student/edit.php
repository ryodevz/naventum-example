<?php require_once view_path() . '/components/header.php'  ?>

<div class="container">
    <div class="row">
        <form action="" method="POST" class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit <span class=""><?= __($data['student']->name) ?></span>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashData('errors', null)) : ?>
                        <div class="mb-2">
                            <?php foreach (session()->getFlashData('errors', []) as $error) : ?>
                                <div class="text-danger"><?= __($error) ?></div>
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>
                    <div class="mb-4">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" name="nisn" class="form-control" value="<?= __($data['student']->nisn) ?>" />
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" value="<?= __($data['student']->name) ?>" />
                    </div>
                    <div class="mb-4">
                        <label for="department" class="form-label">Jurusan</label>
                        <input type="text" name="department" class="form-control" value="<?= __($data['student']->department) ?>" />
                    </div>
                    <div class="mb-4">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" name="address" class="form-control" value="<?= __($data['student']->address) ?>" />
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary text-light">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require_once view_path() . '/components/footer.php'  ?>