 // var message = "hello world!";
     /*if (message) {
          alert("value is true");
     }
     var result = Number.MAX_VALUE + Number.MAX_VALUE
     alert(result);//number
     alert(isNaN(NaN));//NaN
     alert(isNaN('blue'));//true
     alert(isNaN(true));//false(可以被转化为数字)*/

     //数值转换
     /*var num1 = Number("hello world");
     alert(num1);
     var num1 = parseInt("1234blue");//1234
     var num2 = parseInt(" ");//NaN
     var num3 = parseInt("07", 8);//56，按八进制解析
     var num4 = parseFloat("22.34.5");//22.34*/

     //string 类型

     /*var text = "the is letter sigma";
     alert(text.length);*/

     //转换字符串
     /*var age = "11";
     age1 = --age + 2;
     alert(age1.toString());
     alert(age);
     var num1 = 10;
     alert(num1.toString(8));//12，表示转换八进制
     var num2;
     alert(num2.toString());//错误，没输出。
     alert(String(num2));*/

     //布尔
     /*var found = undefined;
     var test = null;
     var result = (found && test);//
     alert(typeof(null));
     alert(result);//undefined
     var result = "3";
     var test = 3;
     alert(result == test);//true
     alert(result === test);//false,数据类型不一样*/

     //条件操作符
     // var max = (num1 > num2) ? num1 :num2;

     /*var i;
     function compare(i)
     {
      if (i > 15){
        alert("greater than 15");
      }else if(i < 0){
        alert("less than  0");
      }else{
        alert("between 0 and 15");
      }
     }
     compare(7);

     var i = 0;
     do {
      i += 2;
     } while (i < 10);
     alert(i);*/

     //for 语句
     /*var count = 10;
     for (var i = 0; i < count; i++){         
     }
     alert(i);*/

     // for in 语句
     /*for (var propName in window) {
             document.write(propName);
             document.write("<br />");
        }*/

     //label 
     // label:   statement;
     /*var num = 0;
     outermost:
     for (var i=0; i < 10; i++){
         for (var j = 0; j < 10; j++){
          if (i == 5 && j == 5){
            continue outermost;//95
            // break outermost;//55
          }
          num++;
         }
     }
     alert(num);*/

     //switch 语句
     /*var num = 25;
     switch (true) {
          case num < 0:
               alert('less than 0');
               break;
          case num >= 0 && num <= 10:
               alert("between 0 and 10");
               break;
          case num >= 10 && num <= 20:
               alert("between 10 and 20");
               break;
          default:
               alert("more than 20");
     }*/

     //function
     function sayHi(name, message) {
          alert('hello' + name + "," +message);
     }
     sayHi('yuling', 'how are you?');

