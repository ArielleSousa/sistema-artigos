@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>📚 Lista de Artigos</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-success">
        ➕ Novo Artigo
    </a>
</div>

<div class="card shadow">
    <div class="card-body">
        @if($articles->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Status</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->titulo }}</td>
                            <td>
                                <span class="badge {{ $article->status === 'ativo' ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $article->status === 'ativo' ? '✅ Ativo' : '❌ Inativo' }}
                                </span>
                            </td>
                            <td>{{ $article->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-warning">
                                    ✏️ Editar
                                </a>
                                <form method="POST" action="{{ route('articles.destroy', $article) }}" 
                                      class="d-inline" onsubmit="return confirm('❌ Tem certeza que deseja excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">🗑️ Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-5">
                <h3 class="text-muted">📄 Nenhum artigo encontrado</h3>
                <p class="text-muted">Comece criando seu primeiro artigo!</p>
                <a href="{{ route('articles.create') }}" class="btn btn-primary btn-lg">
                    ➕ Criar Primeiro Artigo
                </a>
            </div>
        @endif
    </div>
</div>
@endsection