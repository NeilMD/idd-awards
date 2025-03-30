@foreach ($submissions as $memory)
    <x-memories-item :memory="$memory" />
@endforeach