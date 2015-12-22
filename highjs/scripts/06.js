//面向对象的程序设计
/*var person = new Object();
person.name = "Nicholas";
person.age = 29;
person.job = "software Engineer";
person.sayName = function(){
	alert(this.name);
}
//字面量方法
var person = {
	name: "Nicholas",
	age: 29,
	job: "software Engineer",

	sayName: function(){
		alert(this.name);
	}
}
var i;
person.sayName();
for(i in person) {
	alert(i);// for －in循环返回属性 
}

var person = {};
//Object.defineProperty()方法
Object.defineProperty(person, "name", {
	writable: false,
	value: "Nicholas"
});

alert(person.name);
person.name = "Greg";
alert(person.name);
})


//2 创建对象

//工厂模式
function createPerson(name, age, job) {
	var o = new Object;
	o.name = name;
	o.age = age;
	o.job = job;
	o.sayName = function() {
		alert(this.name);
	};
	return o;
}
var person1 = createPerson("yuling", 29, "software Engineer");
alert(person1.name);

//构造函数模式
function Person(name, age, job) {
	this.name = name;
	this.age = age;
	this.job = job;
	this.sayName = function(){
		alert(this.name);
	};
}
var person2 = new Person("Nicholas", 29, "software Engineer");
person2.sayName();
Person("yuling", 29, "software Engineer");
window.sayName();//
//在另一个对象的作用域里调用
var o = new Object;
p = ["Kristen", 25, "Nurse"];
Person.apply(o, p);
o.sayName();

//原型模式
function Person(){}
Person.prototype.name = "Nicholas";
Person.prototype.age = 29;
Person.prototype.job = "software Engineer";
Person.prototype.sayName = function(){
    alert(this.name);
};


var person3 = new Person();
person3.name = "Greg";
person3.sayName();
var person4 = new Person();
person4.sayName();
alert(person3.sayName == person4.sayName);

alert(Person.prototype.isPrototypeOf(person3));
alert(Object.getPrototypeOf(person3).name);

alert(person3.hasOwnProperty("name"));//如果对象的属性值来自实例。则返回true

//for in 只有存在，无论是原型还是实例，都会返回true

//Object.keys() 这个方法接收一个对象作为参数，返回一个包含所有可枚举属性的字符串数组
var keys = Object.keys(Person.prototype);
alert(keys);

//getOwnPropertyNames()无论可不可枚举
var keys1 = Object.getOwnPropertyNames(Person.prototype);
alert(keys1);

//更简单的原型语法

function Person() {
	
}
	Person.prototype = {
			name : "Nicholas",
			age : 29,
			job: "software Engineer",
			sayName : function() {
				alert(this.name);
			}
		}

var friend = new Person();
alert(friend.age);

//动态原型模式
function Person(name, age, job) {
	this.name = name;
	this.age = age;
	this.job = job;
	this.fridents = ["shelby", "court"];
}

if (typeof this.sayName != "function"){
	Person.prototype.sayName = function(){
		alert(this.name);
	}
}
var person1 = new Person("Nicholas", 29, "software Engineer");
var person2 = new Person("Greg", 27, "Doctor");

person1.fridents.push("van");
alert(person1.fridents);
alert(person2.fridents);
alert(person1.sayName === person2.sayName);

//寄生构造函数模式

//继承

function SuperType(){
	this.colors = ['red', 'blue', 'green'];
}

SubType.prototype = new SuperType();

var instance1 = new SubType();
instance1.colors.push('black');
alert(instance1.colors);//red,blue,green,black

var instance2 = new SubType(27);//red,blue,green,black
alert(instance2.colors);

//借用构造函数
function SuperType(){
	this.colors = ["red", "blue", "green"];
}

function SubType(){
	//继承了SuperType
	SuperType.call(this);
}

var instance1 = new SubType();
instance1.colors.push("black");
alert(instance1.colors);

var instance2 = new SubType();
alert(instance2.colors);

//传递参数
function SuperType(name){
	this.name = name;
}

function SubType(){
	SuperType.call(this, "Nicholas");
	this.age = 29;
}
var instance1 = new SubType();
alert(instance1.name);
alert(instance1.age);

//组合继承
function SuperType(name){
	this.name = name;
	this.colors = ["red", "blue", "green"];
}

SuperType.prototype.sayName = function(){
	alert(this.name);
};

function SubType(name, age){
	//继承属性
	SuperType.call(this, name);

	this.age = age;
}

 //继承方法
SubType.prototype = new SuperType();

SubType.prototype.sayAge = function(){
	alert(this.age);
};

var instance1 = new SubType("Nicholas", 29);
instance1.colors.push("black");
alert(instance1.colors);
instance1.sayName();
instance1.sayAge();

var instance2 = new SubType("grey", 27);
alert(instance2.colors);
instance2.sayName();
instance2.sayAge();


//原型式继承
var person = {
	name: "Nicholas",
	friends: ["shelby", "court", "van"]
};

// var anperson = Object(person);
//ECMA5 通过Object.create()规范了原型式继承
var anperson = Object.create(person);
anperson.name = "grey";
anperson.friends.push("nob");

var yeperson = Object(person);
yeperson.name = "linda";
yeperson.friends.push("barbie");

alert(person.friends);
*/
//寄生组合式继承
function SuperType(name){
	this.name = name;
	this.colors = ['red','blue','green'];
}
SuperType.prototype.sayName = function(){
	alert(this.name);
};

function SubType(name,age){
	SuperType.call(this, name);

	this.age = age;
}

SubType.prototype = new SuperType();
SubType.prototype.constructor = SubType;
SubType.prototype.sayAge = function(){
	alert(this.age);
}
var instance1 = new SubType("Nicholas", 29);
instance1.colors.push("black");
alert(instance1.colors);
instance1.sayName();
instance1.sayAge();

var instance2 = new SubType("grey", 27);
alert(instance2.colors);
instance2.sayName();
instance2.sayAge();


