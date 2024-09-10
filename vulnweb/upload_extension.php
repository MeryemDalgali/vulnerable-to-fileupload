<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file_extension"]["name"]);
$file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$allowed_types = array("jpg", "jpeg", "png", "gif");

if (!in_array($file_type, $allowed_types)) {
    echo "Invalid file extension.";
    exit;
}

if (move_uploaded_file($_FILES["file_extension"]["tmp_name"], $target_file)) {
    echo "File successfully uploaded (Extension check).";
} else {
    echo "Error occurred while uploading the file.";
}
?>
