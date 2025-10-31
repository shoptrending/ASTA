@extends('layouts.admin')

@section('title', 'Nieuw artikel')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="mb-4">Nieuw artikel</h1>

            <form method="POST" action="{{ route('admin.news.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titel</label>
                    <input type="text"
                           id="title"
                           name="title"
                           value="{{ old('title') }}"
                           required
                           class="form-control @error('title') is-invalid @enderror">

                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Inhoud</label>
                    <textarea id="content"
                              name="content"
                              rows="8"
                              required
                              class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>

                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

{{--                <div class="form-check mb-3">--}}
{{--                    <input type="checkbox"--}}
{{--                           class="form-check-input"--}}
{{--                           id="is_published"--}}
{{--                           name="is_published"--}}
{{--                           value="1"--}}
{{--                        {{ old('is_published') ? 'checked' : '' }}>--}}
{{--                    <label class="form-check-label" for="is_published">Publiceren</label>--}}
{{--                </div>--}}

                <div class="mb-3">
                    <label for="published_at" class="form-label">Publicatiedatum (optioneel)</label>
                    <input type="text"
                           id="published_at"
                           name="published_at"
                           placeholder="YYYY-MM-DD HH:MM"
                           value="{{ old('published_at') }}"
                           class="form-control @error('published_at') is-invalid @enderror">
                    @error('published_at')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Opslaan</button>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Annuleren</a>
                </div>
            </form>
        </div>
    </div>
@endsection
