   <h3><?= $post['title'] ?></h3>
    <p><?= $post['body'] ?></p>
    
	<?php if ( $this->session->userdata('logged_in') ){?>
	<?= form_open('posts/delete/'.$post['id'])?>
    <input type="submit" value="Delete" class = "btn btn-danger" />
   </form>
    <?= form_open('posts/edit/'.$post['slug'])?>
    <input type="submit" value="Edit" class = "btn btn-primary" />
   </form>
	<?php } ?>