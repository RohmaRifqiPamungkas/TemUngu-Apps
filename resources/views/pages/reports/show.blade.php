<div class="container">
    <h1>Detail Pesan</h1>
    <div class="card">
        <div class="card-header">
            Pesan dari {{ $report->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Email: {{ $report->email }}</h5>
            <p class="card-text">{{ $report->description }}</p>
            @if($report->response)
                <p class="card-text"><strong>Tanggapan Admin:</strong> {{ $report->response }}</p>
            @endif
        </div>
    </div>

    <form action="{{ route('report.respond', $report->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="response">Tanggapan Admin</label>
            <textarea class="form-control" id="response" name="response" rows="3" required>{{ old('response', $report->response) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Tanggapan</button>
    </form>
</div>
