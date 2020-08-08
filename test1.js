console.log(document.doctype);
console.log(document.head);
console.log(document.body);
console.log(document.all);

ball = document.getElementsByClassName("ball");
left = ["20%","40%","60%","80%"];
ballColor = ["red","green","blue","gray"];
for(i=0;i<ballColor.length;i++)
{

	ball[i].style.backgroundColor = ballColor[i];
	ball[i].style.left = left[i];
}

