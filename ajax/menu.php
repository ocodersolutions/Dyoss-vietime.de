<?php
$text = ""; $textarr = array();
require("../admin/classes/defines.php");
$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset( $connect, 'utf8');
if (!$connect) { die("Connection failed: " . mysqli_connect_error()); }
$sql = "SELECT categories.name AS cate_name, menus.name AS menu_name, menus.description AS descrip FROM menus, categories WHERE menus.category_id=categories.id ORDER BY menus.category_id, menus.id";
$data = mysqli_query($connect, $sql);
while($row = mysqli_fetch_assoc($data)) {
	if (!isset($textarr[$row["cate_name"]])) { $textarr[$row["cate_name"]] = ""; }
	$textarr[$row["cate_name"]] .= '<div class="col-xs-12 menu-row"><h4>'.$row["menu_name"].'</h4>'.$row["descrip"].'</div>';
}
mysqli_close($connect);
foreach ($textarr as $key => $value) {
	$text .= '<div class="col-sm-4"><div class="row"><div class="col-xs-12"><h3>'.$key.'</h3></div>'.$value.'</div></div>';
}
echo $text;
?>