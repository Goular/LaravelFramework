<?php
namespace App\Mailer;

/**
 * 发送邮件的基础类
 * Class Mailer
 * @package App\Mailer
 */
class Mailer
{
    public function sendTo($user, $subject, $view, $data = [])
    {
        \Mail::queue($view, $data, function ($message) use ($user, $subject) {
            $message->to($user->email)->subject($subject);
        });
    }
}