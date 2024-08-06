<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Example</title>
</head>
<body>
    <button id="loadData">Load Data</button>
    <div id="data"></div>

    <script>
        document.getElementById('loadData').addEventListener('click', function() {
            // Usando XMLHttpRequest
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'https://jsonplaceholder.typicode.com/posts/1', true);
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    document.getElementById('data').innerText = xhr.responseText;
                }
            };
            xhr.send();

            // Usando Fetch API
            fetch('https://jsonplaceholder.typicode.com/posts/1')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('data').innerText = JSON.stringify(data, null, 2);
                });
        });
    </script>
</body>
</html>
