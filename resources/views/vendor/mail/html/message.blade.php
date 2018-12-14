@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ config('app.name') }}
        @endcomponent
    @endslot

    {{-- Body --}}
    <h2>Hola!</h2>
    Estás recibiendo este email porque recibimos una solicitud de reseteo de contraseña.
    {{$slot}}
    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                <p>Si no solicitaste este reseteo de contraseña, desestima este correo.</p>
                <p>Saludos, Amapolas.</p>
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} Amapolas. @lang('Todos los derechos reservados')
        @endcomponent
    @endslot
@endcomponent
