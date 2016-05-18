<?php 
	$title = 'WarZiko';
	$header='WarZiko';
 ?>

<?php ob_start() ?>
<section class="mainContent">
	<h2>New Games</h2>
	<hr>
		<article>
			
		</article>
	<hr>
	<h2>Top News</h2>
	<hr>
	<?php foreach ($news as $oneNews): ?>
		<article>
		<h3><?php echo $oneNews['newsTitle'] ?></h3>
		
		<p>
			<img src="<?php echo $oneNews['newsImageS'];?>">
			<?php echo $oneNews['newsText']; ?>
			</p>
		<span><?php echo $oneNews['newsDate']; ?></span>
	</article>
	<hr>
	<?php endforeach ?>



	
</section>
<?php $content = ob_get_clean(); ?>

<?php require_once(ROOT.DS.'View'.DS.'Templates'.DS.'layout.php'); ?>