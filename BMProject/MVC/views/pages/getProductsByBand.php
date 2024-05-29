<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Xử lý dữ liệu form ở đây nếu cần
    // Gán giá trị mới cho action
    $newAction = "";
} else {
    // Giá trị action ban đầu
    $newAction = "displayProductByBand";
}
?>

<form method="post" action="<?php echo htmlspecialchars($newAction); ?>" >
    <div class="mb-3">
        <label for="selectBrand" class="form-label">Chọn Thương Hiệu</label>
        <select class="form-select form-select-lg" name="selectBrand" id="">
            <option value="" selected>Chọn một</option>
            <option value="Mamonde Total">Mamonde Total</option>
            <option value="Stool Softener">Stool Softener</option>
            <option value="Ranitidine">Ranitidine</option>
            <option value="Systane">Systane</option>
            <option value="Tussin DM">Tussin DM</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="btSearch">Gửi</button>
</form>

<?php
if (isset($data["Products"])){
    echo "<table class='table'>";
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    $fieldNames = $data["Products"]->fetch_fields();
    foreach ($fieldNames as $field) {
        echo "<th class='text-center'>" . htmlspecialchars(strtoupper($field->name)) . "</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_array($data["Products"])){
        echo "<tr>";
        foreach ($row as $key => $value) {
            if ($key == 'pimage') {
                echo "<td class='text-left'><img src='" . htmlspecialchars($value) . "' alt='Image'></td>";
            } else {
                echo "<td class='text-left'>" . htmlspecialchars($value) . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
?>
