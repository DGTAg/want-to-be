<h2><?php echo $title; print_r($files)?></h2>

<h3><?php echo $files['title']; ?></h3>
<div class="main">
    <?php echo $files['text']; ?>
</div>
<p><a href="<?php echo site_url('files/'.$files['slug']); ?>">View article</a></p>