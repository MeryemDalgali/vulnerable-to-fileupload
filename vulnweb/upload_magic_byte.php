<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file_magic_byte"]["name"]);
$file = $_FILES["file_magic_byte"]["tmp_name"];
$magic_bytes = bin2hex(file_get_contents($file, false, null, 0, 4));
$allowed_magic_bytes = array('ffd8ffe0', '89504e47'); // Magic bytes for JPEG and PNG

if (!in_array($magic_bytes, $allowed_magic_bytes)) {
    echo "Invalid file content.";
    exit;
}

if (move_uploaded_file($_FILES["file_magic_byte"]["tmp_name"], $target_file)) {
    echo "File successfully uploaded (Magic Byte check).";
} else {
    echo "Error occurred while uploading the file.";
}
?>
