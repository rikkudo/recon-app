<?php
$conn=mysqli_connect('localhost','root','','vcond');

$user = $_POST["user"];
$file = $_POST["file"];
$lat = $_POST["lat"];
$long = $_POST["long"];
$situation = $_POST["situation"];
$cap = $_POST["cap"];
date_default_timezone_set('Asia/Jakarta');
$waktu = date('d-m-Y H:i:s');


$file_max_weight = 20000; //limit the maximum size of file allowed (20Mb)
$ok_ext = array('jpg','png','gif','jpeg','mp4','flv','mkv','avi','3gpp','mov'); // allow only these types of files
$destination = 'upload/'; // where our files will be stored



// PHP sets a global variable $_FILES['file'] which containes all information on the file
// The $_FILES['file'] is also an array, so to have the file name we're supposed to write $_FILES['file']['name']
// To shorten that I added the following line. With that I could just do $file['name']
$file = $_FILES['file'];


$filename = explode(".", $file["name"]); 


$file_name = $file['name']; // file original name

$file_name_no_ext = isset($filename[0]) ? $filename[0] : null; // File name without the extension

$file_extension = $filename[count($filename)-1];

$file_weight = $file['size'];

$file_type = $file['type'];



// If there is no error
if( $file['error'] == 0 )
{
    // check if the extension is accepted
    if( in_array($file_extension, $ok_ext)):

        // check if the size is not beyond expected size
        if( $file_weight <= $file_max_weight ):


                // rename the file
                $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;


                // and move it to the destination folder
                if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):
					
					$sql = "INSERT INTO map(user, index1, index2, caption, time, situation, file) VALUES('$user', '$lat', '$long', '$cap', '$waktu', '$situation', '$fileNewName')";
$query = mysqli_query($conn,$sql);

echo" File uploaded !";

                else:

                    echo "can't upload file.";

                endif;


        else:

           echo "File too heavy.";

        endif;


    else:

        echo "File type is not supported.";

    endif;
}


?>