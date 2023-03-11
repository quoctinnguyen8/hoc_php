<?php
include("../../include/common.php");

// Xử lý thêm
if (is_method_post()) {
	// upload và nhận lại filename
	// Lưu file vào thư mục student
	$filename = upload_and_return_filename("img_path", "student");

	// dùng filename nhận được để lưu vào db
	// Chưa hoàn thiện
	$sql = "insert into ...";

}

$_title = "Thêm học sinh";
include("../_header.php");
?>

<form method="post" enctype="multipart/form-data">
	<label>Họ tên: </label>
	<input type="text" name="fullname" />
	<br>
	<label>Ngày sinh: </label>
	<input type="date" name="dob" />
	<br>
	<label>Giới tính: </label>
	<label>
		<input type="radio" name="gender" value="0" />
		Nam
	</label>
	<label>
		<input type="radio" name="gender" value="1"/>
		Nữ
	</label>
	<br>
	<label>Địa chỉ: </label>
	<input type="text" name="address" />
	<br>
	<label>Chọn lớp: </label>
	<select name="class_id">
		<option value="">-- Chọn một lớp --</option>
		<?php
			gen_option_ele("classes", "id", "class_name");
		?>
	</select>
	<br>
	<label>Chọn ảnh đại diện: </label>
	<input type="file" name="img_path" accept=".png, .jpg, .jpeg" />
	<br>

	<input type="submit" value="Thêm học sinh" />
</form>

<?php include("../_footer.php"); ?>