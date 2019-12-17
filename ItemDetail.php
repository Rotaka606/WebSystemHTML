<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Item Detail</title>
    </head>

    <body>
        <h1>商品詳細</h1>
        <h2>この本について</h2>
        
        <?php 
            include('get_info.php');
            $id = 003;
            echo return_info($id);
        ?>

        <p>商品の説明…<br>brabra.</p>

        <h2>レビュー</h2>
        <ul class="Reviews">
            <li>とてもよい。<!--a review-->
                <ul class="Property">
                    <li>匿名投稿者</li>
                    <li>評価：5</li>
                    <li>投稿日：2019/11/28</li>
                </ul>
                <p class="ReviewText">（レビュー本文）</p>
            </li>
        </ul>

        <h3>カート</h3>
        <p><a href="Login.html">カートに入れる</a></p>

        <!--recommendation-->
        <div>
            <h1>（本のタイトル）を買った人は次の本を買っています：</h1>
            <div class="purchaseRec">
                <div class="revBook">
                        <a href="ItemDetail.html"><img src="img/recipe.png"></a>
                        <a href="ItemDetail.html">レシピ本</a>
                        <img id="heart" onclick="like()" src="img/unlike.png">
                            <script type="text/javascript">
                                function like(){
                                    document.getElementById("heart").src="img/like.png";
                                }
                            </script>
                </div>
            </div>
        </div>
    </body>
</html>