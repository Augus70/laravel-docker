<h1>Mostrar la vista con llaves</h1>
{{-- con htmlspecial chars para evitar inyeccion de codigo --}}
{{ $message }}
{{-- sin htmlspecialchars, permite codigo --}}
{!! $message !!}
