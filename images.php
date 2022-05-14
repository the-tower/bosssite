<!DOCTYPE html>
<html>
    <head>
        <title>Image Repo</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php include 'navbar.html' ?>

        <center>
            <h1>BossOS Image Repository</h1>
        </center>

        <div class=content>
            <h3>Note: All wallpapers are very high res (>=4k) and can take a bit to load/download</h3>
            <p><a href=#wallpapers>Jump to wallpapers</a>. Wallpapers can also be view at <a href=https://github.com/Chicken-in-a-Can/BossOS/tree/main/Configs">github</a></p>

            <h3>Evolution of the development server</h3>
            <p>No images available yet</p>
            
            <h3><a id="wallpapers">Wallpapers</a></h3>
            <div class=wallpapers>
<?php
$walldir = "./images/wallpapers";

if (is_dir($walldir)){
    if ($dh = opendir($walldir)){
        while (($file = readdir($dh)) !== false){
            if (str_ends_with($file, ".jpg")){
                echo "<img src='./images/wallpapers/" . $file . "'</img>";
                echo "<a href='./images/wallpapers/" . $file . "'>Download</a>";
                echo "<p></p>";
            }
        }
        closedir($dh);
    }
}

?>
            </div>
        </div>
    </body>
</html>
