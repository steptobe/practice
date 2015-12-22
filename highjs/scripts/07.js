/*//1) 递归函数 善用callee()
function factorial(num){
	if (num <= 1){
		return 1;
	} else {
		return num * arguments.callee(num-1);
	}
}
alert(factorial(4));


//2) 闭包
function createComparisonFunction(propertyName) {

	return function(object1, object2){
		var value1 = object1[propertyName];
		var value2 = object2[propertyName];

		if (value1 < value2) {
			alert("-1");
		} else if (value1 > value2){
			alert("1");
		} else {
			alert("0");
		}
	};
}

// function compare(value1, value2){
// 	if (value1 < value2) {
// 			alert("-1");
// 		} else if (value1 > value2){
// 			alert("1");
// 		} else {
// 			alert("0");
// 		}
// }
// var result = compare(5,10);

var compare = createComparisonFunction("name");
var result = compare({name: "yuling"}, {name: "grey"});//1

compare = null;

//闭包与变量

function createFunction(){
	var result = new Array;

	for (var i = 0; i < 10; i++) {
		result[i] = (function(num){
			return function(){
				return num;
			}
		})(i);//匿名函数，(i)传入参数
     }
     return result;
 }

var bibao = createFunction();
for (var i=0; i < bibao.length; i++){
 document.write(bibao[i]() + "<br />");
   
}

//私有变量

function MyObject(){
	var privateVariable = 10;

	function privateFunction(){
		return false;
	}

	//特权方法
	this.publicMethod = function (){
		privateVariable++;
		return privateFunction();
	}
}

var test = new MyObject();
alert(test.publicMethod());

function Person(name){
	this.getName = function(){
		return name;
	};

	this.setName = function(value) {
		 name = value;
	};
}

var person = new Person("Nicholas");
alert(person.getName());
person.setName("Grey");
alert(person.getName());
*/

// var str = "http://www.baidu.com.haha";
// var str1 = "http://baidu.com/";		
// var str2 = "http://www.baidu.com.haha";		
// var index = str1.lastIndexOf(".")	;
// var pall = /^((http|ftp|https):\/\/)?www(\/[\w-_]+)*\/?$/g;
// if (pall.test(str1)) {
// var index1 = str1.indexOf('www') + 4 ;
// } else {
// 	var index1 = str1.indexOf('//') + 2;
// }
// alert(index);
// alert(index1);
// alert(str1.slice(index1, index));

//模块模式
function BaseComponent(){
            }
function OtherComponent(){
            }
var application = (function() {

	//私有变量和函数
	var components = new Array();

	//初始化
	components.push(new BaseComponent());

	//创建application 的一个局部副本
	var app = new BaseComponent();
	//公共
	app.getComponentCount = function(){
			return components.length;
		};
	app.registerComponent = function(component){
			if (typeof component == "object"){
				components.push(component);
			}
		};
	return app;
})()
application.registerComponent(new OtherComponent());
alert(application.getComponentCount());