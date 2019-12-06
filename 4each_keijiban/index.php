<!DOCTYPE html>
<html lang="ja">
  
  <head>
    
    <meta charset="UTF-8">
    <title>4each掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
  </head>
  
  
  <body>
   
    
        <?php
        
         mb_internal_encoding("utf8");
         $pdo=new PDO("mysql:dbname=4each_keijiban;host=localhost;","root","mysql");
         $stmt=$pdo->query("select*from 4each_keijiban");
        
        ?>
        
     <header>
         <div class="logo">
             <img src="./4eachblog_logo.jpg">
         </div>
       
         <div class="banner">
           <ul class="menu">
             <li>トップ</li>
             <li>プロフィール</li>
             <li>4eachについて</li>
             <li>登録フォーム</li>
             <li>問い合わせ</li>
             <li>その他</li>
           </ul>   
         </div>  
       
       
     </header> 
     
     
    
     
       <div class="left">
         <h1>プログラミングに役立つ掲示板</h1> 
         <br>
       </div>
    
      
     
     
    <div class="right">
       
       <h2>人気の記事</h2>
       
        <ul class="r_menu">
            <li>PHP オススメ本</li>
             <p></p>
            <li>PHP MyADminの使い方</li>
             <p></p>
            <li>今人気のエディタ TOP5</li>
             <p></p>
            <li>HTMLの基礎</li>
        </ul>
           <div class="ma">
           </div>
            
       <h2>オススメリンク</h2>
       
       <ul class="r_menu">
           <li>インターノウス株式会社</li>
            <p></p>
           <li>XAMPPのダウンロード</li>
            <p></p>
           <li>Eclipseのダウンロード</li>
            <p></p>
           <li>Bracketsのダウンロード</li>
       </ul>
           <div class="ma">
           </div>
    
       <h2>カテゴリ</h2>
       
       <ul class="r_menu">
           <li>HTML</li>
            <p></p>
           <li>PHP</li>
            <p></p>
           <li>MySQL</li>
            <p></p>
            <li>JavaScript</li>
       </ul>
     </div>
     <div class="main">
        <form method="post" action="insert.php">  
            <div class="nyuryoku">入力フォーム</div>
            <br>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="ind_name">
            <br>
            <p></p>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="ind_title">
            <br>
            <p></p>
            <label>コメント</label>
            <br>
            <textarea cols="80" rows="15" name="ind_come"></textarea>
            <p></p>
            <input type="submit" class="submit" value="送信する">
        </form>
       </div>
        
        <?php
        
         while($row=$stmt->fetch()){
        
          echo "<div class='kiji'>";
          echo "<h3>".$row['title']."</h3>";
          echo "<div class='contents'>";
          echo $row['come'];
          echo "<p></p>";
          echo "<div class='handlename'>posted by".$row['name']."</div>";
          echo "</div>";
          echo "</div>";     
         }
        ?>
        
      
  </body>
  
     <footer>
       copyright © internous｜4each blog is the one which provides A to Z about programming.
   </footer>
    
</html>