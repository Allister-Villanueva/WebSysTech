$(document).ready(function(){
    if (sessionStorage.getItem("loggedIn?") !== "true"){
        window.location.href = "../index.html";
    }
    else{
        let user = sessionStorage.getItem("username");
        alert ("Welcome " + user + "!");
    }
    
    $(".nav-link[href='../index.html']").on("click", function(def){
        def.preventDefault();
        sessionStorage.clear();
        window.location.href = "../index.html"; 
    });
});