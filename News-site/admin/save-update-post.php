<?php
include "config.php";

if (empty($_FILES['new-image']['name'])) {
    // If no new image is uploaded, keep the old image
    $image_name = $_POST['old_image'];
} else {
    // If a new image is uploaded, validate and process it
    $errors = array();

    $file_name = $_FILES['new-image']['name'];
    $file_size = $_FILES['new-image']['size'];
    $file_tmp = $_FILES['new-image']['tmp_name'];
    $file_ext = strtolower(end(explode('.', $file_name)));

    $extensions = array("jpeg", "jpg", "png");

    if (!in_array($file_ext, $extensions)) {  // if error show in script formate 
        $errors[] = "This extension file is not allowed. Please choose a JPG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = "File size must be 2MB or lower.";
    }

    $new_name = time() . "-" . basename($file_name);
    $target = "upload/" . $new_name;

    if (empty($errors)) {
        if (move_uploaded_file($file_tmp, $target)) {
            $image_name = $new_name;
        } else {
            $errors[] = "Failed to upload the image. Please try again.";
        }
    }

    if (!empty($errors)) {
        print_r($errors);
        die();
    }
}

// Update the post details
$sql = "UPDATE post SET 
        title = '{$_POST["post_title"]}', 
        description = '{$_POST["postdesc"]}', 
        category = {$_POST["category"]}, 
        post_img = '{$image_name}' 
        WHERE post_id = {$_POST["post_id"]};";

// Update category post count if the category has changed
if ($_POST['old_category'] != $_POST["category"]) {
    $sql .= "UPDATE category SET post = post - 1 WHERE category_id = {$_POST['old_category']};";
    $sql .= "UPDATE category SET post = post + 1 WHERE category_id = {$_POST["category"]};";
}

$result = mysqli_multi_query($conn, $sql);

if ($result) {
    header("location: {$hostname}/admin/post.php");
} else {
    echo "Query Failed";
}
?>
