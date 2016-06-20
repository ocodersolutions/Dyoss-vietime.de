<div class="container-fluid">
<h1>Menus Management</h1>
<?php 
$highlights = $viewModel->get('highlights'); 
include 'views/Include/alert.php';
?>
<form action="<?php echo BASE_URL.'highlights/delete'; ?>" method="POST" onsubmit="return ConfirmChoiceDeleteMulti();">
  <a class="btn btn-primary" href="<?php echo BASE_URL.'highlight/create' ?>">Add new</a>
  <button type="submit" class="btn btn-danger"onsubmit="return ConfirmChoiceDeleteMulti();">Delete</button>
<?php
if($highlights == NULL){
  echo 'No result';
}else{
?>
  <table class="table table-striped">
  	<thead>
      <tr>
          <th></th>
        	<th>#</th>
          <th>Tittle</th>
        	<th>Description</th>
        	<th>Images</th>
        	<th>Actions</th>
      </tr>
  	</thead>
  	<tbody>
  	<?php foreach ($highlights as $highlight) { ?>
  		<tr>
        <td><input name="id[]" type="checkbox" id="checkboxId[]" value="<?php echo $highlight->id; ?>"></td>
    		<td><?php echo $highlight->id; ?></td>
        <td><?php echo $highlight->tittle; ?></td>
        <td><?php echo $highlight->description; ?></td>
    		<td><?php echo $highlight->images; ?></td>
    		<td>
          <div class="btn-group">
            <a class="btn" href="<?php echo BASE_URL.'highlight/update/'.$highlight->id; ?>"><i class="icon-edit"></i></a>
            <a class="btn" href="#" onclick="ConfirmChoiceDelete('<?php echo BASE_URL.'highlight/delete/'.$highlight->id; ?>'); return false;"><i class="icon-remove-sign"></i></a>
          </div>
        </td>
    	</tr>
  	<?php } ?>
  	</tbody>
  </table>
<?php } ?>
</form>
</div>