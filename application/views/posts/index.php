<p>posts index content</p>
<?php foreach ( $posts as $post ){ ?>

    <h3><?= $post[ 'title' ] ?></h3>
    <p><?= $post['body'] ?></p>
    <p><a class="btn btn-primary" href="<?=site_url('posts/'.$post['slug'])?>">Rread more ...</a>
<?php } ?>