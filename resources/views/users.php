<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado de usuarios</title>
</head>
<body>
    <h1><?php echo e($title) ?></h1>

    <lu>
    <?php foreach ($users as $user): ?>
        <li><?php echo e($user) ?></li>
    <?php endforeach; ?>
    </lu>
    
</body>
</html>