<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller
{
	//send inquiries
	public function send()
	{
		try {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$message = $this->input->post('message');

			// Load PHPMailer Library
			$this->load->library('phpmailer_lib');			
			// PHPMailer Object
			$mail = $this->phpmailer_lib->load();			
			$mail->isSMTP();// Send using SMTP
	    $mail->Host       = "smtp.gmail.com";// Set the SMTP server to send through
	    $mail->SMTPAuth   = true;// Enable SMTP authentication
	    $mail->Username   = 'jason123.magsino@gmail.com';// SMTP username
	    $mail->Password   = 'jason12345';// SMTP password
	    $mail->SMTPSecure = 'tls';// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = "587";//Port

	    //Recipients
     	$mail->setFrom($email,$name);    
	    $mail->addAddress('jason123.magsino@gmail.com');// Add a recipient
	    $mail->addReplyTo('noreply@gmail.com', 'No Reply');
	    // Content
	    $mail->isHTML(true);// Set email format to HTML
	    $mail->Subject = 'Inquiry';
	    $mail->Body    = '<style>.product-card {
      width: 380px;
      position: relative;
      box-shadow: 0 2px 7px #dfdfdf;
      margin: 50px auto;
      background: #fafafa;
  }

  .badge {
      position: absolute;
      left: 0;
      top: 20px;
      text-transform: uppercase;
      font-size: 13px;
      font-weight: 700;
      background: red;
      color: #fff;
      padding: 3px 10px;
  }

  .product-tumb {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 300px;
      padding: 50px;
      background: #f0f0f0;
  }

  .product-tumb img {
      max-width: 100%;
      max-height: 100%;
  }

  .product-details {
      padding: 30px;
  }

  .product-catagory {
      display: block;
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      color: #ccc;
      margin-bottom: 18px;
  }

  .product-details h4 a {
      font-weight: 500;
      display: block;
      margin-bottom: 18px;
      text-transform: uppercase;
      color: #363636;
      text-decoration: none;
      transition: 0.3s;
  }

  .product-details h4 a:hover {
      color: #fbb72c;
  }

  .product-details p {
      font-size: 15px;
      line-height: 22px;
      margin-bottom: 18px;
      color: #999;
  }

  .product-bottom-details {
      overflow: hidden;
      border-top: 1px solid #eee;
      padding-top: 20px;
  }

  .product-bottom-details div {
      float: left;
      width: 50%;
  }

  .product-price {
      font-size: 18px;
      color: #fbb72c;
      font-weight: 600;
  }

  .product-price small {
      font-size: 80%;
      font-weight: 400;
      text-decoration: line-through;
      display: inline-block;
      margin-right: 5px;
  }

  .product-links {
      text-align: right;
  }

  .product-links a {
      display: inline-block;
      margin-left: 5px;
      color: #e1e1e1;
      transition: 0.3s;
      font-size: 17px;
  }

  .product-links a:hover {
      color: #fbb72c;
  }</style><div class="product-card">
													<div class="badge">Inquiry From:</div>													
													<div class="product-details">
														<span class="product-catagory">'.$name.'</span>
														<h4>('.$phone.')('.$email.')</h4>
														<h4>Question/Comment</h4>
														<p>'.$message.'</p>
														<div class="product-bottom-details">															
														</div>
													</div>
												</div>';

	    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    // Send email
	   $mail->send();
	   $data['sent'] = 'Sent Successfuly'; 
	   echo json_encode($data);	  
		}catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
	}
}
?>