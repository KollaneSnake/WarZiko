<?php $title = 'Список постов'; ?>

<?php ob_start() ?>

<h2>Список постов</h2>
<hr>
<a class="btn btn-default" href="index.php/admin" role="button"><i class="fa fa-plus"></i> Добавить пост</a> <a class="btn btn-default" href="index.php/about" role="button"><i class="fa fa-meh-o"></i> Обо мне</a>

<?php $content = ob_get_clean(); ?>

<?php include "View/Templates/layout.php";