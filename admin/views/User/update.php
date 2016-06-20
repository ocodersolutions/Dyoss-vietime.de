<div class="container-fluid">
<?php 
//get item param from model
$user = $viewModel->get('user');
if(!is_object($user)){
  echo 'User is not exist!';
}else{
?>
<h1>Update form</h1>
<form class="form-horizontal" method="POST">
  <div class="control-group" style="display: none;">
    <label class="control-label" for="inputUsername">ID</label>
    <div class="controls">
      <input type="text" id="inputId" name="id" value="<?php echo $user->id; ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputUsername">Username</label>
    <div class="controls">
      <input type="text" id="inputUsername" name="username" value="<?php echo $user->username; ?>" placeholder="Username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" name="email" value="<?php echo $user->email; ?>" placeholder="Email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" name="password" value="<?php echo $user->password; ?>" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
<?php } ?>
</div>