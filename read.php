<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>保存されたデータ</title>
</head>
<body>
    <h1>保存されたデータ</h1>
    <table border="1">
        <tr>
            <th>お名前</th>
            <th>年齢</th>
            <th>パートナーの名前</th>
            <th>好きな色</th>
            <th>好きな食べ物</th>
            <th>趣味</th>
            <th>好きな季節</th>
            <th>リラックスする場所</th>
            <th>好きな音楽のジャンル</th>
            <th>得意な料理</th>
            <th>好きな映画のジャンル</th>
            <th>行きたい旅行先</th>
            <th>大事にしている価値観</th>
        </tr>
        <?php
        // data.csvファイルを読み取り専用で開く
        if (($file = fopen("data.csv", "r")) !== false) {
            // CSVファイルの各行を読み取る
            while (($data = fgetcsv($file)) !== false) {
                echo "<tr>";
                // 各セルのデータをサニタイズして表示
                foreach ($data as $cell) {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>";
            }
            fclose($file);
        } else {
            // データがない場合のメッセージ表示
            echo "<tr><td colspan='13'>データがありません。</td></tr>";
        }
        ?>
    </table>
</body>
</html>
