<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1.0>
    <title>Simple Form</title>
    <style>
        div {
            margin: 20px;
        }
        label {
            font-size: 22px;
        }
        input, textarea, button {
            font-size: 18px;
            height: 30px;
            width: 100%;
            max-width: 300px;
        }
        textarea {
            min-height: 100px;
        }
        button {
            cursor: pointer;
        }
    </style>
    </head>
    <body>
        <!-- Show submitted form result in another page -->
        <form action="form-result.php" method="post">
            <div>
                <label>
                    Name:<br>
                    <input type="text" name="name" required>
                </label>
            </div>
            <div>
                <label>
                    Email:<br>
                    <input type="email" name="email">
                </label>
            </div>
            <div>
                <label>
                    Phone:<br>
                    <input type="phone" name="phone">
                </label>
            </div>
            <div>
                <label>
                    Message:<br>
                    <textarea name="message"></textarea>
                </label>
            </div>
            <div>
                <button type="submit">Submit Form</button>
            </div>
        </form>
        <br>

        <!-- Keep inserted value, autocomplete off, autofocus -->
        <form action="" method="POST">
            <div>
                <input type="type" name="number" value="<?php if(isset($_POST['number'])) { echo $_POST['number'];} ?>" placeholder="type number..." autocomplete="off" autofocus>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>

        <!-- Print number result -->
         <div>
            <!-- <?php
                // GET Method
                if(isset($_GET['number'])) {
                    for($i = 1; $i <= $_GET['number']; $i++) {
                        for($n = 1; $n <= $i; $n++) {
                            echo $n;
                        }
                        echo "<br>";
                    }
                }
            ?> -->
            <br>

            <?php
                // POST Method
                if(isset($_POST['number'])) {
                    for($i = 1; $i <= $_POST['number']; $i++) {
                        for($n = 1; $n <= $i; $n++) {
                            echo $n;
                        }
                        echo "<br>";
                    }
                }
            ?>
         </div>
        <br>
        
        <!-- Show uploaded profile image -->
        <div>
            <?php
                if(isset($_POST['image_form'])) {
                    $path = $_FILES['file_upload'] ['name'];
                    $path_tmp = $_FILES['file_upload'] ['tmp_name'];

                    try {

                        if($_FILES['file_upload'] ['size']/1024/1024 > 2) {
                            throw new Exception("File size should be less than 2 Mb");
                        }

                        $extension = pathinfo($path, PATHINFO_EXTENSION);
                        // echo $extension;

                        $filename = "img_" .time().".".$extension;
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        $mime = finfo_file($finfo, $path_tmp);
                        // echo $mime;

                        if($mime != 'image/jpeg' && $mime != 'images/png') {
                            throw new Exception("Invalid File Type!");
                        }

                        move_uploaded_file($path_tmp, 'images/' .$filename);
                        echo "Success!";

                    } catch(Exception $e) {
                        $error = $e -> getMessage();
                    }
                }
            ?>
        </div>

        <!-- Receive user file input using post method -->
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <input type="file" name="file_upload">
                <h3>Upload Profile Image</h3>
            </div>
            <div>
                <button type="submit" name="image_form">UPDATE IMAGE</button>
            </div>
        </form>
    </body>
</html>