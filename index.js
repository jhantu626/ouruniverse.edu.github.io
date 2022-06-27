var scrollingimg=document.getElementById("slideImg");

var images=new Array(
    "img1.jpg",
    "img2.jpg",
    "img3.jpg",
    "img4.jpg"
);

var len =images.length;
var i=0;

function slider()
{
    if(i==len)
        i=0;
    scrollingimg.src="Image/Home_Page/"+images[i];
    i++;
    setTimeout('slider()',9000);
}

