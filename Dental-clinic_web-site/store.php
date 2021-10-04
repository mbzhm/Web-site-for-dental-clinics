<?php 
if(isset($_POST['submit'])){
    $to = "mbaizhuminova@gmail.com"; // this is your Email address
    $email = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $phone = $_POST['phone'];
	$date = $_POST['datetime'];
	$service = $_POST['service'];
    $subject = "Online application from Dental clinics";
    $message = "Имя: ".$name ."\nНомер телефона: ".$phone."\nEmail: ".$email."\nДата: ".$date."\nУслуга: ".service ;
    $headers = "From: Dental Esthetics";
	
    $mail_status = mail($to,$subject,$message,$headers);
    if ($mail_status) { ?>
<script language="javascript" type="text/javascript">
    alert('Thank you for notifying us, we will be with you shortly.');
    window.location = 'online page.html';
</script>
<?php
}
else { ?>
<script language="javascript" type="text/javascript">
    alert('Message failed. Please, try again or select another department');
    window.location = <'online page.html>/';
</script>
<?php
}
?>