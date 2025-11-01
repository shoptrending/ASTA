@props([
    'id' => 'confirmModal',
    'title' => 'Bevestigen',
    'message' => 'Weet je zeker dat je deze actie wilt uitvoeren?',
    'confirmText' => 'Ja',
    'cancelText' => 'Annuleren',
    'confirmAction' => '#',
    'isDelete' => false,
])

<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Sluiten"></button>
            </div>
            <div class="modal-body">
                {{ $message }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    {{ $cancelText }}
                </button>

                @if ($isDelete)
                    <form method="POST" action="{{ $confirmAction }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            {{ $confirmText }}
                        </button>
                    </form>
                @else
                    <a href="{{ $confirmAction }}" class="btn btn-primary">
                        {{ $confirmText }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
