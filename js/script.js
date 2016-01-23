function XHRObject(){
	var xhr;
	if (window.XMLHttpRequest) {
		//all current browsers
		xhr = new XMLHttpRequest();
	}else{
		xhr = new ActiveXObject("MICROSOFT.XMLHTTP");
	}
	//handlers....
	xhr.onerror = function(){}
	xhr.onstart = function(){}
	xhr.success = function(){}

	return xhr;
}

window.onload = function(){
	document.getElementById('call_back_btn').onclick = function(){
		var xhr = new XHRObject();

		var params ='first_name=David&last_name=Barrar';

		xhr.open("POST", 'xhr.php', true);//must be true
		xhr.setRequestHeader('Content-type' , 'application/x-www-form-urlencode');
		//xhr.setRequestHeader("Content-length" , params.length);
		xhr.onreadystatechange = function(){
			if (xhr.readyState==1 && xhr.status == 200) {
				console.log(xhr.statusText+" "+xhr.status);}
			if (xhr.readyState==2 && xhr.status == 200) {
				console.log(xhr.statusText+" "+xhr.status);}
			if (xhr.readyState==3 && xhr.status == 200) {
				console.log(xhr.statusText+" "+xhr.status);}


			if (xhr.readyState==4 && xhr.status == 200) {
				console.log(xhr.statusText+" "+xhr.status + " "+xhr.responseText);
			};
			// console.log(xhr.readyState);
		}//onreadystatechange
		xhr.send(params);
	}//on btn click 
}//onload