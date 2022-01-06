<h1>For If</h1>

@if($value > 100)
    <p>Valor Maior que 100</p>
@else
    <p>Valor Menor que 100</p>
@endif


@for ($i = 0; $i < $value; $i++)

    - {{$i+1}}
    
@endfor

@php
  $i = 0;   
@endphp
<br/>

@while ($i < $value)
    - {{$i+1}}
    @php
        $i++;
    @endphp
    
@endwhile

<br/>

@foreach ($myArray as $key => $value)
        <p>{{$loop->index}} {{$key}} - {{$value}} </p>
    
@endforeach


@forelse ([] as $key => $value)
    <p>{{$loop->index}} {{$key}} - {{$value}}</p>
    
@empty
    <p>Nenhum Registro encontrado</p>
@endforelse