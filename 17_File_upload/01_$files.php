<?php 
    //$_FILES :
    // 1. It is a superglobal variable in PHP.
    // 2. It is used to collect data after submitting an HTML form.
    // 3. It can collect data sent in both GET and POST methods.
    // 4. It is used to upload files to the server.
    // 5. It is an associative array.
    // 6. It contains the following information about the uploaded file:
    //    a. name : The name of the file.
    //    b. type : The MIME type of the file.
    //    c. tmp_name : The temporary name of the file on the server.
    //    d. error : The error code associated with the file upload.
    //    e. size : The size of the file in bytes.
    // 7. It is used to handle file uploads in PHP.


   // Process the form data when the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form data
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $user_age = $_POST["user_age"];
    $user_phone = $_POST["user_phone"];

    echo "<h1>Form Data</h1>";
    echo "<p>User Name: $user_name</p>";
    echo "<p>User Email: $user_email</p>";
    echo "<p>User Age: $user_age</p>";
    echo "<p>User Phone: $user_phone</p>";
    echo "<hr>";
    // File data
    if($_FILES["user_file"]){
        echo "<h1>File Data</h1>";
        $file_name = $_FILES["user_file"]["name"]; // The name of the file
        $file_tmp_name = $_FILES["user_file"]["tmp_name"];// The temporary name of the file on the server
        $file_size = $_FILES["user_file"]["size"];// The size of the file in bytes

        $upload_path = "./uploads/".$file_name; // Define the upload directory

        //move_uploaded_file() function is used to move the uploaded file from the temporary location to the desired location on the server.
        // It takes two parameters: the temporary file name and the destination path.
        if(move_uploaded_file($file_tmp_name, $upload_path)){
            echo "<p>File Name: $file_name</p>";
            echo "<p>File Size: $file_size bytes</p>";
            echo "<p>File Path: <a href='$upload_path' target='_blank'>Click to View File</a></p>";
        }else{
            echo "<p>Error: Failed to move the uploaded file.</p>";
        }
    }
} else {
    echo "<p><strong>Error:</strong> Invalid form submission.</p>";
}

?>