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
        $ten="nguyen van an";
        echo "<h1> $ten </h1> <br> ";
        var_dump(5);
        var_dump("thanh");
        var_dump(3.14);
        var_dump(true);
        var_dump([2,3,55]);
        var_dump(null);
        $x=$y=$z="shit <br>";
        echo $x; echo"<br>";
        echo $y;
        echo $z;
        echo"<br>";
       $x=5;//global scope
       function myTest(){
        global $x;
        echo"<p> Variable x inside function is:  $x</p>";
       }
       myTest();
       echo"<p> Variable x outside function is: $x</p>";
       // de tao duoc bien tinh
       function test(){
        static $x=0;
        echo $x;
        $x++;
       }
       test();
       echo"<br>";
       test();
       echo"<br>";
       test();
       // mang
       array("Volvo","Bmw", "toyota");
       var_dump($cars);
       $x= "hello";
       $x=null;
       var_dump($x);

       echo"hello";
       print"loconcac";echo"<br>";
       //tra ve do dai cua sau
       echo strlen("hello em!");echo"<br>";
       // tra ve so tu
       echo str_word_count("hello iem!");echo"<br>";
       //tra ve sau con trong sau kia
       echo strpos("hello iem!","world");
       echo"<br>";
       $x=5985;
       var_dump(is_numeric($x));
       echo"<br>";
       $x="5985";
       var_dump(is_numeric($x));
       echo"<br>";
       $x="59.85"+100;
       var_dump(is_numeric($x));
       echo"<br>";
       //tạo sâu
       define("dh","xin chao dai hoc ha long");
       echo(dh);
        $ho="Do Van";
        $ten="Thanh";
        echo $ho.$ten;
        echo"<br>";
        echo $ho .= $ten;
        // viết chương trình để đưa ra lời chào khách hàng biết rằng: nếu tuổi <= 20 thì ghi ra là " chào em" nếu tuổi >=20 <40,
         //nam thì gọi là "anh", nữ thì gọi là " chị",nếu tuổi >=40 <60 thì ghi ra " chào bác", nếu tuổi >60 nữ thì" chào bà" 
        // nam thì "chào ông"
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
