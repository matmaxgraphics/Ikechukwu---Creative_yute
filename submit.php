<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $msg = $_POST['message']; // Get Message Value
         
        $to = "gbadamosimateen@gmail.com"; // You can change here your Email
        $subject = "'$name' Creative-yute Contact Form Mail"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
        $user = "$email";
        $usersubject = "Confirmation Message";
        $userheaders = "From: gbadamosimateen@gmail.com\n";
        $usermessage = "Thank you for messaging me. I'll get back to you shortly.";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <gbadamosimateen@gmail.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
        //$headers .= 'Cc: info@29luxury.com' . "\r\n"; // If you want add cc
        // $headers .= 'Bcc: boss@websapex.com' . "\r\n"; // If you want add Bcc
         
        if(mail($to,$subject,$message,$headers), mail($user, $usersubject, $usermessage, $userheaders);){
            // Message if mail has been sent
            header("Location: thanks.html");
            // echo "<script>
            //         alert('Mail has been sent Successfully.');
            //     </script>";
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
        }
    }
?>