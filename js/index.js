$(function(){
  $(".login").on("click", function(){
    if($(".login").hasClass("logining")){
      $("#state").text('ようこそゲストさん');
      $(".login.logining").html('<button type="button" name="button">ログイン</button>');
      $(".login").removeClass("logining");

    }else{
      var email = prompt("メールアドレスを入力してください");
      var pass = prompt("パスワードを入力してください");
      var name = prompt("ユーザ名を入力して下さい");
      $("#state").text('ようこそ'+name+'さん');
      $(".login").html('<button type="button" name="button">ログアウト</button>');

      $(".login").addClass("logining");
    }
  });
});
