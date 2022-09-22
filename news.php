<?php
require "database.php";

?>
<!DOCTYPE html>
<html>


<head>
    <title>News</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="icon/icon.svg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    

  
</head>

<body class="body2"  id="bod2">
    <div id="loading" style="display:flex;
align-items: center;background-color: #eeeeee;
justify-content: center;width: 100%;height: 100%;background-size: cover;background-repeat: no-repeat;background-position: center;position:fixed;top: 0;bottom:0;left: 0;right: 0;z-index:999999999;">

        <div style="display:block;background-image:url('icon/logo.gif');width:200px;height:200px;background-size: cover;background-repeat: no-repeat;background-position: center;border-radius: 50%;">

        </div>



    </div>
    <?php
    require "header.php";
    ?>

    <div class="main">
        <div class="main1" id="m1" style="background-image: url();text-align: center;height: fit-content;">
            <h1 style="font-size:60px;margin: 0;">Technical News</h1>
            <div class="s" id="s">
                <p id="pg" style="transition: 1s;font-size:0;"></p>
                <hr />
                <h3 style="font-size:30px;margin: 0;text-align:center;"></h3>
                <div style="display:flex;justify-content:start;margin-bottom: 30px;margin-top: 20px;">
                    <div hidden style="visibility: hidden;transition:1s;" id="dd">
                        <div hidden class="py" id="py" style="padding:10px;"></div>
                        <div hidden class="js" id="js" style="padding:10px;"></div>
                        <div hidden class="csh" id="csh" style="padding:10px;"></div><br />
                    </div>
                   
                    <div class='news' id="news">
                        

                    </div>
                </div>
            </div>


        </div>


    </div>







    <script src="script.js"></script>
    <script>
        window.addEventListener('load', function() {

            document.getElementById("loading").style.display = "none";
            header2();
            the2();
        });
    </script>
    <script>
        const xhr = new XMLHttpRequest();


        xhr.addEventListener("readystatechange", function() {
            if (this.readyState == 4) {

                var news = this.responseText;
                var r = new XMLHttpRequest();
                var f = new FormData();
                f.append("news", news);
                r.onreadystatechange = function() {
                    if (r.readyState == 4) {
                        document.getElementById("news").innerHTML = r.responseText;
                    }
                };
                r.open("POST", "create news.php", true);
                r.send(f);

            }
        });

        xhr.open("GET", "https://saurav.tech/NewsAPI/top-headlines/category/technology/us.json", true);


        xhr.send();
    </script>
   

</body>


</html>