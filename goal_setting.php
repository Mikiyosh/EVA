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
    padding: 0 0 15px 0;
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

a.custom-link {
    display: inline-block;
    background-color: white;
    color: black;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px 15px;
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
    }

    a.custom-link:hover {
    background-color: #0066cc;
    color: white;
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

  <div>

  <div class="mvvw">
    <div class="mission_wrapper">
        <h1 class="mission">Mission</h1>
        <p>誰も感じたことがない体験を「創る」(=伝えたくなる驚き)<br>そんな「伝えたくなる驚き」を生み出す、確かな「企画プロデュース力」をチームで実現する。<br>そして、それがエンタメ業界で認知される存在になる。
        </p>
    </div>

    <div class="vision_wrapper">
        <h1 class="vision">Vision</h1>
        <p>伝えたくなる「驚き」が波及し続ける「未来」<br>
            「楽しい」が共感して生まれる「幸せな社会」</p>
    </div>

    <div class="value_wrapper">
        <h1 class="value">Value</h1>
    </div>

    <a href="goal_setting2.php" class="custom-link">バリューを体現する</a>
  </div>


 


</main>


</body>















</html>