@extends('site.layouts.default')

@section('content')

<div
    data-aos="zoom-in"
    data-aos-duration="1000"
    class="container-sm background-container position-relative text-white rounded-4 mb-5"
    style="background-image: url('{{ asset('storage/'.$service->cover) }}'); background-size: cover; background-position: center; margin-top: 40px;">
    <div class="overlay rounded-4 position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.55);"></div>
    <div class="content position-relative p-5">
        <div class="ps-3 border-start border-3 border-success">
            <h1 class="fw-bold display-5">{{ $service->title }}</h1>
            <p class="lead lh-lg text-light mt-3">
                {!! str()->limit($service->content, 250) !!}
            </p>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row g-4">
        <!-- CONTEÚDO PRINCIPAL -->
        <div class="col-lg-8">
            <article class="service-content p-4 bg-white shadow rounded-3">
                {!! $service->content !!}
            </article>
        </div>

        <!-- SIDEBAR - CARD DE ORÇAMENTO -->
        <div class="col-lg-4">
            <div class="card shadow-lg border-0 rounded-4 p-4 bg-light mt-4">
                <div class="card-body">
                    <h5 class="fw-bold text-green-700 mb-3">Solicite um Orçamento</h5>

                    <!-- Mensagem acima do form -->
                    <div id="formMessage" class="text-center fw-bold mb-3 d-none"></div>

                    <!-- Formulário -->
                    <form id="orcamentoForm" action="{{ route('orcamento.enviar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="servico" value="{{ $service->title }}">

                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Telefone</label>
                            <input type="text" name="telefone" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Mensagem</label>
                            <textarea name="mensagem" class="form-control"></textarea>
                        </div>

                        <button id="btnSubmit" type="submit" class="btn btn-primary w-100">
                            <span id="btnText">Enviar Orçamento</span>
                            <span id="btnSpinner" class="spinner-border spinner-border-sm d-none"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.getElementById("orcamentoForm").addEventListener("submit", async function(e) {
    e.preventDefault();

    let form = e.target;
    let btn = document.getElementById("btnSubmit");
    let btnText = document.getElementById("btnText");
    let btnSpinner = document.getElementById("btnSpinner");
    let formMessage = document.getElementById("formMessage");

    // limpa mensagem
    formMessage.classList.add("d-none");
    formMessage.classList.remove("text-success", "text-danger");

    // spinner
    btn.disabled = true;
    btnText.innerText = "Enviando...";
    btnSpinner.classList.remove("d-none");

    try {
        let response = await fetch(form.action, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                "Accept": "application/json"
            },
            body: new FormData(form)
        });

        let data = await response.json();

        if (response.ok && data.success) {
            formMessage.innerText = data.message || "✅ Pedido enviado com sucesso!";
            formMessage.classList.add("text-success");
            formMessage.classList.remove("d-none");
            form.reset();
        } else {
            formMessage.innerText = "❌ Ocorreu um erro. Tente novamente.";
            formMessage.classList.add("text-danger");
            formMessage.classList.remove("d-none");
        }
    } catch (error) {
        formMessage.innerText = "❌ Falha na conexão. Tente novamente.";
        formMessage.classList.add("text-danger");
        formMessage.classList.remove("d-none");
    }

    // restaura botão
    btn.disabled = false;
    btnText.innerText = "Enviar Orçamento";
    btnSpinner.classList.add("d-none");
});
</script>
@endpush
