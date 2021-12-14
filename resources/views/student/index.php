<?php

use Naventum\Framework\Illuminate\Support\Facades\Auth;

?>

<?php require_once view_path() . '/components/header.php'  ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Welcome <span class="text-primary"><?= __(Auth::user()->username) ?></span></h1>
            <a href="/student/create" class="btn btn-primary text-light mb-4">Tambah data</a>
            <div class="card">
                <div class="card-header">
                    Students
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashData('success', null)) : ?>
                        <div class="mb-4">
                            <div class="alert alert-success">
                                <?= __(session()->getFlashData('success'))  ?>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php $loop = 1; ?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['students'] as $student) : ?>
                                    <tr>
                                        <td><?= __($loop++) ?></td>
                                        <td><?= __($student->nisn) ?></td>
                                        <td><?= __($student->name) ?></td>
                                        <td><?= __($student->department) ?></td>
                                        <td><?= __($student->address) ?></td>
                                        <td>
                                            <a class="text-primary" href="/student/<?= __($student->id) ?>/edit">Edit</a>
                                            <a class="text-danger" href="/student/<?= __($student->id) ?>/delete">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once view_path() . '/components/footer.php'  ?>