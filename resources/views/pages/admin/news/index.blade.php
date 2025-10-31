@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Nieuwsbeheer</h1>

    <x-button href="{{ route('admin.news.create') }}">Nieuw artikel</x-button>

    @if($articles->isEmpty())
        <div class="alert alert-secondary">Nog geen artikelen...</div>
    @else
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Titel</th>
                <th>Gepubliceerd</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($articles as $a)
                <tr>
                    <td>{{ $a->title }}</td>
                    <td>{{ $a->is_published ? 'Ja' : 'Nee' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
