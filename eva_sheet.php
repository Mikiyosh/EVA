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
}


element.style {
    width: 200px;

}

header {
    font-size: 24px;
}

/*main-------------------------*/

img {
    width: 300px;
}

.topimg {
    background-color: white;
    padding: 0 0 25px 15px;
}

canvas {
    width: 500px;
    margin: auto;
}

.main {
    width: 1250px;
}

body {

    font-family: 'Roboto';
    text-align: center;

    width: 1250px;
}

h2 {
    font-size: 12px;
}

/*title-------------------------*/

.maintitle {
    width: 100%;
    text-align: right;

}



.mission {
    color: rgb(232, 144, 20);
    margin: auto;
}

.vision {
    color: rgb(244, 204, 28);
    margin: auto;

}


.mission_wrapper {
    padding: 45px 0 20px 0;
}

.vision_wrapper {
    padding: 0 0 5px 0;
}

.final_score {
    font-weight: bold;

}

.answer_101 {
    font-size: 14px;
}

.eva_sheet {
    padding: 30px 0 5px 0;
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

.ino_div {
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



.stylediv {
    margin-top: 0;
}

.style {
    /* padding: -20px 0 0 0; */
    margin-bottom: 0;

}

.style_de {
    height: 20px;
}




.place_de {
    font-size: 18px;
    font-weight: bold;
}







.texSecLoad {
    display: none;

}

.sec {
    visibility: hidden;
}


.mess {

    text-align: center;
    width: 80%;
    display: inline-block;
    text-align: center;
    margin: 0 20px;

}









.btnwrapper {
    font-family: 'Sigmar', 'cursive';
    width: 638px;
    height: 40px;
    display: flex;
    align-items: center;
    font-size: 12px;
    line-height: 1.5;
    padding: 0 0 0 37px;
}

.retrybtn {
    width: 400px;
    font-size: 12px;
}



.disk_wrapper {
    padding: 50px 0 0 0;
}


.chart_div {
    background-color: white;
    width: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 0 50px 0;

    /* 必要に応じて水平方向にも中央揃えにする */
}


.warning {
    color: red;
    font-weight: bold;
    margin-top: -10px;

}

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

.topname {
    border-left: 3px solid red;
    text-align: left;
    font-weight: bold;
}

.topname2 {
    border-left: 3px solid blue;
    text-align: left;
    font-weight: bold;
}

.postit {
    background-color: white;
}

.kbtn {
    text-align: left;
    line-height: 1.2;
    padding: 0 0 10px 0;
    font-size: 10px;
    color: black;
    font-weight: 500;
}

.ibtn {
    text-align: left;
    line-height: 1.2;
    padding: 0 0 10px 0;
    font-size: 10px;
    color: black;
    font-weight: 500;
}

.lbtn {
    text-align: left;
    line-height: 1.2;
    padding: 0 0 10px 0;
    font-size: 10px;
    color: black;
    font-weight: 500;
}

.fbtn {
    text-align: left;
    line-height: 1.2;
    padding: 0 0 10px 0;
    font-size: 10px;
    color: black;
    font-weight: 500;
}

.hbtn {
    text-align: left;
    line-height: 1.2;
    padding: 0 0 10px 0;
    font-size: 10px;
    color: black;
    font-weight: 500;
}

.flbtn {
    text-align: left;
    line-height: 1.2;
    padding: 0 0 10px 0;
    font-size: 10px;
    color: black;
    font-weight: 500;
}

.ad {
    font-size: 10px;
    padding: 5px 5px 5px 5px;
    background-color: #D9E5FF;
    font-weight: 500;
}

.ad2 {
    font-size: 10px;
    padding: 5px 5px 5px 5px;
    font-size: 18px;
    font-weight: bold;
}




.kpi {
    height: 30px;
}

.kavgscore {
    font-size: 24px;
    height: 15px;
    margin-top: -5px;
}


.iavgscore {
    font-size: 24px;
    height: 15px;
    margin-top: -5px;
}

.lavgscore {
    font-size: 24px;
    height: 15px;
    margin-top: -5px;
}

.favgscore {
    font-size: 24px;
    height: 15px;
    margin-top: -5px;
}

.havgscore {
    font-size: 24px;
    height: 15px;
    margin-top: -5px;
}

.flavgscore {
    font-size: 24px;
    height: 15px;
    margin-top: -5px;
}




.kno_box {
    width: 280px;
    height: 450px;
    font-size: 12px;
    font-weight: bold;
    color: Dark gray;
    background-color: white;
    margin: 0 5px 5px 5px;
    display: flex;
    flex-direction: column;
    text-align: center;
    padding: 0 5px 0 5px;
    border-radius: 5px;
}

.fh {
    height: 10px;
    font-size: 10px;

}

.box2 {
    width: 280px;
    height: 600px;
    font-size: 12px;
    font-weight: bold;
    color: Dark gray;
    background-color: white;
    margin: 0 5px 5px 5px;
    display: flex;
    flex-direction: column;
    text-align: center;
    padding: 0 5px 0 5px;
    border-radius: 5px;
}

.box3 {
    width: 280px;
    height: 325px;
    font-size: 12px;
    font-weight: bold;
    color: Dark gray;
    background-color: white;
    margin: 0 5px 5px 5px;
    display: flex;
    flex-direction: column;
    text-align: center;
    padding: 0 5px 0 5px;
    border-radius: 5px;
}

.ino_box {
    width: 280px;
    height: 450px;
    font-size: 12px;
    font-weight: bold;
    color: Dark gray;
    background-color: white;
    margin: 0 5px 5px 5px;
    display: flex;
    flex-direction: column;
    padding: 0 5px 0 5px;
    border-radius: 5px;
}


.le_box {
    width: 280px;
    height: 450px;
    font-size: 12px;
    font-weight: bold;
    color: Dark gray;
    background-color: white;
    margin: 0 5px 5px 5px;
    display: flex;
    flex-direction: column;
    padding: 0 5px 0 5px;
    border-radius: 5px;
}



.fol_box {
    width: 280px;
    height: 450px;
    font-size: 12px;
    font-weight: bold;
    color: Dark gray;
    background-color: white;
    margin: 0 5px 5px 5px;
    display: flex;
    flex-direction: column;
    padding: 0 5px 0 5px;
    border-radius: 5px;
}

.fle_box {
    width: 280px;
    height: 450px;
    font-size: 12px;
    font-weight: bold;
    color: Dark gray;
    background-color: white;
    margin: 0 5px 5px 5px;
    display: flex;
    flex-direction: column;
    padding: 0 5px 0 5px;
    border-radius: 5px;
}



.hos_box {
    width: 270px;
    height: 450px;
    font-size: 12px;
    font-weight: bold;
    color: Dark gray;
    background-color: white;
    margin: 0 5px 5px 5px;
    display: flex;
    flex-direction: column;
    padding: 0 5px 0 5px;
    border-radius: 5px;
}


.ktit {
    color: #0066cc;
    font-weight: bold;
    font-size: 18px;
    height: 7px;
}

.value_wrapper {
    margin: auto;
    width: 600px;
    background-color: #fff;
    padding: 15px 0;
}

.evasheet_wrapper {
    background-color: rgba(241, 241, 241, 0.872);
    padding: 0 0 30px 0;
    margin: 0 15px;
}

.evasheet_wrapper2 {
    background-color: rgba(241, 241, 241, 0.872);
    padding: 0 0 30px 0;
    margin: 30px 15px;
}

.space {
    height: 30px;
}

.hexagon {
    width: 89.2px;
    height: 155.1px;
    background: white;
    position: relative;
    margin: auto;
}

.hexagon_cont {
    height: 105%;
    width: 104%;
    font-size: 18px;
    font-weight: bold;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 1;

}


.hexagon_cont::before {
    content: "";
    position: absolute;
    top: 0;
    left: -0.5px;
    right: -0.5px;
    border-top: 6px solid black;
    z-index: -1;
}

.hexagon_cont::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: -0.5px;
    right: -0.5px;
    border-bottom: 6px solid black;
    z-index: -1;
}

.hexagon::before,
.hexagon::after {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    z-index: 0;
}

.hexagon::before {
    transform: rotate(60deg);
    width: 91px;
    height: 150.5px;

    border-top: 6px solid black;
    border-bottom: 6px solid black;
}

.hexagon::after {
    transform: rotate(-60deg);
    width: 91px;
    height: 150.5px;
    border-top: 6px solid black;
    border-bottom: 6px solid black;
}



.ev_wrapper {
    padding: 0 30px 25px 30px;
    border-right: 1px;
    margin: auto;
    width: 80px;
    margin-left: auto;
    height: 50px;
    font-size: 18px;
    font-weight: bold;
    display: block;
    position: absolute;
    top: 85%;
    left: 77.8%;
    transform: translate(-50%, -50%);
    z-index: 1;
    border: 1px solid;
    border-top: 1px solid;
    border-bottom: 1px solid;
    border-left: 1px solid;

}


.vword_wrapper {

    width: 900px;
    display: flex;
    margin: auto;

}

.vword {
    background-color: black;
    color: white;
    width: 200px;
    margin-left: auto;
    height: 20px;
    font-size: 14px;
    font-weight: bold;
    display: block;
    position: absolute;
    top: 70%;
    left: 77.8%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.careerpass {

    width: 900px;
    margin: auto;
    display: flex;
    padding: 0 0 20px 0;

}

.carsub {
    margin: auto;
}

.icon1 {
    color: white;
    width: 200px;
    margin-left: auto;
    height: 20px;
    font-size: 14px;
    font-weight: bold;
    position: absolute;
    top: 136.8%;
    left: 23.5%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.icon2 {
    color: white;
    width: 200px;
    margin-left: auto;
    height: 20px;
    font-size: 14px;
    font-weight: bold;
    position: absolute;
    top: 131%;
    left: 36%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.icon3 {
    color: white;
    width: 200px;
    margin-left: auto;
    height: 20px;
    font-size: 14px;
    font-weight: bold;

    position: absolute;
    top: 126%;
    left: 49.7%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.icon4 {
    color: white;
    width: 200px;
    margin-left: auto;
    height: 20px;
    font-size: 14px;
    font-weight: bold;

    position: absolute;
    top: 121%;
    left: 63%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.icon5 {
    color: white;
    width: 200px;
    margin-left: auto;
    height: 20px;
    font-size: 14px;
    font-weight: bold;

    position: absolute;
    top: 115.8%;
    left: 76.55%;
    transform: translate(-50%, -50%);
    z-index: 1;
}



.value {
    width: 200px;
    padding: 20px 5px 30px 0;
    margin-left: auto;
    font-size: 30px;
    font-weight: bold;
    display: block;
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    color: #0066cc;

}




.if {
    display: block;
    position: absolute;
    top: 68%;
    left: 39.5%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.lf {
    position: absolute;
    display: block;
    top: 68%;
    left: 60.5%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.kf {
    display: block;
    position: absolute;
    top: 80%;
    left: 36%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.kf.text-overlay {
    position: absolute;
    top: 0;
    left: 0;
    color: white;
    font-size: 24px;
    font-weight: bold;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 10px;
}

.ff {
    position: absolute;
    display: block;
    top: 80%;
    left: 64%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.flf {
    display: block;
    position: absolute;
    top: 92%;
    left: 37%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.hf {
    position: absolute;
    display: block;
    top: 92%;
    left: 63%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.fscore {
    margin: 20px 0;
}

.kscore {
    margin: 20px 0;
}

.lscore {
    margin: 20px 0;
}

.flscore {
    margin: 20px 0;
}

.hscore {
    margin: 20px 0;
}

.iscore {
    margin: 20px 0;
}



.con_title {
    font-size: 36px;
    font-weight: bold;
    color: black;
    display: inline-block;
    padding: 80px 20px 0 0;

}



.con_sub {
    margin: 0 0 20px;
    font-size: 24px;
    font-weight: bold;
}


.condet {
    margin: 0 0 32px;
    font-size: 16px;
}



.form-inner {
    display: flex;
    flex-wrap: wrap;
    font-size: 16px;
    margin: auto;
}

.form-title {
    width: 500px;
    padding: 8px 0 0 0;
    margin: 0 20px 24px 0;
    font-weight: bold;
    text-align: right;

}


.form-item {
    width: 300px;
}

.form-parts {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    box-sizing: border-box;
    width: 500px;
    padding: 8px;
    border: solid 1px #c9c9c9;
    font-size: 16px;
    margin: auto;

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



.btn-submit {
    border: none;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 214px;
    background-color: #aaa;
    color: #ffffff;
    font-size: 21px;
    display: block;
    margin: auto;
    padding: 5px 0 5px;
    border: none;
    font-weight: bold;
    height: 20x;
}

.btn-submit2 {
    border: none;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 214px;
    background-color: #aaa;
    color: #ffffff;
    font-size: 21px;
    display: block;
    margin: auto;
    padding: 5px 0 5px;
    border: none;
    font-weight: bold;
    height: 20x;
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

.conpi {
    height: 10px;

}

.content {
    padding: 10px 10px;
}


.submit_box {
    padding: 20px 10px;
}


.box2 {
    width: 300px;
    height: 430px;
    font-size: 12px;
    font-weight: bold;
    color: Dark gray;
    background-color: white;
    margin: 0 5px 5px 5px;
    display: flex;
    flex-direction: column;
    text-align: center;
    padding: 0 5px 0 5px;
}


.kform {
    width: 183px;
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



.wholeform {
    text-align: center;
}

.ev_form {
    text-align: right;
    padding: 0 405px 0 0;


}


#name {
    height: 30px;
    padding: 0 5px;
    width: 400px;
}

#name2 {
    height: 30px;
    padding: 0 5px;
    width: 400px;
}



#name3 {
    height: 30px;
    padding: 0 5px;
    width: 400px;
    height: 35px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 0 0 0 0;
}

#text {
    height: 30px;
    padding: 0 5px;
    width: 400px;
}

#text2 {
    height: 200px;
    padding: 0 5px;
    padding-top: 00;
    width: 400px;

}

#term {
    height: 30px;
    padding: 0 5px;
    margin: 0 0 10px 0;
    width: 400px;

}



.formname,
.formsection,
.formselfeva {

    margin-bottom: 10px;
    /* 枠と枠の間の垂直方向の感覚を5px空ける */
}

.formname input,
.formsection input,
.formselfeva input {
    margin-left: 10px;
    padding: 0 5px;
}

.formname2,
.formsection,
.formselfeva {

    margin-bottom: 10px;
    /* 枠と枠の間の垂直方向の感覚を5px空ける */
}

.formname2 input,
.formsection input,
.formselfeva input {
    margin-left: 10px;
    padding: 0 5px;
}


.formselfeva {
    margin: auto;
}

.formselfeva1 {
    margin: auto;
    text-align: right;
    padding: 0 10px 0 0;


}






.formselfeva2 input {
    width: 150px;
    height: 200px;

}

button {
    margin-top: 15px;
    /* ボタンと最後の枠の間の垂直方向の感覚を5px空ける */
}

.ktext {
    width: 150px;
    height: 200px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#kno {
    height: 25px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#ino {
    height: 25px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#lea {
    height: 25px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#fol {
    height: 25px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#hos {
    height: 25px;
    border: 1px solid #ccc;
    border-radius: 5px;
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

#itext {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 175px;
}

#ktext2 {
    margin: 5px 0 0 125px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 50px;
    height: 50px;

    /* 右詰めに配置 */
}

#itext2 {
    margin: 5px 0 0 125px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 50px;
    height: 50px;
}


#ktext3 {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 180px;
}

#itext3 {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 180px;

}

#ltext {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 175px;
}

#ltext2 {
    margin: 5px 0 0 125px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 50px;
    height: 50px;
}

#ltext3 {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 180px;
}

#ftext {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 175px;
}

#ftext2 {
    margin: 5px 0 0 125px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 50px;
    height: 50px;
}

#ftext3 {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 180px;
}

#htext {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 175px;
}

#htext2 {
    margin: 5px 0 0 125px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 50px;
    height: 50px;
}

#htext3 {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 180px;
}

#fltext {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 175px;
}

#fltext2 {
    margin: 5px 0 0 125px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 50px;
    height: 50px;
}

#fltext3 {
    margin: 5px 0 0 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 180px;
}

#section {
    margin: 5px 8px 3px -30px;
    height: 36.78px;

    border: 1px solid #ccc;
    border-radius: 5px;
}

#grade {
    margin: 5px 0 12px 0;
    height: 36.78px;

    border: 1px solid #ccc;
    border-radius: 5px;
}

#term {
    width: 413.56px;
    height: 36.75px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 0 0 15px 0;
}

#name {
    height: 35px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 0 0 5px 0;
}

#name2 {
    height: 35px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 0 0 5px 0;
}

#text {

    height: 200px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.pulld {
    display: flex;
    margin: 0 0 0 435px;
}

#send {
    width: 150px;
    border: 1px solid;
    border-radius: 5px;
    margin: 15px 125px 0 5px;
    height: 30px;
    border: 1px solid #ccc;
    border-radius: 5px;

}

#send:hover {
    border: 2px solid #000080;
    color: white;
    font-weight: bold;
    background-color: #000080;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#send2 {
    width: 150px;
    border: 1px solid;
    border-radius: 5px;
    margin: 15px 125px 0 8px;
    height: 30px;
    border: 1px solid #ccc;
    border-radius: 5px;

}

#send2:hover {
    border: 2px solid #000080;
    color: white;
    font-weight: bold;
    background-color: #000080;
    border: 1px solid #ccc;
    border-radius: 5px;
}


#evaresult {
    width: 150px;
    border: 1px solid;
    border-radius: 5px;
    height: 30px;
    border: 1px solid #ccc;
    border-radius: 5px;

}



#evaresult:hover {
    border: 2px solid #000080;
    color: white;
    font-weight: bold;
    background-color: #000080;
    border: 1px solid #ccc;
    border-radius: 5px;


}

#evaresult2 {
    width: 150px;
    border: 1px solid;
    border-radius: 5px;
    height: 30px;
    border: 1px solid #ccc;
    border-radius: 5px;

}



#evaresult2:hover {
    border: 2px solid #000080;
    color: white;
    font-weight: bold;
    background-color: #000080;
    border: 1px solid #ccc;
    border-radius: 5px;


}

#section2 {
    margin: 5px 8px 3px -30px;
    height: 36.78px;

    border: 1px solid #ccc;
    border-radius: 5px;
}

#section3 {
    margin: 5px 8px 10px -12px;
    height: 36.78px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#grade2 {
    margin: 5px 0 12px 0;
    height: 36.78px;

    border: 1px solid #ccc;
    border-radius: 5px;
}

#term2 {
    width: 413.56px;
    height: 36.75px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 0 0 15px 0;
}

#term3 {
    width: 413.56px;
    height: 36.75px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 0px 0 10px 40px;
}


#text2 {
    height: 35px;
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 200px;
}


.selectbtn {
    width: 150px;
    margin: 10px 10px 0 0px;

}

.selectbtns {
    display: flex;
    margin: 0 0 10px 750px;
}

.bner {
    color: white;
    font-weight: bold;
    background-color: white;
    border: none;
    border-bottom: 1px solid #ccc;
    background-color: rgba(241, 241, 241, 0.872);
    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.4);
    margin-top: 0;
    padding-top: 0;

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

#kscore {
    height: 40px;
    font-weight: bold;
    font-size: 24px;
    text-align: center;
}

.hosscore {
    height: 40px;
    width: 90px;
    margin: 0 0 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.feedbackf {
    width: 550px;
    height: 200px;
    margin: auto;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: white;
}

.return-btn2 {
    padding: 5px 183px 0 0;
}

.virtical {
    display: flex;
}


.with_dropdown{
  list-style: none;
}

       .efe {
            background-size: cover;
            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            width: 1280px;
            height: 540px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 20px 0 0;
        }

        .efe video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .text-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .letters1,
        .letters2,
        .letters3 {
            font-size: 24px;
            line-height: 1.5;
        }

        .text-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }


        .letters1 {
            width: 550px;
            color: white;
            font-weight: bold;
            margin: 0 0 0 0;
            font-size: 40px;
            font-family: 'Heebo', 'Montserrat', sans-serif;
            background-color: #000080;
            margin: 0 0 10px 30px;
            padding: 0 0 0 20px;
        }

        .letters2 {
            width: 550px;
            color: black;
            font-weight: bold;
            margin: 0 0 0 30px;
            font-size: 40px;
            font-family: 'Heebo', 'Montserrat', sans-serif;
            background-color: white;
            padding: 0 0 0 20px;
        }

        .letters3 {
            width: 450px;
            color: white;
            font-weight: bold;
            margin: 0 0 5px 30px;
            font-size: 28px;
            font-family: 'Heebo', 'Montserrat', sans-serif;
            padding: 20px 0 0 20px;

        }

        .se_cons {
            font-size: 16px;
            text-align: center;
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
            height:50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            padding: 0 0 0 0;
            margin: 0 0 0 0;
            list-style: none;
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


        .nav_items2 {
            margin: 0 20px 0 20px;
            font-weight: bold;
            list-style: none;
        }

        .nav_items2 a {
            text-decoration: none;
            color: white;
        }

        .contact_link {
            display: inline-block;
            padding: 10px;
            border-radius: 50% / 100%;
            background-color: #191970;
            color: white;
        }

        .nav_items a {
            text-decoration: none;
        }


        .seemoretop {
            font-weight: none;
            margin: 20px 0 0 0;
            font-size: 14px;

        }

        .seemore {
            position: relative;
            font-size: 18px;
        }

        .seemore::after {
            content: "";
            position: absolute;
            top: 50%;
            right: -10px;
            /* 矢印の位置を調整 */
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 5px solid black;
            /* 矢印の色を調整 */
        }

        .se_wrapper {
            width: 1280px;
            padding: 150px 0 50px 0;
            margin: auto;
            line-height: 1;
            font-size: 26px;
            font-family: 'Heebo', 游ゴシック体, 'Yu Gothic', YuGothic, 'ヒラギノ角ゴシック Pro', 'Hiragino Kaku Gothic Pro', メイリオ, Meiryo, Osaka, 'ＭＳ Ｐゴシック', 'MS PGothic', sans-serif;
        }

        .co_wrapper {
            width: 1280px;
            height: 480px;
            background-color: #EEEEEE;
            padding: 80px 0 10px 0;
            text-align: center;
            margin: auto;
            font-size: 26px;
            font-family: 'Heebo', 游ゴシック体, 'Yu Gothic', YuGothic, 'ヒラギノ角ゴシック Pro', 'Hiragino Kaku Gothic Pro', メイリオ, Meiryo, Osaka, 'ＭＳ Ｐゴシック', 'MS PGothic', sans-serif;
        }

        .setit {
            font-weight: bold;
            text-align: center;
        }



        .nav_items:nth-child(4) a:hover {

            border: 2px solid 000080;
            background-color: white;
            color: #000080;
            border: 1px solid #000080;
            ;
        }


        .new_title {
            font-size: 36px;
            font-weight: bold;
            color: black;
            display: inline-block;
            padding: 100px 0;
        }

        .new_sub {
            margin: 0 0 20px;
            font-size: 24px;
            font-weight: bold;
        }


        .news_wrapper {
            max-width: 960px;
            margin: auto;
            text-align: center;
            padding: 0 0 48px;
            display: flex;

        }


        .news_list {
            display: flex;
            margin: 0 0 56px;
        }

        .news_items {
            width: 33.333%;
            padding: 0 32px 0;
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
                     <li class="nav_items"><a href="goal_setting.php">目標設定</a></li>
                     <li class="nav_items with_dropdown">
                        <a href="#OURSERVICES">評価</a>
                        <ul class="dropdown_menu">
                           
                            <li><a href="eva_sheet.php">自己評価</a></li>
                            <li><a href="evaluation_check.php">評価確認</a></li>          </ul>
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

    <div class="mission_wrapper">
      <h1 class="mission">Mission</h1>
      <p>誰も感じたことがない体験を「創る」(=伝えたくなる驚き)<br>そんな「伝えたくなる驚き」を生み出す、確かな「企画プロデュース力」をチームで実現する。<br>そして、それがエンタメ業界で認知される存在になる。
      </p>
    </div>

    <div class="vision_wrapper">
      <h1 class="vision">Vision</h1>
      <p>伝えたくなる「驚き」が波及し続ける「未来」<br>
        「楽しい」が共感して生まれる「幸せな社会」</p>
      <h1 class="value">Value</h1>
    </div>

    <div class="vword_wrapper">
      <div class="vword">「楽しい」を提示する力</div>


      <div class="ev_wrapper">
        <div class="final_score">最終評価</div>
        <div id="answer_100" class="result">
          <p class="answer_101"></p>
        </div>
      </div>
    </div>





    <canvas id="myChart" class="chart_div" width="50" height="15"></canvas>
    <script>
      let data = {
        labels: ['INNOVATION', 'LEADERSHIP', 'FOLLOWERSHIP', 'HOSPITALITY', 'FLEXIBILITY', 'KNOWLEDGE'], // 項目の順番を変更する
        datasets: [{
          label: 'value',
          data: [, , , , ,], // 項目のデータも順番に合わせて変更する
          backgroundColor: 'rgba(0, 102, 204, 0.5)',
          borderColor: 'rgba(0, 102, 204, 1)',
          borderWidth: 1
        }]
      };

      // チャートを描画する
      let ctx = document.getElementById('myChart').getContext('2d');
      let myChart = new Chart(ctx, {
        type: 'radar',
        data: data,
        options: {
          scale: {
            ticks: {
              beginAtZero: true,
              max: 5,
              stepSize: 1
            }
          },
          elements: {
            line: {
              tension: 0.000001 // 直線のみを描画する
            }
          },
          layout: {
            padding: {
              top: 50 // ラベルの上部の余白を設定する
            }
          },
          // 項目1と2を頂点にした台形の形状にする
          startAngle: -30,
          plugins: {
            filler: {
              propagate: false
            }
          }
        }
      });

    </script>
    </div>
    </div>


    <div class="icon_wrapper">
      <div class="icon1"></div>
      <div class="icon2"></div>
      <div class="icon3"></div>
      <div class="icon4"></div>
      <div class="icon5"></div>
    </div>


    <div class="careerpass">
      <div class="carsub">
        <svg width="145" height="80">
          <rect width="145" height="80" fill="lightblue" />
          <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="black">トレーニー</text>
        </svg>



        <svg width="168" height="110">
          <rect width="168" height="110" fill="rgba(0, 102, 204, 1)" />
          <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="">一般</text>
        </svg>

        <svg width="168" height="140">
          <rect width="168" height="140" fill="#FFEFD5" />
          <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="black">A-EX/A-MGR</text>
        </svg>

        <svg width="168" height="170">
          <rect width="168" height="170" fill="#FFD700" />
          <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="black">EX/MGR</text>
        </svg>

        <svg width="168" height="200">
          <rect width="168" height="200" fill="orange" />
          <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="black">GM</text>
        </svg>
      </div>
    </div>


    <div class="evasheet_wrapper">
      <div id="sheettop" class="eva_sheet">自己評価シート</div>
      <p class="sheet">以下の６つの項目のそれぞれの設問から、最もふさわしいと思う回答を選択して下さい。<br>注意：設問は左から順に回答して下さい。</p>

      <!-- KNOWLEDGE------------------------------------ -->
      <ul class="whole_wrapper">
        <li class="kno_box">
          <div class="kno_div">
            <h3 id="kno_tit" class="ktit">KNOWLEDGE</h3>
            <h3>技術と知識</h3>
            <h3 class="kss"></h3>
            <h3 id="kavgscore" class="kavgscore"></h3>



            <!-- 質問1 -->
            <div id="k_01" class="kfit">
              <p class="kpi">目標1: 文章作成力　</p>
              <ul>
                <li><a class="kbtn" href="#k_02" data-value=1.0>『文章力が足りないと上司から指摘をされることが多いが、改善に努めていない』</a></li>
                <li><a class="kbtn" href="#k_02" data-value=2.0>『文章力についての指摘についての改善に努めている』</a></li>
                <li><a class="kbtn" href="#k_02" data-value=3.0>『文章力の高さにより、チームに貢献できている』</a></li>
                <li><a class="kbtn" href="#k_02" data-value=4.0>『文章力について指導できるレベル』</a></li>
                <li><a class="kbtn" href="#k_02" data-value=5.0>『文章力の高さについて社内でも一目置かれる存在で、それにより会社業績に大きく貢献している』</a></li>
              </ul>
            </div>

            <!-- 質問2 -->
            <div id="k_02" style="display: none;">
              <p class="kpi">目標2:　テクニカルスキル</p>
              <ul>
                <li><a class="kbtn" href="#k_03" data-value=1.0>『自部門・自職種における知識・スキルが足りないことで、チームの生産性を下げてしまうことが多々ある』</a>
                </li>
                <li><a class="kbtn" href="#k_03" data-value=2.0>『自ら足りない知識・スキルを認識し、向上のため具体的に努めている』</a>
                </li>
                <li><a class="kbtn" href="#k_03" data-value=3.0>『知識・スキルの高さにより、チームに貢献できている』</a></li>
                <li><a class="kbtn" href="#k_03" data-value=4.0>『知識・スキルにおいて指導できるレベル』</a></li>
                <li><a class="kbtn" href="#k_03" data-value=5.0>『知識・スキルを社内に共有することで、チームのパフォーマンスを上げ、会社業績に大きく貢献している』</a>
                </li>
              </ul>
            </div>

            <!-- 質問3 -->
            <div id="k_03" style="display: none;">
              <p class="kpi">目標3:　ラーニングアジリティ</p>
              <ul>
                <li><a class="kbtn kend" href="#k_04" data-value=1.0>『自身の知識・スキルを高めるための具体的なアクションを起こしていない』</a></li>
                <li><a class="kbtn kend" href="#k_04" data-value=2.0>『自身の知識・スキルを高めるための具体的なアクションを起こしている』</a></li>
                <li><a class="kbtn kend" href="#k_04"
                    data-value=3.0>『自身の知識・スキルを高めるための具体的なアクションを起こし、新たな知識・スキルを体得している』</a>
                </li>
                <li><a class="kbtn kend" href="#k_04" data-value=4.0>『常に新たなことを学ぶ姿勢が社内でのロールモデルになっている』</a>
                </li>
                <li><a class="kbtn kend" href="#k_04"
                    data-value=5.0>『知識・スキルを全社レベルで高められる仕組化や施策実行を行うことで、全社レベルの成長に貢献している』</a></li>
              </ul>
            </div>
          </div>

          <!-- ここから以下回答 -->
          <!-- 回答の答え1 -->
          <div>
            <div id="answer_01" class="result" style="display: none;">
              <div class="result_theme ">
              </div>

              <div class="result_type0 ">
                <h4 class="ks5"></h4>
              </div>

              <div class="result_discription0">
                <h2>素晴らしい！次は何にチャレンジしますか？可能性は無限大！新たなことにチャレンジしましょう！</h2>
                <h2 class="ad">
                  エリクソンの10年ルールでは熟達には10年の月日が要すると言いいます。あなたの知識、スキルは熟達レベル？更なる深堀り、または新たな領域に足を踏み入れますか？リスキリングはいくつになっても遅くはありません！
                </h2>
                <div class="ad2"> <a href="https://amzn.asia/d/3bs5SDG" target="_blank">おすすめ書籍</a></div>
              </div>

            </div>

            <!-- 回答の答え2 -->
            <div id="answer_02" class="result" style="display: none;">
              <div class="result_theme ">
              </div>

              <div class="result_type1 ">
                <h4 class="ks4"></h4>
              </div>

              <div class="result_discription1">
                <h2>このまま自己研鑽を続け、更なる高みを目指しましょう！更なる高みにいけるはず！</h2>
                <h2 class="ad">
                  エリクソンの10年ルールでは熟達には10年の月日が要すると言いいます。あなたの知識、スキルは熟達レベル？更なる深堀り、または新たな領域に足を踏み入れますか？リスキリングはいくつになっても遅くはありません！
                </h2>
                <div class="ad2"> <a href="https://amzn.asia/d/3bs5SDG" target="_blank">おすすめ書籍</a></div>
              </div>

            </div>

            <!-- 回答の答え3 -->
            <div id="answer_03" class="result" style="display: none;">
              <div class="result_theme ">
              </div>

              <div class="result_type2 ">
                <h4 class="ks3"></h4>
              </div>
              <div class="result_discription2">
                <h2>いい感じ！周りに学ぶ姿勢を伝播させ、ロールモデルを目指しましょう！</h2>
                <h2 class="ad">
                  エリクソンの10年ルールでは熟達には10年の月日が要すると言いいます。あなたの知識、スキルは熟達レベル？更なる深堀り、または新たな領域に足を踏み入れますか？リスキリングはいくつになっても遅くはありません！
                </h2>
                <div class="ad2"> <a href="https://amzn.asia/d/3bs5SDG" target="_blank">おすすめ書籍</a></div>
              </div>

            </div>

            <!-- 回答の答え4 -->
            <div id="answer_04" class="result" style="display: none;">
              <div class="result_theme ">

              </div>
              <div class="result_type3 ">
                <h4 class="ks2"></h4>
              </div>
              <div class="result_discription3">
                <h2>これまでにインプットしたことをどんどんアウトプットし、社内外への貢献を行いましょう！</h2>
                <h2 class="ad">
                  パフォーマンス発揮のためにはインプットとアウトプットのバランスが重要です。目標達成のためには、どのようなアクションが必要が今一度考えながら、アウトプットも積極的に行いましょう！
                </h2>
                <div class="ad2"> <a href="https://amzn.asia/d/3bs5SDG" target="_blank">おすすめ書籍</a></div>
              </div>

            </div>

            <!-- 回答の答え5 -->
            <div id="answer_05" class="result" style="display: none;">
              <div class="result_theme ">
              </div>

              <div class="result_type4 ">
                <h4 class="ks1"></h4>
              </div>

              <div class="result_discription4">
                <h2>役割に必要な技術と知識が充分とは言えないようです・・・。学びの目標設定を行いましょう！</h2>
                <h2 class="ad">
                  もしパフォーマンスがうまく発揮できないのであれば、それは実行が足りないのか、または方法が誤っているのいづれかの可能性が高いです。今一度進め方を検討し、目標設定を行いましょう！
                </h2>
                <div class="ad2"> <a href="https://amzn.asia/d/3bs5SDG" target="_blank">おすすめ書籍</a></div>
              </div>

            </div>
        </li>


        <!-- INOVATION------------------------------------ -->

        <li class="ino_box">
          <div class="ino_div">
            <h3 id="ino_tit" class="ktit">INOVATION</h3>
            <h3>イノベーション</h3>
            <h3 class="iss"></h3>
            <h3 id="iavgscore" class="iavgscore"></h3>

            <!-- 質問1 -->
            <div id="i_01" class="ifit">
              <p class="kpi">目標1: 企画発案力　</p>
              <ul>
                <li><a class="ibtn" href="#i_02" data-value=1>『普段から自らのアイデアを発信できないことが多い
                    』</a></li>
                <li><a class="ibtn" href="#i_02" data-value=2>『自らのアイデアを発信することは多々あるが、相手を動かせないことも多い』</a>
                </li>
                <li><a class="ibtn" href="#i_02" data-value=3>『普段から
                    人を動かせるだけのアイデアを充分発信し、具体的な取り組みに落とし込んでいる』</a></li>
                <li><a class="ibtn" href="#i_02" data-value=4>『発想力について指導できるレベル』</a></li>
                <li><a class="ibtn" href="#i_02" data-value=5>『市場の脅威レベルの発想力』</a></li>
              </ul>
            </div>

            <!-- 質問2 -->
            <div id="i_02" style="display: none;">
              <p class="kpi">目標2:　問題定義と改善</p>
              <ul>
                <li><a class="ibtn" href="#i_03" data-value=1>『普段から問題を発見する習慣があまりなく、問題の定義を行えていない』</a>
                </li>
                <li><a class="ibtn" href="#i_03" data-value=2>『問題に目を向けるよう努めており、問題の定義も行えているが改善までは行えていない』</a></li>
                <li><a class="ibtn" href="#i_03" data-value=3>『問題を定義し改善も行い、新たな手法を提示し、かつ実行している』</a></li>
                <li><a class="ibtn" href="#i_03" data-value=4>『問題定義と改善について指導できるレベル』</a></li>
                <li><a class="ibtn" href="#i_03" data-value=5>『新たなルール・手法を生み出し、会社業績に大きく貢献している』</a></li>
              </ul>
            </div>

            <!-- 質問3 -->
            <div id="i_03" style="display: none;">
              <p class="kpi">目標3:　探求心と追求心</p>
              <ul>
                <li><a class="ibtn iend" href="#i_04" data-value=1>『未経験の事柄への対応を考えられていない』</a></li>
                <li><a class="ibtn iend" href="#i_04" data-value=2>『未経験の事柄への対応のために成長のための行動を起こしている』</a>
                </li>
                <li><a class="ibtn iend" href="#i_04" data-value=3>『未経験の事柄への対応のため思考の横展開または深堀りができている』</a>
                </li>
                <li><a class="ibtn iend" href="#i_04" data-value=4>『未経験の事柄への対応のため思考の横展開と深堀りができている』</a>
                </li>
                <li><a class="ibtn iend" href="#i_04" data-value=5>『市場の脅威レベルの知の広さと深さ』</a></li>
              </ul>
            </div>
          </div>

          <!-- 回答の答え1 -->
          <div id="answer_06" class="result" style="display: none;">
            <div class="result_theme ">
            </div>

            <div class="result_type0 ">
              <h4 class="is5"></h4>
            </div>

            <div class="result_discription0">
              <h2>素晴らしい！ポストあべさん候補！どんどんクリエイティビティを周りに波及しましょう！</h2>
              <h2 class="ad">
                クリエイティブさにおいては社内ではあなたの右に出るものはいません！あなたのようなクリエイティブ人材を世に輩出していきましょう！伝えたくなる『驚き』を波及し続ける『未来』のために！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/9GGegMA" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>


          <!-- 回答の答え2 -->
          <div id="answer_07" class="result" style="display: none;">
            <div class="result_theme ">
            </div>

            <div class="result_type1 ">
              <h4 class="is4"></h4>
            </div>

            <div class="result_discription1">
              <h2>素晴らしい！あなたの発想力を社内外にどんどん広げ、伝承しましょう！</h2>
              <h2 class="ad">
                名プレーヤー名監督にあらず。ハイパフォーマーでも相手に合わせて教え方を変えるのは難しいですよね。業務内容の習得・スキル向上はもちろん、クリエイティブ人材をどう育てていくかにもチャレンジしましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/9GGegMA" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>

          <!-- 回答の答え3 -->
          <div id="answer_08" class="result" style="display: none;">
            <div class="result_theme ">
            </div>

            <div class="result_type2 ">
              <h4 class="is3"></h4>
            </div>
            <div class="result_discription2">
              <h2>周りに教えることであなた自身のスキルは高まります！どんどん周りに教えましょう！</h2>
              <h2 class="ad">
                発想力豊かなあなたは、業務も問題なくこなせているはず！しかしコンフォートゾーンになってしまうと、成長が止まってしまいます！今一度、今がストレッチな環境かどうか考えてみましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/9GGegMA" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>

          <!-- 回答の答え4 -->
          <div id="answer_09" class="result" style="display: none;">
            <div class="result_theme ">

            </div>
            <div class="result_type3 ">
              <h4 class="is2"></h4>
            </div>
            <div class="result_discription3">
              <h2>もっとトレーニングが必要かもしれません・・・方法を考え、目標設定を行いましょう！</h2>
              <h2 class="ad">
                チャレンジの準備が整っているあなたは、あとはやり方をトレーニングし強化するだけ！うまくいかなかった時こそそれはなぜなのか原因を探り、改善策を実行することを続けてみましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/9GGegMA" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>

          <!-- 回答の答え5 -->
          <div id="answer_10" class="result" style="display: none;">
            <div class="result_theme ">
            </div>

            <div class="result_type4 ">
              <h4 class="is1"></h4>
            </div>

            <div class="result_discription4">
              <h2>役割に必要な発想力が充分とは言えないようです・・・。上司に相談し改善方法を考えましょう。</h2>
              <h2 class="ad">
                コミュニケーションにはリスクがつきものです。普段の日常生活からアンテナを張り、興味と好奇心、そしてなぜ？という疑問を持ちましょう！そして、それを恐れずにどんどん発信しましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/9GGegMA" target="_blank">おすすめ書籍</a></div>
            </div>
          </div>
        </li>
        <!-- LEADERSHIP------------------------------------ -->

        <li class="le_box">
          <div class="le_div">
            <h3 id="le_tit" class="ktit">LEADERSHIP</h3>
            <h3>リーダーシップ</h3>
            <h3 class="lss"></h3>
            <h3 class="lavgscore" class="lavgscore"></h3>

            <!-- 質問1 -->
            <div id="l_01" class="lfit">
              <p class="kpi">目標1: ビジョニング力　</p>
              <ul>
                <li><a class="lbtn" href="#l_02" data-value=1>『与えられた指針や既存の発想での発信はできているが、チームの巻き込み力には改善の余地がある』</a></li>
                <li><a class="lbtn" href="#l_02" data-value=2>『与えられた指針や既存の発想での発信を行い、チームを巻き込めているが、機械損失を防ぐには改善の余地がある』</a>
                </li>
                <li><a class="lbtn" href="#l_02" data-value=3>『リスクを厭わない大胆な発想を波及し、チームを巻き込み動かしている』</a>
                </li>
                <li><a class="lbtn" href="#l_02" data-value=4>『リスクを厭わない大胆な発想を波及し、会社業績に大きく貢献している』</a>
                </li>
                <li><a class="lbtn" href="#l_02" data-value=5>『リスクを厭わない大胆な発想により会社業績貢献だけでなく、業界の流れを変える程のインパクトを与えている』</a>
                </li>
              </ul>
            </div>

            <!-- 質問2 -->
            <div id="l_02" style="display: none;">
              <p class="kpi">目標2:　目標設定と遂行力</p>
              <ul>
                <li><a class="lbtn" href="#l_03" data-value=1>『会社の方向性、求められる役割は理解できているが、適切な目標設定が行えていないこともある』</a>
                </li>
                <li><a class="lbtn" href="#l_03" data-value=2>『会社の方向性・役割に沿った正しい目標設定は行えているが、計画通りに遂行できないこともある』</a></li>
                <li><a class="lbtn" href="#l_03" data-value=3>『会社の方向性・役割に応じた適切な目標設定、達成が行えている。また達成に至らない場合もその原因が明確である』</a>
                </li>
                <li><a class="lbtn" href="#l_03" data-value=4>『MVV達成のためストレッチな目標設定を能動的に行い目標達成が行えている』</a>
                </li>
                <li><a class="lbtn" href="#l_03"
                    data-value=5>『毎回ストレッチな目標設定を能動的に行い外部環境も加味しMVVに沿った俯瞰的かつ先見的な目標設定、修正、達成が行えている』</a>
                </li>
              </ul>
            </div>

            <!-- 質問3 -->
            <div id="l_03" style="display: none;">
              <p class="kpi">目標3:　影響力</p>
              <ul>
                <li><a class="lbtn lend" href="#l_04" data-value=1>『自身の影響力について理解はしているものの、周りに悪い影響を与えてしまっていることもある』</a>
                </li>
                <li><a class="lbtn lend" href="#l_04"
                    data-value=2>『自身の影響力について理解しており周りに悪い影響を与えることはないが、相手・チームに動機付行えていないこともある』</a></li>
                <li><a class="lbtn lend" href="#l_04" data-value=3>『自身の影響力について理解し、常に相手・チームを動機付けながら良い影響を与えている』</a></li>
                <li><a class="lbtn lend" href="#l_04"
                    data-value=4>『常に相手・チームを動機付けながら良い影響を与えることで、会社全体としてのクライアントへの価値提供につながっている』</a></li>
                <li><a class="lbtn lend" href="#l_04" data-value=5>『自身の市場での自身の影響力の高さから、自社へ対して良い影響をもたらし、会社業績につなげている』</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- 回答の答え1 -->
          <div id="answer_11" class="result" style="display: none;">
            <div class="result_theme ">

            </div>
            <div class="result_type0 ">
              <h4 class="ls5"></h4>
            </div>
            <div class="result_discription0">
              <h2>素晴らしい！さらに、社会・会社への価値提供を追求しましょう！あなたにしかできないことは何？</h2>
              <h2 class="ad">
                世の中の優れたリーダーは、個人のビジョンが明確で影響力に溢れています。あなたはどんなビジョンを持っていますか？普段からその事をどんどん発信し、周りを巻き込み目標を達成していきましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/1f7ucsO" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>


          <!-- 回答の答え2 -->
          <div id="answer_12" class="result" style="display: none;">
            <div class="result_theme ">

            </div>
            <div class="result_type1 ">
              <h4 class="ls4"></h4>
            </div>
            <div class="result_discription1">
              <h2>社外のベンチマークも設定し、更なる高みを目指してリーダーシップを発揮しましょう！</h2>
              <h2 class="ad">
                世の中の優れたリーダーは、個人のビジョンが明確で影響力に溢れています。あなたはどんなビジョンを持っていますか？普段からその事をどんどん発信し、周りを巻き込み目標を達成していきましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/1f7ucsO" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>

          <!-- 回答の答え3 -->
          <div id="answer_13" class="result" style="display: none;">
            <div class="result_theme ">

            </div>
            <div class="result_type2 ">
              <h4 class="ls3"></h4>
            </div>
            <div class="result_discription2">
              <h2>相手の行動変容をゴールにすることであなた自身のリーダーシップはさらに高まります！</h2>
              <h2 class="ad">
                リーダーシップの理想の姿とは、時代また相手に応じて変えていくことだと言われています。あなたは普段どのようなリーダーシップのスタイルを心がけていますか？自己理解も行い、更なる磨きをかけましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/1f7ucsO" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>

          <!-- 回答の答え4 -->
          <div id="answer_14" class="result" style="display: none;">
            <div class="result_theme ">

            </div>
            <div class="result_type3 ">
              <h4 class="ls2"></h4>
            </div>
            <div class="result_discription3">
              <h2>もっとリーダーシップを発揮しましょう・・・関連の書籍を探してみるのもひとつかも？</h2>
              <h2 class="ad">相手の行動変容をゴールにすることであなた自身のリーダーシップはさらに磨きがかかります！
                時代また相手に応じたリーダーシップを心がけながら、常にチームで目標達成を追求しましょう！ </h2>
            </div>
            <div class="ad2"> <a href="https://amzn.asia/d/1f7ucsO" target="_blank">おすすめ書籍</a></div>

          </div>

          <!-- 回答の答え5 -->
          <div id="answer_15" class="result" style="display: none;">
            <div class="result_theme ">

            </div>
            <div class="result_type4 ">
              <h4 class="ls1"></h4>
            </div>
            <div class="result_discription4">
              <h2>役割に必要なリーダーシップが充分発揮できていないようです。改善方法を考えましょう。</h2>
              <h2 class="ad">
                組織とは相手を動かし、チームを巻き込むことが重要です。一人で抱え込んでいませんか？困った時には上司、チームメンバーに助けを求め、常にチームで仕事をしていくことを心がけましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/1f7ucsO" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>

        </li>


        <!-- FOLLOWERSHIP------------------------------------ -->

        <li class="fol_box">
          <div class="fol_div">
            <h3 id="fol_tit" class="ktit">FOLLOWERSHIP</h3>
            <h3>フォロワーシップ</h3>
            <h3 class="fss"></h3>
            <h3 class="favgscore" class="favgscore"></h3>

            <!-- 質問1 -->
            <div id="f_01" class="ffit">
              <p class="kpi">目標1: 翻訳力　</p>
              <ul>
                <li><a class="fbtn" href="#f_02" data-value=1>『会社の方向性と自身の役割が充分認識できておらず、不平不満が多い』</a></li>
                <li><a class="fbtn" href="#f_02" data-value=2>『会社の方向性と役割の認識はあるが、チームを動かすまでに至っていな』</a>
                </li>
                <li><a class="fbtn" href="#f_02" data-value=3>『会社の方向性と役割を認識し、チームを動かすために効果的なコミュニケーションが取れている』</a></li>
                <li><a class="fbtn" href="#f_02" data-value=4>『上司・部下の双方との信頼関係を構築し、会社のMVV実現に大いに貢献している』</a></li>
                <li><a class="fbtn" href="#f_02" data-value=5>『社内外問わず多くのステークホルダーとの信頼関係を構築し、自社に有益な情報をもたらし業績に貢献している』</a>
                </li>
              </ul>
            </div>

            <!-- 質問2 -->
            <div id="f_02" style="display: none;">
              <p class="kpi">目標2:　PJマネジメント</p>
              <ul>
                <li><a class="fbtn" href="#f_03" data-value=1>『効果的かつ効率的なプロジェクトの管理が行えず、チームの生産性を下げてしまうことがある』</a></li>
                <li><a class="fbtn" href="#f_03" data-value=2>『効果的もしくは効率的なプロジェクトの管理は行えているがまだまだ改善の余地がある』</a></li>
                <li><a class="fbtn" href="#f_03"
                    data-value=3>『リスクマネジメントも加味したプロジェクトの管理が行えており、品質・スピードともに問題なく、会社業績の貢献が行えている』</a>
                </li>
                <li><a class="fbtn" href="#f_03" data-value=4>『PMスキルにおいては社内でもトップクラスで、人材育成も行い自身のブレーンを作っている』</a>
                </li>
                <li><a class="fbtn" href="#f_03" data-value=5>『業界でもPMのスキルは高く評価されておりクライアント獲得という点においても会社業績に大きく貢献している』</a>
                </li>
              </ul>
            </div>

            <!-- 質問3 -->
            <div id="f_03" style="display: none;">
              <p class="kpi">目標3:　チームマネジメント</p>
              <ul>
                <li><a class="fbtn fend" href="#f_04" data-value=1>『自身の業務遂行は行えているが、手一杯になり、チーム貢献の余裕までは生まれていないこともある』</a>
                </li>
                <li><a class="fbtn fend" href="#f_04"
                    data-value=2>『チームメンバーのパフォーマンス発揮のために日々工夫は凝らしてはいるが、効果的な施策実行にまでは至っていない』</a></li>
                <li><a class="fbtn fend" href="#f_04"
                    data-value=3>『チームメンバーが高いパフォーマンスを発揮するため、日々考えながら工夫は凝らし、効果的な施策実行にまで至っている』</a></li>
                <li><a class="fbtn fend" href="#f_04" data-value=4>『チームメンバーからの厚い信頼を得ており、チームメンバーのパフォーマンス発揮に一役買っている』</a>
                </li>
                <li><a class="fbtn fend" href="#f_04" data-value=5>『チームメンバーひとりひとりのエンゲージメント向上に寄与し、会社業績に貢献している』</a></li>
              </ul>
            </div>
          </div>

          <!-- 回答の答え1 -->
          <div id="answer_16" class="result" style="display: none;">
            <div class="result_theme ">

            </div>
            <div class="result_type0 ">
              <h4 class="fs5"></h4>
            </div>
            <div class="result_discription0">
              <h2>素晴らしい！メンバーのエンゲージメント向上を追求し続けましょう！</h2>
              <h2 class="ad">
                プロジェクトを回しながらの上司のサポートはきっと大変な役割だと思います。常に視座を高く保ちつつ会社・チームの縁の下の力持ちとなるようフォロワーシップを発揮し続け、チームを盛り上げて下さい！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/6bgawCG" target="_blank">おすすめ書籍</a></div>

            </div>

          </div>


          <!-- 回答の答え2 -->
          <div id="answer_17" class="result" style="display: none;">
            <div class="result_theme ">

            </div>
            <div class="result_type1 ">
              <h4 class="fs4"></h4>
            </div>
            <div class="result_discription1">
              <h2>常に視座を高く保ち続け、チーム貢献を維持し、チームをサポートしましょう！</h2>
              <h2 class="ad">
                プロジェクトを回しながらの上司のサポートはきっと大変な役割だと思います。常に視座を高く保ちつつ会社・チームの縁の下の力持ちとなるようフォロワーシップを発揮し続け、チームを盛り上げて下さい！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/6bgawCG" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>

          <!-- 回答の答え3 -->
          <div id="answer_18" class="result" style="display: none;">
            <div class="result_theme ">

            </div>
            <div class="result_type2 ">
              <h4 class="fs3"></h4>
            </div>
            <div class="result_discription2">
              <h2>更なるチームのパフォーマンス向上について検討・実行しましょう！</h2>
              <h2 class="ad">
                チームのパフォーマンスを上げるためにできることは限りがありません。MVV達成のためにあなたにできることは何でしょう？常に視座を高く保ち、チームの中心の存在となるようフォロワーシップを発揮し続けて下さい。
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/6bgawCG" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>
          <!-- 回答の答え4 -->
          <div id="answer_19" class="result" style="display: none;">
            <div class="result_theme ">

            </div>
            <div class="result_type3 ">
              <h4 class="fs2"></h4>
            </div>
            <div class="result_discription3">
              <h2>もっとトレーニングが必要かもしれません・・・。方法を考えましょう</h2>
              <h2 class="ad">
                今のあなたに必要なことはPDCA（改善能力）です。普段の失敗や課題から得られるヒントは大きいです。今のあなたには何が課題で、どうすれば乗り越えられるのかを考え、実行に移しましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/6bgawCG" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>

          <!-- 回答の答え5 -->
          <div id="answer_20" class="result" style="display: none;">

            <div class="result_theme ">
            </div>

            <div class="result_type4 ">
              <h4 class="fs1"></h4>
            </div>

            <div class="result_discription4">
              <h2>役割に必要なスキルが充分体得できていないようです。上司に相談し改善方法を考えましょう。</h2>
              <h2 class="ad">
                今のあなたに必要なのはPDCA（改善能力）です。うまくいかなくても、ネガティブになるのではなく、失敗をプラスに捉え成長の糧にしていきましょう！まずは、課題を解決するための計画を立て、実行してみましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/6bgawCG" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>
        </li>


        <!-- HOSPITALITY------------------------------------ -->
        <li class="hos_box">
          <div class="hos_div">
            <h3 id="hos_tit" class="ktit">HOSPITALITY</h3>
            <h3>ホスピタリティ</h3>
            <h3 class="hss"></h3>
            <h3 id="havgscore" class="havgscore"></h3>

            <!-- 質問1 -->
            <div id="h_01" class="hfit">
              <p class="kpi">目標1: 人財育成　</p>
              <ul>
                <li><a class="hbtn" href="#h_02" data-value=1>『周りに心理的安全性を提供できていないこともある』</a></li>
                <li><a class="hbtn" href="#h_02" data-value=2>『心理的安全性は提供できているが、他者への承認・動機付けなど積極的に行えていない』</a></li>
                <li><a class="hbtn" href="#h_02" data-value=3>『心理的安全性、承認・動機付けなど、常に自身の人財育成に対するアプローチのアップデートを行っている』</a>
                </li>
                <li><a class="hbtn" href="#h_02"
                    data-value=4>『心理的安全性を提供し、他者への承認・動機付けなど積極的に行い、後輩・部下のパフォーマンス発揮に貢献できている』</a>
                </li>
                <li><a class="hbtn" href="#h_02"
                    data-value=5>『全社レベルで人財育成の重要性を訴求し、またロールモデルとなってブレーンを増やすことで自社の成長に貢献している』</a>
                </li>
              </ul>
            </div>

            <!-- 質問2 -->
            <div id="h_02" style="display: none;">
              <p class="kpi">目標2:　メンバーシップ</p>
              <ul>
                <li><a class="hbtn" href="#h_03" data-value=1>『自身に明確に指示された業務、または自身のタスクにおいては対応できている』</a>
                </li>
                <li><a class="hbtn" href="#h_03" data-value=2>『自身に与えられた業務以外も時折遂行するが、積極さが欠けてしまうこともある』</a>
                </li>
                <li><a class="hbtn" href="#h_03" data-value=3>『自身の業務と関係のない仕事であっても積極的に拾い、骨が折れる仕事であっても前向きに対応をしている』</a>
                </li>
                <li><a class="hbtn" href="#h_03"
                    data-value=4>『役割が決まっていない仕事に対しても積極的対応していくことで、チームメンバーのパフォーマンス発揮に貢献できている』</a></li>
                <li><a class="hbtn" href="#h_03"
                    data-value=5>『業務の領域を留めることなく効率的かつ効果的に対応した上で、他者への貢献意欲が高いメンバーを育て自社の成長につなげている』
                  </a></li>
              </ul>
            </div>


            <!-- 質問3 -->
            <div id="h_03" style="display: none;">
              <p class="kpi">目標3:セルフマネジメント</p>
              <ul>
                <li><a class="hbtn hend" href="#h_04"
                    data-value=1>『対応に難しい案件でも、対応はできているが、セルフマネジメントできずにチームメンバーに気を使わせてしまうこともある』</a></li>
                <li><a class="hbtn hend" href="#h_04"
                    data-value=2>『対応に難しい案件でも、周りに気を遣わせることまではないが、自身の動機付け、モチベートができていないこともある』</a>
                </li>
                <li><a class="hbtn hend" href="#h_04"
                    data-value=3>『対応に難しい案件でもポジティブマインドに切り替え、セルフコントロールを行い、常にモチベーションの維持が行えている』</a></li>
                <li><a class="hbtn hend" href="#h_04"
                    data-value=4>『困難な状況をチャンスと捉え、自ら能動的に挑戦を続けており、その姿は社内でのロールモデルにもなっている』</a></li>
                <li><a class="hbtn hend" href="#h_04"
                    data-value=5>『セルフマネジメントのロールモデルとなり、社内外問わず関わる全てのモチベーション向上に寄与している』</a>
                </li>
              </ul>
            </div>

          </div>



          <!-- ここから以下回答 -->
          <!-- 回答の答え1 -->
          <div id="answer_21" class="result" style="display: none;">
            <div class="result_theme ">

            </div>

            <div class="result_type0 ">
              <h4 class="hs5"></h4>
            </div>

            <div class="result_discription0">
              <h2>今のメンバーが支えられているのはあなたのおかげです！これからも波及し続けましょう！</h2>
              <h2 class="ad">
                ホスピタリティとは常に相手目線になることです！業務が忙しいと見落としてしまいがちなので、メンバーに常にその重要性を思い出させるようにサポートをして上げて下さい！ホスピタリティを広げましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/3jTYzBc" target="_blank">おすすめ書籍</a></div>
            </div>


          </div>


          <!-- 回答の答え2 -->
          <div id="answer_22" class="result" style="display: none;">

            <div class="result_theme ">

            </div>

            <div class="result_type1 ">
              <h4 class="hs4"></h4>
            </div>

            <div class="result_discription1">
              <h2>素晴らしい！あなたのホスピタリティの高さをどんどん波及し、伝播させていきましょう！</h2>
              <h2 class="ad">
                メンバーはあなたが積極的にチーム貢献をしていることは見ています！そんなあなたの影響力を活かし、これからはホスピタリティを発揮できる人財の育成に挑戦し、あなたのブレーンをたくさん作りましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/3jTYzBc" target="_blank">おすすめ書籍</a></div>
            </div>


          </div>

          <!-- 回答の答え3 -->
          <div id="answer_23" class="result" style="display: none;">

            <div class="result_theme ">

            </div>

            <div class="result_type2 ">
              <h4 class="hs3"></h4>
            </div>

            <div class="result_discription2">
              <h2>もっと積極的に動いてみると何かが変わるかもしれません。明日から意識して動いてみましょう！</h2>
              <h2 class="ad">
                ホスピタリティとは常に相手目線になることです。普段から相手が何を求めているかを常に意識してみましょう！そしてもし自分だったらという気持ちで行動を起こしてみる、ホスピタリティの第一歩はまずそこから！
              </h2>
              <div class="ad2"><a href="https://amzn.asia/d/3jTYzBc" target="_blank">おすすめ書籍</a></div>
            </div>


          </div>


          <!-- 回答の答え4 -->
          <div id="answer_24" class="result" style="display: none;">
            <div class="result_theme ">

            </div>

            <div class="result_type3 ">
              <h4 class="fs2"></h4>
            </div>

            <div class="result_discription3">
              <h2>あなたのホスピタリティは眠っています！まだまだ発揮できるはず！</h2>

              <h2 class="ad">
                今のあなたに必要なことは、より相手目線になり、物事を考えてみることかもしれません。相手が何を求めているかを日々意識してみることから始めましょう！みんなあなたのサポートを必要としているのです！
              </h2>
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/3jTYzBc" target="_blank">おすすめ書籍</a></div>
            </div>


          </div>

          <!-- 回答の答え5 -->
          <div id="answer_25" class="result" style="display: none;">

            <div class="result_theme ">

            </div>

            <div class="result_type4 ">
              <h4 class="hs1"></h4>
            </div>

            <div class="result_discription4">
              <h2>あなたのホスピタリティは眠っています！まだまだ発揮できるはず！</h2>
              <h2 class="ad">
                今のあなたに必要なことは、より相手目線になり、物事を考えてみることかもしれません。相手が何を求めているかを日々意識してみることから始めましょう！みんなあなたのサポートを必要としているのです！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/3jTYzBc" target="_blank">おすすめ書籍</a></div>
            </div>

            <!-- <div class="return-btn">
            <a class="return" href="index.html">もどる</a>
          </div> -->
          </div>

        </li>

        <!-- FLEXIBILITY------------------------------------ -->

        <li class="fle_box">
          <div class="fle_div">
            <h3 id="fle_tit" class="ktit">FLEXIBILITY</h3>
            <h3>経験と対応力</h3>
            <h3 class="flss"></h3>
            <h3 id="flavgscore" class="flavgscore"></h3>

            <!-- 質問1 -->
            <div id="fl_01" class="flfit">
              <p class="kpi">目標1: 現場力　</p>
              <ul>
                <li><a class="flbtn" href="#fl_02" data-value=1>『指示されればオペレーションはこなすことができるが、自立自走することはまだできていない』</a></li>
                <li><a class="flbtn" href="#fl_02"
                    data-value=2>『指示されずともオペレーションをこなすことはできるが、上司から時折指摘をされることもあり、クオリティ、スピードともに改善は必要である』</a>
                </li>
                <li><a class="flbtn" href="#fl_02" data-value=3>『オペレーションをそつなくこなしているが、正確性、スピードいづれかで改善が必要である』</a></li>
                <li><a class="flbtn" href="#fl_02" data-value=4>『オペレーションをそつなくこなし、正確性、スピードともに申し分なく、現場のロールモデルになっている』</a>
                </li>
                <li><a class="flbtn" href="#fl_02" data-value=5>『オペレーションにおいては業界でも名を知られているレベルで業界のロールモデルとなっている』</a>
                </li>
              </ul>
            </div>

            <!-- 質問2 -->
            <div id="fl_02" style="display: none;">
              <p class="kpi">目標2:　トラブル対応力</p>
              <ul>
                <li><a class="flbtn" href="#fl_03" data-value=1>『突発的な対応が起こると、上司や先輩の指示があれは、対応が可能だが、一人で対応することは難しい』</a>
                </li>
                <li><a class="flbtn" href="#fl_03"
                    data-value=2>『突発的な対応が起こると、ある程度の問題は一人で解決ができるが、解決できない問題に関しては周りに助けを乞うことも多い』</a>
                </li>
                <li><a class="flbtn" href="#fl_03" data-value=3>『突発的な対応も起こると、ほとんどの問題は一人で解決ができるが、解決手順に関しては改善も多い』</a>
                </li>
                <li><a class="flbtn" href="#fl_03"
                    data-value=4>『突発的な対応もそつなくこなし、解決手順に関してもベストプラクティスとなっており、トラブル対応のロールモデルになっている』</a>
                </li>
                <li><a class="flbtn" href="#fl_03" data-value=5>『トラブル対応においては業界でも名を知られているレベルで業界のロールモデルとなっている』</a></li>
              </ul>
            </div>

            <!-- 質問3 -->
            <div id="fl_03" style="display: none;">
              <p class="kpi">目標3:　クライアント対応</p>
              <ul>
                <li><a class="flbtn flend" href="#fl_04" data-value=1>『指示されればクライアント対応をこなすことはできるが、自立自走することはまだできていない』</a>
                </li>
                <li><a class="flbtn flend" href="#fl_04"
                    data-value=2>『指示されずともクライアント対応をこなすことはできるが、上司から時折指摘をされることもあり、クオリティ、スピードともに改善は必要である』</a>
                </li>
                <li><a class="flbtn flend" href="#fl_04" data-value=3>『クライアント対応をそつなくこなしているが、正確性、スピードいづれかで改善が必要である』</a>
                </li>
                <li><a class="flbtn flend" href="#fl_04"
                    data-value=4>『クライアント対応をそつなくこなし、正確性、スピードともに申し分なく、現場のロールモデルになっている』</a></li>
                <li><a class="flbtn flend" href="#fl_04" data-value=5>『クライアント対応においては業界でも名を知られているレベルで業界のロールモデルとなっている』
                  </a></li>
              </ul>
            </div>

          </div>

          <!-- 回答の答え1 -->
          <div id="answer_26" class="result" style="display: none;">
            <div class="result_theme ">

            </div>

            <div class="result_type0" data-value=5>
              <h4 class="fls5"></h4>
            </div>

            <div class="result_discription0">
              <h2>素晴らしい！あなたのその経験と対応力を社内にもっと伝承していきましょう！</h2>
              <h2 class="ad">
                あなたはすでに高い経験値と対応力によって、社内に充分な貢献をしているようです。今後はその影響力を活用し、社内外問わず様々な情報を社内にもたらし、更なる組織力向上に貢献して下さい！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/fmpIqAg" target="_blank">おすすめ書籍</a></div>
            </div>


          </div>


          <!-- 回答の答え2 -->
          <div id="answer_27" class="result" style="display: none;">

            <div class="result_theme">

            </div>

            <div class="result_type1" data-value=4>
              <h4 class="fls4"></h4>
            </div>

            <div class="result_discription1">
              <h2>素晴らしい！社外のベンチマークも設定し、更なる高みを目指そう！</h2>
              <h2 class="ad">
                あなたは社内のロールモデルになるほどパフォーマンスを発揮しているようですね。その存在感は維持しつつ、今後は社内外問わず更なるベンチマーク（目標とする存在）を設定し、更なるスキルアップにつなげましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/fmpIqAg" target="_blank">おすすめ書籍</a></div>
            </div>


          </div>

          <!-- 回答の答え3 -->
          <div id="answer_28" class="result" style="display: none;">

            <div class="result_theme ">

            </div>

            <div class="result_type2" data-value=3>
              <h4 class="fls3"></h4>
            </div>

            <div class="result_discription2">
              <h2>周りに教えることであなた自身のスキルを更に高めることができます！</h2>
              <h2 class="ad">
                あなたは業務を進めるのに充分な経験値を持っているようです。これからは、その能力を活かし、周りに教えていくことも心がけましょう！教えることであなたのスキルも更に高まります！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/fmpIqAg" target="_blank">おすすめ書籍</a></div>
            </div>


          </div>


          <!-- 回答の答え4 -->
          <div id="answer_29" class="result" style="display: none;">
            <div class="result_theme">

            </div>

            <div class="result_type3" data-value=2>
              <h4 class="fls2"></h4>
            </div>

            <div class="result_discription3">
              <h2>もっとトレーニングが必要かもしれません・・・。方法を考えましょう</h2>
              <h2 class="ad">
                今のあなたに必要なことはPDCA（改善能力）です。失敗や課題は決してネガティブなだけではなく、失敗をプラスに捉え成長の糧にしていきましょう！まずは、課題を解決するための計画を立て、実行してみましょう！
              </h2>
              <div class="ad2"> <a href="hhttps://amzn.asia/d/fmpIqAg" target="_blank">おすすめ書籍</a></div>
            </div>

          </div>

          <!-- 回答の答え5 -->
          <div id="answer_30" class="result" style="display: none;">

            <div class="result_theme">

            </div>

            <div class="result_type4" data-value=1>
              <h4 class="fls1"></h4>
            </div>

            <div class="result_discription4">
              <h2>役割に必要なスキルが充分体得できていないようです。上司に相談し改善方法を考えましょう。</h2>
              <h2 class="ad">
                今のあなたに必要なことはPDCA（改善能力）です。失敗や課題は決してネガティブなだけではなく、失敗をプラスに捉え成長の糧にしていきましょう！まずは、課題を解決するための計画を立て、実行してみましょう！
              </h2>
              <div class="ad2"> <a href="https://amzn.asia/d/fmpIqAg" target="_blank">おすすめ書籍</a></div>
            </div>

        </li>
      </ul>

      <div class="return-btn">
        <a class="return" href="#top">もどる</a>
      </div>
    </div>

    <div class="space"></div>

    <div class="evasheet_wrapper">
      <div class="eva_sheet">自己評価シート＿送信フォーム</div>
      <p>上記の自己評価を終えたあとに、以下の項目に記入し、送信ボタンを押すところまで完了して下さい。<br>また、自己評価欄には、評価期間の取り組みでがんばったことや課題、さらには次の期への取り組みなど、自由に記述して下さい。
      </p>

      <div class="wholeform">
        <div class="ev_form" hove>





          <select id="term">
            <option value="">評価期間を選択してください</option>
            <option value="2023年4月～2023年9月">2023年4月～2023年9月</option>
            <option value="2023年10月～2024年3月">2023年10月～2024年3月</option>
            <option value="2024年4月～2024年9月">2024年4月～2024年9月</option>
            <option value="2024年10月～2025年3月">2024年10月～2025年3月</option>
            <option value="2025年4月～2025年9月">2025年4月～2025年9月</option>
            <option value="2025年10月～2026年3月">2025年10月～2026年3月</option>
            <option value="2026年4月～2026年9月">2026年4月～2026年9月</option>
            <option value="2026年10月～2027年3月">2026年10月～2027年3月</option>
            <option value="2027年4月～2027年9月">2027年4月～2027年9月</option>
            <option value="2027年10月～2028年3月">2027年10月～2028年3月</option>
          </select>



          <div class="formselfeva">
            自己評価: <input type="text" id="text">
          </div>

          <div>
            <button type="button" id="send">send</button>
          </div>

          <div class="return-btn2">
            <a class="return" href="#top">もどる</a>
          </div>

        </div>
      </div>



    </div>
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


    
        <script>
          // <!-- KNOWLEDGE------------------------------------ -->

          let kTotal = 0.0;
          let kCount = 0.0;
          let kavg = 0.0;

          $(function () {
            $(".kbtn").on("click", function () {
              $(this).closest("div").css("display", "none");
              const id = $(this).attr("href");
              $(id).addClass("kfit").fadeIn("slow").show();
            });

            const kbtns = document.querySelectorAll(".kbtn");
            kbtns.forEach((kbtn) => {
              kbtn.addEventListener("click", (event) => {
                value = parseFloat(event.target.getAttribute("data-value"));

                if (!isNaN(value)) {
                  kTotal += value;
                  kCount++;
                  kavg = kTotal / kCount
                  $(".kavgscore").text((kavg).toFixed(1));
                }



                $('.kend').on('click', function () {

                  if (kavg >= 0.5 && kavg < 1.5) {
                    $('#answer_05').css("display", "");
                  } else if (kavg >= 1.5 && kavg < 2.5) {
                    $('#answer_04').css("display", "");
                  } else if (kavg >= 2.5 && kavg < 3.5) {
                    $('#answer_03').css("display", "");
                  } else if (kavg >= 3.5 && kavg < 4.5) {
                    $('#answer_02').css("display", "");
                  } else if (kavg >= 4.5 && kavg <= 5) {
                    $('#answer_01').css("display", "");
                  }
                  let kavgscore = kavg.toFixed(1);
                  $(".kavgscore").text(kavgscore);

                  $(".kss").text("あなたの自己評価は");
                }
                );
              })
            })
          });

          // <!-- INOVATION------------------------------------ -->
          let iTotal = 0.0;
          let iCount = 0.0;
          let iavg = 0.0;

          $(function () {
            $(".ibtn").on("click", function () {
              $(this).closest("div").css("display", "none");
              const id = $(this).attr("href");
              $(id).addClass("ifit").fadeIn("slow").show();
            });

            const ibtns = document.querySelectorAll(".ibtn");
            ibtns.forEach((ibtn) => {
              ibtn.addEventListener("click", (event) => {
                value = parseFloat(event.target.getAttribute("data-value"));

                if (!isNaN(value)) {
                  iTotal += value;
                  iCount++;
                  iavg = iTotal / iCount
                  $(".iavgscore").text((iavg).toFixed(1));
                }

                $('.iend').on('click', function () {

                  if (iavg >= 0.5 && iavg < 1.5) {
                    $('#answer_10').css("display", "");
                  } else if (iavg >= 1.5 && iavg < 2.5) {
                    $('#answer_09').css("display", "");
                  } else if (iavg >= 2.5 && iavg < 3.5) {
                    $('#answer_08').css("display", "");
                  } else if (iavg >= 3.5 && iavg < 4.5) {
                    $('#answer_07').css("display", "");
                  } else if (iavg >= 4.5 && iavg <= 5) {
                    $('#answer_06').css("display", "");
                  }
                  let iavgscore = iavg.toFixed(1);
                  $(".iavgscore").text(iavgscore);
                  $(".iss").text("あなたの自己評価は");
                }
                );
              })
            })
          });

          // <!-- LEADERSHIP------------------------------------ -->
          let lTotal = 0.0;
          let lCount = 0.0;
          let lavg = 0.0;

          $(function () {
            $(".lbtn").on("click", function () {
              $(this).closest("div").css("display", "none");
              const id = $(this).attr("href");
              $(id).addClass("lfit").fadeIn("slow").show();
            });

            const lbtns = document.querySelectorAll(".lbtn");
            lbtns.forEach((lbtn) => {
              lbtn.addEventListener("click", (event) => {
                value = parseFloat(event.target.getAttribute("data-value"));

                if (!isNaN(value)) {
                  lTotal += value;
                  lCount++;
                  lavg = lTotal / lCount
                  $(".lavgscore").text((lavg).toFixed(1));
                }

                $('.lend').on('click', function () {

                  if (lavg >= 0.5 && lavg < 1.5) {
                    $('#answer_15').css("display", "");
                  } else if (lavg >= 1.5 && lavg < 2.5) {
                    $('#answer_14').css("display", "");
                  } else if (lavg >= 2.5 && lavg < 3.5) {
                    $('#answer_13').css("display", "");
                  } else if (lavg >= 3.5 && lavg < 4.5) {
                    $('#answer_12').css("display", "");
                  } else if (lavg >= 4.5 && lavg <= 5) {
                    $('#answer_11').css("display", "");
                  }
                  let lavgscore = lavg.toFixed(1);
                  $(".lavgscore").text(lavgscore);
                  $(".lss").text("あなたの自己評価は");
                }
                );
              })
            })
          });

          // <!-- FFOLLOWERSHIP------------------------------------ -->
          let fTotal = 0.0;
          let fCount = 0.0;
          let favg = 0.0;

          $(function () {
            $(".fbtn").on("click", function () {
              $(this).closest("div").css("display", "none");
              const id = $(this).attr("href");
              $(id).addClass("ffit").fadeIn("slow").show();
            });

            const fbtns = document.querySelectorAll(".fbtn");
            fbtns.forEach((fbtn) => {
              fbtn.addEventListener("click", (event) => {
                value = parseFloat(event.target.getAttribute("data-value"));

                if (!isNaN(value)) {
                  fTotal += value;
                  fCount++;
                  favg = fTotal / fCount
                  $(".favgscore").text((favg).toFixed(1));
                }

                $('.fend').on('click', function () {

                  if (favg >= 0.5 && favg < 1.5) {
                    $('#answer_20').css("display", "");
                  } else if (favg >= 1.5 && favg < 2.5) {
                    $('#answer_19').css("display", "");
                  } else if (favg >= 2.5 && favg < 3.5) {
                    $('#answer_18').css("display", "");
                  } else if (favg >= 3.5 && favg < 4.5) {
                    $('#answer_17').css("display", "");
                  } else if (favg >= 4.5 && favg <= 5) {
                    $('#answer_16').css("display", "");
                  }
                  let favgscore = favg.toFixed(1);
                  $(".favgscore").text(favgscore);
                  $(".fss").text("あなたの自己評価は");
                }
                );
              })
            })
          });

          // <!-- HOSPITALITY------------------------------------ -->
          let hTotal = 0.0;
          let hCount = 0.0;
          let havg = 0.0;

          $(function () {
            $(".hbtn").on("click", function () {
              $(this).closest("div").css("display", "none");
              const id = $(this).attr("href");
              $(id).addClass("hfit").fadeIn("slow").show();
            });

            const hbtns = document.querySelectorAll(".hbtn");
            hbtns.forEach((hbtn) => {
              hbtn.addEventListener("click", (event) => {
                value = parseFloat(event.target.getAttribute("data-value"));

                if (!isNaN(value)) {
                  hTotal += value;
                  hCount++;
                  havg = hTotal / hCount
                  $(".havgscore").text((havg).toFixed(1));
                }



                $('.hend').on('click', function () {

                  if (havg >= 0.5 && havg < 1.5) {
                    $('#answer_25').css("display", "");
                  } else if (havg >= 1.5 && havg < 2.5) {
                    $('#answer_24').css("display", "");
                  } else if (havg >= 2.5 && havg < 3.5) {
                    $('#answer_23').css("display", "");
                  } else if (havg >= 3.5 && havg < 4.5) {
                    $('#answer_22').css("display", "");
                  } else if (havg >= 4.5 && havg <= 5) {
                    $('#answer_21').css("display", "");
                  }
                  let havgscore = havg.toFixed(1);


                  $(".havgscore").text(havgscore);
                  $(".hss").text("あなたの自己評価は");
                }
                );
              })
            })
          });

          // <!-- FLEXIBILITY------------------------------------ -->

          let flTotal = 0.0;
          let flCount = 0.0;
          let flavg = 0.0;

          $(function () {
            $(".flbtn").on("click", function () {
              $(this).closest("div").css("display", "none");
              const id = $(this).attr("href");
              $(id).addClass("flfit").fadeIn("slow").show();
            });

            const flbtns = document.querySelectorAll(".flbtn");
            flbtns.forEach((flbtn) => {
              flbtn.addEventListener("click", (event) => {
                value = parseFloat(event.target.getAttribute("data-value"));

                if (!isNaN(value)) {
                  flTotal += value;
                  flCount++;
                  flavg = flTotal / flCount
                  $(".flavgscore").text((flavg).toFixed(1));


                }


                $('.flend').on('click', function () {

                  if (flavg >= 0.5 && flavg < 1.5) {
                    $('#answer_30').css("display", "");
                  } else if (flavg >= 1.5 && flavg < 2.5) {
                    $('#answer_29').css("display", "");
                  } else if (flavg >= 2.5 && flavg < 3.5) {
                    $('#answer_28').css("display", "");
                  } else if (flavg >= 3.5 && flavg < 4.5) {
                    $('#answer_27').css("display", "");
                  } else if (flavg >= 4.5 && flavg <= 5) {
                    $('#answer_26').css("display", "");
                  }
                  let flavgscore = flavg.toFixed(1);

                  let finalTotalscore = ((iavg + lavg + favg + havg + flavg + kavg) / 6).toFixed(2);
                  finalTotalscore = parseFloat(finalTotalscore);
                  finalTotalscore = finalTotalscore.toFixed(1);
                  $(".flavgscore").text(flavgscore);
                  $(".flss").text("あなたの自己評価は");
                  $(".answer_101").text(finalTotalscore)

                  if (finalTotalscore >= 0.5 && finalTotalscore < 1.5) {
                    $('.icon1').html('<img src="img/icon.png" alt="MGR" style="width:50px;">');
                  } else if (finalTotalscore >= 1.5 && finalTotalscore < 2.5) {
                    $('.icon2').html('<img src="img/icon.png" alt="MGR" style="width:50px;">');
                  } else if (finalTotalscore >= 2.5 && finalTotalscore < 3.5) {
                    $('.icon3').html('<img src="img/icon.png" alt="MGR" style="width:50px;">');
                  } else if (finalTotalscore >= 3.5 && finalTotalscore < 4.5) {
                    $('.icon4').html('<img src="img/icon.png" alt="MGR" style="width:50px;">');
                  } else if (finalTotalscore >= 4.5 && finalTotalscore <= 5) {
                    $('.icon5').html('<img src="img/icon.png" alt="MGR" style="width:50px;">');
                  }

                });





                let data = {
                  labels: ['INNOVATION', 'LEADERSHIP', 'FOLLOWERSHIP', 'HOSPITALITY', 'FLEXIBILITY', 'KNOWLEDGE'], // 項目の順番を変更する
                  datasets: [{
                    label: 'Value',
                    data: [iavg, lavg, favg, havg, flavg, kavg], // 項目のデータも順番に合わせて変更する
                    backgroundColor: 'rgba(0, 102, 204, 0.5)',
                    borderColor: 'rgba(0, 102, 204, 1)',
                    borderWidth: 1

                  }]
                };

                // チャートを描画する
                let ctx = document.getElementById('myChart').getContext('2d');
                let myChart = new Chart(ctx, {
                  type: 'radar',
                  data: data,
                  options: {
                    scale: {
                      ticks: {
                        beginAtZero: true,
                        max: 5,
                        stepSize: 1
                      }
                    },
                    elements: {
                      line: {
                        tension: 0.000001 // 直線のみを描画する
                      }
                    },
                    layout: {
                      padding: {
                        top: 50 // ラベルの上部の余白を設定する
                      }
                    },
                    // 項目1と2を頂点にした台形の形状にする
                    startAngle: -30,
                    plugins: {
                      filler: {
                        propagate: false
                      }
                    }
                  }
                });

                $('#chart_div').css("display", ""); // 下段を表示する


              });


            })
          })


          // ボタン要素を取得する
          let button = document.getElementById("pdf-button");

          // ボタンがクリックされたときに実行する関数を定義する
          button.addEventListener("click", function () {
            // jsPDFオブジェクトを作成する
            var doc = new jsPDF();

            // PDFにテキストを追加する
            doc.text("Hello, world!", 10, 10);

            // PDFをダウンロードする
            doc.save("sample.pdf");
          });


        </script>
        </li>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="index.js"></script>






        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
          // 日時をいい感じの形式にする関数
          function convertTimestampToDatetime(timestamp) {
            const _d = timestamp ? new Date(timestamp * 1000) : new Date();
            const Y = _d.getFullYear();
            const m = (_d.getMonth() + 1).toString().padStart(2, '0');
            const d = _d.getDate().toString().padStart(2, '0');
            const H = _d.getHours().toString().padStart(2, '0');
            const i = _d.getMinutes().toString().padStart(2, '0');
            const s = _d.getSeconds().toString().padStart(2, '0');
            return `${Y}/${m}/${d} ${H}:${i}:${s}`;
          }
        </script>



        <!-- 以下にfirebaseのコードを貼り付けよう -->


        <script type="module">

          import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-app.js";

          import {
            getFirestore,
            collection,
            addDoc,
            serverTimestamp,
            query,
            orderBy,
            onSnapshot,
          } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-firestore.js";



          const firebaseConfig = {
            apiKey: "AIzaSyA8p9igB4aI27AdtDu7Zvueh4iX4qVRmXo",
            authDomain: "chatapp-miki.firebaseapp.com",
            projectId: "chatapp-miki",
            storageBucket: "chatapp-miki.appspot.com",
            messagingSenderId: "788466822293",
            appId: "1:788466822293:web:34b4a1e607732c8e357f9c"
          };

          const app = initializeApp(firebaseConfig);
          const db = getFirestore(app);


          // chatapp.html

          $("#send").on("click", function () {

            // chatapp.html
            const kavgValue = parseFloat($(".kavgscore").text());
            const iavgValue = parseFloat($(".iavgscore").text());
            const lavgValue = parseFloat($(".lavgscore").text());
            const favgValue = parseFloat($(".favgscore").text());
            const havgValue = parseFloat($(".havgscore").text());
            const flavgValue = parseFloat($(".flavgscore").text());
            const tavgValue = parseFloat($(".answer_101").text());

            const postData = {
              section: $("#section").val(),
              grade: $("#grade").val(),
              name: $("#name").val(),
              term: $("#term").val(),
              text: $("#text").val(),
              time: serverTimestamp(),

              kavg: kavgValue,
              iavg: iavgValue,
              lavg: lavgValue,
              favg: favgValue,
              havg: havgValue,
              flavg: flavgValue,
              tavg: tavgValue,

            };

            addDoc(collection(db, "chat"), postData);
            alert("送信されました"); // メッセージを表示する

          });


          // // データ取得処理
          // const t = query(collection(db, "chat"), orderBy("time", "desc"));

          // onSnapshot(t, (querySnapshot) => {

          //   const documents = [];
          //   querySnapshot.docs.forEach(function (doc) {
          //     const document = {
          //       id: doc.id,
          //       data: doc.data(),
          //     };
          //     documents.push(document);
          //   });

          //   console.log(documents);

          //   //  ここまでは毎回同じ

          // });

          // chatapp.html

          $("#send2").on("click", function () {

            // chatapp.html

            const postData = {
              section2: $("#section2").val(),
              grade2: $("#grade2").val(),
              term2: $("#term2").val(),
              name2: $("#name2").val(),
              text2: $("#text2").val(),
              kno: $("#kno").val(),
              ktext: $("#ktext").val(),
              ino: $("#ino").val(),
              itext: $("#itext").val(),
              lea: $("#lea").val(),
              ltext: $("#ltext").val(),
              fol: $("#fol").val(),
              ftext: $("#ftext").val(),
              hos: $("#hos").val(),
              htext: $("#htext").val(),
              time: serverTimestamp(),

            };
            addDoc(collection(db, "chat"), postData);
            alert("送信されました"); // メッセージを表示する

          });


          // データ取得処理
          const u = query(collection(db, "chat"), orderBy("time", "desc"));

          onSnapshot(u, (querySnapshot) => {
            const documents = [];
            querySnapshot.docs.forEach(function (doc) {
              const document = {
                id: doc.id,
                data: doc.data(),
              };
              documents.push(document);
            });
            console.log(documents);


            //  ここまでは毎回同じ


            // 検索ボタンのクリックイベントハンドラ
            $("#evaresult").on("click", function () {
              // 入力されたキーワードを取得
              const keyword3 = $("#name3").val();
              const selectedTerm3 = $("#term3 option:selected").val();

              // Firestore のデータを検索
              searchDocuments(keyword3, selectedTerm3);
              console.log(documents);

            });

            // ドキュメントを検索して表示する関数
            function searchDocuments(keyword3, selectedTerm3) {
              const htmlElements3 = [];
              documents.forEach(function (document) {
                const time = document.data.time && document.data.time.seconds ? convertTimestampToDatetime(document.data.time.seconds) : "";
                const documentTerm = document.data.term;

                console.log("documentTerm:", documentTerm); // 追加
                if (document.data.name && document.data.name.includes(keyword3) && documentTerm === selectedTerm3) {


                  htmlElements3.push(`
            <li id="${document.id}">
                <p>${document.data.text}</p>  
              
          
            </li>
            `);


                  const feedback = document.data.feedback; // feedback変数を追加
                  $("#feedback3").text(feedback);
                  const k2Value = document.data.knowledge;
                  $("#ktext2").text(k2Value);
                  const k3Value = document.data.knowledge_com;
                  $("#ktext3").text(k3Value);
                  const i2Value = document.data.inovation;
                  $("#itext2").text(i2Value);
                  const i3Value = document.data.inovation_com;
                  $("#itext3").text(i3Value);
                  const l2Value = document.data.leadership;
                  $("#ltext2").text(l2Value);
                  const l3Value = document.data.leadership_com;
                  $("#ltext3").text(l3Value);
                  const f2Value = document.data.followership;
                  $("#ftext2").text(f2Value);
                  const f3Value = document.data.followership_com;
                  $("#ftext3").text(f3Value);
                  const h2Value = document.data.hospitality;
                  $("#htext2").text(h2Value);
                  const h3Value = document.data.hospitality_com;
                  $("#htext3").text(h3Value);
                  const fl2Value = document.data.flexibility;
                  $("#fltext2").text(fl2Value);
                  const fl3Value = document.data.flexibility_com;
                  $("#fltext3").text(fl3Value);
                }

              });

              $("#feedbackf").html(htmlElements3);
            }
          })

        </script>

</main>


</body>















</html>