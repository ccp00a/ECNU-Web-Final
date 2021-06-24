function nameCheck() {
    var str=$("#username").val();
    if (str.length !== 0) {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (xmlhttp.responseText == '1') {
                    return false;
                }else{
                    return true;
                }
            }
        };
        xmlhttp.open("POST", "/www/account/routers/checkName.php", false);
        xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=utf-8");
        xmlhttp.send("username="+str);
    }
}