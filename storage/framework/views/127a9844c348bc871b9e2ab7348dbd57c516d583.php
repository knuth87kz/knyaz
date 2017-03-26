<html>
<head>
    <meta charset='utf-8'/>
    <link rel="stylesheet" href=<?php echo e(asset('css/style.css')); ?>/>
    <title>Мой сайт</title>
</head>
<body>
<div id="header">
    <h1> <?php echo $__env->yieldContent('header'); ?></h1>
</div>
<div id="content">
    <?php echo $__env->yieldContent('content'); ?>
</div>
<div id="footer">
    <?php echo $__env->yieldContent('footer'); ?>
</div>
</body>
</html>