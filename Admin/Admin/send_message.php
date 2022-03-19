 <?php
    require_once("connection.php");

    session_start();
    if(isset($_POST['msg'])){       
        $content = addslashes($_POST['content']);
        $to_user = $_POST['to_user'];
         $from_user = $_POST['from_user'];
        mysqli_query($conn,"insert into `message_chat` (from_user, to_user, content) values ('$from_user', '$to_user','$content')") or die(mysqli_error());
    }
?>