<?php
class Mailer
{
    // Methods for a Mailer class
}
class SendWelcomeMessage
{
    private $mailer;
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}