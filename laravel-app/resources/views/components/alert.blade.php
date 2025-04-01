{{-- checar como funciona props oculta en el inspector lo recibido --}}
<div {{ $attributes->merge(['class' => 'alert alert-danger']) }}>
    {{-- https://laravel.com/docs/12.x/blade#component-attributes --}}
    {{-- $attributes viene del welcome.blade y se esta sumando la clase definida aquí arriba alert y alert-danger --}}
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    {{-- slot llamado title desde child --}}
    <strong>{{ $title }}</strong>
    {{ $slot }}
    {{-- slot llamado type desde child --}}
    {{-- <strong>{{ $type }}</strong> --}}
    {{-- slot llamado languaje desde child --}}
    {{-- <strong>{{ $languaje }}</strong> --}}
    {{-- slot llamado languajes desde child --}}
    {{-- <strong>{{ $languajes }}</strong> --}}
    {{-- <h1>{{ $type }}</h1> --}}
    {{-- Slot es todo --}}
    {{-- {{ $slot }} --}}
    <h2>componente</h2>
    {{-- llamado de un metodo definido en componente Alert.php --}}
    @foreach ($languajes('Python') as $item)
        <p>{{ $item }}</p>
    @endforeach
    <h4>{{ $languaje }}</h4>
    {{ $subtitle }}
</div>
