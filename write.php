<?php
// 入力データの取得とサニタイズ
$name = htmlspecialchars($_POST['name']);
$age = intval($_POST['age']);
$partner = htmlspecialchars($_POST['partner']);

$q1 = htmlspecialchars($_POST['q1']);
$q2 = htmlspecialchars($_POST['q2']);
$q3 = htmlspecialchars($_POST['q3']);
$q4 = htmlspecialchars($_POST['q4']);
$q5 = htmlspecialchars($_POST['q5']);
$q6 = htmlspecialchars($_POST['q6']);
$q7 = htmlspecialchars($_POST['q7']);
$q8 = htmlspecialchars($_POST['q8']);
$q9 = htmlspecialchars($_POST['q9']);
$q10 = htmlspecialchars($_POST['q10']);

// CSVに書き込むための文字列を作成
$c = ',';
$str = $name . $c . $age . $c . $partner . $c . $q1 . $c . $q2 . $c . $q3 . $c . $q4 . $c . $q5 . $c . $q6 . $c . $q7 . $c . $q8 . $c . $q9 . $c . $q10 . "\n";

// CSVファイルへの書き込み
$file = fopen("data.csv", "a");
if ($file === false) {
    die("ファイルを開くことができませんでした: " . error_get_last()['message']);
}

if (fwrite($file, $str) === false) {
    die("ファイルに書き込むことができませんでした: " . error_get_last()['message']);
}

fclose($file);

// 最後に保存したデータの行番号を取得
$row_num = count(file("data.csv"));

// result.phpにリダイレクトし、行番号を渡す
header("Location: result.php?row=" . $row_num);
exit;
?>
