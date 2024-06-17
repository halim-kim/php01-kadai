<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>恋愛検定 - 基本情報入力</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>基本情報入力</h1>
        <form action="questions.php" method="post">
            お名前: <input type="text" name="name" required><br>
            年齢: <input type="number" name="age" required><br>
            パートナーの名前: <input type="text" name="partner"><br>
            <button type="submit">次へ</button>
        </form>
    </div>
</body>
</html>
