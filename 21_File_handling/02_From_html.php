<form action="" method="post">
    <input type="text" name="name" placeholder="Enter your file name" required>
    <br>
    <br>
    <textarea name="content" placeholder="Enter your content" required></textarea>
    <br>
    <br>
    <button type="submit" name="submit">Submit</button>
    
</form>
<?php
    if(isset($_POST['submit'])){
        $filename = $_POST['name'];
        $content = $_POST['content'];
        $file = fopen($filename, "a+"); 
        if ($file === false) {
            die("Error opening the file.");
        }
       
        fwrite($file, $content); // Write to the file
        fclose($file); // Close the file

    }

?>
