<?php
if ($_POST["submit"]) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = $_POST['human'];
    $from = 'Venture Contact';
    $to = 'jacobcoy9@gmail.com';
    $subject = 'Message from Venture User';

    $body = 'From: $name\n E-Mail: $email\n Message:\n $message';

if (!$_POST['name']) {
    $errName = 'Please enter your name';
}

if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEMAIL = 'Please enter a valid email address';
}

if (!$_POST['message']) {
    $errMessage = 'Please enter your message';
}    

if ($human !== 'human' || 'Human') {
    $errHuman = 'Anti-Spam answer is incorrect';
}

if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! You can expect a reply soon!</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
    }
}
}
?>

value="<?php echo htmlspecialchars($_POST['name']); ?>