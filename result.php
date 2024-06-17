<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>回答結果</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>回答結果</h1>
        <?php
        $row_num = intval($_GET['row']); // 行番号を取得

        // data.csvファイルを読み取り専用で開く
        if (($file = fopen("data.csv", "r")) !== false) {
            $current_row = 0;
            // CSVファイルの各行を読み取る
            while (($data = fgetcsv($file)) !== false) {
                $current_row++; // 行番号をカウント!! ここでのカウントが、row_numと一致したら下を実行!!
                if ($current_row == $row_num) {
                    echo "<table>";
                    echo "<tr><th>お名前</th><td>" . htmlspecialchars($data[0]) . "</td></tr>";
                    echo "<tr><th>年齢</th><td>" . htmlspecialchars($data[1]) . "</td></tr>";
                    echo "<tr><th>パートナーの名前</th><td>" . htmlspecialchars($data[2]) . "</td></tr>";
                    echo "<tr><th>好きな色</th><td>" . htmlspecialchars($data[3]) . "</td></tr>";
                    echo "<tr><th>好きな食べ物</th><td>" . htmlspecialchars($data[4]) . "</td></tr>";
                    echo "<tr><th>趣味</th><td>" . htmlspecialchars($data[5]) . "</td></tr>";
                    echo "<tr><th>好きな季節</th><td>" . htmlspecialchars($data[6]) . "</td></tr>";
                    echo "<tr><th>リラックスする場所</th><td>" . htmlspecialchars($data[7]) . "</td></tr>";
                    echo "<tr><th>好きな音楽のジャンル</th><td>" . htmlspecialchars($data[8]) . "</td></tr>";
                    echo "<tr><th>得意な料理</th><td>" . htmlspecialchars($data[9]) . "</td></tr>";
                    echo "<tr><th>好きな映画のジャンル</th><td>" . htmlspecialchars($data[10]) . "</td></tr>";
                    echo "<tr><th>行きたい旅行先</th><td>" . htmlspecialchars($data[11]) . "</td></tr>";
                    echo "<tr><th>大事にしている価値観</th><td>" . htmlspecialchars($data[12]) . "</td></tr>";
                    echo "</table>";
                    break;
                }
            }
            fclose($file);
        } else {
            echo "データが見つかりません。";
        }
        ?>
        <br>
        <a href="index.php">最初に戻る</a>
    </div>
</body>
</html>
