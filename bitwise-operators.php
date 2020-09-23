<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitwise operators</title>
</head>
<body>
    <?php

    $readPost = 1;
    $writePost = 2;
    $deletePost = 4;
    $deleteUser = 8;

    $guest = $readPost;
    $user = $readPost | $writePost;
    $moderator = $readPost | $writePost | $deletePost;
    $admin = $readPost | $writePost | $deletePost | $deleteUser;

    /*
    0 0 0 0 0 0 0
    0 0 0 0 0 0 1 - readnig
    0 0 0 0 0 1 0 - writing
    0 0 0 0 0 1 1 - read and write
    0 0 0 0 1 0 0 - delete post
    0 0 0 1 0 0 0 - delete user

    */

        if (checkPermission ($admin , $writePost) ) 
            postWrite("Cześć jestem tu administratorem :) ");
        
        // if (checkPermission($guest , $writePost) ) 
            // postWrite("Cześć jestem spamerem");    


        function postWrite($contentOfPost)
        {
            echo $contentOfPost;
        }

        // echo "<br/>";

        function checkPermission($user, $permission)
        {
            if($user & $permission)
                return true;
        }
        
        ?>
</body>
</html>