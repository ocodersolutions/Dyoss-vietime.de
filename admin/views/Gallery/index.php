<div class="container-fluid">
<h1>Galleries Management</h1>
<?php 
$galleries = $viewModel->get('galleries'); 
include 'views/Include/alert.php';
?>
<form action="<?php echo BASE_URL.'gallery/delete'; ?>" method="POST" onsubmit="return ConfirmChoiceDeleteMulti();">
  <a class="btn btn-primary" href="<?php echo BASE_URL.'gallery/create' ?>"  onsubmit="return ConfirmChoiceDeleteMulti();">Add new</a>
  <button type="submit" class="btn btn-danger">Delete</button>
<?php
if($galleries == NULL){
  echo 'No result';
}else{
?>
  <table class="table table-striped">
  	<thead>
      <tr>
          <th></th>
        	<th>#</th>
        	<th>Images</th>
        	<th>Description</th>
        	<th>Actions</th>
      </tr>
  	</thead>
  	<tbody>
  	<?php foreach ($galleries as $gallery) { ?>
  		<tr>
        <td><input name="id[]" type="checkbox" id="checkboxId[]" value="<?php echo $gallery->id; ?>"></td>
    		<td><?php echo $gallery->id; ?></td>
    		<td><img src="../../../<?php echo $gallery->url; ?>" style="width:50px;height: 50px"></td>
    		<td><?php echo $gallery->description; ?></td>
    		<td>
          <div class="btn-group">
            <a class="btn" href="<?php echo BASE_URL.'gallery/update/'.$gallery->id; ?>"><i class="icon-edit"></i></a>
            <a class="btn" href="#" onclick="ConfirmChoiceDelete('<?php echo BASE_URL.'gallery/delete/'.$gallery->id; ?>'); return false;"><i class="icon-remove-sign"></i></a>
          </div>
        </td>
    	</tr>
  	<?php } ?>
  	</tbody>
  </table>
<?php } ?>
</form>
</div>