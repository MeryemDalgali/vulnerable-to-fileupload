<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file_content_type"]["name"]);

$allowed_types = array('image/jpeg', 'image/png');

if (!in_array($_FILES["file_content_type"]["type"], $allowed_types)) {
    echo "Invalid content type.";
    exit;
}

if (move_uploaded_file($_FILES["file_content_type"]["tmp_name"], $target_file)) {
    echo "File successfully uploaded (Content Type check).";
} else {
    echo "Error occurred while uploading the file.";
}
?>
