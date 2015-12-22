// var request = false;
// function createRequest() {
// 	try {
// 		request = new XMLHttpRequest();
// 	} catch (trymicrosoft){
// 		try {
// 			request = new ActiveXobject("Msxml2.XMLHTTP");
// 		} catch (othermicroft){
// 			try {
// 				request = new ActiveXobject("Microsoft.XMLHTTP");
// 			} catch (failed) {
// 				request = false;
// 			}
// 		}
// 	}
// 	if (!request)
// 		alert("Error initialzing xmlHttpRequest!");
// }
// function getCustomerInfo() {
// 	createRequest();
// 	var phone = document.getElementById('phone').value;
// 	var url = "/cgi-local/lookupCustomer.php?phone=" + escape(phone);
// 	request.open('GET', url, true);
// 	request.onreadystatechange = updatePage;
// 	request.send(null);
// }
// function updatePage() {
// 	if (request.readyState == 4) {
// 		if (request.status == 200) {
// 			var response = request.responseText.split("|"); 
// 			document.getElementById("order").value = response[0];
// 			document.getElementById("address").innerHTML = response[1].replace(/\n/g, "");
// } else
// alert("status is " + request.status); 
//   }
// }
$(document).ready(function() {
	$("#btn").click(function(event) {
		$("#demo").val(2);
		$.get('demo.php', function (response){
			$("#demo").val(response);
		});
		$("#demo").val(3);
	});
});