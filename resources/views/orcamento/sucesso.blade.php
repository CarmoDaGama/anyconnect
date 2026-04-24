@extends('site.layouts.default')

@section('content')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 70vh;">
    <div class="card shadow-lg border-0 rounded-4 p-5 text-center" style="max-width: 600px;">
        <div class="card-body">
            <h1 class="fw-bold text-success mb-4"> Pedido Enviado com Sucesso!</h1>
            <p class="lead mb-4">
                Obrigado <strong>{{ $dados['nome'] }}</strong>!<br>
                Recebemos o seu pedido de orçamento para <strong>{{ $dados['servico'] }}</strong>.<br>
                Em breve entraremos em contacto consigo.
            </p>
            <a href="{{ url()->previous() }}" class="btn btn-success px-4">Voltar</a>
        </div>
    </div>
</div>
@endsection
