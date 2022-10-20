// JavaScript Document
/*var oNav=document.getElementById("nav");
var oLinkNav=document.getElementById("linkNav");
var oClose=document.getElementById("close");*/
var oBlockImg1=document.getElementById("blockImg_1");
var oBlockImg2=document.getElementById("blockImg_2");
var oImg1=document.getElementById("img_1");
var oImg2=document.getElementById("img_2");

/*НАВИГАЦИЯ*/

/*функция открытия навигации*/
/*function openNav(){
	oNav.style.display="inline"
	oLinkNav.style.visibility="hidden";
	};*/
	
/*функция закрытия навигации*/
/*function closeNav(){
	oNav.style.display="none"
	oLinkNav.style.visibility="visible";
	};*/
	
	
	/*привяка события Click к функции openNav*/
	/*oLinkNav.addEventListener("click",openNav,false);*/
	
	/*привяка события Click к функции closeNavk*/
	<!--oClose.addEventListener("click",closeNav,false);-->
	
	
/*МАСШТАБ РИСУНКОВ НА МОБИЛЬНОЙ ВЕРСИИ СО СХЕМОЙ И РАЗМЕРАМИ БАГАЖНОГО ОТДЕЛЕНИЯ*/	
function bigImg2(){
	if (oImg2.style.width=="120%")
		oImg2.style.width="50%";
	else
		oImg2.style.width="120%";
		oBlockImg2.style.overflow="auto";
	}
	
oImg2.addEventListener("dblclick", bigImg2, false);
	
	
function bigImg1(){
	if (oImg1.style.width=="220%")
		oImg1.style.width="100%";
	else
		oImg1.style.width="220%";
		oBlockImg1.style.overflow="auto";
	}
	
oImg1.addEventListener("dblclick", bigImg1, false);



