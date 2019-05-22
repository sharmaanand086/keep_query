<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tag Adder</title>
</head>
<body>
<h1> Tag Apply </h1>
	<form action = "tagallcsv.php"  enctype = "multipart/form-data" name = "form1" id ="form1" method = "POST">
		<label>Tag No:*</label>
		<input type="text" autocomplete = "off" placeholder="Enter Tag No" pattern="[0-9]{4,}" name="tag" id="tag" title="It must contain only number and a length of minimum 3 characters!" required autofocus>
		<label>Upload CSV File:*</label>
		<input type = "file"  style="border:none;" maxlength = "1" accept=".csv" name="uploadfile" id = "uploadfile" title = "Enter csv file only. Max 3MB!" required>
		<!--<input type = "file" class = "form-control multi text-center" style="border:none;" maxlength = "1" class = "maxsize-1024" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="uploadfile" id = "uploadfile" title = "Enter pdf, doc, docx files. Max 1MB!" required>-->
		<button class = "pay-button" type = "submit" name = "addtag">Apply</button></section>
	</form>
</body>
</html>
