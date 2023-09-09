<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/styles.css" rel="stylesheet">
    <title>Generador de Códigos QR</title>
</head>
<body class="flex items-center justify-center h-screen">
    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md card">
        <h1 class="text-2xl font-semibold mb-4">Generador de Códigos QR</h1>
        <form id="qr-form" class="mb-4">
            <input type="text" id="qr-content" class="w-full py-2 px-3 rounded-md border" placeholder="Contenido del QR" required>
            <button type="submit" class="mt-2 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Generar</button>
        </form>
        <div id="qr-code" class="hidden">
            <!-- Aquí se mostrará el código QR generado como una imagen -->
        </div>
        
        <a href="#" id="download-qrcode" class="mt-2 bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 block text-center" download>Descargar Código QR</a>
    </div>

    <script src="assets/qrcode.min.js"></script>
    <script src="assets/app.js"></script>
</body>
</html>

