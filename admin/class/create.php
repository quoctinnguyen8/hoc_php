<?php 
include("../../include/common.php");

if (is_method_post()){
	$name = $_POST["class_name"];
	$sql = "insert into classes values(default, ?)";

	db_execute($sql, [$name]);
	redirect_to("index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm mới lớp</title>
</head>
<body>
	<!-- Tạo form POST có 1 thẻ input chứa class name và 1 button submit -->

	<h2>Thêm mới lớp</h2>
	<form method="post">
		<label>Tên lớp: </label>
		<input type="text" name="class_name" required />
		<input type="submit" value="Thêm lớp" />
	</form>
</body>
</html>