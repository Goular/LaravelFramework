<?php
/**
 * Created by PhpStorm.
 * User: zhaoj
 * Date: 2017/9/14
 * Time: 22:35
 */

namespace App\Mailer;


class UserMailer extends Mailer
{
    /**
     * 发送注册验证邮件
     * @param $user
     */
    public function welcome($user)
    {
        $subject = "欢迎注册【加工屋】";
        $view = "emails.welcome";
        $data = ['name' => $user->name];
        $this->sendTo($user, $subject, $view, $data);
    }
}