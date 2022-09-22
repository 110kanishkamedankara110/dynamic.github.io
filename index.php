<!DOCTYPE html>
<html>

<head>
    <title>Dynamic</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="icon/icon.svg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />



</head>

<body class="body" id="bod">
    <div id="loading" style="display:flex;
align-items: center;background-color: #eeeeee;
justify-content: center;width: 100%;height: 100%;background-size: cover;background-repeat: no-repeat;background-position: center;position: fixed;top: 0;bottom:0;left: 0;right: 0;z-index:999999999;">

        <div style="display:block;background-image:url('icon/logo.gif');width:200px;height:200px;background-size: cover;background-repeat: no-repeat;background-position: center;border-radius: 50%;">

        </div>



    </div>
    <?php
    require "header.php";
    require "database.php";
    ?>

    <!-- <div class="inform" id="inf" onclick="hid()">

        <button class="tit" style="height:100px;position:fixed;bottom:10px;right:10px;" onclick="scrooo()">Scroll Down</button>
    </div> -->
    <div class="main">
        <div class="main1-light" id="m1" style="padding: 10px;box-sizing: border-box;height: fit-content;">

            <h1 style="font-size:70px;margin: 0;text-align: center;font-family: neon;" class="neonText">Welcome </h1>
            <h1 style="font-size:70px;margin: 0;text-align: center;font-family: neon;" class="neonText">To</h1>
            <h1 style="font-size:70px;margin: 0;text-align: center;font-family: neon;" class="neonText">Dynamic</h1>

            <hr />
            <list>
                <ul style="display: inline-block;text-align: center;font-size:20px">
                    <li style="display: inline-block;text-align:center;">Web Development | </li>
                    <li style="display: inline-block;text-align:center;">Software Development | </li>
                    <li style="display: inline-block;text-align:center;">System Development | </li>
                    <li style="display: inline-block;text-align:center;">IT Consulting</li>
                    <!-- <li style="display: inline-block;text-align:center;">Graphic Design </li> -->


                </ul>
            </list>
            <hr />
            <p style="text-align:center;font-size: 30px;font-weight: bold;">Innovate &#8226 Inspire &#8226 Connect &#8226 Invest</p>
            <hr />
            <a href=" https://www.linkedin.com/company/dynamicbiz/" style="text-decoration:none;" target="_blank">
                <div class="link-light" id="link" style="padding:10px;"></div>
            </a>
            <a href=" https://twitter.com/dynamicbiz4" style="text-decoration:none;" target="_blank">
                <div class="tw-light" id="tw" style="padding:10px;"></div>
            </a>
            <a href="https://www.instagram.com/dynamic.biz/" style="text-decoration:none;" target="_blank">
                <div class="tw-light" id="tw" style="padding:10px;background-image: url('icon/ig-light.svg')"></div>
            </a>
            <a href="https://www.facebook.com/dynamicbiz4" style="text-decoration:none;" target="_blank">
                <div class="ig-light" id="ig" style="padding:10px;background-image: url('icon/fb.svg')"></div>
            </a><br />
            <button id="b1" onclick="window.location='mailto:dynamicbiz4@gmail.com'" class="b1-light">Contact</button>

        </div>
        <div class="main2" id="m2" style="margin-top:10px;padding:20px;box-sizing: border-box;color: #eeeeee;overflow-y:auto;">
            <h4 style="font-size:60px;margin: 0;text-align: center;color:black">Dynamic Updates</h4>

            <?php
            $v = (Database::s("SELECT * FROM `news`"));
            $v->execute();
            $res = $v->get_result();
            $nr = $res->num_rows;

            ?>
            <div class="<?php if ($nr > 4) {
                            echo 'news1';
                        } else {
                            echo 'news';
                        } ?>" >
                <?php
                for ($i = 0; $i < $nr; $i++) {
                    $row = $res->fetch_assoc();
                ?>
                    <div class="nc" style="background-image: url('<?php echo $row['pic'] ?>');">
                        <div class="bann">
                            <h3 style="color:#eeeeee;"><?php echo $row["title"] ?></h3><br /><br />
                            <p style="color:#eeeeee;"><?php echo $row["description"] ?></p><br /><br />
                        </div>
                    </div>

                <?php
                }

                ?>

            </div>
        </div>

    </div>







    <script src="script.js"></script>
    <script>
        window.addEventListener('load', function() {

            document.getElementById("loading").style.display = "none";
            header();
        });
        window.addEventListener('scroll', function() {
            scro();
            scro2();
        });
    </script>
</body>


</html>