<?php

define('ROOT', 'C:/xampp/htdocs/ideable');
include ROOT . '/includes/header.php';

session_start();

?>
<div style="
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    flex-direction: column;
">
    <a href="<?php echo $_SESSION['post_fetch_doc_dir']?> " style="
    padding: 2vh;
    font-family: 'Poppins', sans-serif;
    color: #2b6777;
    font-size: 2rem;
    text-decoration: none;
    ">Doc files related to this idea</a>

    <a href="<?php echo $_SESSION['post_fetch_media_dir']?>" style="
    padding: 2vh;
    font-family: 'Poppins', sans-serif;
    color: #2b6777;
    font-size: 2rem;
    text-decoration: none;
    ">Media files related to this idea</a>
    
    <a href="<?php echo $_SESSION['post_fetch_speech_dir']?>" style="
    padding: 2vh;
    font-family: 'Poppins', sans-serif;
    color: #2b6777;
    font-size: 2rem;
    text-decoration: none;
    ">Speech of the inventor</a>
</div>