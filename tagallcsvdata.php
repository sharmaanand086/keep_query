<?php
 define("DB_SERVER", "localhost");
define("DB_USER", "username");
define("DB_PASSWORD", "Mumbai@123");
define("DB_DATABASE", "barcode_scan");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE); 

if(isset($_POST['addtag']))
{
	include("isdk.php");
	$groupId = (int)$_POST['tag'];	
	//$groupId = 6976;	// Enter Tag No Here....
	echo "Tag No : ".$groupId."<br>";
	$date=date('Y-m-d');
	$date2=date('H:i:s');
	$date1=str_replace('-','',$date).str_replace(':','',$date2);
	$temp = explode(".",$_FILES["uploadfile"]["name"]);
	$extension = end($temp);
	$uploaddir = './csv/';
	$file = $uploaddir.$date1.".".$extension;
       	$file_name= trim($date1.".".$extension);
      
	//echo"<script type=\"text/javascript\">alert(\"Please wait... Uploading file...\");</script>";
	if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file))
	{
		$app = new iSDK;
		if ($app->cfgCon("connectionName")) 
		{
			if (($handle = fopen($file, "r")) !== FALSE) 
			{
				fgetcsv($handle);   
				while (($data = fgetcsv($handle, 500, ",")) !== FALSE) 
				{
					$contactId1= $data[0];
					//$contact=$data[1];
					//var_dump($contact);
					var_dump($contactId1);
					$query ="INSERT INTO `barcodeno`(`barcode`) VALUES ('$data[0]')";
		
		                         mysqli_query($con,$query);
				
				
				
				
				
				
				}
				fclose($handle);
			}
			echo "File data successfully imported to database!!";
		}
	}
}
?>
