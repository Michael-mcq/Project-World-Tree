<?php
include('phpmailer.php');
class Mail extends PhpMailer
{
    // Set default variables for all new objects
    public $From     = 'smtp.mailtrap.io';
    public $FromName = SITETITLE;
    public $Host     = 'smtp.mailtrap.io';
    public $Mailer   = 'smtp';
    public $SMTPAuth = true;
    public $Username = 'fbe32f25752882';
    public $Password = '6795573cf92a5a';
    //public $SMTPSecure = 'tls';
    public $WordWrap = 75;

    public function subject($subject)
    {
        $this->Subject = $subject;
    }

    public function body($body)
    {
        $this->Body = $body;
    }

    public function send()
    {
        $this->AltBody = strip_tags(stripslashes($this->Body))."\n\n";
        $this->AltBody = str_replace("&nbsp;", "\n\n", $this->AltBody);
        return parent::send();
    }
}
