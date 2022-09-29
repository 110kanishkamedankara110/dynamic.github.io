<?php
require "database.php";

?>
<!DOCTYPE html>
<html>


<head>
    <title>Podcast</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="icon/icon.svg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />



</head>

<body class="body2" onload="" id="bod2">
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
        <div class="main1" id="m1" style="text-align: center;height: fit-content;">

            <h1 style="font-size:60px;margin: 0;">Podcast</h1>

            <div class="s" id="s">
                <p id="pg" style="transition: 1s;font-size:0;">We can't survive without technology in our daily life. We can more effectively and efficiently meet our
                    demands thanks to technology. Sri Lanka should be permitted to progress together with the rest of the
                    world as a developing nation. The Dynamic Podcast was thus introduced to share our opinions on
                    technology as a result. The initial podcasters were businessmen Isuru Chandimal and Isira Abeyrathena,
                    and as of right now, our team of technological experts includes five people. Within two months, we may
                    have reached 400+ listeners collectively. Our main goal is to contribute our expertise and ideas about
                    technology to Sri Lanka's ongoing digitalization effort.<br /><br />
                <h3 style="text-align:center;">Listen us on</h3>
                <p style="text-align:left;font-size:15px;">
                    <a href="" style="text-decoration:none;" target="_blank">
                        <div class="tw-light" style="padding:10px;background-image: url('');"></div>
                    </a>
                    <a href="https://open.spotify.com/show/46W6Eit9LF4cyirHhVuPdi" style="text-decoration:none;" target="_blank">
                        <div class="tw-light" style="padding:10px;background-image: url('icon/spotify.svg');"></div>
                    </a>
                    <a href="https://podcasts.apple.com/us/podcast/dynamic/id1632847370" style="text-decoration:none;" target="_blank">
                        <div class="tw-light" style="padding:10px;background-image: url('icon/applesvg.svg');"></div>
                    </a>
                    <a href="https://podcasts.google.com/feed/aHR0cHM6Ly9hbmNob3IuZm0vcy84N2E2MTMwMC9wb2RjYXN0L3Jzcw" style="text-decoration:none;" target="_blank">
                        <div class="ig-light" style="padding:10px;background-image: url('icon/google.svg');"></div>
                    </a>
                    <a href="https://anchor.fm/dynamic1" style="text-decoration:none;" target="_blank">
                        <div class="ig-light" style="padding:10px;background-image: url('icon/anchor.svg');"></div>
                    </a>
                    <a href="" style="text-decoration:none;" target="_blank">
                        <div class="tw-light" style="padding:10px;background-image: url('');"></div>
                    </a>
                </p>
                </p><br />
                <h3 style="text-align:center;">Follow us on</h3>
                <p style="text-align:left;font-size:15px;">


                    <a href="" style="text-decoration:none;" target="_blank">
                        <div class="tw-light" style="padding:10px;background-image: url('');"></div>
                    </a>
                    <a href="https://www.instagram.com/dynamic.pod/" style="text-decoration:none;" target="_blank">
                        <div class="tw-light" style="padding:10px;background-image: url('icon/ig-light.svg')"></div>
                    </a>
                    <a href="https://www.facebook.com/dynamicpod1" style="text-decoration:none;" target="_blank">
                        <div class="ig-light" style="padding:10px;background-image: url('icon/fb.svg')"></div>
                    </a>
                    <a href="" style="text-decoration:none;" target="_blank">
                        <div class="tw-light" style="padding:10px;background-image: url('');"></div>
                    </a><br />
                    <button id="b1" onclick="window.location='mailto:dynamicpod00@gmail.com'" class="b1-light">Contact</button>

                </p>
                </p><br />

                <div id="ad" class="ad" style="background-image:url('icon/podlogo.jpg');border-radius:50%;width:200px;height:200px;display: inline-block;align-items: center;align-content: center;justify-content: center;justify-items: center;">

                </div>
                <div style="background-color: transparent;width: 100%;height:100%;overflow-y:hidden;transform: rotate(10deg);" class="gif">

                    <div class="gif" style="width:100%;height: fit-content;background-image: url('');padding: 10px;box-sizing: border-box;">
                        <!-- <h3>Our Web Podcast Player Will Be </h3>
                        <h3 style="font-family:pro;font-size: 50px;text-align: center;" id="oops"></h3> -->
                        <h3 style="margin: 0;text-align: center;font-family: neon;" class="neonText">Our Web Podcast Player Will Be</h3>
                        <h3 style="font-size: 50px;margin: 0;text-align: center;font-family: neon;" class="neonText">Comming Soon</h3>


                    </div>
                </div>
                <hr />




            </div>


        </div>


    </div>







    <script src="script.js"></script>
    <script>
        // letters();

        // function letters() {
        //     setInterval(letters2, 500);
        // }
        // c = 0;

        // function letters2() {
        //     var text = "Comming Soon";
        //     if (c <= text.length) {
        //         document.getElementById("oops").innerHTML = text.substring(0, c);

        //         if (c == text.length) {
        //             c = 1;
        //         } else {
        //             c = c + 1;
        //         }
        //     }






        // }
    </script>
    <script>
        window.addEventListener('load', function() {

            document.getElementById("loading").style.display = "none";
            header2();
        });
    </script>
</body>


</html>