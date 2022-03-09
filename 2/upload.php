<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form enctype="multipart/form-data" method="post">
    <input type="file" name="test-file">
    <br><br>
    <input type="submit">
</form>
</body>
</html>
<?php
include_once('ListFiles.php');

if (!empty($_FILES)) {
    $tmpName = $_FILES['test-file']['tmp_name'];
    if (substr($_FILES['test-file']['name'], -4) !== '.csv') die('Неверный формат файла');
    ListFiles::createFromCsv($tmpName);
}

