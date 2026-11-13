<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #0f172a; margin: 0; color: #f8fafc; }
        .container { max-width: 650px; margin: 40px auto; padding: 0 20px; }
        .card { background: #1e293b; padding: 30px; border-radius: 10px; border: 1px solid #334155; }
        h1 { font-size: 1.4rem; color: #38bdf8; margin-top: 0; }
        .item-info { display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #334155; }
        .item-info span { color: #94a3b8; font-size: 0.9rem; }
        .item-info strong { color: #f1f5f9; font-size: 0.95rem; }
        .botoes { display: flex; justify-content: space-between; margin-top: 25px; }
        .btn { padding: 9px 16px; border-radius: 6px; text-decoration: none; font-weight: bold; font-size: 0.85rem; }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <h1>📋 {{ $titulo }}</h1>

        @if(session('sucesso'))
            <div style="background:#14532d; border:1px solid #16a34a; color:#bbf7d0; padding:12px; border-radius:6px; margin-bottom:16px;">✅ {{ session('sucesso') }}</div>
        @endif

        <div class="item-info"><span>Identificador:</span><strong>#{{ $produto['id'] }}</strong></div>
        <div class="item-info"><span>Nome do Produto:</span><strong>{{ $produto['nome'] }}</strong></div>
        <div class="item-info"><span>Código do Produto:</span><strong>{{ $produto['codigo'] }}</strong></div>
        <div class="item-info"><span>Categoria Industrial:</span><strong>{{ $produto['categoria'] }}</strong></div>
        <div class="item-info"><span>Status Operacional:</span><strong style="color:#4ade80;">{{ $produto['status'] }}</strong></div>

        <div class="botoes">
            <a href="{{ route('produtos.index') }}" style="color:#94a3b8; text-decoration:none;">← Voltar à Lista</a>
            <a href="{{ route('produtos.edit', $produto['id']) }}" class="btn" style="background:#0284c7; color:white;">Editar Cadastro</a>
        </div>
    </div>
</div>
</body>
</html>
