
<div class="container">
    <h1>Detail Pesan</h1>
    <div class="card">
        <div class="card-header">
            Pesan dari {{ $contact->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Email: {{ $contact->email }}</h5>
            <p class="card-text">{{ $contact->message }}</p>
            @if($contact->response)
                <p class="card-text"><strong>Tanggapan Admin:</strong> {{ $contact->response }}</p>
            @endif
        </div>
    </div>

    <form action="{{ route('contact.respond', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="response">Tanggapan Admin</label>
            <textarea class="form-control" id="response" name="response" rows="3" required>{{ old('response', $contact->response) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Tanggapan</button>
    </form>
</div>
