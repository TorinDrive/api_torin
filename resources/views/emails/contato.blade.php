{{-- resources/views/emails/contato.blade.php --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: sans-serif; background-color: #f4f4f4; color: #333; }
        .container { max-width: 600px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 8px; }
        h1 { color: #e53e3e; }
        .field { margin-bottom: 1rem; }
        .field strong { display: block; color: #555; margin-bottom: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nova mensagem recebida! 🚀</h1>
        <p>Olá! Alguém preencheu o formulário de contato no seu site. Aqui estão os detalhes:</p>
        <hr>
        {{-- Em resources/views/emails/contato.blade.php --}}

        <div class="field">
            <strong>Nome Completo:</strong>
            <span>{{ $data['primeiro_nome'] . ' ' . $data['ultimo_nome'] }}</span>
        </div>
        <div class="field">
            <strong>E-mail de Contato:</strong>
            <span>{{ $data['email'] }}</span>
        </div>
        @if(!empty($data['telefone']))
            <div class="field">
                <strong>Telefone:</strong>
                <span>{{ $data['telefone'] }}</span>
            </div>
        @endif
        <div class="field">
            <strong>Mensagem:</strong>
            <p>{{ $data['mensagem'] }}</p>
        </div>
    </div>
</body>
</html>