<?php
session_start();

$targetDir = "uploads/";
$fileName = basename($_FILES["image"]["name"]);
$targetFile = $targetDir . $fileName;

$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Validation
$allowedTypes = ["jpg", "jpeg", "png", "gif"];

if (!in_array($imageFileType, $allowedTypes)) {
    $_SESSION['message'] = "Only JPG, JPEG, PNG & GIF allowed.";
    header("Location: index.php");
    exit;
}

if ($_FILES["image"]["size"] > 2 * 1024 * 1024) {
    $_SESSION['message'] = "File too large (Max: 2MB).";
    header("Location: index.php");
    exit;
}

// Upload file
if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
    $_SESSION['message'] = "Image uploaded successfully!";
} else {
    $_SESSION['message'] = "Upload failed.";
}

header("Location: index.php");
?>
