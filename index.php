<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>کوتاه کننده لینک</title>
    <style>
        @font-face{
            font-family: Yekan Bakh;
            src: url("YekanBakhFaNum-Regular.ttf");
        }
        * {
            box-sizing: border-box;
            margin: unset;
            font-family: Yekan Bakh, sans-serif;
            padding: unset;
            user-select: none;
            direction: rtl;
        }

        #body {
            width: calc(100% - 40px);
            max-width: 400px;
            color: #434343;
            overflow: hidden;
            height: 400px;
            left: 50%;
            top: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 15px;
            border: #d0d0d0 solid 1px;
            box-shadow: #c2c2c2 0 2px 3px;
        }

        alert {
            width: 100%;
            padding: 10px;
            background-color: #e7ebf6;
            color: #505c9b;
            margin-top: -5px;
            border-radius: 5px;
            font-size: 15px;
            display: inline-block;
        }

        article {
            margin-bottom: 10px;
            font-size: 13px;
            color: #838383;
        }

        @media screen and (max-width: 420px) {
            #body {
                border-radius: unset;
                top: unset;
                width: 100%;
                transform: translate(-50%, 0);
                box-shadow: unset;
                border: unset;
            }
        }

        input {
            width: 100%;
            border-radius: 5px;
            border: #dedede solid 1px;
            outline: none;
            padding: 5px 5px 3px;
            margin-top: 5px;
            margin-bottom: 7px;
            transition: .1s;
        }

        input::placeholder {
            color: #b2b2b2;
        }

        input:focus {
            box-shadow: #eeeeee 0 0 5px;
            border: #b7b7b7 solid 1px;
        }

        a {
            color: #0026ee;
            text-decoration: none;
        }

        er {
            color: #ff929f;
            font-size: 10px;
            margin-top: 4px;
            display: inline-block;
            position: absolute;
            left: 20px;
        }
#d{
    display:none;
}
.YEKTANET.yn-article-display .yn-item_image{
border-radius:5px!important;
}
        button {
            width: 93px;
            margin-right: 5px;
            border-radius: 5px;
            outline: none;
            border: #0021e1 solid 1px;
            background-color: #0026ee;
            color: #ffffff;
            box-shadow: rgba(0, 37, 241, 0.1) 0 0 5px;
            padding: 3px;
            transition: .2s;
            padding-top: 4px;
        }

        button:active {
            background-color: #001fc0;
        }
        #yn-article-display-65967 .yn-header{
            border-color:transparent!important;
            display:none!important;
        }
    </style>
    <script>
        function sl(url) {
            if (url.length === 0) {
                document.getElementById("er_1").innerHTML = "لطفا لینک خود را وارد کنید";
            } else {
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function () {
                    if (this.responseText == "false_url") {
                        document.getElementById('er_1').innerHTML = "لینک شما صحیح نیست";
                    } else {
                        document.getElementById('er_1').innerHTML = "";
                        document.getElementById('result_input').value = this.responseText;
                        document.getElementById('result_input').select();
                        document.getElementById('result_input').setSelectionRange(0, 99999);
                        document.execCommand('copy');
                        window.open("http://"+this.responseText+"&test_preview=true","", "menubar=1,resizable=0,resizable=false,width=400,height=500, top=100, left=475");
                        navigator.clipboard.writeText(document.getElementById('result_input').value);
                    }
                }
                xmlhttp.open("GET", "sus.php?nsu=" + url);
                xmlhttp.send();
            }
        }
    </script>
</head>

<body onload="f()">
<div id="body">
<h3><?php if(isset($_GET['test_preview'])){echo"پیش نمایش";} ?> کوتاه کننده لینک</h3>
<?php
if (isset($_GET['nsu'])) {
    if (filter_var($_GET['nsu'], FILTER_VALIDATE_URL) || filter_var("https://" . $_GET['nsu'], FILTER_VALIDATE_URL)) {
        $short_characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890!@#$%^&*()_+}{|?|";
        $shorten_url = "";
        for ($i = 0; $i < 6; $i++) {
            $shorten_url .= $short_characters[rand(0, 62)];
        }
        file_put_contents("au.txt", file_get_contents("au.txt") . "||" . $_GET['nsu'] . "=" . $shorten_url);
        echo "<er style='position: unset;margin-top: -3px;display: block'>لینک کوتاه شده : localhost?osu=" . $shorten_url."</er>";
    } else {
        echo "<er style='position: unset;margin-top: -3px;display: block'>لینک شما صحیح نیست</er>";
    }
}
?>
<article>
    <?php
    if (isset($_GET['osu'])) {
        $h = explode("=" . $_GET['osu'], file_get_contents("au.txt"))[0];
?>
            ما شما را به صفحه ی مورد نظر ارسال می کنیم ...
            <br>
            لطفا کمی صبر کنید
            <script type="text/javascript">
                var fe = 6;
                function f(){
                    if (fe === 0){
                    document.getElementById('d').style.display="block";
                        document.getElementById('f').innerHTML = "در حال ارسال ...";
                        window.location="<?php if (strpos(explode("||", $h)[count(explode("||", $h)) - 1],"https://") !== false){echo explode("||", $h)[count(explode("||", $h)) - 1];}else{echo "https://".explode("||", $h)[count(explode("||", $h)) - 1];} ?>"
                    }else{
                    fe--;
                    document.getElementById('f').innerHTML=fe+" ثانیه دیگر ...";
                    }
                    setTimeout(f,1000);
                }
                (function(){
                    var now = new Date();
                    var head = document.getElementsByTagName('head')[0];
                    var script = document.createElement('script');
                    script.async = true;
                    var script_address = 'https://cdn.yektanet.com/js/khobchi.ir/native-khobchi.ir-22322.js';
                    script.src = script_address + '?v=' + now.getFullYear().toString() + '0' + now.getMonth() + '0' + now.getDate() + '0' + now.getHours();
                    head.appendChild(script);
                })();
            </script>
            <h1 id="f">5 ثانیه دیگر...</h1>
            <a  id="d" href="<?php if (strpos(explode("||", $h)[count(explode("||", $h)) - 1],"https://") !== false){echo explode("||", $h)[count(explode("||", $h)) - 1];}else{echo "https://".explode("||", $h)[count(explode("||", $h)) - 1];} ?>">باز نشد ؟ کلیک کنید !</a>
            تبلیغات :
            <div id="pos-article-display-65967" style="overflow:hidden;padding-top:6px"></div>
            <?php
    }else{

    ?>
    <script>var d = 1</script>
    <p onclick="if (d == 1){this.style.height='87px';document.getElementById('effect').style.opacity='0';d=0}else{this.style.height='60px';document.getElementById('effect').style.opacity='1';d=1}"
       style="height: 60px;transition: .3s;overflow: hidden;position: relative">
        }
        این سرویس وظیفه کوتاه سازی لینک های شما را به عهده دارد . همان طور که می دانید همه ی وبلاگ ها و شبکه های مجازی
        برای بالا رفتن آمار بازدید خود از لینک های کوتاه شده استفاده می کنند . این سرویس نیز برای همین موضوع به وجود
        آمده است .
    <div id="effect"
         style="transition: .3s;background-image: linear-gradient(transparent,white);pointer-events: none;width: 100%;height: 30px;position:relative;margin-top: -30px;"></div>
    </p>
    لینک خود را وارد کنید :
    <er id="er_1"></er>
    <input id="ui" placeholder="لطفا لینک اصلی خود را وارد کنید . . .">
    لینک کوتاه شده را اینجا ببینید :
    <input readonly id="result_input" placeholder="اول لینک اصلی خود را در بالا وارد کنید . . ."
           style="width: calc(100% - 100px)">
    <button onclick="sl(document.getElementById('ui').value)">کوتاه کن</button>
    با کوتاه کردن لینک خود شما با تمامی <a href="index.php">قوانین</a> موافقت کرده اید .
</article>
<alert>شما همچنین می توانید لینک های خود را از طریق این روش نیز کوتاه کنید : برای دیدن کلیک کنید .</alert>
<?php } ?>
</div>
<p style="color: #9e9e9e;font-size: 13px;text-align:center;width:100%;position: absolute;bottom: 10px;left: 50%;z-index: 2;transform: translateX(-50%)">تمامی حقوق برای حمیدرضا احمدی محفوظ است</p>
</body>
</html>