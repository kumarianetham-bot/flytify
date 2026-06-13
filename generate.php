<?php
// ─────────────────────────────────────────────
// 1. CHECK IF FORM WAS SUBMITTED
// ─────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: test.php');
    exit;
}

// ─────────────────────────────────────────────
// 2. READ FORM DATA
// ─────────────────────────────────────────────
$fullName       = $_POST['full_name'] ?? '';
$companyName    = $_POST['company_name'] ?? '';
$tagline        = $_POST['tagline'] ?? '';
$email          = $_POST['email'] ?? '';
$phone          = $_POST['phone'] ?? '';
$model          = $_POST['model'] ?? 'model1';
$primaryColor   = $_POST['primary_color'] ?? '#3B82F6';
$secondaryColor = $_POST['secondary_color'] ?? '#1E3A5F';

// ─────────────────────────────────────────────
// 3. CONNECT TO THE DATABASE
// ─────────────────────────────────────────────
$host = 'localhost';
$db   = 'flytify';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}

// ─────────────────────────────────────────────
// 4. HANDLE FILE UPLOAD
// ─────────────────────────────────────────────
$logoPath = '';

if (isset($_FILES['logo']) && $_FILES['logo']['error'] === 0) {
    $ext      = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
    $filename = 'logo_' . time() . '.' . $ext;
    $destination = 'uploads/' . $filename;

    if (move_uploaded_file($_FILES['logo']['tmp_name'], $destination)) {
        $logoPath = $destination;
    }
}

// ─────────────────────────────────────────────
// 5. SAVE TO DATABASE
// ─────────────────────────────────────────────
$sql = "INSERT INTO submissions 
        (full_name, company_name, tagline, email, phone, primary_color, secondary_color, custom_image_path, model) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $fullName,
    $companyName,
    $tagline,
    $email,
    $phone,
    $primaryColor,
    $secondaryColor,
    $logoPath,
    $model
]);

// ─────────────────────────────────────────────
// 6. RENDER THE BROCHURE
// ─────────────────────────────────────────────
$templateFile = 'models/' . $model . '.html';

if (!file_exists($templateFile)) {
    die('Template not found!');
}

$template = file_get_contents($templateFile);

$replacements = [
    '{{FULL_NAME}}'       => htmlspecialchars($fullName),
    '{{COMPANY_NAME}}'    => htmlspecialchars($companyName),
    '{{TAGLINE}}'         => htmlspecialchars($tagline),
    '{{EMAIL}}'           => htmlspecialchars($email),
    '{{PHONE}}'           => htmlspecialchars($phone),
    '{{PRIMARY_COLOR}}'   => htmlspecialchars($primaryColor),
    '{{SECONDARY_COLOR}}' => htmlspecialchars($secondaryColor),
    '{{LOGO_PATH}}'       => htmlspecialchars($logoPath),
];

$output = str_replace(
    array_keys($replacements),
    array_values($replacements),
    $template
);

// Save brochure as a file
$brochureFile = 'uploads/brochure_' . time() . '.html';
file_put_contents($brochureFile, $output);

// Redirect to thank you page
header('Location: thankyou.php?name=' . urlencode($fullName) . '&brochure=' . urlencode($brochureFile));
exit;
?>