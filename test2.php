<!DOCTYPE html>
<html>
<head>
  <title>Test Pay</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap/material-kit.min.css">
</head>
<body>
  <h2>PAY 1 CEDI</h2>
<div class="row">
  <div class="col-md-4">
    <input id="number" type="text" name="number" onkeyup="if(/^(([0]){1}[2,3,5]{1}(?:\d[ ]*){8}){1}$/.test(this.value)){document.getElementById('btn').disabled=false;document.getElementById('numberError').style.display='none'}else{document.getElementById('btn').disabled=true;document.getElementById('numberError').style.display='inline'}" style="display: block;margin-bottom: 10px" placeholder="Enter Number" class="form-control">
    <div id="numberError" class="alert alert-danger" style="display: none" >
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Wrong Format!</strong> Number format error
    </div>
  </div>
  <div id="holder" class="col-md-4" >
    <button type="button" class="btn btn-primary w-100" id="btn" disabled>
      PAY
    </button>
  </div>
</div>

<div class="row">
  <div id="text" class="col-md-4 offset-md-4">
  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
  function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
 var day = 0;
  if (getCookie('num')=="") {
    setCookie('num', 0, 1);
  }else{
     var day = (getCookie('num')==1)? 2:getCookie('num');
  }

  function checkPaymentStatus(orderID) {
    var i = 0;
    var jsondata = JSON.parse('{"payment":{"status":0}}');
    console.log(window.location.origin+"/efiewura/test.php");
  $.get(window.location.origin+"/efiewura/test.php?id="+orderID, function(data, status){
   if (status='success') {
    jsondata = JSON.parse(data);
    if(jsondata.order.status==0){
      console.log('Invalid orderID');
      return;
    }
    document.getElementById('text').innerHTML = "<h2>"+jsondata.payment.status+"</h2>";
    if(jsondata.payment.status!='Successful'){
      if(i==20)
        return;
      ++i;
      window.setTimeout(checkPaymentStatus(orderID), 2000);
    }   }
  });
  return jsondata.payment.status
}
  document.getElementById('btn').addEventListener('click',function(e) {
var number = document.getElementById('number').value;
  var d = new Date();
  var orderID = number+("0"+d.getSeconds()).slice(-2)+("0"+d.getMinutes()).slice(-2)+("0"+d.getHours()).slice(-2)+("0"+d.getDate()).slice(-2)+("0"+d.getMonth()).slice(-2)+(""+d.getFullYear()).slice(-2);
       requestPayload = '{"price": 1,"network": "mtn","recipient_number": "0540757034","sender": "'+number+'","option": "rmtm","apikey": "401ac4c34c87f76b39dfa2438d2581096a4a0056","orderID": "'+orderID+'"}';

    var xhr = new XMLHttpRequest();
  xhr.open("POST", 'https://client.teamcyst.com/api_call.php', true);

  //Send the proper header information along with the request
  xhr.setRequestHeader("Content-type", "application/json");

  xhr.onreadystatechange = function() {
    //Call a function when the state changes.
      checkPaymentStatus(orderID);
      if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
      }
  }
  //Replace requestPayload with the payload you would be sending
  xhr.send(requestPayload); 
  });
  var d = new Date();
  var str = ("0"+d.getSeconds()).slice(-2)+("0"+d.getMinutes()).slice(-2)+("0"+d.getHours()).slice(-2)+("0"+d.getDate()).slice(-2)+("0"+d.getMonth()).slice(-2)+(""+d.getFullYear()).slice(-2);
console.log(str);
</script>
</body>
</html>
./about
./contact
./find
./spaces
./spaces/{search_query}
./space/{encrypted_id}
./host
./done
./terms


RewriteRule ^([a-zA-Z]+\/+)([\/\-\?\=\w\+%]+) ./$2
RewriteRule ^(\?q=[\w\+%]*)(\/.*)*$ ./index.php$2
RewriteRule ^([a-zA-Z]+\/+)([a-zA-Z.\/\-]+) ./$2
RewriteRule ^([a-zA-Z]+)(/*)$ ./index.php?pg=$1
RewriteRule ^([a-zA-Z]+)(/+)([a-zA-Z0-9]+)$ ./index.php?pg=$1&space=$3
RewriteRule ^(assets)(/+)([a-zA-Z0-9]+)$ ./index.php?pg=$1&space=$3 