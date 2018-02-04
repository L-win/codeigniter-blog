<?= form_open('posts/update')?>
<input type="hidden" name="id" value="<?=$post['id']?>">
  <fieldset>
<div class="form-group">
    
    <div class="form-group">
      <label >Title</label>
      <input type="text" class="form-control" name="title" value="<?=$post['title']?>">
    </div>
      <label >Post body</label>
      <textarea class="form-control" name="body" rows="3"><?=$post['body']?></textarea>
    </div>
</fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>