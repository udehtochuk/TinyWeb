<!DOCTYPE html>
<html>
<head>
    <title>Sample Upload</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h2>Upload Sample CSV/Spreadsheet</h2>

        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" required>
            <button type="submit">Upload</button>
        </form>

        @if (count($samples) > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($samples as $sample)
                        <tr>
                            <td>{{ $sample->id }}</td>
                            <td>{{ $sample->name }}</td>
                            <td>{{ $sample->type }}</td>
                            <td>{{ $sample->location }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No data yet. Upload a file above to get started.</p>
        @endif
    </div>
</body>
</html>
