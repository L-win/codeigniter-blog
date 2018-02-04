
<?= validation_errors()?>
<?= form_open('users/register')?>

<fieldset>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name">
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="usernname" class="form-control" placeholder="User Name">
    </div>
    <div class="form-group">
        <label>Zipcode</label>
        <input type="text" name="zipcode" class="form-control" placeholder="Zipcode">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password2" class="form-control" placeholder="Confirm Password">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</fieldset>
</form>