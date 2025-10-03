$(document).ready(function (){
    $("#loginForm").validate({
        rules: {
            username: {
                required: true
            },
            password: {
                required: true
            }
        },
        
        submitHandler: function(form){
                const username = $("input[name='username']").val();
                const password = $("input[name='password']").val();
                
            if (username === "admin" && password === "12345"){
                sessionStorage.setItem("loggedIn?" , "true"),
                sessionStorage.setItem("username" , username),

                window.location.href= "Landing Page/landingPage.html";
            }
            else{
                alert("Invalid username or password");
            }
        }
    });

    $("#signupForm").validate({
        rules: {
            username: {
                required: true,
                minlength: 3
            },
            
            email: {
                required: true,

            },

            password: {
                required: true,
                minlength: 8
            },

            confirmPass: {
                required: true,
                equalTo: "#password"
            }
        },
        
        submitHandler: function(form){
            alert("Signed Up successfully!")
        }
    });     

});
