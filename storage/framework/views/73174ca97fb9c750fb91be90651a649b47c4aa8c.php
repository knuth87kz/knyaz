<?php $__env->startSection('header'); ?>

    <h1>Название сайта</h1>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo e($hello); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

    Copyright(c)2015

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>