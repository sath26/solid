<?php
interface MailerInterface
{
    public function send();
}
class SmtpMailer implements MailerInterface
{
    public function send()
    {
        // Send an email via SMTP
    }
}
class SendSlackMailer implements MailerInterface
{
    public function send()
    {
        // Send a message via Slack
    }
}
class SendWelcomeMessage
{
    private $mailer;
    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
}
/*
https://www.freecodecamp.org/news/a-quick-intro-to-dependency-injection-what-it-is-and-when-to-use-it-7578c84fa88f/
transferring the task of creating the object to someone else and directly using the dependency is  dependency injection.

*/
//make a classs which calls sendslackmailer or smtpmailer and then pass anyone to sendwecomemessage object
//how does interface takes class object 