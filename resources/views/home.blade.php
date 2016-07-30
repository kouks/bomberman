@extends('layouts.master')

@section('title', 'Home')

@section('main')
    <main id="map">
    	<div class="map-container">
	        @for ($y = 0; $y < 13; $y++)
		        @for ($x = 0; $x < 15; $x++)
					<div class="tile <?= App\Bomberman\Tile::get($x, $y) ?>"></div>
		        @endfor
	        @endfor
        </div>
    </main>
@stop

@section('scripts')
    @parent

@stop
