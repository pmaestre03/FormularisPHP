<body>
    <form method="post">
        <select name="element">
            <option value="foc">Foc</option>
            <option value="aigua">Aigua</option>
            <option value="terra">Terra</option>
        </select>
        <input type="submit" value="Tramet la consulta">
    </form>
</body>
<?php
$element = $_POST["element"];
if ($element == "foc") {
    echo "<link rel='stylesheet' href='foc.css'>";
} if ($element == "aigua") {
    echo "<link rel='stylesheet' href='aigua.css'>";
} if ($element == "terra") {
    echo "<link rel='stylesheet' href='terra.css'>";
}

?>