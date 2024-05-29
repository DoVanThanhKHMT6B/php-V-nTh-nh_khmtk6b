<!doctype html>
<html lang="en">
    <head>
        <title></title>
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
        function familyName($fname){
            echo"$fname Refsnes.<br>";
        }
        familyName("Jani");
        familyName("Join");
        familyName("Krick");
        familyName("Mamba");
        familyName("Jack");

 #Tham chieu: 
    function add_five(&$value){
       $value +=5;
     }
     $num=2;
     add_five($num);
     echo $num ."<br>";

#su dung dau 3 cham de xac dinh so luong khi khong biet so luong tham so truyen vao
     function sumMyNumbers(...$x){
        $n=0;
        $len=count($x);
        for($i=0;$i<$len;$i++){
            $n+=$x[$i];
        }
        return $n;
     }
     $a=sumMyNumbers(5,4,7,2,3,6);
       echo $a."<br>";
#tao mang
    #1
     $carsA=array("volvo","bmv","honda");
    print_r($carsA);
    echo "<br>";
    #2
   $carsB=["volvo","bmv","honda"];
    print_r($carsB);
    echo "<br>";
    #3
    $carsC=[
    "volvo",
    "bmv",
    "honda"
    ];
     print_r($carsC);
     echo "<br>";
    #4
     $carsD=[
     0=> "volvo",
     1=> "bmv",
     2=> "honda"
    ];
    print_r($carsD);
    echo "<br>";
    #5
    $carsE=[];
    $cars[0]="volvo";
    $cars[1]="bmv";
    $cars[2]="honda";
    print_r($carsE);
    echo "<br>";
    #6 pp hon hop
    $myArr=[];
    $myArr[0]="apples";
    $myArr[1]="bananas";
    $myArr["fruit"]="cherries";
    print_r($myArr);
    echo "<br>";
 #them phan tu vao mang
    #1
    $fruits=array("apples","bananas","cherries");
    $fruits[]="orange";
    print_r($fruits);
    echo "<br>";
    #2
    $cars=array("brand"=>"ford","model"=>"mustang");
     $cars["color"]="red";
    print_r($cars);
    echo "<br>";
    #3
    $fruitA=array("apples","bananas","cherries");
    array_push($fruitA,"orange","kiwi","lemon");
    print_r($fruitA);
    echo "<br>";
    #4
    $cars1=array("brand"=>"ford","model"=>"mustang");
    $cars1+=["color"=>"red","year"=>1964];
    print_r($cars1);
    echo "<br>";
#huy bo su dung
    #1
   $cars2=array("volvo","bmv","honda");
    array_splice($cars2,1,1);
    echo $cars2[0],",",$cars2[1];
    echo "<br>";
    #2
    $cars3=array("volvo","bmv","honda");
    unset($cars3[1]);
    #echo $cars3[0],",",$cars3[2],"\n";
    #echo $cars3[0],",",$cars3[1],"\n";
    print_r($cars3);
    echo "<br>";
    #3
    $cars4=array("volvo","bmv","honda");
    array_shift($cars4);
    array_pop($cars4);
    #echo $cars4[0],$cars4[1],$cars4[2]
    print_r( $cars4);
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
