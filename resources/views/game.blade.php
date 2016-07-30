@extends('layouts.master')

@section('title', 'Game')

@section('main')
    <main id="map">
    	<div class="map-container">

	        <?php App\Bomberman\Map::generate() ?>

	        <div class="sprite mine"></div>
	        
        </div>
    </main>
@stop

@section('scripts')
    @parent

@stop
