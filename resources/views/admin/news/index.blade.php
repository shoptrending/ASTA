@extends('layouts.admin')

@section('title', 'Nieuwsbeheer')

@section('content')
    <h1 class="mb-4">Nieuwsbeheer</h1>

    <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Nieuw artikel</a>

    @if($articles->isEmpty())
        <div class="alert alert-secondary">Nog geen artikelen...</div>
    @else
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Titel</th>
                <th>Slug</th>
                <th>Publicatie</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($articles as $a)
                <tr>
                    <td>{{ $a->title }}</td>
                    <td>{{ $a->slug }}</td>
                    <td>{{ $a->is_published ? 'Ja' : 'Nee' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
