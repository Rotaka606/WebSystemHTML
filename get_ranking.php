<?php 
    function get_ranking(){
        try {
            // DBへ接続
            $PDO = new PDO("mysql:host=127.0.0.1; dbname=websystema4; charset=utf8", 'root', '');
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // テーブルの全データを取得
            $data = $PDO->prepare("select name,img_pass_1 from books natural inner join img order by number_of_sales desc limit 3");
            $data->execute(array());
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            
            for($i=0;$i<3;$i++){
                echo
                '<a href="ItemDetail.php"><img src="';
                echo $result[$i]['img_pass_1'];
                echo
                '" alt=""><li>';
                echo $result[$i]['name'];
                echo
                '</li></a>';
            }
            
        } catch(PDOException $e) {
            
            echo $e->getMessage();
            die();
        }
    
        // 接続を閉じる
        $PDO = null;
    }

?>