@extends('layouts.main')

@section('container')
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="mb- text-center">Halaman About</h1>
    <h3 class="mb- text-center">{{ $name }}</h3>
    <p class="mb- text-center">{{ $email }}</p>
    <div class="card-body text-center">
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class= "img-thumbnail rounded-circle">
    </div>
<script src="js/script.js"></script>
</body>
</html>
@endsection