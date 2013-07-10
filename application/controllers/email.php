<?php 

class Email extends CI_Controller {

	public function index() 
	{
		$this->load->library('email');

		if(isset($_POST['submit'])) {
			$this->_sendMail();
		}
		echo "sending mail";
	}

	public function _sendMail()
	{
		echo "email sent";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$comments = $_POST['comments'];

		$msg = $comments."\n".$name."\n".$email."\n".$phone;

		$this->email->from('austeremag@gmail.com', 'Client Inquiry');
		$this->email->to('info@austeremag.com');
		$this->email->subject($name);
		$this->email->message($msg);
		$this->email->send();
	}
}
?>