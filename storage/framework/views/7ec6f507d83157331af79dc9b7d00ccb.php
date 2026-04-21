<h2>Edit Mahasiswa</h2>

<form method="POST" action="/mahasiswa/<?php echo e($mhs->id); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    Nama: <input type="text" name="nama" value="<?php echo e($mhs->nama); ?>"><br>
    NIM: <input type="text" name="nim" value="<?php echo e($mhs->nim); ?>"><br>
    Email: <input type="email" name="email" value="<?php echo e($mhs->email); ?>"><br>
    Telepon: <input type="text" name="telepon" value="<?php echo e($mhs->telepon); ?>"><br>

    <button type="submit">Update</button>
</form><?php /**PATH C:\xampp\htdocs\mahasiswa-app\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>