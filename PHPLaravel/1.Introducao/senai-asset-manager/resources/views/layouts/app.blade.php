<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo ?? config('app.name') }} | {{ config('app.name') }}</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: system-ui, sans-serif; background: #f1f4f8; color: #1f2937; }
        header { background: #003c71; color: #fff; padding: 16px 24px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; }
        header h1 { margin: 0; font-size: 1.2rem; }
        nav a { color: #fff; text-decoration: none; margin-left: 16px; }
        main { max-width: 1000px; margin: 24px auto; padding: 0 16px; }
        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; }
        .card { background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 1px 4px rgba(0,0,0,.08); }
        .card span { font-size: .9rem; color: #6b7280; }
        .card strong { display: block; font-size: 2rem; margin-top: 6px; }
        .btn { display: inline-block; padding: 10px 18px; border-radius: 8px; border: 0; color: #fff; background: #003c71; text-decoration: none; cursor: pointer; font-size: 1rem; }
        .btn-verde { background: #16a34a; }
        table { width: 100%; border-collapse: collapse; background: #fff; border-radius: 10px; overflow: hidden; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #e5e7eb; }
        th { background: #e8eef5; }
        label { display: block; margin: 12px 0 4px; font-weight: 600; }
        input, select { width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; }
        .alerta { padding: 12px; border-radius: 8px; margin-bottom: 16px; }
        .sucesso { background: #dcfce7; color: #166534; }
        .erro { background: #fee2e2; color: #991b1b; }
    </style>
</head>
<body>
    <header>
        <h1>{{ config('app.name') }}</h1>
        <nav>
            <a href="{{ route('ativos.index') }}">Ativos</a>
            <a href="{{ route('clientes.index') }}">Clientes</a>
            <a href="{{ route('ativos.status') }}">Status</a>
        </nav>
    </header>
    <main>
        @yield('conteudo')
    </main>
</body>
</html>
