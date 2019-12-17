<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Top Page</title>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/homecss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  </head>

  <body>
      
      <header>
        <h1><a href="TopPage.php" class="Y_bookstore">Y bookstore</a></h1>
          <nav>
            <p class="state"><b>ようこそゲストさん</b></p>
            <p class="login"><button type="button" name="button" >ログイン</button></p>
            <form class="search" action="" method="get">
              <input type="text" id="search">
              <input type="submit" value="検索" onclick="location.href='searchResult.html' " id="query-send">
            </form>
          </nav>
        <img src="img/topimg1.jpg" alt="topimage" class="topimg">
        <script>
          $(function(){
            $(window).scroll(function() {
              if ($(this).scrollTop() > 497) {
                $('h1').css('background-image', 'url(img/topimg2.jpg)');
                $('h1').css('background-repeat', 'no-repeat');
                $('h1').css('background-size', '100%');
                $('h1').css('margin-bottom','2rem');
                $('h1').css('box-shadow','0px 3px 3px dimgray');
              } else {
                $('h1').css('background', 'none');    
                $('h1').css('box-shadow', 'none'); 
              }
            });
          });
        </script>
      </header> 

      <div class="main_container">
        <div class="category">
          <h2 id="genre">ジャンルから探す</h2>
          <!--
          <div class="wrapC">
            <div class="magizine">
              <a href="category/magazine.html"><img src="img/magazine.png" alt="雑誌"></a>
            </div>
            <div class="technical">
              <a href="category/technical.html"><img src="img/technical.png" alt="技術書"></a>
            </div>
            <div class="commic">
              <a href="category/commic.html"><img src="img/commic.png" alt="コミック"></a>
            </div>
            <div class="other">
              <a href="category/other.html"><img src="img/other.png" alt="その他"></a>
            </div>
          </div>
          -->
          <ul class="genre_container">
            <li class="genre_container_item"><a href=""><div class="genre_block">文学・評論</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">ノンフィクション</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">ビジネス・経済</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">歴史・地理</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">政治・社会</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">芸能・エンターテインメント</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">アート・建築・デザイン</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">人文・思想・宗教</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">暮らし・健康・料理</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">サイエンス・テクノロジー</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">趣味・実用</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">教育・自己啓発</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">スポーツ・アウトドア</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">辞典・年鑑・本・言葉</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">音楽</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">旅行・紀行</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">絵本・児童本</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block">コミックス</div></a></li>
            <li class="genre_container_item"><a href=""><div class="genre_block_last">もっと詳しく探す</div></a></li>
          </ul>
        </div>

        <div class="recomendationList">
          <h2 id="rec">最近のおすすめ！</h2>
          <div class="wrapR">
            <a href="ItemDetail.php"><img src="img/recipe.png" alt=""><p>レシピ本</p></a>
            <a href="ItemDetail.php"><img src="img/misteriousbook.png" alt=""><p>謎の本</p></a>
            <a href="ItemDetail.php"><img src="img/scarebook.png" alt=""><p>怖い本</p></a>
            <a href="ItemDetail.php"><img src="img/oldbook.png" alt=""><p>古文書</p></a>
            <a href="Recommendation.html"><p>もっとみる</p></a>
          </div>
        </div>

        <div class="rankingList">

          <h2 id="ranking">ランキング</h2>

          <input type="button" value="並べ替え" class="sort">

          <label for="ranking">:</label>
            <select class="ranking_sort">
                <option value="sold" selected>売上順</option>
                <option value="searched">検索されている順</option>
            </select>

          <section class="sold">
            <ol class="wrapR">
              <?php
                include('get_ranking.php');
                echo get_ranking();
              ?>
            </ol>
          </section>

          <section class="searched">
            <ol class="wrapR">
              <a href="ItemDetail.php"><img src="img/misteriousbook.png" alt=""><li>謎の本</li></a>
              <a href="ItemDetail.php"><img src="img/oldbook.png" alt=""><li>古文書</li></a>
              <a href="ItemDetail.php"><img src="img/scarebook.png" alt=""><li>怖い本</li></a>
              <a href="ItemDetail.php"><img src="img/recipe.png" alt=""><li>レシピ本</li></a>
            </ol>
          </section>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script>
            $(function(){
              var RS = $(".ranking_sort").val();
                if(RS == "sold") {
                  $('.sold').css('display', 'block');
                  $('.searched').css('display', 'none');
                }else if(RS == "searched") {
                  $('.sold').css('display', 'none');
                  $('.searched').css('display', 'block');
                }
              $(".ranking_sort").change(function() {
                var RS = $(".ranking_sort").val();
                if(RS == "sold") {
                  $('.sold').css('display', 'block');
                  $('.searched').css('display', 'none');
                }else if(RS == "searched") {
                  $('.sold').css('display', 'none');
                  $('.searched').css('display', 'block');
                }
              });
            });
            </script>

        </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/index.js" charset="utf-8"></script>
  </body>
</html>
