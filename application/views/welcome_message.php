
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
	
</div>

  
	<script src="//code.jquery.com/jquery.min.js"></script>
	
	<input type="text" id="inputField">
    <button id="submitButton">전송</button>
    <div id="output"></div>

    <script>
        $(document).ready(function() {
            $("#submitButton").click(function() {
                var inputData = $("#inputField").val();

                // 입력된 데이터를 그대로 표시
                $("#output").text(inputData);
            });
        });
    </script>


</body>
</html>