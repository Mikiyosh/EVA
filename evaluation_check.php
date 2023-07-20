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

  <div>
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

        <div class="vision_wrapper">
      <h1 class="vision">Value</h1>
    
    </div>


    </div>


    <div class="evasheet_wrapper">

      <p id="valuecheck" class="eva_sheet">今期評価＿バリュー項目</p>





      <select id="term3">
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

   




      <div>

        <ul class="whole_wrapper">
          <li class="box3">
            <div class="kno_div">
              <h3 id="kno_tit" class="ktit">KNOWLEDGE</h3>

              <h3>技術と知識</h3>

              <div class="formselfeva1">
                <p type="" id="ktext2"></P>
              </div>

              <div class="formselfeva2">
                <p type="fltext" id="ktext3"></P>
              </div>


            </div>
          </li>

          <!-- INOVATION------------------------------------ -->
          <li class="box3">
            <div class="kno_div">
              <h3 id="kno_tit" class="ktit">INOVATION</h3>
              <h3>イノベーション</h3>
              <div class="formselfeva1">
                <p type="" id="itext2"></P>
              </div>

              <div class="formselfeva2">
                <p type="fltext" id="itext3"></P>
              </div>


            </div>
          </li>

          <!-- LEADERSHIP------------------------------------ -->

          <li class="box3">
            <div class="le_div">
              <h3 id="le_tit" class="ktit">LEADERSHIP</h3>
              <h3>リーダーシップ</h3>

              <div class="formselfeva1">
                <p type="" id="ltext2"></P>
              </div>

              <div class="formselfeva2">
                <p type="fltext" id="ltext3"></P>
              </div>

            </div>

          </li>


          <!-- FOLLOWERSHIP------------------------------------ -->

          <li class="box3">
            <div class="fol_div">
              <h3 id="fol_tit" class="ktit">FOLLOWERSHIP</h3>
              <h3>フォロワーシップ</h3>

              <div class="formselfeva1">
                <p type="formselfeva1" id="ftext2"></P>
              </div>

              <div class="formselfeva2">
                <p type="fltext" id="ftext3"></P>
              </div>



            </div>
          </li>


          <!-- HOSPITALITY------------------------------------ -->
          <li class="box3">
            <div class="hos_div">
              <h3 id="hos_tit" class="ktit">HOSPITALITY</h3>
              <h3>ホスピタリティ</h3>
              <div class="formselfeva1">
                <p type="" id="htext2"></P>
              </div>

              <div class="formselfeva2">
                <p type="fltext" id="htext3"></P>
              </div>


            </div>
          </li>

          <!-- FLEXIBILITY------------------------------------ -->

          <li class="box3">
            <div class="fle_div">
              <h3 id="fle_tit" class="ktit">FLEXIBILITY</h3>
              <h3>経験と対応力</h3>


              <div class="formselfeva1">
                <p type="fltext" id="fltext2"></P>
              </div>

              <div class="formselfeva2">
                <p type="fltext" id="fltext3"></P>
              </div>


            </div>
          </li>

        </ul>
      </div>


      <p class="evaterm">評価フィードバック</p>

      <div class="valueelements2">

        <div class="vsele">

          <div class="">
            <div class="feedbackf"></div>
          </div>


        </div>



        <div class="return-btn">
          <a class="return" href="#top">もどる</a>
        </div>




        <footer>
          <button id="pdf-button">PDFをダウンロード</button>
        </footer>









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