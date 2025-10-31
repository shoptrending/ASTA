@extends('layouts.admin')

@section('title', 'Nieuw artikel')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="mb-4">Bewerk artikel: {{ $article->title }}</h1>

            <form method="POST" action="{{ route('admin.news.update', $article) }}">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="title" class="form-label">Titel</label>
                    <input type="text"
                           id="title"
                           name="title"
                           class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title', $article->title) }}"
                           required
                    />

                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Inhoud</label>

                    <textarea id="content"
                              name="content"
                              rows="8"
                              class="form-control @error('content') is-invalid @enderror"
                              required
                    >{{ old('content', $article->content) }}
                    </textarea>

                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

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

                <div class="d-flex justify-content-between">

                    {{-- Submit and cancel buttons --}}
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Bewerk</button>

                        <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cancelModal">
                            Annuleren
                        </a>

                        {{-- Confirm return modal --}}
                        <x-confirm-modal
                            id="cancelModal"
                            title="Annuleren?"
                            message="Weet je zeker dat je terug wilt gaan? Je wijzigingen zullen verloren gaan."
                            confirmText="Ja, ga terug"
                            cancelText="Blijven"
                            :confirmAction="route('admin.news.index')"
                        />
                    </div>

                    {{-- Delete button --}}
                    <div class="items-end justify-end">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                           Verwijder
                        </button>

                        {{-- Confirm delete modal --}}
                        <x-confirm-modal
                            id="deleteModal"
                            title="Verwijderen?"
                            message="Weet je zeker dat je het nieuwsartikel wilt verwijderen? Dit kan niet meer teruggedraaid worden."
                            confirmText="Verwijderen"
                            cancelText="Annuleren"
                            :confirmAction="route('admin.news.destroy', $article)"
                            :isDelete="true"
                        />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
