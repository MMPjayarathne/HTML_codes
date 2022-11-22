function setErrorMsg(message){
  document.getElementById('errorMsg').innerHTML=message;
}

function validateForm(){
    var username = document.forms['loginForm']['username'].value;
    var usernameValid = false;
    var passwordValid = false;
    if(username){
        if(username.length > 3){
            usernameValid = true;
        }
        else{
            //alert('Username should be at least 4 character long.');
            setErrorMsg("Username should be at least 4 character long.");
            return false;
        }
    }
    else{
        //alert('Please input a username.');
        setErrorMsg("Please input a username.");
        return false;
    }

    var password = document.forms['loginForm']['password'].value;
    if(password){
        if(password.length > 7){
            passwordValid = true;
        }
        else{
            setErrorMsg("Password should be at least 8  character long.");
            return false;
        }

    }
    else{
        setErrorMsg("Please input a password");
        return false;
    }
    if(usernameValid && passwordValid){
        submitForm();
    }
}

function submitForm(){
    alert("Login Success")

}
 function validateUsername(){
    var username = document.forms['loginForm']['username'].value;
    if(username && username.length>4){
        document.getElementById('Uname').style.color = 'green';
        return true;
    }
    else{
        return false;
    }
 }
