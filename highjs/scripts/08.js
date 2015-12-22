/*
var age = 29;
function sayAge(){
	alert(this.age);
}
sayAge();

//超时调用
var timeoutID = setTimeout(function(){
	alert("hello world");
}, 1000);
//取消超时调用
clearTimeout(timeoutID);

//间歇调用
var num = 0;
var max = 10;
var intervalId = null;

function incrementNumber() {
	num++;
    alert(num);
	if(num == max){
		clearInterval(intervalId);
		alert("Done");
	}
}
intervalId = setInterval(incrementNumber, 500);

var num = 0;
var max = 10;
function incrementNumber(){
	num++;

	//如果执行次数未达到max设定的值，则设置另一次超时调用
	if (num < max) {
		setTimeout(incrementNumber, 500);
		alert(num);
	} else {
		alert("Done");
	}
}

setTimeout(incrementNumber, 500);

if (confirm("Are you sure?")) {
	alert("I'm so glad you're sure!");
} else {
	alert("I'm sorry to hear you're not sure!");
}
var result = prompt("what's your name?", 'Michael');
if (result !== null){
	alert("welcome," + result);
}

// window.print();
// window.find();
// alert(window.location.href);
 function getQueryStringArgs(){
            
            //get query string without the initial ?
            var qs = "?q=javascript&num=10",
               
            
                //object to hold data
                args = {},
                
                //get individual items
                items = qs.length ? qs.split("&") : [],
                
                item = null,
                name = null,
                value = null,
                
                //used in for loop
                i = 0,
                len = items.length;
            
            //assign each item onto the args object
            for (i=0; i < len; i++){
                item = items[i].split("=");
                name = decodeURIComponent(item[0]);
                value = decodeURIComponent(item[1]);
                
                if (name.length){
                    args[name] = value;
                }
            }
            
            return args;
        }

        //assume query string of ?q=javascript&num=10
        
        var args = getQueryStringArgs();
        var  jj = "hh&ll",
        oo = jj.length == 5 ? jj.split("&") : 11;
        
        alert(args["?q"]);     //"javascript"
        alert(args["num"]);   //"10"
        alert(oo[1]);


 //navigator 对象
 //检测插件（在ie中无效）
 function hasPlugin(name){
    name = name.toLowerCase();
    for (var i = 0; i < navigator.plugins.length; i++) {
        if (navigator.plugins[i].name.toLowerCase().indexOf(name) > -1) {
            return true;
        };
    };

    return false;
 }  
//检测flash
alert(hasPlugin('Flash'));
//检测QuickTime
alert(hasPlugin('Window Resizer'));    

//检测所有浏览器中的Flash
function hasFlash(){
    var result = hasPlugin('Flash');
    if(!result){
        result = hasIEplugin('ShockwaveFlash.ShockwaveFlash');
    }
    return result;
}
alert(hasFlash());
 */
// navigator.registerContentHandler("application/rss+xml",
//     "http://www.somereader.com?feed=%s", "Some Reader");
// history.go('yulinglu.cn');
history.forward();



