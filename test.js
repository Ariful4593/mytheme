//EXAMINE THE DOCUMENT OBJECT//
//console.dir(document);
console.log(document.domain);
console.log(document.URL);
console.log(document.title);
document.title = "Ariful Islam";
console.log(document.doctype);
console.log(document.head);
console.log(document.body);
console.log(document.all);
console.log(document.all[10]);
//document.all[10].textContent = "This is My First DOM";
console.log(document.forms[0]);
console.log(document.links);

console.log(document.getElementById("header-title"))
var headerTitle = document.getElementById("header-title");

console.log(document.getElementById("title"));
var title = document.getElementById("title");
title.textContent = "Please add item";

/*
var itemss = document.getElementsByClassName("list-group-item");
console.log(itemss);
array = ["Arif","Selim","Taher","Mamun"];



for(i=0;i<itemss.length;i++)
{
	console.log(itemss[i]);
	itemss[i].textContent = array[i];
}
*/
/*
color = ["#1d1c1b","#f4f4ff","#efd2d2","#07321e"];
backcolor = ["green","red","blue","orange"];
for(i=0;i<color.length;i++)
{
	itemss[i].style.color = color[i];
	itemss[i].style.backgroundColor = backcolor[i];
}
*/

/*
var parents = document.getElementById("items");
console.log(parents.parentNode);

parents.parentNode.style.backgroundColor = "#f4f4f4";

var child = document.getElementById("items");
col = ["red","green","orange","blue"];
textCol = ["white","black","white","red"];
for(i=0;i<child.children.length;i++)
{
	child.children[i].style.color = textCol[i];
	child.children[i].style.backgroundColor = col[i];
}

bgcol = ["#d75858","#914646","#9b8686","#5f5f5f	"]

parent = document.createElement("div");
console.log(parent);
parenetChild = document.createElement("h1");
parenetChild.id = "first";
parenetChild.style.backgroundColor = "red";
parent.appendChild(parenetChild);

parenChContent = document.createTextNode("Ariful Islam");
parenetChild.appendChild(parenChContent);


//Event
var button = document.getElementById("button").addEventListener("click", buttonClick);
function buttonClick(e) {
	document.getElementById("header-title").textContent = "Changed";
	document.querySelector("#main").style.backgroundColor = "rgb(222, 194, 247)";
	for(i=0;i<child.children.length;i++)
	{
		child.children[i].style.color = textCol[i];
		child.children[i].style.backgroundColor = bgcol[i];
	}
	// console.log(e.clientX);
	// console.log(e.clientY);
	//console.log(e.offsetX);
	//console.log(e.offsetY);
}


*/
/*
var box = document.getElementById("box");

box.addEventListener("mousemove",runEvent);

function runEvent(e){
	console.log("Event Type: "+e.type);
	document.body.style.backgroundColor = "rgb("+e.offsetX+","+e.offsetY+",80)";
}*/
/*
var inputItems = document.querySelector('input[type="text"]');
var form = document.querySelector("form");

*/

/*inputItems.addEventListener('keydown',runEvent);

function runEvent(e)
{
	console.log('Event Type: '+e.type);
	console.log(e.target.value);
	document.getElementById("Output").innerHTML = '<h3>'+e.target.value+'</h3'
}*/
/*
var select = document.querySelector("select");
select.addEventListener('change', runEvent);
function runEvent(e)
{
	console.log('Event Type: '+e.type);
	console.log(e.target.value);
}*/

var form = document.getElementById("addForm");
var itemList = document.getElementById("items");
var filter = document.getElementById("filter");


form.addEventListener('submit', addItem);
itemList.addEventListener('click', removeItem);
filter.addEventListener('keyup', filterItems);
function addItem(e){
	e.preventDefault();

	var newItem = document.getElementById("item").value;

	var li = document.createElement("li");
	li.className = "list-group-item";

	li.appendChild(document.createTextNode(newItem));

	var deleteBtn = document.createElement("button");

	deleteBtn.className = 'btn btn-danger btn-sm float-right delete';
	deleteBtn.appendChild(document.createTextNode('X'));

	li.appendChild(deleteBtn);

	itemList.appendChild(li);
}

function removeItem(e){
	if(e.target.classList.contains('delete')){
		if(confirm('Are you Sure?'))
		{
			var li = e.target.parentElement;
			itemList.removeChild(li);
		}
	}
}

function filterItems(e)
{
	var text = e.target.value.toLowerCase();
	var items = itemList.getElementsByTagName('li');
	Array.from(items).forEach(function(item){
		var itemName = item.firstChild.textContent;
		if(itemName.toLowerCase().indexOf(text)!=-1){
			item.style.display = 'block';
		}
		else{
			item.style.display = 'none';
		}

	})
}

