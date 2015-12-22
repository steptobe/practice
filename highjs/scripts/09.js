function isSortable(object){
    return alert(typeof object.open == "function");
}

function tes(){
   var hh = [1,3,5,2];
   jj = hh.sort();
   alert(jj)
}
var test = tes;
tes();
isSortable(test);

function isHostMethod(object, property){
	var t = typeof object[property];
	return t == "function" || (!!(t=='object' && object[property])) ||
	t=='unknown';
}

