<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ステップ4テストページ</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="section3">
      <h1>フォーム入力</h1>
        <form action = "confirm.php" method="post">
          <label for="name">名前:</label>
          <input type="text" id="name" name="name">

          <label for="age">年齢:</label>
          <input type="text" id="age" name="age">

          <label for="phone">電話番号:</label>
          <input type="text" id="phone" name="phone">

          <label for="email">メールアドレス:</label>
          <input type="email" id="email" name="email">

          <label for="address">住所:</label>
          <input type="text" id="address" name="address">

          <label for="question">質問:</label>
          <input type="text" id="question" name="question">

          <label for="sex">性別:</label>
          <select id="sex" name="sex">
            <option value="男性">男性</option>
            <option value="女性">女性</option>
            <option value="その他">その他</option>
          </select>

          <button type="submit">送信</button>
        </form>
    </section>
  <footer>
    <p>&copy; 2025 HTML Training Page. All rights reserved.</p>
  </footer>
</body>
</html>