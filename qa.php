


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>


        <style>


body{
    background-color:#EEEEEE;
}
.qa-007 {
    max-width: 500px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    box-shadow: 0 4px 4px rgb(0 0 0 / 2%), 0 2px 3px -2px rgba(0 0 0 / 5%);
    background-color: #fff;
}

.qa-007 summary {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    padding: 1em 2em 1em 3em;
    color: #333333;
    font-weight: 600;
    cursor: pointer;
}

.qa-007 summary::before,
.qa-007 p::before {
    position: absolute;
    left: 1em;
    font-weight: 600;
    font-size: 1.3em;
}

.qa-007 summary::before {
    color: #75bbff;
    content: "Q";
}

.qa-007 summary::after {
    transform: translateY(-25%) rotate(45deg);
    width: 7px;
    height: 7px;
    margin-left: 10px;
    border-bottom: 3px solid #333333b3;
    border-right: 3px solid #333333b3;
    content: '';
    transition: transform .5s;
}

.qa-007[open] summary::after {
    transform: rotate(225deg);
}

.qa-007 p {
    position: relative;
    transform: translateY(-10px);
    opacity: 0;
    margin: 0;
    padding: .3em 3em 1.5em;
    color: #333;
    transition: transform .5s, opacity .5s;
}

.qa-007[open] p {
    transform: none;
    opacity: 1;
}

.qa-007 p::before {
    color: #ff8d8d;
    line-height: 1.2;
    content: "A";

}

.qa {

  justify-content: center;
  align-items: center;
  width: 500px;
  padding: 100px;
  margin:auto;
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
.search-form-012 {
    display: flex;
    margin:80px 0 0 900px;
    justify-content: space-between;
    align-items: center;
    width: 250px; /* 任意の幅に調整してください */
    overflow: hidden;
    border-radius: 3px;
    background-color: white;
}

.search-form-012 input {
    height: 30px;
    padding: 5px 15px;
    border: none;
    box-sizing: border-box;
    background-color: white;
    font-size: 1em;
    outline: none;
}

.search-form-012 input::placeholder {
    color: #767d83;
}

.search-form-012 button {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 30px;
    border: none;
    background-color: transparent;
    cursor: pointer;
}

.search-form-012 button::after {
    width: 20px;
    height: 20px;
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2024%2024%22%3E%20%3Cpath%20d%3D%22M23.7%2020.8%2019%2016.1c-.2-.2-.5-.3-.8-.3h-.8c1.3-1.7%202-3.7%202-6C19.5%204.4%2015.1%200%209.7%200S0%204.4%200%209.7s4.4%209.7%209.7%209.7c2.3%200%204.3-.8%206-2v.8c0%20.3.1.6.3.8l4.7%204.7c.4.4%201.2.4%201.6%200l1.3-1.3c.5-.5.5-1.2.1-1.6zm-14-5.1c-3.3%200-6-2.7-6-6s2.7-6%206-6%206%202.7%206%206-2.6%206-6%206z%22%20fill%3D%22%23767d83%22%3E%3C%2Fpath%3E%20%3C%2Fsvg%3E');
    background-repeat: no-repeat;
    content: '';
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
                           
                            <li><a href="admin_login.php">管理者</a></li>
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
    <body>
        


<form action="#" class="search-form-012">
    <label>
        <input type="text" placeholder="キーワードを入力">
    </label>
    <button type="submit" aria-label="検索"></button>
</form>
    

    
<div class="qa">


<details class="qa-007">
    <summary>評価の年間スケジュールを教えて下さい。</summary>
    <p>テストテスト</p>
</details>
<details class="qa-007">
    <summary>目標設定を行うポイントを教えて下さい。</summary>
    <p>テストテスト</p>
</details>
<details class="qa-007">
    <summary>目標を定量化しにくい時はどうすればいいでしょうか。</summary>
    <p>テストテスト</p>
</details>
<details class="qa-007">
    <summary>自分の目標がよくわかりません。</summary>
    <p>テストテスト</p>
</details>


</div>

    </body>
    </html>


