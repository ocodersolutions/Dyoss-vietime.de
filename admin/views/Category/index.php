<div class="container-fluid">
<h1>Category Management</h1>
<?php 
$categories = $viewModel->get('categories'); 
include 'views/Include/alert.php';
?>
<form action="<?php echo BASE_URL.'category/delete'; ?>" method="POST" onsubmit="return ConfirmChoiceDeleteMulti();">
  <a class="btn btn-primary" href="<?php echo BASE_URL.'category/create' ?>" >Add new</a>
  <button type="submit" class="btn btn-danger" onsubmit="return ConfirmChoiceDeleteMulti();">Delete</button>
<?php
if($categories == NULL){
  echo 'No result';
}else{
?>
  <table class="table table-striped">
  	<thead>
      <tr>
          <th></th>
        	<th>#</th>
        	<th>Name</th>
      </tr>
  	</thead>
  	<tbody>
  	<?php foreach ($categories as $category) { ?>
  		<tr>
        <td><input name="id[]" type="checkbox" id="checkboxId[]" value="<?php echo $category->id; ?>"></td>
    		<td><?php echo $category->id; ?></td>
    		<td><?php echo $category->name; ?></td>
    		<td>
          <div class="btn-group">
            <a class="btn" href="<?php echo BASE_URL.'category/update/'.$category->id; ?>"><i class="icon-edit"></i></a>
            <a class="btn" href="#" onclick="ConfirmChoiceDelete('<?php echo BASE_URL.'category/delete/'.$category->id; ?>'); return false;"><i class="icon-remove-sign"></i></a>
          </div>
        </td>
    	</tr>
  	<?php } ?>
  	</tbody>
  </table>
<?php } ?>
</form>
</div>