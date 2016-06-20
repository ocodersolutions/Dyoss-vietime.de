<div class="container-fluid">
<h1>Menus Management</h1>
<?php 
$menus = $viewModel->get('menus'); 
include 'views/Include/alert.php';
?>
<form action="<?php echo BASE_URL.'menus/delete'; ?>" method="POST" onsubmit="return ConfirmChoiceDeleteMulti();">
  <a class="btn btn-primary" href="<?php echo BASE_URL.'menu/create' ?>">Add new</a>
  <button type="submit" class="btn btn-danger"onsubmit="return ConfirmChoiceDeleteMulti();">Delete</button>
<?php
if($menus == NULL){
  echo 'No result';
}else{
?>
  <table class="table table-striped">
  	<thead>
      <tr>
          <th></th>
        	<th>#</th>
          <th>Category</th>
        	<th>Name</th>
        	<th>Description</th>
        	<th>Actions</th>
      </tr>
  	</thead>
  	<tbody>
  	<?php foreach ($menus as $menu) { ?>
  		<tr>
        <td><input name="id[]" type="checkbox" id="checkboxId[]" value="<?php echo $menu->id; ?>"></td>
    		<td><?php echo $menu->id; ?></td>
        <td><?php echo $menu->category_id;?></td>
        <td><?php echo $menu->name; ?></td>
    		<td><?php echo $menu->description; ?></td>
    		<td>
          <div class="btn-group">
            <a class="btn" href="<?php echo BASE_URL.'menu/update/'.$menu->id; ?>"><i class="icon-edit"></i></a>
            <a class="btn" href="#" onclick="ConfirmChoiceDelete('<?php echo BASE_URL.'menu/delete/'.$menu->id; ?>'); return false;"><i class="icon-remove-sign"></i></a>
          </div>
        </td>
    	</tr>
  	<?php } ?>
  	</tbody>
  </table>
<?php } ?>
</form>
</div>