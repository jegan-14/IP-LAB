function validateMail(){
    var mailid=document.getElementById("mailip");
    var result=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(mailid.value.match(result))
    {
    alert("Valid email address!");
    }
    else
    {
    alert("Invalid email address!");
    }
    }