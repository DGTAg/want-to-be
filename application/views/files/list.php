<h4><?php echo $title; print_r($files);?></h4>

<?php foreach ($files as $files_item): ?>
	<?php echo $files_item['id']; ?> | <a href="files/create"><?php echo $files_item['title']; ?></a> |  <?php echo $files_item['text']; ?> <br />
<?php endforeach; ?>