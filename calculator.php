<?php
$result=" ";
if (isset($_POST["btn"]))
{
    require_once "./FullName.php";
    $fullName = new FullName();
    $result=$fullName->myCalculator($_POST);
}
?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <th><input type="text" name="first_number" value="<?php echo $_POST ["first_number"];?>"></th>
        </tr>
        <tr>
            <th>Last Number</th>
            <th><input type="text" name="last_number" value="<?php echo $_POST ["last_number"] ;?>"></th>
        </tr>
        <tr>
            <th>Result</th>
            <th><input type="text" name="result" value="<?php echo $result;?>"></th>
        </tr>
        <tr>
            <th></th>
            <th>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">
            </th>
        </tr>
    </table>
</form>