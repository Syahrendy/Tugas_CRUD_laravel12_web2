<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
</head>
<body>

<div class="container">
    <h2>Data Mahasiswa</h2>

    <a href="/mahasiswa/create" class="btn"> Tambah</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($row->id); ?></td>
            <td><?php echo e($row->nama); ?></td>
            <td><?php echo e($row->nim); ?></td>
            <td><?php echo e($row->email); ?></td>
            <td><?php echo e($row->telepon); ?></td>
            <td>
                <a href="/mahasiswa/<?php echo e($row->id); ?>/edit" class="btn-edit">Edit</a>

                <form action="/mahasiswa/<?php echo e($row->id); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn-delete">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\mahasiswa-app\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>