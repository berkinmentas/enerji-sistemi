<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">
    <title>
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>
            <?php echo $__env->yieldContent('title'); ?> Özay
        <?php else: ?>
            Özay Enerji Sistemleri
        <?php endif; ?>
    </title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/admin/js/app.js']); ?>
</head>
<body>
<?php echo $__env->yieldContent('body'); ?>

<?php echo $__env->yieldPushContent('js-stack'); ?>
</body>
</html>

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/admin/layouts/base.blade.php ENDPATH**/ ?>