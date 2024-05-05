<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 收集表单数据
    $username = $_POST['username'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    // 邮箱地址
    $to = "3128096215@qq.com"; // 将此替换为你想要接收邮件的邮箱地址

    // 邮件主题
    $email_subject = "成功送达！";

    // 邮件内容
    $email_body = "You have received a new message from the contact form on your website.\n\n".
                  "Name: $username\n".
                  "Email: $email\n".
                  "Subject: $subject\n".
                  "Phone: $phone\n".
                  "Message:\n$message";

    // 发送邮件
    mail($to, $email_subject, $email_body);

    // 可以根据需要重定向用户到另一个页面
    header('Location: thank_you.html');
}
?>
