var i=0;
var images=[];
var time =2000;
images[0]='images/M15_R50007_58a37a31-77cb-4e29-bfe5-03a0bcfe9662.webp';
images[1]='images/M15_R50002_a46fe260-19d1-4d01-98b6-6b5ccf561222.webp';
images[2]='images/M15_R50004_c77d92da-bfd8-4f03-97fe-c647b19d08f6.webp';
images[3]='images/M15_R50010_4a20be63-09c1-4412-b27c-d7cfe7364845.webp';
function changeImg()
{
    document.slide.src=images[i];
    if(i<images.length -1 )
    {
        i++;
    }
    else
    {
        i=0;

    }
    setTimeout("changeImg()",time);
}
   window.onload=changeImg;


   
    

