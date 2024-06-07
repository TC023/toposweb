<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkbox Form</title>
</head>
<body>
    <form action="agregaTorneo.php" method="post">
        <label>
            <input type="checkbox" name="options[]" value="Option 1"> Option 1
        </label>
        <br>
        <label>
            <input type="checkbox" name="options[]" value="Option 2"> Option 2
        </label>
        <br>
        <label>
            <input type="checkbox" name="options[]" value="Option 3"> Option 3
        </label>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
