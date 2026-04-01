<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KanoDent | Gestión Odontológica Avanzada</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
    <link rel="stylesheet" href="/app_odonto/public/build/css/app.css">
<script src="/app_odonto/public/build/js/app.js"></script>
</head>
<body class="bg-slate-50">

    <nav class="fixed w-full z-50 glass border-b border-slate-200 bg-white/90 backdrop-blur">
        <div class="max-w-7xl mx-auto px-4 h-20 flex justify-between items-center">
            <a href="/" class="flex items-center gap-2 cursor-pointer">
                <i data-lucide="shield-plus" class="text-blue-600 w-8 h-8"></i>
                <span class="text-2xl font-bold text-slate-800">Kano<span class="text-blue-600">Dent</span></span>
            </a>
            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="hover:text-blue-600 font-medium">Inicio</a>
                <a href="/cita" class="hover:text-blue-600 font-medium">Reservar</a>
                <div class="flex gap-4">
                    <a href="/login" class="text-slate-600 font-medium flex items-center">Admin Login</a>
                    <a href="/cita" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Nueva Cita</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-20">
    <section class="relative h-[90vh] flex items-center overflow-hidden bg-slate-900">
        
        <div class="imagen-fondo-hero"></div>

        <div class="max-w-7xl mx-auto px-4 z-10 relative">
            <h1 class="titulo-prueba text-5xl md:text-7xl font-bold text-white mb-6">
                Salud dental <br><span class="text-blue-400">de última generación.</span>
            </h1>
            <p class="text-xl text-slate-200 max-w-xl mb-10">
                Gestiona tus citas de forma inteligente. Barquisimeto, Lara.
            </p>
            <div class="flex gap-4">
                <a href="/cita" class="btn-reservar-hero">
                    Reservar Mi Cita <i data-lucide="arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
</main>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/es.js"></script>
    <script>lucide.createIcons();</script>
    <script src="/build/js/app.js"></script>
</body>
</html>