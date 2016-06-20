<?php  
if(isset($_SESSION['message'])){
?>
  <div class="alert <?php echo $_SESSION['message']['class']; ?>"><?php echo $_SESSION['message']['message']; ?></div>
<?php
  unset($_SESSION['message']);
}
?>