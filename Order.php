<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OrderPage</title>
    <script type="text/javascript" src="d3/d3.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://jsgt.org/lib/jquery/plugin/csv2table/v002/js/jquery.csv2table-0.02-b-4.7.js" type="text/javascript" charset="utf-8"></script>
  </head>
  <body>
    <p>こんにちは は英語で<?php echo "hello."; ?></p>
    <table border="1">
      <tbody id="boxes">
          <tr>
              <th>選択</th>
              <th>書籍名</th>
              <th>出版社</th>
              <th>販売会社</th>
              <th>売上数</th>
              <th>在庫</th>
            </tr>
            <tr>
              <th><input type="checkbox" name="check" id="check"></input></th>
              <th>怖い本</th>
              <th>ゴロゴロ出版</th>
              <th>ゴロゴロ社</th>
              <th>30</th>
              <th>9</th>
            </tr>
            <tr>
              <th><input type="checkbox" name="check" id="check"></input></th>
              <th>謎の本</th>
              <th>ゴロゴロ出版</th>
              <th>ゴロゴロ社</th>
              <th>56</th>
              <th>3</th>
            </tr>
            <tr>
              <th><input type="checkbox" name="check" id="check"></input></th>
              <th>古文書</th>
              <th>ゴロゴロ出版</th>
              <th>ゴロゴロ社</th>
              <th>78</th>
              <th>17</th>
            </tr>
            <tr>
              <th><input type="checkbox" name="check" id="check"></input></th>
              <th>レシピ本</th>
              <th>ゴロゴロ出版</th>
              <th>ゴロゴロ社</th>
              <th>45</th>
              <th>19</th>
            </tr>
      </tbody>

    </table>

    <button type="button" name="button" id="selectAll">一括選択</button>
    <button type="button" name="button">発注</button>
    <ul>
      <li><input type="radio" name="" value="">在庫残り1冊以下自動発注</input></li>
      <li><input type="radio" name="" value="">在庫残り1冊以下なら通知</input></li>
    </ul>
    <script src="js/index.js" charset="utf-8"></script>
    <script src="js/order.js" charset="utf-8"></script>
  </body>
</html>
