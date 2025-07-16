<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Daftar Buku</h2>

    <form method="POST" action="<?php echo e(route('books.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Judul" required>
            </div>
            <div class="col">
                <input type="text" name="author" class="form-control" placeholder="Penulis" required>
            </div>
            <div class="col">
                <input type="number" name="year" class="form-control" placeholder="Tahun Terbit" required>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Tambah Buku</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($book->title); ?></td>
                <td><?php echo e($book->author); ?></td>
                <td><?php echo e($book->year); ?></td>
                <td>
                    <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm">Hapus Buku</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</body>
</html><?php /**PATH D:\uas-msobari\uas-msobari\resources\views/books/index.blade.php ENDPATH**/ ?>