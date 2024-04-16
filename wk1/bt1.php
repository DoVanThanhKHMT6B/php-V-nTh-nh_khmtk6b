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
    $name= "Nguyen thanh An";
    $lop="KHMT6B";
    $new_lop = str_replace('B', '!', $lop);
    echo(" Xin chào \"" . strtoupper($name) . "\""); echo(" học lớp ");echo "'" . $new_lop . "'";
    echo"<br>";

    $HoTen = "Do Thanh";
    $tuoi = 19; 
    $gioi_tinh = "nam"; 

    if ($tuoi <= 20) {
        $loi_chao = "Xin Chào em";
    } elseif (  $tuoi < 40) {
        if ($gioi_tinh == "nam") {
            $loi_chao = "Xin Chào anh";
        } else {
            $loi_chao = "Xin Chào chị";
        }
    } elseif ( $tuoi < 60) {
        if ($gioi_tinh == "nam") {
            $loi_chao = "Xin Chào bác";
        } else {
            $loi_chao = "Xin Chào chị";
        }
    } else {
        if ($gioi_tinh == "nam") {
            $loi_chao = "Xin Chào ông";
        } else {
            $loi_chao = "Xin Chào bà";
        }
    }

    

    echo "  $loi_chao \" $HoTen\"  ";
    echo"<br>";
// nhập vào một năm và một tháng, đưa ra ngày của tháng đó trong năm đó.

$nam = 2024; // Ví dụ: Năm 2024
$thang = 2; // Ví dụ: Tháng 2

// Kiểm tra tháng và năm
switch ($thang) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $soNgay = 31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $soNgay = 30;
        break;
    case 2:
        // Kiểm tra năm nhuận
        if (($nam % 4 == 0 && $nam % 100 != 0) || $nam % 400 == 0) {
            $soNgay = 29;
        } else {
            $soNgay = 28;
        }
        break;
    default:
        $soNgay = "Không hợp lệ";
        break;
}

// In ra số ngày của tháng đó trong năm đó
echo "Tháng $thang năm $nam có $soNgay ngày.";
echo"<br>";
$student = array("thành", "nam", "hùng", "lộc", "hòa");

    // Sử dụng vòng lặp foreach để in ra màn hình mỗi tên trên một dòng
 foreach ($student as $name) {
 echo $name . "<br>";
 }
//vd2: tạo một mảng chứa thông tin cỉa khách hàng bao gồm tên địa chỉ giới tính số điện thoại tuổi, đưa ra thông tin của khách hàng đó
// viết 1 hàm để sét mức học bổng dựa vào điểm trung bình học kỳ và điểm trung bình rèn luyện   8
?>

 
   
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
            
        </script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
