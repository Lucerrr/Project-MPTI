<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('email');
    }

    public function forgot_password() {
        if($this->input->server('REQUEST_METHOD') == 'POST') {
            $email = $this->input->post('email', TRUE);

            $user = $this->User_model->get_user_by_email($email);
            if($user) {
                $subject = "Sample Website - Reset Password";
                $message = $this->load->view('emails/reset_mail_template', ['email' => $email], TRUE);
                $this->email->from('info@sample.com', 'Sample Website');
                $this->email->to($email);
                $this->email->subject($subject);
                $this->email->message($message);

                if($this->email->send()) {
                    $this->session->set_flashdata('msg_success', 'We have sent you an email to reset your password.');
                    redirect('auth/login_view');
                } else {
                    $this->session->set_flashdata('msg_error', 'There was a problem sending the email.');
                }
            } else {
                $this->session->set_flashdata('msg_error', 'Email is not registered.');
            }
        }

        $this->load->view('auth/forgot_password_view');
    }

    public function login_view() {
        $this->load->view('auth/login_view');
    }
}
