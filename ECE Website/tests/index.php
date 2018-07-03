<?php
if (isset($_POST['doc'])) {
    $var = $_POST['doc'];
    echo $var;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>TinyMCE Test</title>
    <script src="../tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
<form action="/tests/index.php" method="POST">
    <h2 style="text-align: center;">TinyMCE Editor Demo</h2>

    <textarea name="doc">Write something here</textarea>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>