<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ステップ4テストページ入力内容確認</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="confirm">
      <h1>入力内容確認</h1>
        <?php
            if($_SERVER["REQUEST_METHOD"]=== 'POST'){
                /*入力内容の取得*/
                $name = $_POST["name"];
                $age = $_POST["age"];
                $phone = $_POST["phone"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $question = $_POST["question"];
                $sex = $_POST["sex"];
                $error = 0;

                if(!preg_match("/\A[\p{Hiragana}\p{Katakana}\p{Han}a-zA-Z々ー]+\z/u",$name)){
                    /*名前のバリデーション*/
                    echo"<p>名前にはひらがな、カタカナ、漢字、英字のみ使用可能です</p>";
                    $error++;
                }
                if(!preg_match("/\A(0|[1-9][0-9]?|1[0-4][0-9]|150)\z/",$age)){
                    /*年齢のバリデーション*/
                    echo"<p>年齢は0～150の間で入力してください</p>";
                    $error++;
                }
                if(!preg_match("/\A[0-9-]+\z/",$phone)){
                    /*電話番号のバリデーション*/
                    echo"<p>電話番号には半角数字とハイフンのみ使用可能です</p>";
                    $error++;
                }
                if(!preg_match("/\A[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+\z/",$email)){
                    /*メールアドレスのバリデーション*/
                    echo"<p>メールアドレスの形式が正しくありません</p>";
                    $error++;
                }
                if(!preg_match("/\A[\p{Hiragana}\p{Katakana}\p{Han}a-zA-Z0-9々ー\-‐]+\z/u",$address)){
                    /*住所のバリデーション*/
                    echo"<p>住所にはひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用可能です</p>";
                    $error++;
                }
                if(!preg_match('/[^\s ]/u', $question)){
                    /*質問のバリデーション*/
                    echo"<p>質問には空欄、あるいはスペースのみでの送信は出来ません</p>";
                    $error++;
                }
                if($error == 0){
                    echo"<p>名前:".htmlspecialchars($name,ENT_QUOTES,'UTF-8')."</p>";
                    echo"<p>年齢:".htmlspecialchars($age,ENT_QUOTES,'UTF-8')."</p>";
                    echo"<p>電話:".htmlspecialchars($phone,ENT_QUOTES,'UTF-8')."</p>";
                    echo"<p>メール:".htmlspecialchars($email,ENT_QUOTES,'UTF-8')."</p>";
                    echo"<p>住所:".htmlspecialchars($address,ENT_QUOTES,'UTF-8')."</p>";
                    echo"<p>質問:".htmlspecialchars($question,ENT_QUOTES,'UTF-8')."</p>";
                    echo"<p>性別:".htmlspecialchars($sex,ENT_QUOTES,'UTF-8')."</p>";
                }
            }else{
                echo "<p>データが送付されていません</p>";
            }

        ?>
    </section>
  <footer>
    <p>&copy; 2025 HTML Training Page. All rights reserved.</p>
  </footer>
</body>
</html>