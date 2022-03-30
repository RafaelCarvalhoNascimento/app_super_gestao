<h3>FORNECEDOR</h3>

@php
/*
    if(!condição) { } //enquanto if executa se o retorno for true
*/
@endphp

{{-- o @unless executa a instrução se o retorno for false --}}


Fornecedor: {{ $fornecedores[0]['nome'] }}
<br/>
Status: {{ $fornecedores[0]['status'] }}
<br/>


@if($fornecedores[0]['status'] == 'N')
    fornecedor inativo
@endif

<br/>

@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless
