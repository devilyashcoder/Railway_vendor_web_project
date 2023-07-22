const wrapper=document.querySelector('.wrapper');
const loginlink=document.querySelector('.login-link');
const registerlink=document.querySelector('.register-link');
const btnPopUp=document.querySelector('.btnpop');
const iconClose=document.querySelector('.icon-close');

registerlink.addEventListener('click', ()=>{
    wrapper.classList.add('active');
});



loginlink.addEventListener('click', ()=>{
    wrapper.classList.remove('active');
});

btnPopUp.addEventListener('click', ()=>{
    wrapper.classList.add('active-popup');
});
iconClose.addEventListener('click', ()=>{
    wrapper.classList.remove('active-popup');
});

function xyz(){
    var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;
    var username=document.getElementById("username").value;
    if((email=="yashdwivedi2812@gmail.com" && password=="BLW007")  || (email=="vaibhavarya@gmail.com" && password=="BLW007" && username=="vaibhav")){
        window.location.assign("details.html");
        alert("Login Successful");
    }
    else{
        alert("Invalid Information");
        return ;
    }
}
