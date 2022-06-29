<?php
function getArticle($conn, $id)
{
    $sql = "SELECT * FROM article WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    if ($stmt->execute()) {
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}



function validateArticle($title, $content, $published_at)
{

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
