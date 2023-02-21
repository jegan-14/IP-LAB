function validateMail(){
    var mailid=document.getElementById("mail");
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
function validateName(){
    var name=document.getElementById("name");
    var result= /^[A-Za-z]+$/;
    if(name.value.match(result))
    {
    alert("Valid Name!");
    }
    else
    {
    alert("Invalid Name!");
    }
    }
function validateAddress(){
        var address=document.getElementById("address");
        var result= /^[A-Za-z]+$/;
        if(address.value.match(result))
        {
        alert("Valid Address!");
        }
        else
        {
        alert("Invalid Address!");
        }
}
function validatePassword(){
    var password=document.getElementById("password");
    var result=/^[a-zA-Z0-9!@#$%^&*]{7,12}$/;
    if(password.value.match(result))
    {
    alert("Strong password!");
    }
    else
    {
    alert("Weak password!");
    }
    }
function validateUserId(){
    var userid=document.getElementById("userid").value;
    if(userid.length>4 && userid.length<8){
        alert("Valid user ID!");
    }
    else{
        alert("Invalid user ID!");
    }
}

function validateZipcode(){
    var zipcode=document.getElementById("zipcode").value;
    var result= /^[A-Za-z]+$/;
    if(zipcode.match(result))
    {
    alert("Valid Zipcode!");
    }
    else
    {
    alert("Invalid Zipcode!");
    }
}
function validateGender(){
    var male=document.getElementById("male").checked;
    var female=document.getElementById("female").checked;
    if(male==false && female==false){
        alert("Please select a gender!");
    }
    else{
        alert("Valid Gender!");
    }  
}