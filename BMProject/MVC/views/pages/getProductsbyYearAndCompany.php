<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $newAction = "";
} else {
    $newAction = "displayProductByYearAndCompany";
}
?>
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Form Search</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a></li>
                    <li><a href="#">Config option 2</a></li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <div class="row">
                <form action="<?php echo $newAction; ?>" method="post">
                    <div class="col-sm-12">
                        <label class="control-label">Select Year</label>
                        <div class="input-group m-b">
                            <select class="form-control m-b" name="selectYear" id="">
                                <?php
                                    for ($year = 2015; $year <= 2030; $year++) {
                                        echo "<option value=\"$year\">$year</option>";
                                    }
                                ?>
                            </select>
                            <span class="input-group-addon"> 
                                <input type="checkbox" name="yearCheckbox"> 
                            </span> 
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="control-label">Select Company</label>
                        <div class="input-group m-b">
                            <select class="form-control m-b" name="selectCompany" id="">
                                <option value="Indiana Botanic Gardens">Indiana Botanic Gardens</option>
                                <option value="Freds Inc">Freds Inc</option>
                                <option value="STAT Rx USA LLC">DSTAT Rx USA LLC</option>
                                <option value="HNeutrogena Corporation">Neutrogena Corporation</option>
                                <option value="Alcon Research Ltds">Alcon Research Ltd</option>
                            </select>
                            <span class="input-group-addon"> 
                                <input type="checkbox" name="companyCheckbox"> 
                            </span> 
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary m-l-sm" name="btnSearch" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php
if(isset($data['Products'])) {
    echo "<div class=\"ibox-content\">";
    echo "<table class=\"table table-bordered\">";
    echo "<thead>";
    echo "<tr>";

    $fieldNames = $data["Products"]->fetch_fields();
    foreach ($fieldNames as $field) {
        echo "<th class=\"text-center\">" . strtoupper($field->name) . "</th>";
    }

    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while($row = mysqli_fetch_array($data["Products"])){
        echo "<tr>";
        echo "<td class=\"text-center\">".$row["id"]."</td>";
        echo "<td class=\"text-center\">".$row["pid"]."</td>";
        echo "<td class=\"text-center\">".$row["pname"]."</td>";
        echo "<td class=\"text-center\">".$row["company"]."</td>";
        echo "<td class=\"text-center\">".$row["year"]."</td>";
        echo "<td class=\"text-center\">".$row["band"]."</td>";
        echo "<td class=\"text-center\">".'<img src="'.$row["pimage"].'" alt="Image Product">'."</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}
?>



