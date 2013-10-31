<?PHP
$subject = 'Subject Here';
$from = 'you@you.com';
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$body = $_POST['body'];
$dothatmagic = $_POST['dothatmagic'];
$message = $first;
$message .= ' ';
$message .= $last;
$message .= ' said: ';
$message .= $body;
if ($dothatmagic=='true') {
if (empty($first) OR empty($last) OR empty($email) OR empty($body)) {
echo 'Sorry one of the fields you entered were empty';
}
else {
mail($email, $subject, $message, "From: $from");
}
}
?>
