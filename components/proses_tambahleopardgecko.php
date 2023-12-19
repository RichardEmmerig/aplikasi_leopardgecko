<?php
include_once "../db/connection.php";

// Specify the target directory for file uploads
$targetDirectory = 'assets/images/gecko-user/user-1/';

// Create the target directory if it doesn't exist
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Check if files were uploaded
if (isset($_FILES['file']) && !empty($_FILES['file']['tmp_name'])) {
    // Get the uploaded files
    $files = $_FILES['file'];

    // Iterate over the uploaded files
    foreach ($files['tmp_name'] as $key => $tmpName) {
        $originalName = $files['name'][$key];
        $targetFile = $targetDirectory . basename($originalName);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($tmpName, $targetFile)) {
            echo "File uploaded successfully: $originalName\n";
        } else {
            echo "Error uploading file: $originalName\n";
        }
    }

    // Process the form data
    $kode = $_POST['kode'];
    $class = $_POST['class'];
    $morph = $_POST['morph'];
    $dam = $_POST['dam'];
    $sire = $_POST['sire'];
    // $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $incub = $_POST['incub'];
    $generasi = $_POST['generasi'];
    $harga = $_POST['harga'];

    // Prepare the SQL statement
    $sql = "INSERT INTO t_leopardgecko (kode, `class`, `morph`, dam, sire, dob, incub, generasi, harga, foto) VALUES ('$kode', '$class', '$morph', '$dam', '$sire', '$dob', '$incub', '$generasi', '$harga', '$originalName');";
    $stmt = $conn->prepare($sql);

    // Bind the values to the statement
    // $stmt->bind_param($kode, $class, $morph, $dam, $sire, $dob, $incub, $generasi, $harga, $originalName);


    // Execute the statement
    if ($stmt->execute()) {
        echo "Data saved successfully";
    } else {
        echo "Error saving data: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "No files were uploaded";
}
