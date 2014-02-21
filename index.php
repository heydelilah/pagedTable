<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Table and Pager</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrap">

<div class="table">
<table cellspacing="0">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>SEX</th>
		<th>SONG</th>
	</tr>

<?php
	require 'db.php';
	$conn = connect($config);

	$size = 4;	// 分页大小
	$len = get_total('singer');	// 总记录数

	// 无记录
	if ($len <= 0){
		$page = 1;
		$total = 0;
		echo '<tr><td colspan="4" align="center">No data...</td></tr>';
	}else {
		// 当前页
		$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
		// 总页数
		$total = ceil(($len / $size));

		$data = get('singer', ($page-1)*$size, $size);

		for ($i=0; $i < count($data); $i++) {
			echo '<tr>';
			foreach ($data[$i] as $key => $value) {
				echo '<td>' . $value . '</td>';
			}
			echo '</tr>';
		}
	}
?>


</table>
</div>
<div class="pager">

	<?php
		$pre = $page-1;
		$next = $page+1;
		if($pre > 0){
			echo '<a href="index.php?page='.$pre.'">Pre</a>';
		}
		for ($i=1; $i <= $total; $i++) {
			if($page == $i){
				echo '<span class="act">'.$i.'</span>';
			}else{
				echo '<a href="index.php?page='.$i.'">'.$i.'</a>';
			}
		}
		if($next <= $total){
			echo '<a href="index.php?page='.$next.'">Next</a>';
		}
	?>

	<span class="total">Total:<?php echo $len ?></span>
</div>
</div>
</body>
</html>