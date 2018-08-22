<!DOCTYPE html>
<html>
<head>
<script>
function sendPOST() {
		
		var http = new XMLHttpRequest();
		var url = 'api.php';
		var params = 'email='+ document.getElementById("email").value + '&amount=' + document.getElementById("amount").value;
		http.open('POST', url, true);

		//Send the proper header information along with the request
		http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

		http.onreadystatechange = function() {//Call a function when the state changes.
			if(http.readyState == 4 && http.status == 200) {
				
				var objJSON = JSON.parse(http.responseText);
				switch(objJSON.status){
					case 'approved':
						document.getElementById("answer").innerHTML = "Transaction is okey, Your ID:" + objJSON.transID;
						break;
					case 'rejected':
						document.getElementById("answer").innerHTML = "FAIL, " + objJSON.error_message;
						break;
				}
				
				//alert(objJSON);
			}
		}
		http.send(params);
}
</script>
</head>
<body>
<center>
<p><b>Please type yuor email and amount</b></p>

Email: <input type="text" id="email">
Amount: <input type="text" id="amount">
<button onclick="sendPOST()">Send</button>

<p>Answer: <span id="answer"></span></p></center>
</body>
</html>