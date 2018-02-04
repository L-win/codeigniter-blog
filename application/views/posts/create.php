
<?= validation_errors() ?>

<?= form_open('posts/create')?>
  <fieldset>
<div class="form-group">
    
    <div class="form-group">
      <label >Title</label>
      <input type="text" class="form-control" name="title" placeholder="Enter post title">
    </div>
      <label >Post body</label>
      <textarea class="form-control" name="body" rows="3"></textarea>
    </div>
</fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>