<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,400&family=Sigmar&display=swap"
    rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="index.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

  <link rel="stylesheet" href="css/sample.css">
  <title>value sheet</title>


<style>

body {
    margin-top: 0;
    margin-left: 0;
    font-family: "Open Sans",Meiryo,"メイリオ",Arial,sans-serif;
    text-align: center;
    width: 1250px;
}

element.style {
    width: 200px;

}

header {
    font-size: 24px;
}


img {
    width: 300px;
}


h2 {
    font-size: 12px;
}

/*title-------------------------*/



.whole_wrapper {
    display: flex;
    padding: 0 5px 0 5px;
    width: 1210px;
}

ul {
    list-style-type: none;
    font-size: 12px;
    text-align: center;
    padding: 0;

}

li {
    padding: 0 0 12px 0;
}

.ktit {
    color: #0066cc;
    font-weight: bold;
    font-size: 18px;
    height: 7px;
}

.evasheet_wrapper2 {
    background-color: rgba(241, 241, 241, 0.872);
    padding: 0 0 30px 0;
    margin: auto;
    height:1000px;

}



input[type*="radio"] {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 16px;
    height: 16px;
    margin: 0 10px 0 0;
    border: solid 1px #a0a0a0;
    border-radius: 50%;

}

input[type*="radio"]:checked {
    background-color: #f0c20b;
}


.modal {
    display: none;
    height: 100vh;
    position: fixed;
    top: 0;
    width: 100%;
}

.modal__bg {
    background: rgba(0, 0, 0, 0.7);
    height: 100vh;
    position: absolute;
    width: 100%;
}

.modal__content {
    background: #fff;
    left: 50%;
    padding: 40px;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 60%;
}


.formselfeva2 input {
    width: 150px;
    height: 200px;
}


.js-modal-open {
    font-size: 12px;
    line-height: 1;
}



canvas {
    width: 500px;
    margin: auto;
}

.main {
    width: 1250px;
}



/*title-------------------------*/





.mission {
    color: rgb(232, 144, 20);
    margin: auto;
}

.vision {
    color: rgb(244, 204, 28);
    margin: auto;

}

.value {
    color: #0066cc;
    margin: auto;

}

.mission_wrapper {
    padding: 100px 0 15px 0;
}

.vision_wrapper {
    padding: 0 0 15px 0;
}

.value_wrapper {
    padding: 0 0 5px 0;
}

.eva_sheet {
    padding: 30px 0 50px 0;
    font-size: 24px;
    font-weight: bold;
}


.box_wrapper {
    width: 1200px;
    list-style: none;
    display: flex;
    margin: 0 10px 0 10px;
    padding: 0 0 0 20px;
}


.kno_div {
    width: 180px;
}


.fol_div {
    width: 180px;
}

.le_div {
    width: 180px;
}

.hos_div {
    width: 180px;
}

.fle_div {
    width: 180px;
}

li {
    padding: 0 0 12px 0;
}



.ad {
    font-size: 10px;
    padding: 5px 5px 5px 5px;
    background-color: #D9E5FF;
    font-weight: 500;
}


.box2 {
    width: 280px;
    height: 900px;
    font-size: 12px;
    font-weight: bold;
    color: Dark gray;
    background-color: white;
    margin: 0 5px 0 5px;
    display: flex;
    flex-direction: column;
    text-align: center;
    padding: 0 5px 0 5px;
    border-radius: 5px;
}



input[type*="radio"] {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 16px;
    height: 16px;
    margin: 0 10px 0 0;
    border: solid 1px #a0a0a0;
    border-radius: 50%;

}

input[type*="radio"]:checked {
    background-color: #f0c20b;
}


.content {
    margin: 0 auto;
    padding: 40px;
}

.modal {
    display: none;
    height: 100vh;
    position: fixed;
    top: 0;
    width: 100%;
}

.modal__bg {
    background: rgba(0, 0, 0, 0.7);
    height: 100vh;
    position: absolute;
    width: 100%;
}

.modal__content {
    background: #fff;
    left: 50%;
    padding: 40px;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 60%;
}



.motit {
    font-weight: bold;
    margin: 5px 5px;
}

.mode {
    line-height: 2;
    text-align: left;
    font-size: 14px;
    padding-left: 2px;
    padding-right: 2px;
    padding-top: 2px;
    padding-bottom: 2px;
    background-color: rgba(241, 241, 241, 0.872);
}


.formselfeva {
    margin: auto;
}

.formselfeva1 {
    margin: auto;
    text-align: right;
    padding: 0 10px 0 0;

}


#fle {
    height: 25px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#ktext {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 175px;
}
.ktext {
    width: 150px;
    height: 200px;
    border: 1px solid #ccc;
    border-radius: 5px;
}



#itext {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 175px;
}



#ltext {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 175px;
}


#ftext {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 175px;
}


#htext {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 175px;
}


a {
    text-decoration: none;
    color: gray;
    font-size: 12px;
}

a:hover {
    color: #0066cc;
    font-weight: bold;
    font-weight: bold;

}

.js-modal-open {
    font-size: 12px;
    line-height: 1;
}



.with_dropdown{
  list-style: none;
}



.nav_box {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #ffffff;
    z-index: 999;
    font-size: 14px;
    display: flex;
    justify-content: flex-end;
    margin: 0 10px 0 0;
    }

.nav_box_list {
    width: 100%;
    height:60px;
    font-weight:none;
    background-color:#D9E5FF;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 30px 0 0;
    margin: 0 0 0 0;
    list-style: none;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* 2pxの横へのずれ、2pxの縦へのずれ、4pxのぼかし、透明度0.2の影を追加 */
    }

.nav_box_list a{
    font-weight: none;
    font-size: 14px;
}

.with_dropdown .dropdown_menu {
            width: 500px;
            margin-top: 0;
            padding: 5px 0 0 10px;
            right: 0;
            /* 画面の右端に配置 */
            left: auto;
            /* 左位置をリセット */
            opacity: 0.5;
            /* 透明度を指定（0に近いほど透明になる） */
        }

.nav_items {
            padding: 0 20px 0 0;
            font-weight: bold;
        }

.nav_items.with_dropdown:hover .dropdown_menu {
            display: block;
            /* 幅を500pxに指定 */
            margin-top: 0;
            padding: 5px 0 0 10px;
            height: auto;
            white-space: nowrap;
            opacity: 0.9;
        }


.nav_items a:hover {
            color: inherit !important;
            /* 継承された文字色を適用 */
            text-decoration: none !important;
            /* 下線を削除 */
            border: none !important;
            /* 枠を削除 */
        }


.with_dropdown:hover .dropdown_menu {
            display: block;
            height: auto;
            list-style: none;
            opacity: 1;
        }

.dropdown_menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            /* 画面の右端に配置 */
            padding: 0;
            background-color: white;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            margin-top: 10px;
            white-space: nowrap;
            width: 500px;
            /* 幅を500pxに指定 */

        }


.dropdown_menu li {
            padding: 10px;
            width: max-content;
            /* リストアイテムの幅をコンテンツに合わせる */
            list-style: none;
        }


.nav_items.logo {
            margin-right: auto;
            /* Pushes the logo to the left */
        }

.nav_list {
            list-style-type: none;
            border-bottom: none;
        }

.nav_items.logo img {
            width: 180px;
            /* Adjust the width as needed */
            height: auto;
        }


.nav_items a {
            text-decoration: none;
            font-weight: 550;
        }

.nav_items:nth-child(4) a:hover {

    border: 2px solid 000080;
    background-color: white;
    color: #000080;
    border: 1px solid #000080;
        }

.mvvw{
    height:500px;
}
.tab{
    margin-top:100px;
    

}

.table {
    
    width: 800px; /* テーブル全体の幅を指定 */
    height: 300px;
    margin:auto;
    background-color:white;
    border-collapse: collapse; /* テーブルのセルの罫線を重ねて表示 */
    }

.table td {
    border: 1px solid grey; /* グレーの細い罫線を引く */
    padding: 5px; /* セルの内側の余白を設定 */
    }

.table td:nth-child(1) {
    width: 80px;
    }

.table td:nth-child(2) {
    width: 80px; /* 行1列2の幅を300pxに設定 */
    }


.table td:nth-child(3) {
    width: 250px; /* 行1列2の幅を300pxに設定 */
    }
.table td:nth-child(4) {
    width: 50px; /* 行1列2の幅を300pxに設定 */
    }
.firstt{
    background-color:#D3D3D3;
    height:25px;
}

.table td input {
    width: 100%;
    box-sizing: border-box;
    border: none;
    outline:none;
    }

.table2 {

    width: 800px; /* テーブル全体の幅を指定 */
    height: 400px;
    margin:auto;
    margin-top:-5px;
    background-color:white;
    border-collapse: collapse; /* テーブルのセルの罫線を重ねて表示 */
    }

.table2 td {
    border: 1px solid grey; /* グレーの細い罫線を引く */
    padding: 5px; /* セルの内側の余白を設定 */
    }

.table2 td:nth-child(1) {
    width:60px;
    }

.table2 td:nth-child(2) {
    width: 210px; /* 行1列2の幅を300pxに設定 */
    }


.table2 td:nth-child(3) {
    width: 310px; /* 行1列2の幅を300pxに設定 */
    }
.table2 td:nth-child(4) {
    width: 60px; /* 行1列2の幅を300pxに設定 */
    }

.table2 td input {
    width: 100%;
    box-sizing: border-box;
    border: none;
    outline:none;
    }
.valuekpi{
    margin:30px 0 0 0;
}

.bcolor{
    background-color:#EEEEEE;
}



</style>


</head>


<body>
  <!--title-->

    <header>
        <div class="nav_box_wrapper">
            <nav class="nav_box">
                <ul class="nav_box_list">
                    <li class="nav_items logo"><img src="" alt=""></li>
                    
                    <li class="nav_items with_dropdown">
                        <a href="#OURSERVICES">ユーザー選択</a>
                        <ul class="dropdown_menu">
                           
                            <li><a href="#OURSERVICES">管理者</a></li>
                            <li><a href="#OURSERVICES">従業員</a></li>          </ul>
                    </li>

                      <li class="nav_items"><a href="">目標設定</a></li>

                    <li class="nav_items with_dropdown">
                        <a href="">評価</a>
                        <ul class="dropdown_menu">
                           
                            <li><a href="#OURSERVICES">自己評価</a></li>
                            <li><a href="#OURSERVICES">評価確認</a></li>          </ul>
                    </li>

                       <li class="nav_items"><a href="survey.php">サーベイ</a></li>
                        <li class="nav_items"><a href="qa.php">Q&A</a></li>
                </ul>
            </nav>
        </div>
  </header>        
  
  
  <script>

            document.addEventListener('DOMContentLoaded', function () {
                var dropdowns = document.querySelectorAll('.with_dropdown');

                dropdowns.forEach(function (dropdown) {
                    var link = dropdown.querySelector('a');
                    var menu = dropdown.querySelector('.dropdown_menu');
                    var isHovered = false;

                    link.addEventListener('mouseenter', function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        isHovered = true;
                        showMenu();
                    });

                    link.addEventListener('mouseleave', function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        isHovered = false;
                        setTimeout(hideMenu, 200); // メニューがマウスから外れた場合に遅延してメニューを非表示にする
                    });

                    menu.addEventListener('mouseenter', function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        isHovered = true;
                        showMenu();
                    });

                    menu.addEventListener('mouseleave', function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        isHovered = false;
                        setTimeout(hideMenu, 200); // メニューがマウスから外れた場合に遅延してメニューを非表示にする
                    });

                    function showMenu() {
                        if (isHovered) {
                            menu.style.display = 'block';
                        }
                    }

                    function hideMenu() {
                        if (!isHovered) {
                            menu.style.display = 'none';
                        }
                    }
                });
            });


        </script>

  <main>


  



  

<div class="tab">
<p>業績目標</p>
    <table class="table">
            <tr class="firstt">
                <td>項目</td>
                <td>目標数値</td>
                <td>目標設定</td>
                <td>ウェイト</td>
            </tr>
            <tr>
                <td>全社目標</td>
                <td>全社目標数値</td>
               <td><input type="text" placeholder="全社目標をどのように達成するか記入して下さい。"></td>
                <td>ウェイト</td>
            </tr>
            <tr>
                <td>部門目標</td>
                <td>部門目標数値</td>
              <td><input type="text" placeholder="全社目標をどのように達成するか記入して下さい。"></td>
                <td>ウェイト</td>
            </tr>
            <tr>
                <td>自己啓発</td>
                <td>達成レベル</td>
             <td><input type="text" placeholder="全社目標をどのように達成するか記入して下さい。"></td>
                <td>ウェイト</td>
            </tr>
    </table>


<p class="valuekpi">バリュー目標</p>
    <table class="table2">
            <tr class="firstt">
                <td>項目</td>
                <td>詳細</td>
                <td>目標設定</td>
            </tr>
            <tr>
                <td rowspan="3">KNOWLEDGE<br>技術と知識</td>
                <td> <a class="js-modal-open" href="" data-target="modal01">文章作成力</a></td>
                <td><input type="text" placeholder="文章作成力をどのよう達成するか記入して下さい。"></td>

            <tr>
                <td><a class="js-modal-open" href="" data-target="modal02">テクニカルスキル</a></td>
                <td><input type="text" placeholder="テクニカルスキルをどのよう達成するか記入して下さい。"></td>          
  
            </tr>
            <tr>
                <td><a class="js-modal-open" href="" data-target="modal03">ラーニングアジリティ</a></td>
                <td><input type="text" placeholder="ラーニングアジリティをどのように達成するか記入して下さい。"></td>

            </tr>
        
            <tr>
                <td rowspan="3">INNOVATION<br>発想力</td>
                <td><a class="js-modal-open" href="" data-target="modal04">企画発案力</a></td>
                <td><input type="text" placeholder="発想力をどのように達成するか記入して下さい。"></td>

            </tr>

            <tr>
                <td><a class="js-modal-open" href="" data-target="modal05">問題定義と改善</a></td>
                <td><input type="text" placeholder="問題定義と改善をどのように達成するか記入して下さい。"></td>
    
            </tr>

            <tr>
                <td><a class="js-modal-open" href="" data-target="modal06">探求心と追求心</a></td>
                <td><input type="text" placeholder="探求心と追求心をどのように達成するか記入して下さい。"></td>
          
            </tr>
            <tr>
                <td rowspan="3">LEADERSHIP<br>リーダーシップ</td> 
                <td><a class="js-modal-open" href="" data-target="modal07">ビジョニング力</a></td>
                <td><input type="text" placeholder="ビジョニング力をどのように達成するか記入して下さい。"></td>
           
            
            </tr>
            <tr>
                <td><a class="js-modal-open" href="" data-target="modal08">目標設定と遂行力</a></td>
                <td><input type="text" placeholder="目標設定と遂行力をどのように達成するか記入して下さい。"></td>
            </tr>

            <tr>
                <td><a class="js-modal-open" href="" data-target="modal09">影響力</a></td>
                <td><input type="text" placeholder="影響力をどのように達成するか記入して下さい。"></td>
            </tr>
            <tr>
                <td rowspan="3">FOLLOWERSHIP<br>フォロワーシップ</td> 
                <td><a class="js-modal-open" href="" data-target="modal10">翻訳力</a></td>
                <td><input type="text" placeholder="翻訳力をどのように達成するか記入して下さい。"></td>
            </tr>
            <tr>
                <td><a class="js-modal-open" href="" data-target="modal11">プロジェクトマネジメント</a></td>
                <td><input type="text" placeholder="全社目標をどのように達成するか記入して下さい。"></td>
            </tr>
    　      <tr>
                <td><a class="js-modal-open" href="" data-target="modal12">チームマネジメント</a></td>
                <td><input type="text" placeholder="全社目標をどのように達成するか記入して下さい。"></td>
            </tr>

            <tr>
                <td rowspan="3">HOSPITALITY<br>ホスピタリティ</td> 
                <td><a class="js-modal-open" href="" data-target="modal13">人材育成</a></td>
                <td><input type="text" placeholder="人材育成をどのように達成するか記入して下さい。"></td>
            </tr>
            <tr>
                <td><a class="js-modal-open" href="" data-target="modal14">メンバーシップ</a></td>
                <td><input type="text" placeholder="メンバーシップをどのように達成するか記入して下さい。"></td>
            </tr>
    　      <tr>
                <td><a class="js-modal-open" href="" data-target="modal15">セルフマネジメント</a></td>
                <td><input type="text" placeholder="セルフマネジメントをどのように達成するか記入して下さい。"></td>
            </tr>
            <tr>
                <td rowspan="3">HOSPIFLEXIBILITY<br>経験と対応力</td> 
                <td><a class="js-modal-open" href="" data-target="modal16">現場力</a></td>
                <td><input type="text" placeholder="現場力をどのように達成するか記入して下さい。"></td>
            </tr>
            <tr>
                <td><a class="js-modal-open" href="" data-target="modal17">トラブル対応力</a></td>
                <td><input type="text" placeholder="トラブル対応力をどのように達成するか記入して下さい。"></td>
            </tr>
    　      <tr>
                <td><a class="js-modal-open" href="" data-target="modal18">クライアント対応力</a></td>
                <td><input type="text" placeholder="クライアント対応力をどのように達成するか記入して下さい。"></td>
            </tr>

    </table>


</div>




        <div id="modal01" class="modal js-modal">
          <div class="modal__bg js-modal-close"></div>
          <div class="modal__content">
            <p class="motit">文章作成力</p>
            <p class="mocon">一般教養（日本語力・文章力）、企画書作成</p>
            <p class="mode">
              ①文章力が足りないと上司から指摘をされることが多いが、改善に努めていない
              <br>②文章力についての指摘についての改善に努めている
              <br>③文章力の高さにより、チームに貢献できている
              <br>④文章力について指導できるレベル
              <br>⑤文章力の高さについて社内でも一目置かれる存在で、それにより会社業績に大きく貢献している
            </p>
            <a class="js-modal-close" href="">閉じる</a>
          </div><!--modal__inner-->
        </div><!--modal-->
      </div>

      <div id="modal02" class="modal js-modal">
        <div class="modal__bg js-modal-close"></div>
        <div class="modal__content">
          <p class="motit">テクニカルスキル</p>
          <p class="mocon">専門スキル（３D、デザイン、MX４D、経理等）</p>
          <p class="mode">

            ①自部門・自職種における知識・スキルが足りないことで、チームの生産性を下げてしまうことが多々ある
            <br>②自ら足りない知識・スキルを認識し、向上のため具体的に努めている
            <br>③知識・スキルの高さにより、チームに貢献できている
            <br>④知識・スキルにおいて指導できるレベル
            <br>⑤知識・スキルを社内に共有することで、チームのパフォーマンスを上げ、会社業績に大きく貢献している
          </p>
          <a class="js-modal-close" href="">閉じる</a>
        </div><!--modal__inner-->
      </div><!--modal-->
    </div>


    <div id="modal03" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">ラーニングアジリティ</p>
        <p class="mocon">学ぶ姿勢（学習能力）、情報収集能力、コンテンツ知識、業務知識
        </p>
        <p class="mode">

          ①自身の知識・スキルを高めるための具体的なアクションを起こしていない
          <br>②自身の知識・スキルを高めるための具体的なアクションを起こしている
          <br>③自身の知識・スキルを高めるための具体的なアクションを起こし、新たな知識・スキルを体得している
          <br>④常に新たなことを学ぶ姿勢が社内でのロールモデルになっている
          <br>⑤知識・スキルを全社レベルで高められる仕組化や施策実行を行うことで、全社レベルの成長に貢献している
        </p>
        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda3-->
    </div>

    <div id="modal04" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">企画発案力</p>
        <p class="mocon">企画構成力、人を動かせるだけのアイディア

        </p>
        <p class="mode">

          ①普段から自らのアイデアを発信できないことが多い
          <br>②自らのアイデアを発信することは多々あるが、相手を動かせないことも多い
          <br>③普段から人を動かせるだけのアイデアを充分発信し、具体的な取り組みに落とし込んでいる
          <br>④発想力について指導できるレベル
          <br>⑤市場の脅威レベルの発想力
        </p>
        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda4-->
    </div>


    <div id="modal05" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">問題定義と改善
        </p>
        <p class="mocon">新しいルール・手法の提示

        </p>
        <p class="mode">

          ①普段から問題を発見する習慣があまりなく、問題の定義を行えていない
          <br>②問題に目を向けるよう努めており、問題の定義も行えているが改善までは行えていない
          <br>③問題を定義し改善も行い、新たな手法を提示し、かつ実行している
          <br>④問題定義と改善について指導できるレベル
          <br>⑤新たなルール・手法を生み出し、会社業績に大きく貢献している
        </p>
        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda5-->
    </div>


    <div id="modal06" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">探求心と追求心
        </p>
        <p class="mocon">知の探索・知の深化、未経験の事柄への対応力

        </p>
        <p class="mode">

          ①未経験の事柄への対応についての準備を行えていない
          <br>②未経験の事柄への対応のために成長のための行動を起こしている
          <br>③未経験の事柄への対応のため思考の横展開または深堀りができている
          <br>④未経験の事柄への対応のため思考の横展開と深堀りができている
          <br>⑤市場の脅威レベルの知の広さと深さ
        </p>
        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda6-->
    </div>



    <div id="modal07" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">ビジョニング力</p>
        <p class="mocon">指針を定める、新機軸へのチャレンジ、正しい判断、決断力、最高のケースを想定し機会損失を防ぐ

        </p>
        <p class="mode">

          ①与えられた指針や既存の発想での発信はできているが、チームの巻き込み力には改善の余地がある
          <br>②与えられた指針や既存の発想での発信を行い、チームを巻き込めているが、機械損失を防ぐには改善の余地がある
          <br>③リスクを厭わない大胆な発想を波及し、チームを巻き込み動かしている
          <br>④リスクを厭わない大胆な発想をチームに波及し、会社業績に大きく貢献している
          <br>⑤リスクを厭わない大胆な発想により会社業績貢献だけでなく、業界の流れを変える程のインパクトを与えている
        </p>

        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda7-->
    </div>


    <div id="modal08" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">目標設定と遂行力</p>
        <p class="mocon">正しい判断の結果としての売上・プロダクトの品質
        </p>
        <p class="mode">

          ①会社の方向性、求められる役割は理解できているが、適切な目標設定が行えていないこともある
          <br>②会社の方向性・役割に沿った正しい目標設定は行えているが、計画通りに遂行できないこともある
          <br>③会社の方向性・役割に応じた適切な目標設定、達成が行えている。また達成に至らない場合もその原因が明確である
          <br>④MVV達成のためストレッチな目標設定を能動的に行い目標達成が行えている
          <br>⑤毎回ストレッチな目標設定を能動的に行い外部環境も加味しMVVに沿った俯瞰的かつ先見的な目標設定、修正、達成が行えている
        </p>

        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda8-->
    </div>


    <div id="modal09" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">影響力</p>
        <p class="mocon">社内外への影響力、説得力、世の中の評価

        </p>
        <p class="mode">

          ①自身の影響力について理解はしているものの、周りに悪い影響を与えてしまっていることもある
          <br>②自身の影響力について理解しており周りに悪い影響を与えることはないが、相手・チームに動機付行えていないこともある
          <br>③自身の影響力について理解し、常に相手・チームを動機付けながら良い影響を与えている
          <br>④常に相手・チームを動機付けながら良い影響を与えることで、会社全体としてのクライアントへの価値提供につながっている
          <br>⑤自身の市場での自身の影響力の高さから、自社へ対して良い影響をもたらし、会社業績につなげている
        </p>

        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda9-->
    </div>


    <div id="modal10" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">翻訳力</p>
        <p class="mocon">より多くの人に伝える、書きこみ力、橋渡し力、共感力


        </p>
        <p class="mode">

          ①会社の方向性と自身の役割が充分認識できておらず、不平不満が多い
          <br>②会社の方向性と役割の認識はあるが、チームを動かすまでに至っていな
          <br>③会社の方向性と役割を認識し、チームを動かすために効果的なコミュニケーションが取れている
          <br>④上司・部下の双方との信頼関係を構築し、会社のMVV実現に大いに貢献している
          <br>⑤社内外問わず多くのステークホルダーとの信頼関係を構築し、自社に有益な情報をもたらし業績に貢献している
        </p>

        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda10-->
    </div>


    <div id="modal11" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">プロジェクトマネジメント
        </p>
        <p class="mocon">機械設計、最悪のケースを想定し事故を防ぐ

        </p>
        <p class="mode">

          ①効果的かつ効率的なプロジェクトの管理が行えず、チームの生産性を下げてしまうことがある
          <br>②効果的もしくは効率的なプロジェクトの管理は行えているがまだまだ改善の余地がある
          <br>③リスクマネジメントも加味したプロジェクトの管理が行えており、品質・スピードともに問題なく、会社業績の貢献が行えている
          <br>④プロジェクトマネジメントのスキルにおいては社内でもトップクラスで、人材育成も行い、自身のブレーンを作っている
          <br>⑤業界でもそのプロジェクトマネジメントのスキルは高く評価されており、クライアント獲得という点においても会社業績に大きく貢献できている
        </p>

        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda11-->
    </div>


    <div id="modal12" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">チームマネジメント
        </p>
        <p class="mocon">チームUP環境への貢献、社内環境・全体への貢献


        </p>
        <p class="mode">

          ①自身の業務遂行は行えているが、手一杯になり、チーム貢献の余裕までは生まれていないこともある
          <br>②チームメンバーのパフォーマンス発揮のために日々工夫は凝らしてはいるが、効果的な施策実行にまでは至っていない
          <br>③チームメンバーが高いパフォーマンスを発揮するため、日々考えながら工夫は凝らし、効果的な施策実行にまで至っている
          <br>④チームメンバーからの厚い信頼を得ており、チームメンバーのパフォーマンス発揮に一役買っている
          <br>⑤チームメンバーひとりひとりのエンゲージメント向上に寄与し、会社業績に貢献している
        </p>

        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda12-->
    </div>


    <div id="modal13" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">人財育成
        </p>
        <p class="mocon">ティーチング・コーチング、心理的安全性、メンバー個々の能力開発


        </p>
        <p class="mode">

          ①周りに心理的安全性を提供できていないこともある
          <br>②心理的安全性は提供できているが、他者への承認・動機付けなど積極的に行えていない
          <br>③心理的安全性、承認・動機付けなど、常に自身の人財育成に対するアプローチのアップデートを行っている
          <br>④心理的安全性を提供し、他者への承認・動機付けなど積極的に行い、後輩・部下のパフォーマンス発揮に貢献できている
          <br>⑤全社レベルで人財育成の重要性を訴求し、またロールモデルとなってブレーンを増やすことで自社の成長に貢献している
        </p>
        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda13-->
    </div>


    <div id="modal14" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">メンバーシップ</p>
        <p class="mocon">誠実性、社内の役割の決まっていない業務への積極性、事務処理
        </p>
        <p class="mode">
          ①自身に明確に指示された業務、または自身のタスクにおいては対応できている
          <br>②自身に与えられた業務以外も時折遂行するが、積極さが欠けてしまうこともある
          <br>③自身の業務と関係のない仕事であっても積極的に拾い、骨が折れる仕事であっても前向きに対応をしている
          <br>④役割が決まっていない仕事に対しても積極的対応していくことで、チームメンバーのパフォーマンス発揮に貢献できている
          <br>⑤業務の領域を留めることなく効率的かつ効果的に対応した上で、他者への貢献意欲が高いメンバーを育て自社の成長につなげている
        </p>

        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda14-->
    </div>


    <div id="modal15" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">セルフマネジメント</p>
        <p class="mocon">社内外の人間関係向上、モチベーション向上　※セルフマネジメント
        </p>
        <p class="mode">
          ①対応に難しい案件でも、対応はできているが、セルフマネジメントできずにチームメンバーに気を使わせてしまうこともある
          <br>②対応に難しい案件でも、周りに気を遣わせることまではないが、自身の動機付け、モチベートができていないこともある
          <br>③対応に難しい案件でもポジティブマインドに切り替え、セルフコントロールを行い、常にモチベーションの維持が行えている
          <br>④困難な状況をチャンスと捉え、自ら能動的に挑戦を続けており、その姿は社内でのロールモデルにもなっている
          <br>⑤セルフマネジメントのロールモデルとなり、社内外問わず関わる全てのモチベーション向上に寄与している
        </p>
        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda15-->
    </div>


    <div id="modal16" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">経験と対応力</p>
        <p class="mocon">ロケーション経験、制作プロジェクト経験


        </p>
        <p class="mode">

          ①指示されればオペレーションはこなすことができるが、自立自走することはまだできていない
          <br>②指示されずともオペレーションをこなすことはできるが、上司から時折指摘をされることもあり、クオリティ、スピードともに改善は必要である
          <br>③オペレーションをそつなくこなしているが、正確性、スピードいづれかで改善が必要である
          <br>④オペレーションをそつなくこなし、正確性、スピードともに申し分なく、現場のロールモデルになっている
          <br>⑤オペレーションにおいては業界でも名を知られているレベルで業界のロールモデルとなっている
        </p>
        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda16-->
    </div>


    <div id="modal17" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">トラブル対応力</p>
        <p class="mocon">運用・保守、柔軟性、レジリエンス

        </p>
        <p class="mode">

          ①突発的な対応が起こると、上司や先輩の指示があれは、対応が可能だが、一人で対応することは難しい
          <br>②突発的な対応が起こると、ある程度の問題は一人で解決ができるが、解決できない問題に関しては周りに助けを乞うことも多い
          <br>③突発的な対応も起こると、ほとんどの問題は一人で解決ができるが、解決手順に関しては改善も多い
          <br>④突発的な対応もそつなくこなし、解決手順に関してもベストプラクティスとなっており、トラブル対応のロールモデルになっている
          <br>⑤トラブル対応においては業界でも名を知られているレベルで業界のロールモデルとなっている
        </p>

        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda17-->
    </div>


    <div id="modal18" class="modal js-modal">
      <div class="modal__bg js-modal-close"></div>
      <div class="modal__content">
        <p class="motit">クライアント対応</p>
        <p class="mocon">ロケーション営業・交渉、アフターサービス</p>

        <p class="mode">
          ①指示されればクライアント対応をこなすことはできるが、自立自走することはまだできていない
          <br>②指示されずともクライアント対応をこなすことはできるが、上司から時折指摘をされることもあり、クオリティ、スピードともに改善は必要である
          <br>③クライアント対応をそつなくこなしているが、正確性、スピードいづれかで改善が必要である
          <br>④クライアント対応をそつなくこなし、正確性、スピードともに申し分なく、現場のロールモデルになっている
          <br>⑤クライアント対応においては業界でも名を知られているレベルで業界のロールモデルとなっている
        </p>

        <a class="js-modal-close" href="">閉じる</a>
      </div><!--modal__inner-->
    </div><!--moda18-->
    </div>

    </div>


    <script>
      $(function () {
        $('.js-modal-open').each(function () {
          $(this).on('click', function () {
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            $(modal).fadeIn();
            return false;
          });
        });
        $('.js-modal-close').on('click', function () {
          $('.js-modal').fadeOut();
          return false;
        });
      });
    </script>



</main>


</body>















</html>