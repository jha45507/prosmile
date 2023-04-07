
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:/xampp/composer/vendor/autoload.php';
$successContact=false;
$errorContact=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $formType  = $_POST['hidden'];
    if($formType == "contactForm"){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $options = $_POST['options'];
        $message = $_POST['message'];
        if(!preg_match("/^[A-Za-z][A-Za-z\s\.]{2,50}$/",$name)) {
            $errorContact = 'Please enter correct name. Allowed chars [A-Z, a-z, .] min:2, max:50';
        }
        elseif(!preg_match("/^\d{10}$/", $phone)){
            $errorContact = 'Please enter a valid Phone Number';
        }
        if(!$errorContact) {
        $subject = 'Enquiry On Website';
        $message = "Name : $name\r\nDate: $date\r\nPhone: $phone\r\nOptions: $options\r\nMessage: $message";
        function smtp_mailer($email_to,$subject, $message){
                $mail = new PHPMailer(TRUE);
                // $mail->SMTPDebug=4;
                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Host = "sg2plcpnl0149.prod.sin2.secureserver.net";
                $mail->Port = "465";
                $mail->IsHTML(false);
                $mail->CharSet = 'UTF-8';
                $mail->Username = "moin@sudofire.com";
                $mail->Password = '82?q$e6-%ILx';
                $mail->SetFrom("root@sudofire.com");
                $mail->Subject = $subject;
                $mail->Body =$message;
                $mail->AddAddress($email_to);
                $mail->SMTPOptions=array('ssl'=>array(
                    'verify_peer'=>false,
                    'verify_peer_name'=>false,
                    'allow_self_signed'=>false
                ));
                if(!$mail->Send()){
                    echo $mail->ErrorInfo;
}else{
                    echo '';
                }
            }
            smtp_mailer('rahul.jha@sudofire.com',$subject, $message);
            // mail('thechip911@gmail.com', $subject, $message, 'From:root@sudofire.com');
            $successContact=true;
        }
    }
}
else{
    $name = "";
    $phone = "";
    $email = "";
    $message = "";
}
?>

<?php
if(!$successContact) {
    if($errorContact) {
?>


<div class="col-md-12 col-sm-12 col-xs-12">
    <p class="text-center error_msg"><?php echo $errorContact ?></p>
</div>

<?php } ?>
<form action="" method="post" class="contactForm" id="contect-form">
    <div class="contect_form">
        <div class="contect_form_child">
            <h1 class="">Book an <span class="Appointment">Appointment</span></h1>
            <input type="hidden" class="form-control" value="contactForm" name="hidden" required>
            <div class="contect_form_children">
                <div class="field_parent_div">
                    <div>
                        <label for="">Name</label>
                    </div>
                    <div class="field_div">
                        <input type="text" name="name" <?php echo $name;?> id="" required>
                    </div>
                </div>
                <div class="field_parent_div">
                    <div>
                        <label for="">Number</label>
                    </div>
                    <div class="field_div flex_div_number">
                    <span>+91</span> <input type="text" name="phone" id="mobile" maxlength="10" pattern="^((+91[0-9]{10})|(0[0-9]{10}))$" title="Enter a valid mobile number upto 10 digit" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $phone;?>" required>
                    </div>
                    
                </div>
            </div>
            <div class="contect_form_children">
                <div class="field_parent_div">
                    <div>
                        <label for="">Date</label>
                    </div>
                    <div class="field_div">
                        <input type="date" name="date" id="" class="date_type">
                    </div>
                </div>
                <div class="field_parent_div">
                    <div>
                        <label for="">Treatment</label>
                    </div>
                    <div class="field_div">
                        <select name="options" id="" class="">
                            <option value="---------">---------</option>
                            <option value="Dental exam and teeth cleaning">Dental exam and teeth cleaning</option>
                            <option value="Dental emergency">Dental emergency</option>
                            <option value="Dental implants">Dental implants</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="textarea_parent_div">
                <div class="textarea_div">
                    <label for="">Description</label>
                </div>
                <div class="textarea_div">
                    <textarea class="textarea" value="<?php echo $message;?>" name="message" id=""></textarea>
                </div>
            </div>
            <div class="submit_button_div">
                <button type="submit" class="submit_button">Submit</button>
            </div>
        </div>
    </div>
 </form>

<?php } else { ?>

<div class="col-md-12 col-sm-12 col-xs-12">
    <h6 class="text-center success_msg">Thanks to show your interest. We'll get back soon!</h6>
</div>

<?php } ?>

<?php if($errorContact || $successContact) { ?>

<?php } ?>
