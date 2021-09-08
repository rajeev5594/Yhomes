<?php
include('dbcon.php');
if(isset($_POST['send']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
    $address=$_POST['address'];
    $contactnumber=$_POST['contactnumber'];
	$message=$_POST['message'];
	$query="INSERT INTO contact_info (id,uname, uemail,address,contactnumber, umessage) VALUES (NULL,'$name','$email','$address' ,'$contactnumber', '$message') ";
	
	$run=mysqli_query($con,$query);
	if($run){
		?>
		<script>
		alert("Messages Sent Successfully ! We will contact You Soon.");
		window.open('index.html','_self');
	</script>
	<?php
	}else{
		echo "Message Sending Failed ! Please Try Again.";
	}

}

?>