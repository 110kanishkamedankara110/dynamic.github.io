<?php

$newsjs = $_POST["news"];
$articals = (json_decode($newsjs))->articles;

foreach ($articals as $i) {
    
?>
    <div class="nc" style="background-image: url('<?php echo $i->urlToImage ?>');" onclick="window.open('<?php echo $i->url ?>', '_blank')">
        <div class="bann">
            <h3 style="color:#eeeeee;"><?php echo $i->title ?></h3><br />
            <div class="text">
                <p style="color:#eeeeee;"><?php echo $i->description ?></p><br /><br />
            </div>
        </div>
    </div>
<?php
}
?>