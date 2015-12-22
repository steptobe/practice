//第5章 引用类型
//Object 类型
/*var person = new Object();
person.name = "Nicholas";
person.age = 29;
var propertyName = "ll";

  // 1)对象字面量表示法
var person = {
	"name": "licholas",//注意标点符号
	age : 29
	
};
alert(person[propertyName]);

function displayInfo(args) {
	var output = "";
	if (typeof args.name == "string"){
		output += "Name: " + args.name + "\n";
	}
	alert(output);
}
displayInfo({
	name: "	Nicholas",
	age: 29
});

displayInfo({
	name : " grey"
});
*/

//Array 类型
/*var colors = new Array(20);
var apples = new Array("red", "blue", "green");
alert(apples);//3
 // 数组字面量法
var papers = ["red", "blue", "green"];
alert(papers[0]);
papers[1] = "yellow";
alert(papers[1]);//"yellow"
papers[papers.length] = "black";
papers[99] = "white";
alert(papers.length);//100
alert(papers[88]);//undefined
 // 1）检测数组
if (Array.isArray(papers)) { 
	//以上函数检测一个变量是否是数组 
	alert("papers is array");
}
 // 2)转换方法
 alert(apples.toString());
 alert(apples.valueOf());
 alert(apples.toLocaleString());
 alert(apples.join(" || "));*/
 // 3)栈方法
/*var peds = Array();
 //push() 接收任意参数，逐个添加到数组末尾 ，并返回修改后的数组长度
var count = peds.push('red', 'green');
alert(peds);
alert(count); // 2 返回修改后的数组长度
 //pop() 从数组末尾移除最后一项，返回移除的值

var item = peds.pop();
alert(item); //"green"
*/
 // 4)队列方法
  //shift()是移除第一个项，并返回
/*var peds = Array();
var count = peds.push('red');
var shiftex = peds.shift();
alert(shiftex);//red
alert(peds.length);//0
   //1.unshift()推进项到开头。
 var unshiftex = peds.unshift("red","green");
 alert(unshiftex);
 count = peds.unshift("black","white");
 alert(count);
 var item = peds.pop();
 alert(item);//"green"
 alert(peds.length);
 */
 // 5)重排序方法
   /*var values = [1,2,3,4,5];
   values.reverse();
   alert(values);//5,4,3,2,1

   var numbers = [0,1,5,10,15];
   numbers.sort();//0,1,10,15,5
   alert(numbers);
    //1.比较函数
   function compare(value1, value2) {
   	if (value1 > value2) {
   		return 1 ;
   	} else if (value1 < value2) {
   		return -1;
   	}else {
   		return 0;
   	}
   }

   var compareex = [0,1,5,10,15];
   compareex.reverse();//15,10,5,1,0
   alert(compareex);
   compareex.sort(compare);
   alert(compareex);//0,1,5,10,15
   */
  //6 )操作方法
  // var colors = ["red", "green", "blue"];
   //1.基于当前所有项创建一个新数组，把concat数组里的每一项添加到原数组中
  /*var colors2 = colors.concat("yellow", ["black", "brown"]);
  alert(colors);
  alert(colors2);
   //slice
  var colors3 = colors2.slice(1);
  var colors4 = colors2.slice(1,4);//"green","blue","yellow"
  alert(colors3);
  alert(colors4);*/
   //splice 
 /* var colors = ["red", "green", "blue"];
  var removed = colors.splice(0,1);//删除，返回删除的项
  alert(removed);
  var colors1 = ["red", "green", "blue"];
  var colors6 = colors1.splice(2,0,"red","green");//从2的位置删除0个插入"green","blue".两个参数
  alert(colors1);
  var colors2 = ["red", "green", "blue"];
  var colors7 = colors2.splice(2,1,"red","green");//从2的位置删除1个插入"green","blue".两个参数
  alert(colors7);//返回被删的参数
  alert(colors2);
  */
 //7) 位置方法
  /*var numbers = [1,2,3,4,5,4,3,2,1];
  alert(numbers.indexOf(4));//返回查找项在数组中的位置,3
  alert(numbers.lastIndexOf(4));//5
  alert(numbers.indexOf(4,4));//5
  */
 // 8) 迭代方法
/*var numbers = [1,2,3,4,5,4,3,2,1] ;
var filterResult = numbers.filter(function(item,index,array) {
	return (item > 2);
}); 
alert(filterResult);

var mapResult = numbers.map(function(item, index, array){
	return item * 2;
});

alert(mapResult);
*/
//缩小方法
/*var value = [1,2,3,4,5];
var sum = value.reduce(function(prev, cur, index, array){
	return prev + cur;//前一个值 ＋ 当前值
});
alert(sum);


var sum1= value.reduceRight(function(prev, cur, index, array){
	return prev + cur;//前一个值 ＋ 当前值
});
alert(sum1);
*/

//Date 类型
/*var now = new Date().toLocaleString();//返回本地时间格式
alert(now);
var someDate = new Date(Date.UTC(2000, 0));
alert(someDate);
*/
//RegExp 类型
// var re = null,i;
// for (i=0; i < 3; i++) {
// 	re = /cat/g;
// 	alert(re.test("catestrophe"));
// }

// for (var i = 0; i < 4; i++) {
// 	re = new RegExp("cat", "g");
// 	// re.test("catestrophe");
// 	alert(re.test("catestrophe"));
// };

//实例方法
/*var text = "mom and dad and baby";
var pattern = /mom( and dad( and baby)?)?/gi;

var matches = pattern.exec(text);
alert(matches.index);//0
alert(matches.input);//mom and dad and baby
alert(matches[0]);//mom and dad and baby
alert(matches[1]);//and dad and baby
alert(matches[2]);//and baby

var text = "cat, bat, sat, fat";
var pattern1 = /.at/g;


for (var i = 0; i < 9; i++) {
var matches = pattern1.exec(text);
alert(matches.index);
alert(matches[0]);
alert(pattern1.lastIndex);
}

var text = "this has been a short summer";
var pattern = /(.)hort/g;
if (pattern.test(text)) {
	alert(RegExp.input);
	alert(RegExp.leftContext);
	alert(RegExp.rightContext);
	alert(RegExp.lastMatch);
	alert(RegExp.lastParen);
	alert(RegExp.multiline);
}
*/

//function 类型
 //做为值的函数
/*function cailSomeFuncion(someFunction, someArgument) {
	return someFunction(someArgument);
}
function add10(num) {
	return num + 10;
}
alert(cailSomeFuncion(add10, 10));
 //比较函数
function createComparisonFunction(propertyName) {
	return function(object1, object2) {
		var value1 = object1[propertyName];
		var value2 = object2[propertyName];

		if (value1 < value2) {
			return -1 ;
		} else if (value1 > value2) {
			return 1;
		} else {
			return 0;
		}
	};
}
var data = [{name: "zachary", age:20},{name: "nicholas", age:29}];
data.sort(createComparisonFunction("name"));
for (x in data){
 alert(data[x].name);
}
data.sort(createComparisonFunction('age'));
for (x in data){
 alert(data[x].name);
}

 //函数内部属性
  //callee属性
 function factorial(num){
 	if (num <= 1) {
 		return 1;
 	} else {
 		return num * arguments.callee(num - 1)//递归函数
 	}
 }

alert(factorial(5));
 //this 属性
window.color = "red";
var o = {color: "blue"};
function sayColor() {
	alert(this.color);
}
sayColor();//red
o.sayColor = sayColor;
o.sayColor();//blue

function sum(num1, num2){
	return num1 + num2;
}
 //call
function callSum(num1, num2){
   return sum.call(this, num1, num2);
}

alert(callSum(10,10));

window.color = "red";
var o = {color: "biue"};

function sayColor(){
	alert(this.color);
}

sayColor();//red
sayColor.call(this);//red
sayColor.call(window);//red
sayColor.call(o);//blue

//bind 参数绑定到this
var object2 = sayColor.bind(o);//
object2();
*/

//基本包装类型
/*var s1 = new String("some text");
var s2 = s1.substring(2); 
alert(s2); 
 //Boolean 类型
var falseObject = new Boolean(false);
var falseValue = false;

alert(typeof falseObject);//object
alert(typeof falseValue);//boolean
alert(falseObject instanceof Boolean);//true
alert(falseValue instanceof Boolean);//false
 //Number 类型
var NumberObject = new Number(10);
var num = 10;
//toString() 返回几进制
alert(num.toString());//10
alert(num.toString(2));//1010，2进制
//toFixed(),指定的小数点返回数值的字符串表示
alert(num.toFixed(2));//10.00
//toExponential() e表示法
alert(num.toExponential(1));//1.0e+1
 //String 类型
var stringValue = "hello world";
alert(stringValue.length);
//charCodeAt()
alert(stringValue.charCodeAt(1));//输出"101",小写字e符编码

//字符操作方法
var stringValue1 = "hello";
var result = stringValue1.concat(" world");//concat()，方法
/*alert(result);
alert(stringValue1);

alert(stringValue.slice(3));//"lo world"
alert(stringValue.substring(3));//"lo world"，substring()，将负数转化为0
alert(stringValue.substr(3));//"lo world"，将第一个加上字符长度，第二个参数转化为0
alert(stringValue.slice(3, 7));//"lo w"，负数都加上字符长度
alert(stringValue.substring(3,7));//"lo w"
alert(stringValue.substr(3,7));//"lo worl"substr(start, 要返回的分数)

//字符位置关系
alert(stringValue.indexOf("o"));//4
alert(stringValue.lastIndexOf("o"));//7

var stringValue2 = "Lorem ipsum doelor sit amet";
var positions = new Array();
var pos = stringValue2.indexOf("e");

while(pos > -1){
	positions.push(pos);
	pos = stringValue2.indexOf("e", pos + 1);
}
alert(positions);

//trim()方法
var stringValue3 = "  hello world  ";
var trimmeStringValue = stringValue3.trim();
alert(stringValue3.length);//15
alert(trimmeStringValue.length);//11

//字符串大小写转换方法
alert(stringValue.toLocaleUpperCase());
alert(stringValue.toUpperCase());
alert(stringValue.toLocaleLowerCase());
alert(stringValue.toLowerCase());

//字符串的模式匹配方法
var text = "cat, bat, sat, fat";
var pattern = /.at/g;
var pos = 0,pos1 = 0;

while( pos > -1) {
	var matches = pattern.exec(text);
	pos = text.indexOf("at", pos + 1);
	if (pos !== -1){
	alert(matches.index);
    alert(matches[0]);
   }
};
//替换方法
result = text.replace(/at/g, "ond");
alert(result);

result1 = text.replace(/(.at)/g, "word($1)");
alert(result1);

function html(text) {
	return text.replace(/[<>"&]/g, function(match, pos, originalText){
		switch(match){
			case "<":
				return "$lt";
				break;
			case ">":
				return "$gt";
				break;
			case "$":
				return "&amp";
				break;
			case "\"":
				return "&quot;";
				break;
			default:
			    return "error";
		}
	});
}

alert(html("<p>hello</p>"));

//split()方法

var colorText = "red,blue,green,yellow";
var colors1 = colorText.split(",");
var colors2 = colorText.split(",", 2);

//localeCompare()方法
var stringValue = "yellow";
alert(stringValue.localeCompare("brick"));//1
alert(stringValue.localeCompare("yellow"));//0
alert(stringValue.localeCompare("zoo"));//-1
*/
//fromCharCode()方法
alert(String.fromCharCode(104,101,108,108,111));//"hello"

//单体内置对象
 // Global对象
 var url = "http://www.wrox.com/illagal value.html#start";
 alert(encodeURI(url));//http://www.wrox.com/illagal%20value.html#start
 //以上对应decodeURI
 alert(encodeURIComponent(url));//http%3A%2F%2Fwww.wrox.com%2Fillagal%20value.html%23start
 //以上对应decodeURIComponent

 //eval()方法
 eval("alert('hi')");

 //Math 对象
 //Math.min()和Math.max()方法

 var values = [1,3,8,10,11,2];
 var min = Math.min.apply(Math, values);

 //舍入的方法

   // Math.cell() ,Math.floor(),Math.round

 //随机的方法
  //random()方法
 function selectFrom(lowerValue,upperValue) {
 	var choices = upperValue - lowerValue + 1;
 	return Math.floor(Math.random() * choices)
 }

 var colors = ["red", "green", "blue", "yellow"];
 var color = colors[selectFrom(0,colors.length - 1)];
 alert(color);
