<?php
function getArticle($conn, $id){
    $sql = "SELECT * FROM article WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        echo mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);

        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }
    
}


function validateArticle($title, $content, $published_at){

    $errors = [];
    
    if ($_POST['title'] == '') {
        $errors[] = "Title is not found please write down title of the article";
    }
    if ($_POST['content'] == '') {
        $errors[] = "Content is not found please write down content of the article";
    }
    
    // if ($_POST['published_at'] != '') {
    //     $dateTime = date_create_from_format('m-d-Y H:i:s', $published_at);
    //     if ($dateTime === false) {
    //         $errors[] = "Date and Time is invalid 12";
    //     }else{
    //         $dateErr = date_get_last_errors();  
    //         if ($dateErr['warning_count'] > 0) {
    //             $errors[] = "Date and Time is invalid 55";
    //         }
    //     }
    // }
    if ($_POST['published_at'] == '') {
        $errors[] = "Date or Time is not found!!!";
        }
    return $errors;
}

?>