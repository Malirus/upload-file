<!DOCTYPE html>
<html>
<head>
    <title>Upload File MySQL - PHP</title>
</head>
<body>
    <h1>Membuat Upload File Dengan PHP dan MySQL</h1>
    <form action="action.php" method="post" enctype="multipart/form-data"> <!-- salah tulis, multiport harusnya multipart -->
        <input type="file" name="file">
        <input type="submit" name="upload" value="Upload">
    </form>
</body>
</html>