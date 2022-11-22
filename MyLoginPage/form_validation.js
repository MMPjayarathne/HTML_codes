function validForm(){
    var username =  document.forms['signUP']['Uname'].value;
    var password = document.forms['signUP']['pw'].value;
    var Cpassword = document.forms['signUP']['cpw'].value;
    var validusername = false;
    var validpassword = false;
    if(username){
        if(username.length > 4){

            validusername = true;

        }
        else{
            alert("Username shoud be atleast 5 characters")
            return false;
        }

    }
    else{
        alert("Username is required")
        return false;
    }

    if(password){
        if(password.length> 7){
            validpassword = true;
        }
        else{

            alert('Password should be atleast 8 characters ');
            return false;

        }
    }
    else{
        alert("Password is required");
        return false;
    }

    if((password == Cpassword) && validusername && validpassword){
       alert('Successfully registered!')
    }
    else{
        alert('Passwords are not matched');
        return false;

    }
}

function validateUsername(){
    var username =  document.forms['signUP']['Uname'].value;

    if(username.length > 4){
        document.getElementById('unamelbl').style.color = "green";
    }
    else{
        document.getElementById('unamelbl').style.color = "red";
    }


}