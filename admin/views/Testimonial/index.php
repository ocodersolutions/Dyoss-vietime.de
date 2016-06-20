<div class="container-fluid">
<h1>Testimonials Management</h1>
<?php 
$testimonials = $viewModel->get('testimonials'); 
include 'views/Include/alert.php';
?>
<form action="<?php echo BASE_URL.'testimonial/delete'; ?>" method="POST" onsubmit="return ConfirmChoiceDeleteMulti();">
  <a class="btn btn-primary" href="<?php echo BASE_URL.'testimonial/create' ?>">Add new</a>
  <button type="submit" class="btn btn-danger" onsubmit="return ConfirmChoiceDeleteMulti();">Delete</button>
<?php
if($testimonials == NULL){
  echo 'No result';
}else{
?>
  <table class="table table-striped">
  	<thead>
      <tr>
          <th></th>
        	<th>#</th>
        	<th>Name</th>
        	<th>Content</th>
        	<th>Actions</th>
      </tr>
  	</thead>
  	<tbody>
  	<?php foreach ($testimonials as $testimonial) { ?>
  		<tr>
        <td><input name="id[]" type="checkbox" id="checkboxId[]" value="<?php echo $testimonial->id; ?>"></td>
    		<td><?php echo $testimonial->id; ?></td>
    		<td><?php echo $testimonial->name; ?></td>
    		<td><?php echo $testimonial->content; ?></td>
    		<td>
          <div class="btn-group">
            <a class="btn" href="<?php echo BASE_URL.'testimonial/update/'.$testimonial->id; ?>"><i class="icon-edit"></i></a>
            <a class="btn" href="#" onclick="ConfirmChoiceDelete('<?php echo BASE_URL.'testimonial/delete/'.$testimonial->id; ?>'); return false;"><i class="icon-remove-sign"></i></a>
          </div>
        </td>
    	</tr>
  	<?php } ?>
  	</tbody>
  </table>
<?php } ?>
</form>
</div>