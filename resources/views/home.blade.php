@extends('layouts.master')

@section('title', 'Home')

@section('main')
    <main id="map">
    	<div class="map-container">
	        <?php App\Bomberman\Map::generate() ?>

	        <div class="sprite"></div>
        </div>
    </main>
@stop

@section('scripts')
    @parent

@stop
