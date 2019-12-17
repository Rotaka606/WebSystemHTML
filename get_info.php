<?php
function return_info($id){
    $id_number = $id;
    try {
        // DBへ接続
        $PDO = new PDO("mysql:host=127.0.0.1; dbname=websystema4; charset=utf8", 'root', '');

        // テーブルの全データを取得
        $data = $PDO->prepare("select * from books natural inner join Genre where id = ?");
        $data->execute(array($id));
        $result = $data->fetch(PDO::FETCH_ASSOC);
        
        echo
        '<ul><li>本のタイトル：';
        echo $result['name']. '<br />';
        echo
        '</li><li>ジャンル：';
        echo $result['genre_name']. '<br />';
        echo
        '</li><li>発売日：';
        echo $result['release_date']. '<br />';
        echo
        '</li><li>作者：';
        echo $result['author']. '<br />';
        echo
        '</li><li>価格：';
        echo $result['price']. '<br />';
        echo
        '</li><li>総合評価：';
        echo $result['review_point']. '<br />';
        echo '</li></li></ul>';

        

    } catch(PDOException $e) {
        
        echo $e->getMessage();
        die();
    }

// 接続を閉じる
$PDO = null;
}