<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Options</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }
        .options {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .option {
            margin: 10px;
        }
        .option input[type="checkbox"] {
            display: none;
        }
        .option label {
            display: block;
            background: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .option input[type="checkbox"]:checked + label {
            background: #28a745;
        }
        .option input[type="checkbox"]:disabled + label {
            background: #6c757d;
            cursor: not-allowed;
        }
        .counter {
            margin-top: 20px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Select Your Options</h1>
        <div class="options">
            <div class="option">
                <input type="checkbox" id="option1" name="options" value="option1">
                <label for="option1">Option 1</label>
            </div>
            <div class="option">
                <input type="checkbox" id="option2" name="options" value="option2">
                <label for="option2">Option 2</label>
            </div>
            <div class="option">
                <input type="checkbox" id="option3" name="options" value="option3">
                <label for="option3">Option 3</label>
            </div>
            <div class="option">
                <input type="checkbox" id="option4" name="options" value="option4">
                <label for="option4">Option 4</label>
            </div>
            <div class="option">
                <input type="checkbox" id="option5" name="options" value="option5">
                <label for="option5">Option 5</label>
            </div>
            <div class="option">
                <input type="checkbox" id="option6" name="options" value="option6">
                <label for="option6">Option 6</label>
            </div>
            <div class="option">
                <input type="checkbox" id="option7" name="options" value="option7">
                <label for="option7">Option 7</label>
            </div>
            <div class="option">
                <input type="checkbox" id="option8" name="options" value="option8">
                <label for="option8">Option 8</label>
            </div>
            <div class="option">
                <input type="checkbox" id="option9" name="options" value="option9">
                <label for="option9">Option 9</label>
            </div>
            <div class="option">
                <input type="checkbox" id="option10" name="options" value="option10">
                <label for="option10">Option 10</label>
            </div>
        </div>
        <div class="counter">
            Selected: <span id="selectedCount">0</span>/8
        </div>
    </div>

    <script>
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const selectedCountElement = document.getElementById('selectedCount');
        let selectedCount = 0;

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                    selectedCount++;
                } else {
                    selectedCount--;
                }
                selectedCountElement.textContent = selectedCount;

                if (selectedCount >= 8) {
                    checkboxes.forEach(box => {
                        if (!box.checked) {
                            box.disabled = true;
                        }
                    });
                } else {
                    checkboxes.forEach(box => {
                        box.disabled = false;
                    });
                }
            });
        });
    </script>
</body>
</html>
