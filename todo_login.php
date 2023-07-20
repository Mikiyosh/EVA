

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

<style>
  body {
            margin-top: 0;
            margin-left: 0;
            font-family: Helvetica, Neue, Helvetica, Arial, Segoe UI, YuGothic, Yu Gothic, Hiragino Sans, ヒラギノ角ゴ ProN, Hiragino Kaku Gothic ProN, Hiragino Kaku Gothic Pro, メイリオ, Meiryo, MS Pゴシック, MS PGothic, sans-serif;


        }

.login-container {
  background-color: #f9f9f9;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 20px;
  max-width: 300px;
  margin: 0 auto;
}

.login-container h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="password"] 
{
  width: 100%;
  padding: 8px;
  border-radius: 3px;
  border: 1px solid #ccc;
}


select[type="text"],
select[type="password"] {
  width: 100%;
  padding: 8px;
  border-radius: 3px;
  border: 1px solid #ccc;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  border: none;
  color: #fff;
  text-align: center;
  border-radius: 3px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}


</style>


</head>
<body>
    






<div class="login-container">
  <h2>ログインフォーム</h2>

<div>

<form action="todo_login_act.php" method="POST">
  
      <div class="wholeform">
        <div class="ev_form">

          <div class="pulld">

           <select id="term" class="form-group" name="term" type="text">
              <option value="">実施年を選択してください</option>
              <option value="二十年">2023年上期</option>
              <option value="二十一年">2023年下期</option>
              <option value="二十二年">2024年上期</option>
           　 <option value="二十三年">2024年下期</option>
           
            </select>


            <select id="section" class="form-group" name="section" type="text">
              <option value="">所属部署を選択してください</option>
              <option value="人事">XR LIVE推進室</option>
              <option value="総務">4Dプログラム制作室</option>
              <option value="営業">技術支援室</option>
              <option value="人事">VR開発室</option>
              <option value="総務">ロケーション営業</option>
              <option value="営業">PM室</option>
              <option value="人事">自社開発</option>
              <option value="総務">経営企画室</option>
      
            </select>

            <select id="grade" class="form-group" name="grade" type="text">
              <option value="">グレードを選択してください</option>
              <option value="一般">グレード1:TRAINEE</option>
              <option value="リーダー">グレード2:STAFF</option>
              <option value="マネジャー">グレード2+:TRAINER</option>
                            <option value="一般">グレード3:SPECIALIST</option>
              <option value="リーダー">グレード3+:SUB-MGR</option>
              <option value="マネジャー">グレード4:MANAGER</option>
               <option value="リーダー">グレード4:EXPERT</option>
              <option value="マネジャー">グレード5:GM</option>
            </select>

            <select id="age" class="form-group" name="age" type="text">
              <option value="">年齢を選択してください</option>
              <option value="二十代">20代</option>
              <option value="三十代">30代</option>
              <option value="四十代">40代</option>
              <option value="五十代">50代</option>
              <option value="六十代">60代</option>

            </select>

              <select id="gender" class="form-group" name="gender" type="text">
              <option value="">性別を選択してください</option>
              <option value="男性">男性</option>
             <option value="女性">女性</option>
             <option value="その他">その他</option>
           

            </select>

          </div>
        </div>
      </div>
</div>


    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
     <input type="submit" value="Login">

  </form>
  
</div>








</body>











</html>
