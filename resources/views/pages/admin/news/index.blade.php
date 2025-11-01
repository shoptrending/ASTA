@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 fw-semibold text-light mb-0">Nieuwsbeheer</h1>

        <x-button href="{{ route('admin.news.create') }}">
            <i class="bi bi-plus-circle me-1"></i>
            Nieuw artikel
        </x-button>
    </div>

    <div class="bg-dark border-0 shadow-sm">
        <div class="card-body">

            {{-- Table --}}
            <table class="table table-dark table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th>Titel</th>
                        <th class="text-center">Gepubliceerd</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse($articles as $article)
                        <tr>
                            <td>
                                <a href="{{ route('admin.news.edit', $article->id) }}" class="text-secondary me-2 hover pr-2" title="Bewerken">
                                    <i class="bi bi-pencil me-3"></i>
                                </a>
                                {{ $article->title }}
                            </td>
                            <td class="text-center">

                                @if($article->is_published)
                                    <i class="bi bi-check-circle-fill text-success" />
                                @else
                                    <i class="bi bi-x-circle text-danger" />
                                @endif

                            </td>
                        </tr>

                    @empty
                        <div class="alert alert-secondary text-center mb-0">Nog geen artikelen...</div>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
