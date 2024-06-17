<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>恋愛検定 - 質問</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // ページ読み込み時に一番上にスクロール
        window.onload = function() {
            document.querySelector('.container').scrollIntoView(true);
        };
    </script>
</head>
<body>
    <div class="container">
        <h1>質問</h1>
        <form action="write.php" method="post">
            <!-- 隠しフィールドで基本情報を送信 -->
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <input type="hidden" name="age" value="<?php echo htmlspecialchars($_POST['age']); ?>">
            <input type="hidden" name="partner" value="<?php echo htmlspecialchars($_POST['partner']); ?>">

            <?php
            // パートナーの名前を取得
            $partner = htmlspecialchars($_POST['partner']);
            ?>

            <!-- 質問1 -->
            <div>
                <label><?php echo $partner; ?>の好きな色は？</label>
                <input type="radio" name="q1" value="赤" required> 赤<br>
                <input type="radio" name="q1" value="青"> 青<br>
                <input type="radio" name="q1" value="緑"> 緑<br>
                <input type="radio" name="q1" value="黄色"> 黄色<br>
            </div>

            <!-- 質問2 -->
            <div>
                <label><?php echo $partner; ?>の好きな食べ物は？</label>
                <input type="radio" name="q2" value="寿司" required> 寿司<br>
                <input type="radio" name="q2" value="ピザ"> ピザ<br>
                <input type="radio" name="q2" value="ステーキ"> ステーキ<br>
                <input type="radio" name="q2" value="パスタ"> パスタ<br>
            </div>

            <!-- 質問3 -->
            <div>
                <label><?php echo $partner; ?>の趣味は？</label>
                <input type="radio" name="q3" value="読書" required> 読書<br>
                <input type="radio" name="q3" value="スポーツ"> スポーツ<br>
                <input type="radio" name="q3" value="映画鑑賞"> 映画鑑賞<br>
                <input type="radio" name="q3" value="旅行"> 旅行<br>
            </div>

            <!-- 質問4 -->
            <div>
                <label><?php echo $partner; ?>が一番好きな季節は？</label>
                <input type="radio" name="q4" value="春" required> 春<br>
                <input type="radio" name="q4" value="夏"> 夏<br>
                <input type="radio" name="q4" value="秋"> 秋<br>
                <input type="radio" name="q4" value="冬"> 冬<br>
            </div>

            <!-- 質問5 -->
            <div>
                <label><?php echo $partner; ?>が一番リラックスする場所は？</label>
                <input type="radio" name="q5" value="自宅" required> 自宅<br>
                <input type="radio" name="q5" value="カフェ"> カフェ<br>
                <input type="radio" name="q5" value="自然の中"> 自然の中<br>
                <input type="radio" name="q5" value="海辺"> 海辺<br>
            </div>

            <!-- 質問6 -->
            <div>
                <label><?php echo $partner; ?>が好きな音楽のジャンルは？</label>
                <input type="radio" name="q6" value="ポップ" required> ポップ<br>
                <input type="radio" name="q6" value="ロック"> ロック<br>
                <input type="radio" name="q6" value="ジャズ"> ジャズ<br>
                <input type="radio" name="q6" value="クラシック"> クラシック<br>
            </div>

            <!-- 質問7 -->
            <div>
                <label><?php echo $partner; ?>が得意な料理は？</label>
                <input type="radio" name="q7" value="カレー" required> カレー<br>
                <input type="radio" name="q7" value="パスタ"> パスタ<br>
                <input type="radio" name="q7" value="焼き肉"> 焼き肉<br>
                <input type="radio" name="q7" value="鍋料理"> 鍋料理<br>
            </div>

            <!-- 質問8 -->
            <div>
                <label><?php echo $partner; ?>が好きな映画のジャンルは？</label>
                <input type="radio" name="q8" value="アクション" required> アクション<br>
                <input type="radio" name="q8" value="ロマンス"> ロマンス<br>
                <input type="radio" name="q8" value="コメディ"> コメディ<br>
                <input type="radio" name="q8" value="ドラマ"> ドラマ<br>
            </div>

            <!-- 質問9 -->
            <div>
                <label><?php echo $partner; ?>が行きたい旅行先は？</label>
                <input type="radio" name="q9" value="ハワイ" required> ハワイ<br>
                <input type="radio" name="q9" value="パリ"> パリ<br>
                <input type="radio" name="q9" value="ニューヨーク"> ニューヨーク<br>
                <input type="radio" name="q9" value="バリ"> バリ<br>
            </div>

            <!-- 質問10 -->
            <div>
                <label><?php echo $partner; ?>が一番大事にしている価値観は？</label>
                <input type="radio" name="q10" value="家族" required> 家族<br>
                <input type="radio" name="q10" value="友情"> 友情<br>
                <input type="radio" name="q10" value="自由"> 自由<br>
                <input type="radio" name="q10" value="誠実"> 誠実<br>
            </div>
            
            <button type="submit">送信</button>
        </form>
    </div>
</body>
</html>
