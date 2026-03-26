<section id="booking" class="pt-32 pb-20 px-4">
    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
        <div class="bg-blue-600 p-8 text-white">
            <h2 class="text-3xl font-bold">Reserva tu Turno</h2>
            <p class="opacity-80">Hola <?php echo $nombre; ?>, completa los datos para tu cita.</p>
        </div>
        <form id="appointmentForm" class="p-8 space-y-6">
            <input type="hidden" id="id" value="<?php echo $id; ?>">
        </form>
    </div>
</section>