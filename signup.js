function validation(){
    const user=document.getElementById("username").value.trim();
    const userer=document.getElementById("userer");

    const email=document.getElementById("email").value.trim();
    const emailer=document.getElementById("emailer");

   /* const tel=document.getElementById("tel").value.trim();
    const teler=document.getElementById("teler");*/

    const pwd=document.getElementById("password").value.trim();
    const pwder=document.getElementById("passswoder");

    const cfpwd=document.getElementById("cnfpwd").value.trim();
    const cfpwder=document.getElementById("cnfpwder");

    //username
    if(user==""){
        document.getElementById("userer").innerHTML="*username can't be blank";
        return false;
    }
     if(user.length<=2){
        userer.innerText="too short";
        return false;
    }
    else{
        userer.innerText="";
    }

    //email
    const t=/^[a-zA-Z0-9*+-^!]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if(email==""){
        emailer.innerText="*email can't be blank";
        return false;
    }
    if(!(t.test(email))){
        emailer.innerText="*invalid email";
        return false;
    }
    else{
        emailer.innerText="";
    }

    //telphone number
    /*const p=/^[1-9][0-9]{9}/;
    if(tel==""){
        teler.innerText="*can't be blank";
        return false;
    }
     if(!(p.test(tel))){
        teler.innerText="*invalid number";
        return false;
    }
    else{
        teler.innerText="";
    }*/

    //password
    const d=/[a-zA-Z0-9!@#$%^&*-+=]/;
    if(pwd==""){
        pwder.innerText="* can't be empty";
        return false;
    }
    if(!(d.test(pwd))){
        pwder.innerText="* include characters";
        return false;
    }
    else{
        pwder.innerText="";
    }

    //confirm password
    if(pwd!=cfpwd){
        cfpwder.innerText="* incorrect password";
        return false;
    }
    else{
        cfpwder.innerText="";
    }
}

