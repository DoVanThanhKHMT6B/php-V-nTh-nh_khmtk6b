<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>

        <?php
    #$GLOBALS
        $x=75;
        function myfuntion(){
            global $x;
            echo $GLOBALS['x'];
            echo $x;
            }
            myfuntion();
            echo "<br>";
    #$_SERVER
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";
            echo $_SERVER['HTTP_REFERER'];
            echo "<br>";
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";
            echo $_SERVER['SCRIPT_NAME'];
            echo "<br>";
    
    #$_REQUEST  "$_REQUEST['field name]"

    #bieu thuc chinh quy $exp="/<pattern>/i";
    /*
    preg_match() tra ve 1 neu ham nam trong sau
    preg_match_all() tra ve so luong cac pattern xuat hien trong sau
    preg_replace() thay the 1 sau bang 1 pattern
    */  
            $str="Visit Hanoi city";
            $pattern="/Hanoi/i";
            echo preg_match($pattern,$str);
            echo "<br>";
            
            $str="the rain in SPAIN falls mainly on the plains. ";
            $pattern="/ain/i";
            echo preg_match_all($pattern,$str);
            echo "<br>";

            $str="Visit Microsoft!";
            $pattern="/microsoft/i";
            echo preg_replace($pattern,"Hanoi",$str);
            echo "<br>";
    #$_GET: la mot bien mang de lay ra cac mang thong qua url
    #$_POST:la mot bien mang lay ra cac mang thong tin qua phuong thuc post
        ?>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
