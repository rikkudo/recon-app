<?php
$conn=new mysqli("localhost","root","","vcond");

if(isset($_POST["submit"])){
$user = $_POST["user"];
$lat = $_POST["lat"];
$long = $_POST["long"];
$situation = $_POST["situation"];
$cap = $_POST["cap"];
date_default_timezone_set('Asia/Jakarta');
$waktu = date('d-m-Y H:i:s');

$file = $_FILES['file'];
$jeneng = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
$max_size = 200000; //limit the maximum size of file allowed (20Mb)
$ext = array('jpg','png','gif','jpeg','mp4','flv','mkv','avi','3gpp','mov','ogv','wmv'); // allow only these types of files
$destination = 'upload/'; // where our files will be stored

$filename = explode(".", $jeneng);
$file_name_no_ext = isset($filename[0]) ? $filename[0] : null; // File name without the extension
$file_extension = $filename[count($filename)-1];

if( $file['error'] == 0 )
{
    // check if the extension is accepted
    if( in_array($file_extension, $ext)):

        // check if the size is not beyond expected size
        if( $size <= $max_size ):


                // rename the file
                $fileNewName = $file_name_no_ext[0].microtime() .'.'.$file_extension ;


                // and move it to the destination folder
                
					
					$sql = "INSERT INTO map(user, index1, index2, caption, time, situation, file) VALUES('$user', '$lat', '$long', '$cap', '$waktu', '$situation', '$fileNewName')";

if( $query = mysqli_query($conn,$sql) ):

move_uploaded_file($_FILES['file']['tmp_name'], $destination.$fileNewName);

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



}
?>