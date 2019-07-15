<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
        <title><?php echo $__env->yieldContent('Sunah Health Care'); ?></title>

        
    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\sunah\resources\views/layouts/app.blade.php ENDPATH**/ ?>