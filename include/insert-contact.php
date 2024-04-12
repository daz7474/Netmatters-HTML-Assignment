<?php

$pdo = null;

try {
    $env = parse_ini_file("../.env");
    $host = $env["DB_HOST"];
    $dbname = $env["DB_NAME"];
    $username = $env["DB_USERNAME"];
    $password = $env["DB_PASSWORD"];

    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("Connection error: " . $e->getMessage());
}

header('Content-Type: application/json');

// Check if PDO is null
if ($pdo === null) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to connect to the database']);
    exit();
}

// Get form data
$name = filter_input(INPUT_POST, 'contact-name', FILTER_SANITIZE_STRING);
$company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'contact-email', FILTER_SANITIZE_EMAIL);
$telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

// Validation
$errors = [];
if (empty($name)) {
    $errors['contact-name'] = 'Name is required.';
}

if (empty($email)) {
    $errors['contact-email'] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['contact-email'] = 'Email is not valid.';
}

if (empty($telephone)) {
    $errors['telephone'] = 'Telephone is required.';
}

if (empty($message)) {
    $errors['message'] = 'Message is required.';
}

if (strlen($name) > 255) {
    $errors['contact-name'] = 'Name is too long.';
}

if (strlen($email) > 255) {
    $errors['contact-email'] = 'Email is too long.';
}

if (strlen($company) > 255) {
    $errors['company'] = 'Company name is too long.';
}

if (!ctype_digit($telephone) || strlen($telephone) != 11) {
    $errors['telephone'] = 'Phone number is invalid.';
}

if (strlen($message) > 1000) {
    $errors['message'] = 'Message is too long.';
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['errors' => $errors]);
    exit();
}

// SQL execution
$sql = "INSERT INTO contact_form (name, email, company_name, phone, message) VALUES (?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $company, $telephone, $message]);
echo json_encode(['success' => 'Message sent successfully']);

?>