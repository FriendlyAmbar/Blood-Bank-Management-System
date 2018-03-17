<?php
function setComments($conn) {
    
    if(isset($_POST['commentSubmit'])){
        $uname = $_POST['uname'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO comment (uname, date, message) VALUES ('$uname', '$date', '$message')";
        $result = mysqli_query($conn, $sql);
    }
    
}

function getComments($conn) {
    $sql = "SELECT * FROM comment ORDER BY cid DESC";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['uname'];
         $sql2 = "SELECT * FROM hospitals WHERE id='$id'";
        $result2 = mysqli_query($conn, $sql2);
        if($row2 = mysqli_fetch_assoc($result2)){
        echo '<div class="commentBox">';
        echo  $row2['hospital'].' - ';
        echo  $row['date'].'<br>';
        echo  nl2br($row['message']);
            if(isset($_SESSION['uhid'])) {
              if($_SESSION['uhid'] == $row2['id']) {
                echo '
                <form class="editform" action="editcomment.php" method="post">
                <input type="hidden" name="cid" value="'.$row["cid"].'">
                <input type="hidden" name="uname" value="'.$row["uname"].'">
                <input type="hidden" name="date" value="'.$row["date"].'">
                <input type="hidden" name="message" value="'.$row["message"].'">
                <button class="editbtn">Edit</button>
                </form>
                <form class="deleteform" action="'.deleteComment($conn).'" method="post">
                <input type="hidden" name="cid" value="'.$row["cid"].'">
                <button name="deletecomment" type="submit" class="deletebtn">Delete</button>
                </form>';
              }  else {
                  echo '
                <form class="replyform" action="replycomment.php" method="post">
                <input type="hidden" name="cid" value="'.$row["cid"].'">
                <input type="hidden" name="uname" value="'.$row["uname"].'">
                <input type="hidden" name="date" value="'.$row["date"].'">
                <input type="hidden" name="message" value="'.$row["message"].'">
                <button class="editbtn">Reply</button>
                </form>';              
              }
            } else {
                echo '<div class="replysignin">
                    Sign-In to Reply
                    </div>
                ';
            }
        echo '</div>';
        }
    }
} 
      
function editComment($conn) {
    if(isset($_POST['commentSubmit'])){
        $cid = $_POST['cid'];
        $uname = $_POST['uname'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        $sql = "UPDATE comment SET message='$message' WHERE cid='$cid'";
        $result = mysqli_query($conn, $sql);
        header("Location: blog.php?edit=success");
        exit();
    }
    
}

function deleteComment($conn) {
    if(isset($_POST['deletecomment'])){
        $cid = $_POST['cid'];
        $sql = "DELETE FROM comment WHERE cid='$cid'";
        $result = mysqli_query($conn, $sql);
        header("Location: blog.php?delete=success");
        exit();
    }
}

function replyComment($conn) {
    if(isset($_POST['replySubmit'])){
            $cid = $_POST['cid'];
            $uname = $_POST['uname'];
            $date = $_POST['date'];
            $message = $_POST['message'];
            $sql = "INSERT INTO comment (uname, date, message) VALUE ('$uname', '$date', '$message')";
            $result = mysqli_query($conn, $sql);
            header("Location: blog.php?reply=success");
            exit();
    }
    
}