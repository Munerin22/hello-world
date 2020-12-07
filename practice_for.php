<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>繰り返し表示</title>
</head>
<body>
<h1><font size="3">1～80までを表示します(3の倍数で"git"を付け加える)</font></h1>
<?php
//forでカウント
for ($count = 1; $count <= 80; $count++) {
	//カウントを出力
	echo $count;

	//7の倍数→7で割り切れる→余り'0'
	//余りが'0'かどうかを判別して出力
	if ($count % 7 == 0) {
		echo ':git';
	}
	//改行処理
	echo '<br>';
}
?>
</body>
</html>
