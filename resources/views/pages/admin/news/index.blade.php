@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Nieuwsbeheer</h1>

    <x-button href="{{ route('admin.news.create') }}">Nieuw artikel</x-button>

    <table class="table table-striped">
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
                        <i class="bi bi-pencil"></i>
                    </a>
                    {{ $article->title }}
                </td>

                @if($article->is_published)
                    <td class="text-center"><i class="bi bi-check-lg text-success fs-4" /></td>
                @else
                    <td class="text-center"><i class="bi bi-x-lg text-danger fs-4" /></td>
                @endif

            </tr>

        @empty
            <div class="alert alert-secondary">Nog geen artikelen...</div>
        @endforelse

        </tbody>
    </table>
@endsection
