<input type="password" id="pw"/>Password
<button onclick="login();">Login</button>
<script>
    function login(){
        var pw=document.getElementById("pw").value;
        var r=new XMLHttpRequest();
        var f=new FormData();
        f.append("pw",pw);
        r.onreadystatechange=function(){
            if(r.readyState==4){
                if(r.response=="sucess"){
                    window.location="addnews.php"
                }else{
                    window.location.reload();
                }
            }
        };
        r.open("POST","process.php",true);
        r.send(f);
    }
</script>