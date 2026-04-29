<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Upload Image</h2>
<p>Developed by gohilmitrajsinh</p>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <br><br>
    <input type="submit" value="Upload">
</form>

<br>
<a href="gallery.php">View Gallery</a>

<?php
if (isset($_SESSION['message'])) {
    echo "<p>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']);
}
?>

</body>
</html>
