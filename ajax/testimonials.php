<?php
$text = '';
require("../admin/classes/defines.php");
$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset( $connect, 'utf8');
if (!$connect) { die("Connection failed: " . mysqli_connect_error()); }
$sql = "SELECT content, name FROM testimonials ORDER BY id";
$data = mysqli_query($connect, $sql);

$text .= '<div id="fade-quote-carousel" class="carousel slide" data-ride="carousel" data-interval="3000">';
//carousel indicator
$num_button = mysqli_num_rows($data);
$text .= '<ol class="carousel-indicators">';
for ($i = 0; $i < $num_button; $i++) {
	if ($i == 0) { $text .= '<li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>'; }
	else { $text .= '<li data-target="#fade-quote-carousel" data-slide-to="'.$i.'"></li>'; }
}
$text .= '</ol>';
//carousel items
$text .= '<div class="carousel-inner">';
$check = true;
while($row = mysqli_fetch_assoc($data)) {
	if ($check) { $text .= '<div class="active item"><blockquote>'; $check = false; } else { $text .= '<div class="item"><blockquote>'; }
	$text .= '<p class="comment">'.$row["content"].'</p>';
	if (strlen($row["name"]) > 0) { $text .= '<p class="author">'.$row["name"].'</p>'; }
	$text .= '</blockquote></div>';
}
$text .= '</div>';
$text .= '</div>';
mysqli_close($connect);
echo $text;
?>