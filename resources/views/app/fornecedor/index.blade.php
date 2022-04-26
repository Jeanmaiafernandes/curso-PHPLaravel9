<h3>Fornecedor</h3>


@php




@endphp

@isset($fornecedores)
Fornecedor: {{ $fornecedores[1] ['nome'] }}
<br>
Status: {{ $fornecedores[1] ['status'] }}
<br>
@isset($fornecedores[0] ['cnpj'])
    CNPJ: {{ $fornecedores[0] ['cnpj']  }}

    @empty($fornecedores[0] ['cnpj'])
    -vazio
@endempty
   @endisset
@endisset

