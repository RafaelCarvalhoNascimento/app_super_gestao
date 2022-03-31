<h3>FORNECEDOR</h3>

@php
/*
    if(!condição) { } //enquanto if executa se o retorno for true
    if(isset($variavel)) {} //retorna true se a variável estiver definida
    if(empty($variavel)) {} //retorna true se a variável estiver vazia
    ''(String vazia)
    0 inteiro zero
    0.0 float zero
    '0'
    null
    false
    $var
    array()
*/
@endphp

{{-- o @unless executa a instrução se o retorno for false --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br/>
    Status: {{ $fornecedores[0]['status'] }}
    <br/>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? '' }}
    <br/>
    Telefone: {{  $fornecedores[0]['ddd'] ?? '' }} {{  $fornecedores[0]['telefone'] ?? '' }}
    @switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('85')
            Fortaleza - CE
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @default
            Estado não identificado
    @endswitch
@endisset
