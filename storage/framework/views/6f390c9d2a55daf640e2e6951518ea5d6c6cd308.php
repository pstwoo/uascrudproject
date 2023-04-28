<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Books</h2>
        </div>
        <div class="pull-right">

</div>
</div>
</div>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = @errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="row">
    <form action="<?php echo e(route('student.update',$student->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="col-sm-4">

        <div class="left">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" value="<?php echo e($student->name); ?>" placeholder="Name">
        </div>
    
        <div class="left">
            <strong>Phone</strong>
            <input type="text" name="phone" class="form-control" value="<?php echo e($student->phone); ?>" placeholder="Phone"></textarea>
        </div>

        <div class="left">
            <strong>Address</strong>
            <input type="text" name="address" class="form-control" value="<?php echo e($student->address); ?>" placeholder="Address"></textarea>
        </div>

    </br>
    <div class="left">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
</div>

<?php $__env->stopSection(); ?>


                

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/newcrud/resources/views/edit.blade.php ENDPATH**/ ?>