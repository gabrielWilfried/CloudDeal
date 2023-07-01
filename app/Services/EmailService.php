<?php
    use Illuminate\Support\Facades\Mail;

    class EmailService
    {
        public function sendEmail($to, $subject, $content)
        {
            Mail::send([],[], function ($message) use ($to, $subject, $content) {
                $message->to($to)->subject($subject)->setBody($content);
            });
        }
    }
