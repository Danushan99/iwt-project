function checkPasswords()
{
    if(document.getElementById("password").value!=document.getElementById("retype_password").value)
    {
        alert("WARNING!!! Passwords are Mismatched.");
        return false;
    }
    else
    { 
        return true;
    }
}

function enableButton()
{
    if(document.getElementById("policy").checked)
    {
        document.getElementById("signup").disabled=false;
    }
    else
    {
        document.getElementById("signup").disabled=true;
    }
}