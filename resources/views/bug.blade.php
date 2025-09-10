<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boost Bug Reproduction</title>
</head>
<body>

    <button onclick="generatePrintPage()">Generate Print Page</button>

    <script>
        function generatePrintPage() {
            // Full HTML string (template for the new print window)
            let html = `
                <html>
                    <head>
                        <title>Bug Reproduction</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 20px;
                            }
                            h1 {
                                color: #333;
                            }
                            p {
                                font-size: 14px;
                                color: #555;
                            }
                        </style>
                    </head>
                    <body>
                        <div>
                            <h1>Hello World</h1>
                            <p>This is a test print page.</p>
                        </div>
                    </body>
                </html>
            `;

            // Open new window for printing
            const printWindow = window.open('', '_blank');
            printWindow.document.write(html);
            printWindow.document.close();

            // Trigger print
            printWindow.print();
            printWindow.close();
        }
    </script>
</body>
</html>
