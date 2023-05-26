<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
	public function index()
	{
		$movies = Http::asJson()->get(config('services.tmdb.endpoint') . 'search/movie?api_key=' . config('services.tmdb.api') . '&query=ドラゴンボール');
		$movies = isset($movies->json()['results']) ? $movies->json()['results'] : [];
		return view('home', compact('movies'));
	}
}
