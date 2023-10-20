<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperación de Contraseña</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 p-4">
    {{-- <div class="max-w-sm mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Recuperación de Contraseña</h1>
        <p class="text-gray-600 mb-4">Estimado {{ $debtor->full_name }},</p>
        <p class="text-gray-600 mb-4">Espero que te encuentres bien. Estoy escribiendo para solicitar la recuperación de
            mi contraseña de [nombre de la cuenta o plataforma]. Recientemente he tenido dificultades para acceder a mi
            cuenta y creo que ha llegado el momento de restablecer mi contraseña.</p>
        <p class="text-gray-600 mb-4">Por favor, sigue el enlace a continuación para restablecer tu contraseña:</p>
        <a href="[Enlace de recuperación]" class="text-blue-500 hover:underline mb-4">Restablecer Contraseña</a>
        <p class="text-gray-600 mb-4">Si no has solicitado este cambio de contraseña o tienes alguna pregunta, por
            favor, contáctanos inmediatamente.</p>
        <p class="text-gray-600">Gracias por tu atención y paciencia.</p>
    </div> --}}
    <div class="max-w-sm mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Recuperación de codigo de acceso</h1>
        <p class="text-gray-600 mb-4">Estimado {{ $debtor->full_name }},</p>
        <p class="text-gray-600 mb-4">Hemos procesado tu solicitud de recuperación de codigo de acceso. Aquí está tu
            codigo de acceso:</p>
        <p class="text-2xl text-indigo-600 font-semibold mb-4">{{ $debtor->access_code }}</p>
        <p class="text-gray-600 mb-4">Te recomendamos guardar este correo.</p>
        <p class="text-gray-600 mb-4">Si no has solicitado este cambio de codigo de acceso o tienes alguna pregunta, por
            favor, contáctanos inmediatamente a los siguentes medios de contacto:</p>
        <p class="text-gray-600">Email: <a href="mailto:atencioncc@ibkan.com.mx">atencioncc@ibkan.com.mx</a></p>
        <p class="text-gray-600">Teléfono: <a href="tel:5562700471">55 6270 0471</a></p>
        <p class="text-gray-600">whatsapp: <a href="https://wa.me/5215631885034">56 3188 5034</a></p>
        <p class="text-gray-600 text-center">Gracias por tu atención y paciencia.</p>
        {{-- att apkan --}}

        <h4 class="text-gray-600 text-center">Att: Apkan</h4>
    </div>
</body>

</html>
