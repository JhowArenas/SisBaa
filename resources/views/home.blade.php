@extends('layouts.app')

@section('content')
    <form id="formPesquisa" class="positionSearchHome text-center">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Digite aqui sua pesquisa"
                   aria-label="Digite aqui sua pesquisa"
                   aria-describedby="btnAddServicos" id="info">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" id="btnAddServicos" onclick="pesquisar();"><img src="img/lupa.svg" width="30px"></button>
            </div>
        </div>
    </form>

    <script>
        function pesquisar() {
            var form = document.getElementById('formPesquisa');
            var infoPesquisa = document.getElementById('info');

            form.addEventListener('submit', function (e) {
                // alerta o valor do campo
                window.open("https://www.google.com/search?ei=9owRXLnBKcWjwATPzoWwBA&q=intitle%3A" + infoPesquisa.value);

                // impede o envio do form
                e.preventDefault();
            });
        }
    </script>
@endsection
