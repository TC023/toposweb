<!DOCTYPE html>
<html>
<head>
    <title>Insert Div Example</title>
</head>

<body>
    <div id="existingDiv">This is the existing div.</div>
    <div id="anotherDiv">This is another div.</div>

    <script src="script.js"></script>
</body>
<script>
    const existingDiv = document.getElementById('existingDiv');

    const newDiv = document.createElement('div');
    newDiv.textContent = 'This is the new div.';

    if (existingDiv.nextSibling) {
        existingDiv.parentNode.insertBefore(newDiv, existingDiv.nextSibling);
    } else {
        existingDiv.parentNode.appendChild(newDiv);
    }
</script>
</html>
