function login() {
 
    var username = document.getElementById("username");
    var pass = document.getElementById("password");
 
    if (username.value == "") {
 
        alert("please enter username!");
 
    } else if (pass.value  == "") {
 
        alert("please enter password!");
 
    } else if(username.value == "admin" && pass.value == "123456"){
 
        window.location.href="welcome.html";
 
    } else {
 
        alert("please enter correct username and password!")
 
    }
}