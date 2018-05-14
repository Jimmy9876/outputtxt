<?php

if($_POST['submit']){
    //打开文件
    $fh = fopen('./a.txt',a);
    //写入内容
    if($fh){
        $length = fwrite($fh,$_POST['content']."\r\n");
        if($length){
//            echo '写入成功';
        }else{
//            echo '写入失败';
        }
        fclose($fh);
    }else{
//        echo '打开文件出错了';
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>textoutput</title>
    <style>
        @font-face {
            font-family: HYCCY;
            src: url('HYChaoCuYuanJ.ttf');
        }
        .div-height{border:1px solid #F00; width:1724px; height:954px; background: url(WechatIMG42.png)}
        .inputtxt{margin-top:375px; margin-left: 140px; width: 1280px; height: 120px; border-radius: 10px; font-size: 80px; color:rgb(0,255,0); font-family: HYCCY }
    </style>
</head>
<body>
<div class="div-height">
    <form name = 'frmTxt' action = '' method = 'post'>
        <input class="inputtxt" type="text" name="content">
        <input hidden type = 'submit' name = 'submit' value = '提交' />
    </form>
</div>
</body>
</html>
