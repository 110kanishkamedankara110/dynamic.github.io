<?php
require "database.php";

?>
<!DOCTYPE html>
<html>


<head>
    <title>About</title>
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
        <div class="main1" id="m1" style="text-align: center;height: fit-content;">

            <h1 style="font-size:60px;margin: 0;color: black;">About Us</h1>

            <div class="s" id="s">

                <p id="pg" style="transition: 1s;font-size:0;color:black">Dynamic Biz is an IT solution company founded by entrepreneur Isuru Chandimal Peiris, inspired by the
                    desire to digitalize Sri Lanka. It started in 2022 with six of his friends. We innovate, connect, inspire, and
                    invest our knowledge to give a better dynamic experience to our clients, and we are always working on
                    that vision. Our team is always striving to provide the most efficient service to our clients. We are
                    ambitious, courageous, inspired, and knowledgeable team to provide our maximum effort to our clients.
                    Our aim is to provide better service, inspire, and also give the best experience for our beloved clients.</p><br />
                    <button class="proj" onclick="window.location='showProjects.php'"><h1>Our Projects</h1><p>Click to see our projects</p></button>
                <div id="ad" class="ad">

                </div>
                <hr />

                <h3 style="font-size:30px;margin: 0;text-align:center;color:black">Founders</h3>
                <div style="display:flex;justify-content:start;margin-bottom: 30px;margin-top: 20px;">
                    <div hidden style="visibility: hidden;transition:1s;" id="dd">
                        <div hidden class="py" id="py" style="padding:10px;"></div>
                        <div hidden class="js" id="js" style="padding:10px;"></div>
                        <div hidden class="csh" id="csh" style="padding:10px;"></div><br />
                    </div>

                    <div class="news">

                        <div class="nc" style="background-image: url('');">
                            <div class="bann">
                                <h3 style="color:#eeeeee;margin-bottom: 0px;">Isuru</h3><br /><br />
                                <!-- <p style="color:#eeeeee;"><?php echo $row["description"] ?></p><br /><br /> -->
                            </div>
                        </div>
                        <div class="nc" style="background-image: url('');">
                            <div class="bann">
                                <h3 style="color:#eeeeee;">Kanishka</h3><br /><br />
                                <!-- <p style="color:#eeeeee;"><?php echo $row["description"] ?></p><br /><br /> -->
                            </div>
                        </div>
                        <div class="nc" style="background-image: url('');">
                            <div class="bann">
                                <h3 style="color:#eeeeee;">Ravindu</h3><br /><br />
                                <!-- <p style="color:#eeeeee;"><?php echo $row["description"] ?></p><br /><br /> -->
                            </div>
                        </div>
                        <div class="nc" style="background-image: url('');">
                            <div class="bann">
                                <h3 style="color:#eeeeee;">Isira</h3><br /><br />
                                <!-- <p style="color:#eeeeee;"><?php echo $row["description"] ?></p><br /><br /> -->
                            </div>
                        </div>
                        <div class="nc" style="background-image: url('');">
                            <div class="bann">
                                <h3 style="color:#eeeeee;">Kavinda</h3><br /><br />
                                <!-- <p style="color:#eeeeee;"><?php echo $row["description"] ?></p><br /><br /> -->
                            </div>
                        </div>
                        <div class="nc" style="background-image: url('');">
                            <div class="bann">
                                <h3 style="color:#eeeeee;">Kavindu</h3><br /><br />
                                <!-- <p style="color:#eeeeee;"><?php echo $row["description"] ?></p><br /><br /> -->
                            </div>
                        </div>



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
</body>


</html>