@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1><i class="bi bi-pencil"></i> Editar Artigo</h1>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left fs-5 align-middle me-1"></i> Voltar
    </a>
</div>

<div class="card shadow">
    <div class="card-body">
        <form method="POST" action="{{ route('articles.update', $article) }}">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="titulo" class="form-label">📝 Título </label>
                <input type="text" class="form-control @error('titulo') is-invalid @enderror" 
                       id="titulo" name="titulo" value="{{ old('titulo', $article->titulo) }}" 
                       placeholder="Digite o título do artigo..." required>
                @error('titulo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="conteudo" class="form-label">📄 Conteúdo</label>
                <textarea class="form-control @error('conteudo') is-invalid @enderror" 
                          id="conteudo" name="conteudo" rows="8" 
                          placeholder="Digite o conteúdo do artigo...">{{ old('conteudo', $article->conteudo) }}</textarea>
                @error('conteudo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">🔄 Status </label>
                <select class="form-select @error('status') is-invalid @enderror" 
                        id="status" name="status" required>
                    <option value="">Selecione o status...</option>
                    <option value="ativo" {{ old('status', $article->status) === 'ativo' ? 'selected' : '' }}>
                         Ativo
                    </option>
                    <option value="inativo" {{ old('status', $article->status) === 'inativo' ? 'selected' : '' }}>
                         Inativo
                    </option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('articles.index') }}" class="btn btn-secondary me-md-2">
                    <i class="bi bi-x-lg"></i> Cancelar
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-floppy2-fill"></i> Atualizar Artigo
                </button>
            </div>
        </form>
    </div>
</div>
@endsection