<div class="container-fluid">
<h1>User index</h1>
<?php 
$users = $viewModel->get('users'); 
include 'views/Include/alert.php';
?>
<form action="<?php echo BASE_URL.'user/delete'; ?>" method="POST" onsubmit="return ConfirmChoiceDeleteMulti();">
  <a class="btn btn-primary" href="<?php echo BASE_URL.'user/create' ?>">Add new</a>
  <button type="submit" class="btn btn-danger">Delete</button>
<?php
if($users == NULL){
  echo 'No result';
}else{
?>
  <table class="table table-striped">
  	<thead>
      <tr>
          <th></th>
        	<th>#</th>
        	<th>Username</th>
        	<th>Email</th>
        	<th>Actions</th>
      </tr>
  	</thead>
  	<tbody>
  	<?php foreach ($users as $user) { ?>
  		<tr>
        <td><input name="id[]" type="checkbox" id="checkboxId[]" value="<?php echo $user->id; ?>"></td>
    		<td><?php echo $user->id; ?></td>
    		<td><?php echo $user->username; ?></td>
    		<td><?php echo $user->email; ?></td>
    		<td>
          <div class="btn-group">
            <a class="btn" href="<?php echo BASE_URL.'user/update/'.$user->id; ?>"><i class="icon-edit"></i></a>
            <a class="btn" href="#" onclick="ConfirmChoiceDelete('<?php echo BASE_URL.'user/delete/'.$user->id; ?>'); return false;"><i class="icon-remove-sign"></i></a>
          </div>
        </td>
    	</tr>
  	<?php } ?>
  	</tbody>
  </table>
<?php } ?>
</form>
</div>