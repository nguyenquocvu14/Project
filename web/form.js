let icon = document.querySelector(".icon");
let shows = document.querySelector(".show");
let close = document.querySelector(".fa-xmark");
icon.onclick = function(){
shows.style.display = "block";
}
close.onclick = function(){
shows.style.display = "none";
}
//    ----------------------------------------------------------- 
 let form = document.querySelector(".form");
 let username = document.getElementById("username");
 let email = document.getElementById("email");
 let password = document.getElementById("password");
 let password1 = document.getElementById("password1");
 let small = document.querySelector("small")
 let checkbox = document.getElementById("mycheck")
 
 

 
//   console.log(form);
form.addEventListener("submit",function(e){
e.preventDefault();
checkinput();
});
// ----------------------------------------------------------- 
function checkinput(){
let usernamevalue = username.value;
let emailvalue = email.value;
let passwordvalue = password.value;
let password1value = password1.value;
let checkedvalue = checkbox.checked;

if(usernamevalue == ""){
iserror(username,"Tên Người Dùng Không Được Để Trống")
}
else{
    isSusses(username);
}
if(emailvalue == ""){
    iserror(email,"Email Người Dùng Không Được Để Trống")
    }
    else{
        isSusses(email);
    }
    if(passwordvalue == ""){
        iserror(password,"Mật Khẩu Người Dùng Không Được Để Trống")
        }
        else{
            isSusses(password);
        }
            if(password1value == ""){
                iserror(password1,"Mật Khẩu Người Dùng Không Được Để Trống")
                }
                else if(password1value != passwordvalue){
                    iserror(password1,"Vui Lòng Xác Nhận Lại Mật Khẩu")
                }
                else{
                    isSusses(password1);
                }
                if( checkedvalue == false){
                    alert("Vui lòng đồng ý điều khoản");
                }
                else{
                    //alert("Bạn Đã Đăng Ký Thành C");
                } 
}
function isSusses(input){
    let formcontroll = input.parentElement;
    formcontroll.classList.add("susses");
    formcontroll.classList.remove("error");
    let small = formcontroll.querySelector("small")
    small.style.visibility = "hidden";
}
function iserror(input,text){
    let formcontroll = input.parentElement;
    formcontroll.classList.add("error");
    formcontroll.classList.remove("susses");
    let small = formcontroll.querySelector("small")
    small.innerText = text;
    small.style.visibility ="visible";
}
// ----------------------------------------------------
//let passwordvalue5 = which;

password.onkeydown = function(){

    if(eye.style.display = "none"){
        eye.style.display = "block";
    }
    else if( x == 08){
        eye.style.display = "none";
    }
}
// ----------------------------------------------

// let eye = document.querySelector(".fa-eye")
let x = document.getElementsByClassName("check")
let eye = document.querySelector(".fa-eye-slash")
//console.log(eye);

 
    eye.onclick = function(){
    if(eye.classList.contains("fa-eye-slash")){
        //y.type = "text";
    
       eye.classList.remove("fa-eye-slash");
       eye.classList.add("fa-eye");
 
    }
    else{
       //y.type = "password";
       eye.classList.add("fa-eye-slash");
       eye.classList.remove("fa-eye");
}
// ----------------------------------------------
for(let i of x )

    if(i.type =="password")
    {
        i.type = "text";
    }
    else{
        i.type = "password";
    }

    }
  