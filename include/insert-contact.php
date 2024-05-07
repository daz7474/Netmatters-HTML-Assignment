<?php

require_once("db-con.php");

header('Content-Type: application/json');

// Check if PDO is null
if ($pdo === null) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to connect to the database']);
    exit();
}

// Get form data
$name = isset($_POST['contact-name']) ? $_POST['contact-name'] : '';
$company = isset($_POST['company']) ? $_POST['company'] : '';
$email = isset($_POST['contact-email']) ? $_POST['contact-email'] : '';
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';
$marketing = isset($_POST['marketing']) ? 1 : 0;

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
} elseif (!preg_match('/^(\d{11})|(\+44[\s-]?\d{10})$/', $telephone)) {
    $errors['telephone'] = 'Phone number is invalid.';
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

if (strlen($message) > 1000) {
    $errors['message'] = 'Message is too long.';
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['errors' => $errors]);
    exit();
}

// Sanitize inputs
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$company = htmlspecialchars($company, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$telephone = htmlspecialchars($telephone, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// SQL execution
try {
$sql = "INSERT INTO contact_form (name, email, company_name, phone, message, marketing) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $company, $telephone, $message, $marketing]);
echo json_encode(['success' => 'Message sent successfully']);
} catch (PDOException $e) {
    error_log("SQL error: " . $e->getMessage());
    echo json_encode(['error' => 'Failed to insert data into the database']);
    exit();
}

?>