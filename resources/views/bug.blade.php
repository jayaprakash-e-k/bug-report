<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Boost Bug Reproduction</title>
</head>

<body>
    <script>
        let html = `
        <html>
            <head>
                <title>Bug</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 20px;
                    }
                    h1 {
                        color: #333;
                    }
                </style>
            </head>
            <body>
                <div>
                    <h1>Hello World</h1>
                </div>
            </body>
        </html> 
        `;
        document.body.innerHTML = html;
    </script>
</body>
</html>