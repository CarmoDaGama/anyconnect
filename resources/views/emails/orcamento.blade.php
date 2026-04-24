<h2>Pedido de Orçamento</h2>

<p><strong>Serviço:</strong> {{ $dados['servico'] }}</p>
<p><strong>Nome:</strong> {{ $dados['nome'] }}</p>
<p><strong>Email:</strong> {{ $dados['email'] }}</p>
<p><strong>Telefone:</strong> {{ $dados['telefone'] ?? 'Não informado' }}</p>
<p><strong>Mensagem:</strong></p>
<p>{{ $dados['mensagem'] ?? 'Sem mensagem adicional' }}</p>
