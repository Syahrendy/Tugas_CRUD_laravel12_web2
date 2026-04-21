<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
</head>
<body>

<div class="form-container">
    <h2>Tambah Mahasiswa</h2>

    <form method="POST" action="/mahasiswa">
        <?php echo csrf_field(); ?>

        <label>Nama</label>
        <input type="text" name="nama">

        <label>NIM</label>
        <input type="text" name="nim">

        <label>Email</label>
        <input type="email" name="email">

        <label>Telepon</label>
        <input type="text" name="telepon">

        <button type="submit">Simpan</button>
    </form>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\mahasiswa-app\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>