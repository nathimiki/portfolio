<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "contato@annapancioli.com";
    $email_subject = "Novo contato";

    function problem($error)
    {
        echo "There was something wrong with the email";
        echo "Errors:<br><br>";
        echo $error . "<br><br>";
        echo "Please fix and send again.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Phone']) ||
        !isset($_POST['Budget']) ||
        !isset($_POST['Message'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $phone = $_POST['Phone']; 
    $budget = $_POST['Budget']; 
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The email account does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The name does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The message does not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Detalhes do formulário abaixo.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Nome: \n " . clean_string($name) . "\n\n";
    $email_message .= "Email: \n " . clean_string($email) . "\n\n";
    $email_message .= "Phone: \n " . clean_string($phone) . "\n\n";
    $email_message .= "Budget: \n " . clean_string($budget) . "\n\n";
    $email_message .= "Mensagem: \n " . clean_string($message) . "\n\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->

    Thank you for your message! I will be in tuch soon.

<?php
}
?>