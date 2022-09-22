<?php
session_start();
require "database.php";
if (!isset($_SESSION["user"])) {
?>
    <script>
        window.location = "admin.php";
    </script>
<?php
}

?>
Title : <input id="tit" type="text" />
Description : <textarea id="des"></textarea>
pic : <input type="file" id="pic" accept="image/*" />
<button onclick="addNews()">Add</button>
<table>
    <tr>
        <td>Title</td>
        <td>description</td>
        <td>Pic</td>
        <td>Delete</td>
    </tr>
    <?php
    $v = (Database::s("SELECT * FROM `news`"));
    $v->execute();
    $res = $v->get_result();
    $nr = $res->num_rows;
    for ($i = 0; $i < $nr; $i++) {
        $row = $res->fetch_assoc();
    ?>
        <tr>
            <td><?php echo $row["title"] ?></td>
            <td><?php echo $row["description"] ?></td>
            <td><?php echo $row["pic"] ?></td>
            <td><button onclick="del('<?php echo $row['id'] ?>','<?php echo $row['pic'] ?>')"> Delete</button></td>
        </tr>

    <?php

    }

    ?>
</table>
<script>
    function addNews() {
        var tit = document.getElementById("tit").value;
        var desc = document.getElementById("des").value;

        var pic = document.getElementById("pic");


        var r = new XMLHttpRequest();
        var f = new FormData();
        f.append("tit", tit);
        f.append("desc", desc);
        f.append("pic", pic.files[0]);

        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                alert(r.responseText);
                window.location.reload();

            }
        };
        r.open("POST", "an.php", true);
        r.send(f);
    }

    function del(id, pic) {

        var r = new XMLHttpRequest();
        var f = new FormData();
        f.append("id", id);
        f.append("pic", pic);

        r.onreadystatechange = function() {
            if (r.readyState == 4) {

                window.location.reload();

            }
        };
        r.open("POST", "del.php", true);
        r.send(f);
    }
</script>