@extends('layouts/app')

@section('content')

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>タイトル</th>
          <th>ポスター</th>
          <th>リリース日</th>
          <th>評価</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($movies as $movie)
          <tr>
            <td>
              {{ $movie['original_title'] }}
            </td>
            <td>
              <img
                src="{{ config('services.tmdb.poster') . $movie['poster_path'] }}"
                alt="{{ $movie['original_title'] }}"
                class="poster"
              >
            </td>
            <td>
              {{ date("Y年m月d日", strtotime($movie['release_date'])) }}
            </td>
            <td>
              <i class="bi bi-star-fill"></i>
              {{ $movie['vote_average'] }}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection