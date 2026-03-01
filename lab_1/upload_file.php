<?php
$upload_dir = __DIR__ . "/uploads/";

if (isset($_FILES["file"])) {
    if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_dir . $_FILES['file']['name'])) {
        echo "Upload successful!";
    } else {
        echo "Upload failed!";
    }
} else {
    echo "No file uploaded.";
}
?>
