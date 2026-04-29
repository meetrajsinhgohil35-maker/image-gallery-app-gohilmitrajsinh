<?php
$images = glob("uploads/*");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Image Gallery</h2>
<p>Developed by gohilmitrajsinh</p>

<a href="index.php">Upload More</a>

<div class="gallery">
    <?php foreach ($images as $img): ?>
        <div class="image-box">
            <img src="<?php echo $img; ?>" width="200">
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
