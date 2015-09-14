<h4><?php echo $title; ?></h4>

<?php foreach ($jobs as $jobs_item): ?>
	<?php echo $jobs_item['JOB_STATE']; ?> | 
	<a href="files/create/?id=<?php echo $jobs_item['JOB_ID']; ?>"><?php echo $jobs_item['JOB_NAME']; ?></a> | 
	<?php echo $jobs_item['JOB_TOTAL']; ?> <br />
<?php endforeach; ?>