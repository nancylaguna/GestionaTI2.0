<!-- Vista de agradecimiento por registro exitoso y verificación de correo electrónico (email-verification.blade.php) -->

<x-guest-layout>
    <!-- Mensaje de agradecimiento y solicitud de verificación de correo electrónico -->
    <div class="mb-4 text-sm text-gray-600">
        {{ __('¡Gracias por registrarte! Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que le acabamos de enviar por correo electrónico? Si no recibió el correo electrónico, con gusto le enviaremos otro.') }}
    </div>

    <!-- Mensaje de éxito al reenviar el enlace de verificación -->
    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro.') }}
        </div>
    @endif

    <!-- Formulario para reenviar el correo electrónico de verificación -->
    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <!-- Botón para reenviar el correo electrónico de verificación -->
                <x-primary-button>
                    {{ __('Reenviar correo electrónico de verificación') }}
                </x-primary-button>
            </div>
        </form>

        <!-- Formulario para cerrar sesión -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <!-- Botón para cerrar sesión -->
            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Cerrar sesión') }}
            </button>
        </form>
    </div>
</x-guest-layout>
