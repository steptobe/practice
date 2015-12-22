//1)动态的属性
/*var person = new Object();
person.name = "Nicholas";
alert(person.name); // "Nicholas";*/

//2)复制变量值
/*var obj1 = new Object();
var obj2 = obj1;
obj1.name = "Nicholas";
alert(obj2.name); // "Nicholas"*/

//3)传递参数
/*function setName(obj) {
	obj.name = "Nicholas";
	//add two code
	obj = new Object;
	obj.name = "Grey";
}

var person = new Object();
setName(person);
alert(person.name);//"Nicholas"*/

//检测类型
/*var s = "Nicholas";
var b = true;
var i = 22;
var u;
var n = null;
var o = new Object();

alert(typeof s);
alert(typeof b);
alert(typeof i);
alert(typeof u);
alert(typeof n);
alert(typeof o);
alert(o instanceof Object);*///检测对象

//执行环境及作用域
 /*var color = "blue";

 function changeColor() {
 	if (color === "blue") {
 		color = "red";
 	} else {
 		color = "blue";
 	}
 }

 changeColor();
 alert("Color is now " + color);

var color = "blue";

function changeColor() {
	var anotherColor = "red";

	function swapColors() {
		var tempColor = anotherColor;
		anotherColor = color ;
		color = tempColor;
		//先在自己的变量对象中
	}
	swapColors();
}
changeColor();
alert("Color is now " + color);*/

//延长作用域链

/*function buildUrl() {
	var qs = "?debug=true";

	with(location) {
		var url = href + qs;//引用的是location.href
	}

	return alert(url);
}
buildUrl();

function add(num1, num2) {
	sum = num1 + num2;//没有var声明，sum成为全局变量
	return sum;
}

var result = add(10, 20);
alert(result);
alert(sum);*/

//垃圾收集





