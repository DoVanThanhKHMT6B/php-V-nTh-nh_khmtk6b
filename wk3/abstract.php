
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
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <?php
            /*
            lớp ảo cha phải có ít nhất 1 phương thức ảo.
            phương thức ảo là phương thức chỉ khai báo chứ không định nghĩa, không có thân hàm.
            một lớp con kế thừa từ một lớp ảo thì phải định nghĩa lại các phương thức ảo ở lớp cha tức có thân hàm
            */

            abstract class ParentClass{
                abstract protected function prefixName($name);
            }
            class childClass extends ParentClass{
                public function prefixName($name){
                    if($name=="John Doe"){
                        $prefix="Mr.";
                    }elseif($name=="jane Doe"){
                        $prefix="Mrs.";
                    }else{
                        $prefix="";
                    }
                    return"{$prefix}{$name}";
                }
            }
            $class=new childClass;
            echo $class->prefixName("John Doe");
            echo"<br>";
            echo $class->prefixName("jane Doe");
            ?>
        </main>
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
