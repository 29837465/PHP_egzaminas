
<!DOCTYPE html>
<html lang="en">
<head>
    <title>5 užduotis</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        Įkelkite pasirinktą failą:
        <br>
        <input type="text" name="filename" placeholder="Enter your file name"><br><br>
        <input type="file" name="my_file"><br><br>
        <input type="submit" value="Start Upload">
    </form>
</body>
</html>