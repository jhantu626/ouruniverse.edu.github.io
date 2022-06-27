let key1=document.getElementById("key1");
let key2=document.getElementById("key2");
let key3=document.getElementById("key3");

let speech1=document.getElementById("speech1");
let speech2=document.getElementById("speech2");
let speech3=document.getElementById("speech3");
let direction=document.getElementById("direction");

key1.addEventListener("click",()=>{
    speech1.style.display="block";
    speech2.style.display="none";
    speech3.style.display="none";
    direction.innerHTML="Home > Blog > Communication for Success at Workplace";
});

key2.addEventListener("click",()=>{
    speech1.style.display="none";
    speech2.style.display="block";
    speech3.style.display="none";
    direction.innerHTML="Home > Blog > Opportunities & Challenges";
});

key3.addEventListener("click",()=>{
    speech1.style.display="none";
    speech2.style.display="none";
    speech3.style.display="block";
    direction.innerHTML="Home > Blog > Is gut instinct extinct?";
});


