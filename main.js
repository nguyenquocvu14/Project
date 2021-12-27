let t = 0;
let slideshow = document.getElementsByClassName("header__img")[0]
let images = slideshow.children
console.log(images)
for (let i = 0 ; i < images.length ; ++i){
    images[i].style.display = "none";
}
showimg(t);
setInterval(nextimg,2000)
function showimg(anh){
    images[anh].style.display = "block";
}
function hideimg(anh){
    images[anh].style.display = "none";
}
function nextimg(){
    hideimg(t)
    t++;
    if(t >= images.length)
    t=0;
    showimg(t);
}