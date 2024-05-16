<div class="container">
    <h2>Pengaduan: {{ $pengaduan->judul }}</h2>
    <p>{{ $pengaduan->deskripsi }}</p>

    <!-- Tampilkan pesan yang telah dikirim -->
    <div class="messages">
        <h3>Pesan</h3>
        @foreach ($pengaduan->messages as $message)
            <div class="message">
                <p>{{ $message->content }}</p>
                <small>Dikirim pada: {{ $message->created_at }}</small>
            </div>
        @endforeach
    </div>

    <!-- Form untuk mengirim pesan baru -->
    <div class="send-message-form">
        <h3>Kirim Pesan</h3>
        <form method="POST" action="{{ route('pengaduan.sendMessage', $pengaduan->id) }}">
            @csrf
            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea name="message" id="message" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>

    <!-- Tampilkan pesan sukses jika ada -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>