<?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Books Crud</h2>
                </div>
            </div>
        </div>
        <div class="row" align="left">
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo e(route('student.create')); ?>"> New Book</a>
</div>
</div>

<?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>

<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Name of Book</th>
        <th>QTY.</th>
        <th>Description</th>
        <th>Option</th>

    </tr>

    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($student->id); ?></td>
        <td><?php echo e($student->name); ?></td>
        <td><?php echo e($student->phone); ?></td>
        <td><?php echo e($student->address); ?></td>
        <td>
        <form method="POST" action=" <?php echo e(route('student.destroy',$student->id)); ?>">
            <a class="btn btn-primary" href="<?php echo e(route('student.edit' ,$student->id)); ?>">Show</a>
            <a class="btn btn-primary" href="<?php echo e(route('student.edit' ,$student->id)); ?>">Edit</a>
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

                <input type="submit" class="btn btn-danger delete-user" value="Delete">
            </form>
        </td>


    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/newcrud/resources/views/index.blade.php ENDPATH**/ ?>