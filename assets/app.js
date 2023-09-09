document.addEventListener('DOMContentLoaded', () => {
    const qrForm = document.getElementById('qr-form');
    const qrContentInput = document.getElementById('qr-content');
    const qrCodeContainer = document.getElementById('qr-code');
    const downloadQrCodeButton = document.getElementById('download-qrcode');

    qrForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const content = qrContentInput.value;

        if (content.trim() === '') {
            alert('Por favor, ingresa contenido para el código QR.');
            return;
        }

        // Elimina el código QR anterior si existe
        qrCodeContainer.innerHTML = '';

        try {
            // Utiliza la biblioteca para generar el código QR
            const qr = new QRCode(qrCodeContainer, {
                text: content,
                width: 258,
                height: 258,
            });

            // Muestra el código QR generado
            qrCodeContainer.classList.remove('hidden');

            // Convierte el código QR en una imagen
            const qrImageDataUrl = qrCodeContainer.querySelector('canvas').toDataURL('image/png');

            // Actualiza el enlace de descarga del código QR
            downloadQrCodeButton.href = qrImageDataUrl;
            downloadQrCodeButton.download = 'codigo-qr.png'; // Nombre del archivo descargado
        } catch (error) {
            console.error('Error al generar el código QR:', error);
            alert('Hubo un error al generar el código QR. Por favor, inténtalo de nuevo.');
        }
    });
});

