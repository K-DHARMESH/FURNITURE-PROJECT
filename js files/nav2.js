let a = document.querySelector(".navbar2");
let b = document.querySelector(".d");
let c = document.querySelector(".K");


b.addEventListener("click",function(){
    a.style.display = "block";
   
})
b.addEventListener("click",function(){
    b.style.display = "none";
    c.style.display = "block";
})
c.addEventListener("click",function(){
    a.style.display = "none";
    c.style.display = "none";
    b.style.display = "block";
})