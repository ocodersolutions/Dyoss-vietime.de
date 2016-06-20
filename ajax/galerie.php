<?php
$text = ''; $textarr = array();
require("../admin/classes/defines.php");
$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$connect) { die("Connection failed: " . mysqli_connect_error()); }
$sql = "SELECT url FROM galleries ORDER BY id";
$data = mysqli_query($connect, $sql);
$text .= '<div class="carousel slide" id="galerie-carousel" data-ride="carousel" data-interval="3000">';
//carousel indicator
$text .= '<ol class="carousel-indicators">';
$num_button = ceil(mysqli_num_rows($data)/6);
for ($i = 0; $i < $num_button; $i++) { 
	if ($i == 0) { $text .= '<li data-target="#galerie-carousel" data-slide-to="0" class="active"></li>'; }
	else { $text .= '<li data-target="#galerie-carousel" data-slide-to="'.$i.'"></li>'; }
	$textarr[$i] = '';
}
$text .= '</ol>';
//
$i = 0;
while($row = mysqli_fetch_assoc($data)) {
	$textarr[$i/6] .= '<div class="col-sm-4 col-xs-6"><img src="'.BASE_DOMAIN.$row["url"].'" /></div>';
	$i++;
}
mysqli_close($connect);
//carousel item
$text .= '<div class="carousel-inner">';
$check = true;
foreach ($textarr as $key => $value) {
	if ($check) { $text .= '<div class="active item">'.$value.'</div>'; $check = false; }
	else { $text .= '<div class="item">'.$value.'</div>'; }
}
$text .= '</div>';
$text .= '</div>';
echo $text;
?>