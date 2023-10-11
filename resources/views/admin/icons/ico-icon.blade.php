@extends('layouts.admin.master')

@section('title')Ico Icon
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Ico Icon</h3>
		@endslot
		<li class="breadcrumb-item">Icons</li>
		<li class="breadcrumb-item active">Ico Icon</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Abstract</h5>
						<span>New</span>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-angry-monster"></i>angry-monster</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bathtub"></i>bathtub</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bird-wings"></i>bird-wings</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bow"></i>bow</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brain-alt"></i>brain-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-butterfly-alt"></i>butterfly-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-castle"></i>castle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-circuit"></i>circuit</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dart"></i>dart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dice-alt"></i>dice-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-disability-race"></i>disability-race</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-diving-goggle"></i>diving-goggle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fire-alt"></i>fire-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-flame-torch"></i>flame-torch</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-flora"></i>flora</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-flora-flower"></i>flora-flower</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-gift-box"></i>gift-box</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-halloween-pumpkin"></i>halloween-pumpkin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-power"></i>hand-power</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-thunder"></i>hand-thunder</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-king-crown"></i>king-crown</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-king-monster"></i>king-monster</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-love"></i>love</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-magician-hat"></i>magician-hat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-native-american"></i>native-american</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-open-eye"></i>open-eye</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-owl-look"></i>owl-look</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-phoenix"></i>phoenix</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-queen-crown"></i>queen-crown</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-robot-face"></i>robot-face</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sand-clock"></i>sand-clock</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-shield-alt"></i>shield-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ship-wheel"></i>ship-wheel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-skull-danger"></i>skull-danger</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-skull-face"></i>skull-face</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snail"></i>snail</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snow-alt"></i>snow-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snow-flake"></i>snow-flake</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowmobile"></i>snowmobile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-space-shuttle"></i>space-shuttle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-star-shape"></i>star-shape</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-swirl"></i>swirl</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tattoo-wing"></i>tattoo-wing</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-throne"></i>throne</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-touch"></i>touch</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tree-alt"></i>tree-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-triangle"></i>triangle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-unity-hand"></i>unity-hand</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-weed"></i>weed</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-woman-bird"></i>woman-bird</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Animal</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-bat"></i>animal-bat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-bear"></i>animal-bear</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-bear-tracks"></i>animal-bear-tracks</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-bird"></i>animal-bird</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-bird-alt"></i>animal-bird-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-bone"></i>animal-bone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-bull"></i>animal-bull</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-camel"></i>animal-camel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-camel-alt"></i>animal-camel-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-camel-head"></i>animal-camel-head</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-cat"></i>animal-cat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-cat-alt-1"></i>animal-cat-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-cat-alt-2"></i>animal-cat-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-cat-alt-3"></i>animal-cat-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-cat-alt-4"></i>animal-cat-alt-4</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-cat-with-dog"></i>animal-cat-with-dog</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-cow"></i>animal-cow</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-cow-head"></i>animal-cow-head</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-crab"></i>animal-crab</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-crocodile"></i>animal-crocodile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-deer-head"></i>animal-deer-head</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-dog"></i>animal-dog</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-dog-alt"></i>animal-dog-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-dog-barking"></i>animal-dog-barking</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-dolphin"></i>animal-dolphin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-duck-tracks"></i>animal-duck-tracks</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-eagle-head"></i>animal-eagle-head</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-eaten-fish"></i>animal-eaten-fish</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-elephant"></i>animal-elephant</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-elephant-alt"></i>animal-elephant-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-elephant-head"></i>animal-elephant-head</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-elephant-head-alt"></i>animal-elephant-head-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-elk"></i>animal-elk</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-fish"></i>animal-fish</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-fish-alt-1"></i>animal-fish-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-fish-alt-2"></i>animal-fish-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-fish-alt-3"></i>animal-fish-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-fish-alt-4"></i>animal-fish-alt-4</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-fox"></i>animal-fox</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-fox-alt"></i>animal-fox-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-frog"></i>animal-frog</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-frog-tracks"></i>animal-frog-tracks</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-froggy"></i>animal-froggy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-giraffe"></i>animal-giraffe</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-giraffe-alt"></i>animal-giraffe-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-goat-head"></i>animal-goat-head</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-goat-head-alt-1"></i>animal-goat-head-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-goat-head-alt-2"></i>animal-goat-head-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-gorilla"></i>animal-gorilla</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-hen-tracks"></i>animal-hen-tracks</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-horse-head"></i>animal-horse-head</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-horse-head-alt-1"></i>animal-horse-head-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-horse-head-alt-2"></i>animal-horse-head-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-horse-tracks"></i>animal-horse-tracks</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-jellyfish"></i>animal-jellyfish</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-kangaroo"></i>animal-kangaroo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-lemur"></i>animal-lemur</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-lion"></i>animal-lion</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-lion-alt"></i>animal-lion-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-lion-head"></i>animal-lion-head</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-lion-head-alt"></i>animal-lion-head-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-monkey"></i>animal-monkey</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-monkey-alt-1"></i>animal-monkey-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-monkey-alt-2"></i>animal-monkey-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-monkey-alt-3"></i>animal-monkey-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-octopus"></i>animal-octopus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-octopus-alt"></i>animal-octopus-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-owl"></i>animal-owl</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-panda"></i>animal-panda</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-panda-alt"></i>animal-panda-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-panther"></i>animal-panther</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-parrot"></i>animal-parrot</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-parrot-lip"></i>animal-parrot-lip</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-paw"></i>animal-paw</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-pelican"></i>animal-pelican</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-penguin"></i>animal-penguin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-pig"></i>animal-pig</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-pig-alt"></i>animal-pig-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-pigeon"></i>animal-pigeon</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-pigeon-alt"></i>animal-pigeon-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-pigeons"></i>animal-pigeons</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-rabbit-running"></i>animal-rabbit-running</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-rat-alt"></i>animal-rat-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-rhino"></i>animal-rhino</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-rhino-head"></i>animal-rhino-head</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-rooster"></i>animal-rooster</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-seahorse"></i>animal-seahorse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-seal"></i>animal-seal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-shrimp"></i>animal-shrimp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-snail"></i>animal-snail</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-snail-alt-1"></i>animal-snail-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-snail-alt-2"></i>animal-snail-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-snake"></i>animal-snake</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-squid"></i>animal-squid</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-squirrel"></i>animal-squirrel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-tiger"></i>animal-tiger</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-tiger-alt"></i>animal-tiger-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-turtle"></i>animal-turtle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-whale"></i>animal-whale</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-woodpecker"></i>animal-woodpecker</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-animal-zebra"></i>animal-zebra</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Brand</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-acer"></i>brand-acer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-adidas"></i>brand-adidas</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-adobe"></i>brand-adobe</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-air-new-zealand"></i>brand-air-new-zealand</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-airbnb"></i>brand-airbnb</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-aircell"></i>brand-aircell</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-airtel"></i>brand-airtel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-alcatel"></i>brand-alcatel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-alibaba"></i>brand-alibaba</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-aliexpress"></i>brand-aliexpress</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-alipay"></i>brand-alipay</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-amazon"></i>brand-amazon</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-amd"></i>brand-amd</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-american-airlines"></i>brand-american-airlines</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-android"></i>brand-android</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-android-robot"></i>brand-android-robot</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-aol"></i>brand-aol</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-apple"></i>brand-apple</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-appstore"></i>brand-appstore</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-asus"></i>brand-asus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-ati"></i>brand-ati</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-att"></i>brand-att</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-audi"></i>brand-audi</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-axiata"></i>brand-axiata</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-bada"></i>brand-bada</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-bbc"></i>brand-bbc</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-bing"></i>brand-bing</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-blackberry"></i>brand-blackberry</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-bmw"></i>brand-bmw</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-box"></i>brand-box</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-burger-king"></i>brand-burger-king</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-business-insider"></i>brand-business-insider</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-buzzfeed"></i>brand-buzzfeed</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-cannon"></i>brand-cannon</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-casio"></i>brand-casio</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-china-mobile"></i>brand-china-mobile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-china-telecom"></i>brand-china-telecom</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-china-unicom"></i>brand-china-unicom</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-cisco"></i>brand-cisco</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-citibank"></i>brand-citibank</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-cnet"></i>brand-cnet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-cnn"></i>brand-cnn</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-cocal-cola"></i>brand-cocal-cola</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-compaq"></i>brand-compaq</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-copy"></i>brand-copy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-debian"></i>brand-debian</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-delicious"></i>brand-delicious</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-dell"></i>brand-dell</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-designbump"></i>brand-designbump</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-designfloat"></i>brand-designfloat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-disney"></i>brand-disney</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-dodge"></i>brand-dodge</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-dove"></i>brand-dove</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-ebay"></i>brand-ebay</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-eleven"></i>brand-eleven</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-emirates"></i>brand-emirates</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-espn"></i>brand-espn</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-etihad-airways"></i>brand-etihad-airways</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-etisalat"></i>brand-etisalat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-etsy"></i>brand-etsy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-facebook"></i>brand-facebook</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-fastrack"></i>brand-fastrack</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-fedex"></i>brand-fedex</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-ferrari"></i>brand-ferrari</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-fitbit"></i>brand-fitbit</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-flikr"></i>brand-flikr</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-forbes"></i>brand-forbes</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-foursquare"></i>brand-foursquare</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-fox"></i>brand-fox</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-foxconn"></i>brand-foxconn</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-fujitsu"></i>brand-fujitsu</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-general-electric"></i>brand-general-electric</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-gillette"></i>brand-gillette</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-gizmodo"></i>brand-gizmodo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-gnome"></i>brand-gnome</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-google"></i>brand-google</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-gopro"></i>brand-gopro</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-gucci"></i>brand-gucci</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-hallmark"></i>brand-hallmark</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-hi5"></i>brand-hi5</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-honda"></i>brand-honda</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-hp"></i>brand-hp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-hsbc"></i>brand-hsbc</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-htc"></i>brand-htc</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-huawei"></i>brand-huawei</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-hulu"></i>brand-hulu</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-hyundai"></i>brand-hyundai</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-ibm"></i>brand-ibm</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-icofont"></i>brand-icofont</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-icq"></i>brand-icq</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-ikea"></i>brand-ikea</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-imdb"></i>brand-imdb</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-indiegogo"></i>brand-indiegogo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-intel"></i>brand-intel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-ipair"></i>brand-ipair</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-jaguar"></i>brand-jaguar</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-java"></i>brand-java</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-joomla"></i>brand-joomla</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-joomshaper"></i>brand-joomshaper</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-kickstarter"></i>brand-kickstarter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-kik"></i>brand-kik</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-lastfm"></i>brand-lastfm</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-lego"></i>brand-lego</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-lenovo"></i>brand-lenovo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-levis"></i>brand-levis</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-lexus"></i>brand-lexus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-lg"></i>brand-lg</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-life-hacker"></i>brand-life-hacker</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-line-messenger"></i>brand-line-messenger</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-linkedin"></i>brand-linkedin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-linux"></i>brand-linux</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-linux-mint"></i>brand-linux-mint</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-lionix"></i>brand-lionix</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-live-messenger"></i>brand-live-messenger</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-loreal"></i>brand-loreal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-louis-vuitton"></i>brand-louis-vuitton</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-mac-os"></i>brand-mac-os</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-marvel-app"></i>brand-marvel-app</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-mashable"></i>brand-mashable</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-mazda"></i>brand-mazda</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-mcdonals"></i>brand-mcdonals</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-mercedes"></i>brand-mercedes</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-micromax"></i>brand-micromax</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-microsoft"></i>brand-microsoft</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-mobileme"></i>brand-mobileme</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-mobily"></i>brand-mobily</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-motorola"></i>brand-motorola</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-msi"></i>brand-msi</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-mts"></i>brand-mts</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-myspace"></i>brand-myspace</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-mytv"></i>brand-mytv</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-nasa"></i>brand-nasa</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-natgeo"></i>brand-natgeo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-nbc"></i>brand-nbc</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-nescafe"></i>brand-nescafe</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-nestle"></i>brand-nestle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-netflix"></i>brand-netflix</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-nexus"></i>brand-nexus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-nike"></i>brand-nike</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-nokia"></i>brand-nokia</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-nvidia"></i>brand-nvidia</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-omega"></i>brand-omega</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-opensuse"></i>brand-opensuse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-oracle"></i>brand-oracle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-panasonic"></i>brand-panasonic</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-paypal"></i>brand-paypal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-pepsi"></i>brand-pepsi</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-philips"></i>brand-philips</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-pizza-hut"></i>brand-pizza-hut</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-playstation"></i>brand-playstation</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-puma"></i>brand-puma</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-qatar-air"></i>brand-qatar-air</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-qvc"></i>brand-qvc</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-readernaut"></i>brand-readernaut</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-redbull"></i>brand-redbull</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-reebok"></i>brand-reebok</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-reuters"></i>brand-reuters</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-samsung"></i>brand-samsung</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-sap"></i>brand-sap</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-saudia-airlines"></i>brand-saudia-airlines</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-scribd"></i>brand-scribd</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-shell"></i>brand-shell</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-siemens"></i>brand-siemens</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-sk-telecom"></i>brand-sk-telecom</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-slideshare"></i>brand-slideshare</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-smashing-magazine"></i>brand-smashing-magazine</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-snapchat"></i>brand-snapchat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-sony"></i>brand-sony</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-sony-ericsson"></i>brand-sony-ericsson</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-soundcloud"></i>brand-soundcloud</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-sprint"></i>brand-sprint</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-squidoo"></i>brand-squidoo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-starbucks"></i>brand-starbucks</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-stc"></i>brand-stc</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-steam"></i>brand-steam</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-suzuki"></i>brand-suzuki</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-symbian"></i>brand-symbian</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-t-mobile"></i>brand-t-mobile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-tango"></i>brand-tango</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-target"></i>brand-target</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-tata-indicom"></i>brand-tata-indicom</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-techcrunch"></i>brand-techcrunch</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-telenor"></i>brand-telenor</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-teliasonera"></i>brand-teliasonera</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-tesla"></i>brand-tesla</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-the-verge"></i>brand-the-verge</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-thenextweb"></i>brand-thenextweb</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-toshiba"></i>brand-toshiba</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-toyota"></i>brand-toyota</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-tribenet"></i>brand-tribenet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-ubuntu"></i>brand-ubuntu</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-unilever"></i>brand-unilever</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-vaio"></i>brand-vaio</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-verizon"></i>brand-verizon</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-viber"></i>brand-viber</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-vodafone"></i>brand-vodafone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-volkswagen"></i>brand-volkswagen</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-walmart"></i>brand-walmart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-warnerbros"></i>brand-warnerbros</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-whatsapp"></i>brand-whatsapp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-wikipedia"></i>brand-wikipedia</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-windows"></i>brand-windows</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-wire"></i>brand-wire</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-wordpress"></i>brand-wordpress</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-xiaomi"></i>brand-xiaomi</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-yahoobuzz"></i>brand-yahoobuzz</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-yamaha"></i>brand-yamaha</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-youtube"></i>brand-youtube</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-zain"></i>brand-zain</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-envato"></i>social-envato</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Business</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bank-alt"></i>bank-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-barcode"></i>barcode</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-basket"></i>basket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bill-alt"></i>bill-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-billboard"></i>billboard</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-briefcase-alt-1"></i>briefcase-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-briefcase-alt-2"></i>briefcase-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-building-alt"></i>building-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-businessman"></i>businessman</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-businesswoman"></i>businesswoman</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cart-alt"></i>cart-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chair"></i>chair</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-clip"></i>clip</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-coins"></i>coins</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-company"></i>company</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-contact-add"></i>contact-add</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-deal"></i>deal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-files"></i>files</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-growth"></i>growth</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-id-card"></i>id-card</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-idea"></i>idea</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-list"></i>list</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-meeting-add"></i>meeting-add</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-money-bag"></i>money-bag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-people"></i>people</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pie-chart"></i>pie-chart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-presentation-alt"></i>presentation-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stamp"></i>stamp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stock-mobile"></i>stock-mobile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-support"></i>support</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tasks-alt"></i>tasks-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wheel"></i>wheel</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Chart</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chart-arrows-axis"></i>chart-arrows-axis</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chart-bar-graph"></i>chart-bar-graph</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chart-flow"></i>chart-flow</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chart-flow-alt-1"></i>chart-flow-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chart-flow-alt-2"></i>chart-flow-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chart-histogram"></i>chart-histogram</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chart-histogram-alt"></i>chart-histogram-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chart-line"></i>chart-line</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chart-line-alt"></i>chart-line-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chart-pie"></i>chart-pie</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chart-pie-alt"></i>chart-pie-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chart-radar-graph"></i>chart-radar-graph</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Construction</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-architecture"></i>architecture</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-architecture-alt"></i>architecture-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-barricade"></i>barricade</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bricks"></i>bricks</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-calculations"></i>calculations</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cement-mix"></i>cement-mix</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cement-mixer"></i>cement-mixer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-danger-zone"></i>danger-zone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-drill"></i>drill</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-eco-energy"></i>eco-energy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-eco-environmen"></i>eco-environmen</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-energy-air"></i>energy-air</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-energy-oil"></i>energy-oil</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-energy-savings"></i>energy-savings</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-energy-solar"></i>energy-solar</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-energy-water"></i>energy-water</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-engineer"></i>engineer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fire-extinguisher-alt"></i>fire-extinguisher-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fix-tools"></i>fix-tools</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-glue-oil"></i>glue-oil</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hammer-alt"></i>hammer-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-help-robot"></i>help-robot</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-industries"></i>industries</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-industries-alt-1"></i>industries-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-industries-alt-2"></i>industries-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-industries-alt-3"></i>industries-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-industries-alt-4"></i>industries-alt-4</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-industries-alt-5"></i>industries-alt-5</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-labour"></i>labour</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mining"></i>mining</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-paint-brush"></i>paint-brush</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pollution"></i>pollution</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-power-zone"></i>power-zone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-radio-active"></i>radio-active</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-recycle-alt"></i>recycle-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-recycling-man"></i>recycling-man</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-safety-hat"></i>safety-hat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-safety-hat-light"></i>safety-hat-light</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-saw"></i>saw</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-screw-driver"></i>screw-driver</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-settings-alt"></i>settings-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tools-alt-1"></i>tools-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tools-alt-2"></i>tools-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tools-bag"></i>tools-bag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-trolley"></i>trolley</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-trowel"></i>trowel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-under-construction"></i>under-construction</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-under-construction-alt"></i>under-construction-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-vehicle-cement"></i>vehicle-cement</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-vehicle-crane"></i>vehicle-crane</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-vehicle-delivery-van"></i>vehicle-delivery-van</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-vehicle-dozer"></i>vehicle-dozer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-vehicle-excavator"></i>vehicle-excavator</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-vehicle-trucktor"></i>vehicle-trucktor</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-vehicle-wrecking"></i>vehicle-wrecking</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-worker"></i>worker</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-worker-group"></i>worker-group</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wrench"></i>wrench</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Currency</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-afghani"></i>cur-afghani</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-afghani-false"></i>cur-afghani-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-afghani-minus"></i>cur-afghani-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-afghani-plus"></i>cur-afghani-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-afghani-true"></i>cur-afghani-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-baht"></i>cur-baht</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-baht-false"></i>cur-baht-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-baht-minus"></i>cur-baht-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-baht-plus"></i>cur-baht-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-baht-true"></i>cur-baht-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-bitcoin"></i>cur-bitcoin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-bitcoin-false"></i>cur-bitcoin-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-bitcoin-minus"></i>cur-bitcoin-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-bitcoin-plus"></i>cur-bitcoin-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-bitcoin-true"></i>cur-bitcoin-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-dollar"></i>cur-dollar</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-dollar-flase"></i>cur-dollar-flase</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-dollar-minus"></i>cur-dollar-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-dollar-plus"></i>cur-dollar-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-dollar-true"></i>cur-dollar-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-dong"></i>cur-dong</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-dong-false"></i>cur-dong-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-dong-minus"></i>cur-dong-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-dong-plus"></i>cur-dong-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-dong-true"></i>cur-dong-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-euro"></i>cur-euro</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-euro-false"></i>cur-euro-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-euro-minus"></i>cur-euro-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-euro-plus"></i>cur-euro-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-euro-true"></i>cur-euro-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-frank"></i>cur-frank</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-frank-false"></i>cur-frank-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-frank-minus"></i>cur-frank-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-frank-plus"></i>cur-frank-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-frank-true"></i>cur-frank-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-hryvnia"></i>cur-hryvnia</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-hryvnia-false"></i>cur-hryvnia-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-hryvnia-minus"></i>cur-hryvnia-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-hryvnia-plus"></i>cur-hryvnia-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-hryvnia-true"></i>cur-hryvnia-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-lira"></i>cur-lira</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-lira-false"></i>cur-lira-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-lira-minus"></i>cur-lira-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-lira-plus"></i>cur-lira-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-lira-true"></i>cur-lira-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-peseta"></i>cur-peseta</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-peseta-false"></i>cur-peseta-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-peseta-minus"></i>cur-peseta-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-peseta-plus"></i>cur-peseta-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-peseta-true"></i>cur-peseta-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-peso"></i>cur-peso</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-peso-false"></i>cur-peso-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-peso-minus"></i>cur-peso-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-peso-plus"></i>cur-peso-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-peso-true"></i>cur-peso-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-pound"></i>cur-pound</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-pound-false"></i>cur-pound-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-pound-minus"></i>cur-pound-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-pound-plus"></i>cur-pound-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-pound-true"></i>cur-pound-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-renminbi"></i>cur-renminbi</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-renminbi-false"></i>cur-renminbi-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-renminbi-minus"></i>cur-renminbi-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-renminbi-plus"></i>cur-renminbi-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-renminbi-true"></i>cur-renminbi-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-riyal"></i>cur-riyal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-riyal-false"></i>cur-riyal-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-riyal-minus"></i>cur-riyal-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-riyal-plus"></i>cur-riyal-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-riyal-true"></i>cur-riyal-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-rouble"></i>cur-rouble</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-rouble-false"></i>cur-rouble-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-rouble-minus"></i>cur-rouble-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-rouble-plus"></i>cur-rouble-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-rouble-true"></i>cur-rouble-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-rupee"></i>cur-rupee</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-rupee-false"></i>cur-rupee-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-rupee-minus"></i>cur-rupee-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-rupee-plus"></i>cur-rupee-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-rupee-true"></i>cur-rupee-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-taka"></i>cur-taka</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-taka-false"></i>cur-taka-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-taka-minus"></i>cur-taka-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-taka-plus"></i>cur-taka-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-taka-true"></i>cur-taka-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-turkish-lira"></i>cur-turkish-lira</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-turkish-lira-false"></i>cur-turkish-lira-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-turkish-lira-minus"></i>cur-turkish-lira-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-turkish-lira-plus"></i>cur-turkish-lira-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-turkish-lira-true"></i>cur-turkish-lira-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-won"></i>cur-won</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-won-false"></i>cur-won-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-won-minus"></i>cur-won-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-won-plus"></i>cur-won-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-won-true"></i>cur-won-true</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-yen"></i>cur-yen</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-yen-false"></i>cur-yen-false</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-yen-minus"></i>cur-yen-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-yen-plus"></i>cur-yen-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cur-yen-true"></i>cur-yen-true</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Device</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-android-nexus"></i>android-nexus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-android-tablet"></i>android-tablet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-apple-watch"></i>apple-watch</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-drwaing-tablet"></i>drwaing-tablet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-earphone"></i>earphone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-flash-drive"></i>flash-drive</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-game-control"></i>game-control</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-headphone-alt"></i>headphone-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-htc-one"></i>htc-one</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-imac"></i>imac</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ipad-touch"></i>ipad-touch</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-iphone"></i>iphone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ipod-nano"></i>ipod-nano</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ipod-touch"></i>ipod-touch</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-keyboard-alt"></i>keyboard-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-keyboard-wireless"></i>keyboard-wireless</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-laptop-alt"></i>laptop-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-macbook"></i>macbook</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-magic-mouse"></i>magic-mouse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-microphone-alt"></i>microphone-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-monitor"></i>monitor</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mouse"></i>mouse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-nintendo"></i>nintendo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-playstation"></i>playstation</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-psvita"></i>psvita</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-radio-mic"></i>radio-mic</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-refrigerator"></i>refrigerator</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-samsung-galaxy"></i>samsung-galaxy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-surface-tablet"></i>surface-tablet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-washing-machine"></i>washing-machine</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wifi-router"></i>wifi-router</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wii-u"></i>wii-u</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-windows-lumia"></i>windows-lumia</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wireless-mouse"></i>wireless-mouse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-xbox-360"></i>xbox-360</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Directional</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-arrow-down"></i>arrow-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-arrow-left"></i>arrow-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-arrow-right"></i>arrow-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-arrow-up"></i>arrow-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-block-down"></i>block-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-block-left"></i>block-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-block-right"></i>block-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-block-up"></i>block-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bubble-down"></i>bubble-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bubble-left"></i>bubble-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bubble-right"></i>bubble-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bubble-up"></i>bubble-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-caret-down"></i>caret-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-caret-left"></i>caret-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-caret-right"></i>caret-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-caret-up"></i>caret-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-circled-down"></i>circled-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-circled-left"></i>circled-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-circled-right"></i>circled-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-circled-up"></i>circled-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-collapse"></i>collapse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cursor-drag"></i>cursor-drag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-curved-double-left"></i>curved-double-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-curved-double-right"></i>curved-double-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-curved-down"></i>curved-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-curved-left"></i>curved-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-curved-right"></i>curved-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-curved-up"></i>curved-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dotted-down"></i>dotted-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dotted-left"></i>dotted-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dotted-right"></i>dotted-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dotted-up"></i>dotted-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-double-left"></i>double-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-double-right"></i>double-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-drag"></i>drag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-drag1"></i>drag1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-drag2"></i>drag2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-drag3"></i>drag3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-expand-alt"></i>expand-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-down"></i>hand-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-drag"></i>hand-drag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-drag1"></i>hand-drag1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-drag2"></i>hand-drag2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-drawn-alt-down"></i>hand-drawn-alt-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-drawn-alt-left"></i>hand-drawn-alt-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-drawn-alt-right"></i>hand-drawn-alt-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-drawn-alt-up"></i>hand-drawn-alt-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-drawn-down"></i>hand-drawn-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-drawn-left"></i>hand-drawn-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-drawn-right"></i>hand-drawn-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-drawn-up"></i>hand-drawn-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-left"></i>hand-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-right"></i>hand-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-up"></i>hand-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-line-block-down"></i>line-block-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-line-block-left"></i>line-block-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-line-block-right"></i>line-block-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-line-block-up"></i>line-block-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-long-arrow-down"></i>long-arrow-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-long-arrow-left"></i>long-arrow-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-long-arrow-right"></i>long-arrow-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-long-arrow-up"></i>long-arrow-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rounded-collapse"></i>rounded-collapse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rounded-double-left"></i>rounded-double-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rounded-double-right"></i>rounded-double-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rounded-down"></i>rounded-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rounded-expand"></i>rounded-expand</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rounded-left"></i>rounded-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rounded-left-down"></i>rounded-left-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rounded-left-up"></i>rounded-left-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rounded-right"></i>rounded-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rounded-right-down"></i>rounded-right-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rounded-right-up"></i>rounded-right-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rounded-up"></i>rounded-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-bubble-down"></i>scroll-bubble-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-bubble-left"></i>scroll-bubble-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-bubble-right"></i>scroll-bubble-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-bubble-up"></i>scroll-bubble-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-double-down"></i>scroll-double-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-double-left"></i>scroll-double-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-double-right"></i>scroll-double-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-double-up"></i>scroll-double-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-down"></i>scroll-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-left"></i>scroll-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-long-down"></i>scroll-long-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-long-left"></i>scroll-long-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-long-right"></i>scroll-long-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-long-up"></i>scroll-long-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-right"></i>scroll-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scroll-up"></i>scroll-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-simple-down"></i>simple-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-simple-left"></i>simple-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-simple-left-down"></i>simple-left-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-simple-left-up"></i>simple-left-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-simple-right"></i>simple-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-simple-right-down"></i>simple-right-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-simple-right-up"></i>simple-right-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-simple-up"></i>simple-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-square-down"></i>square-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-square-left"></i>square-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-square-right"></i>square-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-square-up"></i>square-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stylish-down"></i>stylish-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stylish-left"></i>stylish-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stylish-right"></i>stylish-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stylish-up"></i>stylish-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-swoosh-down"></i>swoosh-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-swoosh-left"></i>swoosh-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-swoosh-right"></i>swoosh-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-swoosh-up"></i>swoosh-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thin-double-left"></i>thin-double-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thin-double-right"></i>thin-double-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thin-down"></i>thin-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thin-left"></i>thin-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thin-right"></i>thin-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thin-up"></i>thin-up</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Education</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-atom"></i>atom</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-award"></i>award</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bell-alt"></i>bell-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-book-alt"></i>book-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brainstorming"></i>brainstorming</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-certificate-alt-1"></i>certificate-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-certificate-alt-2"></i>certificate-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dna-alt-2"></i>dna-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-education"></i>education</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-electron"></i>electron</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fountain-pen"></i>fountain-pen</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-globe-alt"></i>globe-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-graduate-alt"></i>graduate-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-group-students"></i>group-students</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hat"></i>hat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hat-alt"></i>hat-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-instrument"></i>instrument</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lamp-light"></i>lamp-light</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-microscope-alt"></i>microscope-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-paper"></i>paper</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pen-alt-4"></i>pen-alt-4</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pen-nib"></i>pen-nib</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pencil-alt-5"></i>pencil-alt-5</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-quill-pen"></i>quill-pen</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-read-book"></i>read-book</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-read-book-alt"></i>read-book-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-school-bag"></i>school-bag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-school-bus"></i>school-bus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-student"></i>student</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-student-alt"></i>student-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-teacher"></i>teacher</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-test-bulb"></i>test-bulb</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-test-tube-alt"></i>test-tube-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-university"></i>university</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Emoticon</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-angry"></i>emo-angry</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-astonished"></i>emo-astonished</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-confounded"></i>emo-confounded</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-confused"></i>emo-confused</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-crying"></i>emo-crying</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-dizzy"></i>emo-dizzy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-expressionless"></i>emo-expressionless</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-heart-eyes"></i>emo-heart-eyes</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-laughing"></i>emo-laughing</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-nerd-smile"></i>emo-nerd-smile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-open-mouth"></i>emo-open-mouth</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-rage"></i>emo-rage</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-rolling-eyes"></i>emo-rolling-eyes</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-sad"></i>emo-sad</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-simple-smile"></i>emo-simple-smile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-slightly-smile"></i>emo-slightly-smile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-smirk"></i>emo-smirk</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-stuck-out-tongue"></i>emo-stuck-out-tongue</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-wink-smile"></i>emo-wink-smile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-emo-worried"></i>emo-worried</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">File Type</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-audio"></i>file-audio</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-avi-mp4"></i>file-avi-mp4</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-bmp"></i>file-bmp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-code"></i>file-code</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-css"></i>file-css</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-document"></i>file-document</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-eps"></i>file-eps</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-excel"></i>file-excel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-exe"></i>file-exe</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-file"></i>file-file</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-flv"></i>file-flv</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-gif"></i>file-gif</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-html5"></i>file-html5</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-image"></i>file-image</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-iso"></i>file-iso</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-java"></i>file-java</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-javascript"></i>file-javascript</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-jpg"></i>file-jpg</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-midi"></i>file-midi</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-mov"></i>file-mov</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-mp3"></i>file-mp3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-pdf"></i>file-pdf</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-php"></i>file-php</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-png"></i>file-png</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-powerpoint"></i>file-powerpoint</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-presentation"></i>file-presentation</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-psb"></i>file-psb</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-psd"></i>file-psd</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-python"></i>file-python</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-ruby"></i>file-ruby</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-spreadsheet"></i>file-spreadsheet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-sql"></i>file-sql</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-svg"></i>file-svg</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-text"></i>file-text</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-tiff"></i>file-tiff</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-video"></i>file-video</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-wave"></i>file-wave</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-wmv"></i>file-wmv</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-word"></i>file-word</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-zip"></i>file-zip</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Food</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-apple"></i>apple</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-arabian-coffee"></i>arabian-coffee</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-artichoke"></i>artichoke</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-asparagus"></i>asparagus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-avocado"></i>avocado</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-baby-food"></i>baby-food</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-banana"></i>banana</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bbq"></i>bbq</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-beans"></i>beans</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-beer"></i>beer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bell-pepper-capsicum"></i>bell-pepper-capsicum</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-birthday-cake"></i>birthday-cake</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bread"></i>bread</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-broccoli"></i>broccoli</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-burger"></i>burger</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cabbage"></i>cabbage</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-carrot"></i>carrot</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cauli-flower"></i>cauli-flower</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cheese"></i>cheese</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chef"></i>chef</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cherry"></i>cherry</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chicken"></i>chicken</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chicken-fry"></i>chicken-fry</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cocktail"></i>cocktail</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-coconut"></i>coconut</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-coffee-alt"></i>coffee-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-coffee-mug"></i>coffee-mug</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-coffee-pot"></i>coffee-pot</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cola"></i>cola</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-corn"></i>corn</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-croissant"></i>croissant</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-crop-plant"></i>crop-plant</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cucumber"></i>cucumber</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cup-cake"></i>cup-cake</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dining-table"></i>dining-table</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-donut"></i>donut</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-egg-plant"></i>egg-plant</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-egg-poached"></i>egg-poached</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-farmer"></i>farmer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-farmer1"></i>farmer1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fast-food"></i>fast-food</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fish"></i>fish</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-food-basket"></i>food-basket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-food-cart"></i>food-cart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fork-and-knife"></i>fork-and-knife</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-french-fries"></i>french-fries</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fresh-juice"></i>fresh-juice</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fruits"></i>fruits</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-grapes"></i>grapes</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-honey"></i>honey</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hot-dog"></i>hot-dog</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hotel-alt"></i>hotel-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ice-cream"></i>ice-cream</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ice-cream-alt"></i>ice-cream-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ketchup"></i>ketchup</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-kiwi"></i>kiwi</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-layered-cake"></i>layered-cake</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lemon-alt"></i>lemon-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lobster"></i>lobster</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mango"></i>mango</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-milk"></i>milk</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mushroom"></i>mushroom</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-noodles"></i>noodles</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-onion"></i>onion</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-orange"></i>orange</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pear"></i>pear</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-peas"></i>peas</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pepper"></i>pepper</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pie-alt"></i>pie-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pineapple"></i>pineapple</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pizza"></i>pizza</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pizza-slice"></i>pizza-slice</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-plant"></i>plant</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-popcorn"></i>popcorn</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-potato"></i>potato</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pumpkin"></i>pumpkin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-raddish"></i>raddish</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-restaurant"></i>restaurant</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-restaurant-menu"></i>restaurant-menu</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-salt-and-pepper"></i>salt-and-pepper</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sandwich"></i>sandwich</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sausage"></i>sausage</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-shrimp"></i>shrimp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sof-drinks"></i>sof-drinks</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-soup-bowl"></i>soup-bowl</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-spoon-and-fork"></i>spoon-and-fork</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-steak"></i>steak</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-strawberry"></i>strawberry</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sub-sandwich"></i>sub-sandwich</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sushi"></i>sushi</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-taco"></i>taco</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tea"></i>tea</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tea-pot"></i>tea-pot</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tomato"></i>tomato</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-waiter-alt"></i>waiter-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-watermelon"></i>watermelon</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wheat"></i>wheat</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Kids & Toys</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-abc"></i>abc</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-baby-cloth"></i>baby-cloth</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-baby-milk-bottle"></i>baby-milk-bottle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-baby-trolley"></i>baby-trolley</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-back-pack"></i>back-pack</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-candy"></i>candy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cycling"></i>cycling</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-holding-hands"></i>holding-hands</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-infant-nipple"></i>infant-nipple</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-kids-scooter"></i>kids-scooter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-safety-pin"></i>safety-pin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-teddy-bear"></i>teddy-bear</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-toy-ball"></i>toy-ball</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-toy-cat"></i>toy-cat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-toy-duck"></i>toy-duck</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-toy-elephant"></i>toy-elephant</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-toy-hand"></i>toy-hand</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-toy-horse"></i>toy-horse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-toy-lattu"></i>toy-lattu</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-toy-train"></i>toy-train</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-unique-idea"></i>unique-idea</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Law</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bag-alt"></i>bag-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-burglar"></i>burglar</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cannon-firing"></i>cannon-firing</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cc-camera"></i>cc-camera</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cop"></i>cop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cop-badge"></i>cop-badge</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-court"></i>court</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-court-hammer"></i>court-hammer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-finger-print"></i>finger-print</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-handcuff"></i>handcuff</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-handcuff-alt"></i>handcuff-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-investigation"></i>investigation</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-investigator"></i>investigator</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-jail"></i>jail</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-judge"></i>judge</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-law"></i>law</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-law-alt-1"></i>law-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-law-alt-2"></i>law-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-law-alt-3"></i>law-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-law-book"></i>law-book</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-law-document"></i>law-document</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lawyer"></i>lawyer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lawyer-alt-1"></i>lawyer-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lawyer-alt-2"></i>lawyer-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-order"></i>order</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pistol"></i>pistol</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-police"></i>police</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-police-badge"></i>police-badge</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-police-cap"></i>police-cap</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-police-car-alt-1"></i>police-car-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-police-car-alt-2"></i>police-car-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-police-hat"></i>police-hat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-police-van"></i>police-van</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-protect"></i>protect</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scales"></i>scales</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thief"></i>thief</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thief-alt"></i>thief-alt</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Mathematical</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-abacus"></i>abacus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-abacus-alt"></i>abacus-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-angle"></i>angle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-calculator-alt-1"></i>calculator-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-calculator-alt-2"></i>calculator-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-circle-ruler"></i>circle-ruler</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-circle-ruler-alt"></i>circle-ruler-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-compass-alt-1"></i>compass-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-compass-alt-2"></i>compass-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-compass-alt-3"></i>compass-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-compass-alt-4"></i>compass-alt-4</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-degrees"></i>degrees</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-degrees-alt-1"></i>degrees-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-degrees-alt-2"></i>degrees-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-golden-ratio"></i>golden-ratio</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-marker-alt-1"></i>marker-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-marker-alt-2"></i>marker-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-marker-alt-3"></i>marker-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mathematical"></i>mathematical</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mathematical-alt-1"></i>mathematical-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mathematical-alt-2"></i>mathematical-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pen-alt-1"></i>pen-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pen-alt-2"></i>pen-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pen-alt-3"></i>pen-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pen-holder"></i>pen-holder</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pen-holder-alt-1"></i>pen-holder-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pencil-alt-1"></i>pencil-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pencil-alt-2"></i>pencil-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pencil-alt-3"></i>pencil-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pencil-alt-4"></i>pencil-alt-4</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ruler"></i>ruler</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ruler-alt-1"></i>ruler-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ruler-alt-2"></i>ruler-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ruler-compass"></i>ruler-compass</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ruler-compass-alt"></i>ruler-compass-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ruler-pencil"></i>ruler-pencil</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ruler-pencil-alt-1"></i>ruler-pencil-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ruler-pencil-alt-2"></i>ruler-pencil-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rulers"></i>rulers</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rulers-alt"></i>rulers-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-square-root"></i>square-root</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Medical</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-aids"></i>aids</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ambulance"></i>ambulance</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-autism"></i>autism</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bandage"></i>bandage</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bed-patient"></i>bed-patient</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-blind"></i>blind</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-blood"></i>blood</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-blood-drop"></i>blood-drop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-blood-test"></i>blood-test</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-capsule"></i>capsule</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-crutches"></i>crutches</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dna"></i>dna</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dna-alt-1"></i>dna-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-doctor"></i>doctor</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-doctor-alt"></i>doctor-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-drug"></i>drug</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-drug-pack"></i>drug-pack</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-eye-alt"></i>eye-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-first-aid-alt"></i>first-aid-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-garbage"></i>garbage</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-heart-alt"></i>heart-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-heartbeat"></i>heartbeat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-herbal"></i>herbal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hospital"></i>hospital</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-icu"></i>icu</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-injection-syringe"></i>injection-syringe</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-laboratory"></i>laboratory</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-medical-sign"></i>medical-sign</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-medical-sign-alt"></i>medical-sign-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-nurse"></i>nurse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-nurse-alt"></i>nurse-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-nursing-home"></i>nursing-home</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-operation-theater"></i>operation-theater</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-paralysis-disability"></i>paralysis-disability</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pills"></i>pills</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-prescription"></i>prescription</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pulse"></i>pulse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stethoscope"></i>stethoscope</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stethoscope-alt"></i>stethoscope-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stretcher"></i>stretcher</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-surgeon"></i>surgeon</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-surgeon-alt"></i>surgeon-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tablets"></i>tablets</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-test-bottle"></i>test-bottle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-test-tube"></i>test-tube</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thermometer-alt"></i>thermometer-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tooth"></i>tooth</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-xray"></i>xray</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Mobile UI</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-add"></i>ui-add</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-alarm"></i>ui-alarm</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-battery"></i>ui-battery</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-block"></i>ui-block</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-bluetooth"></i>ui-bluetooth</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-brightness"></i>ui-brightness</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-browser"></i>ui-browser</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-calculator"></i>ui-calculator</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-calendar"></i>ui-calendar</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-call"></i>ui-call</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-camera"></i>ui-camera</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-cart"></i>ui-cart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-cell-phone"></i>ui-cell-phone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-chat"></i>ui-chat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-check"></i>ui-check</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-clip"></i>ui-clip</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-clip-board"></i>ui-clip-board</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-clock"></i>ui-clock</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-close"></i>ui-close</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-contact-list"></i>ui-contact-list</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-copy"></i>ui-copy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-cut"></i>ui-cut</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-delete"></i>ui-delete</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-dial-phone"></i>ui-dial-phone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-edit"></i>ui-edit</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-email"></i>ui-email</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-file"></i>ui-file</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-fire-wall"></i>ui-fire-wall</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-flash-light"></i>ui-flash-light</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-flight"></i>ui-flight</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-folder"></i>ui-folder</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-game"></i>ui-game</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-handicapped"></i>ui-handicapped</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-head-phone"></i>ui-head-phone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-home"></i>ui-home</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-image"></i>ui-image</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-keyboard"></i>ui-keyboard</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-laoding"></i>ui-laoding</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-lock"></i>ui-lock</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-love"></i>ui-love</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-love-add"></i>ui-love-add</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-love-broken"></i>ui-love-broken</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-love-remove"></i>ui-love-remove</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-map"></i>ui-map</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-message"></i>ui-message</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-messaging"></i>ui-messaging</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-movie"></i>ui-movie</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-music"></i>ui-music</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-music-player"></i>ui-music-player</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-mute"></i>ui-mute</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-Refferal"></i>ui-Refferal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-next"></i>ui-next</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-note"></i>ui-note</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-office"></i>ui-office</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-password"></i>ui-password</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-pause"></i>ui-pause</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-play"></i>ui-play</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-play-stop"></i>ui-play-stop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-pointer"></i>ui-pointer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-power"></i>ui-power</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-press"></i>ui-press</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-previous"></i>ui-previous</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-rate-add"></i>ui-rate-add</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-rate-blank"></i>ui-rate-blank</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-rate-remove"></i>ui-rate-remove</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-rating"></i>ui-rating</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-record"></i>ui-record</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-remove"></i>ui-remove</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-reply"></i>ui-reply</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-rotation"></i>ui-rotation</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-rss"></i>ui-rss</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-search"></i>ui-search</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-settings"></i>ui-settings</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-social-link"></i>ui-social-link</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-tag"></i>ui-tag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-text-chat"></i>ui-text-chat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-text-loading"></i>ui-text-loading</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-theme"></i>ui-theme</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-timer"></i>ui-timer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-touch-phone"></i>ui-touch-phone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-travel"></i>ui-travel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-unlock"></i>ui-unlock</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-user"></i>ui-user</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-user-group"></i>ui-user-group</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-v-card"></i>ui-v-card</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-video"></i>ui-video</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-video-chat"></i>ui-video-chat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-video-message"></i>ui-video-message</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-video-play"></i>ui-video-play</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-volume"></i>ui-volume</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-weather"></i>ui-weather</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-wifi"></i>ui-wifi</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-zoom-in"></i>ui-zoom-in</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ui-zoom-out"></i>ui-zoom-out</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Multimedia</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cassette"></i>cassette</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cassette-player"></i>cassette-player</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-forward"></i>forward</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-game"></i>game</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-guiter"></i>guiter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-headphone-alt-1"></i>headphone-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-headphone-alt-2"></i>headphone-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-headphone-alt-3"></i>headphone-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-listening"></i>listening</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-megaphone"></i>megaphone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-megaphone-alt"></i>megaphone-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-movie"></i>movie</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mp3-player"></i>mp3-player</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-multimedia"></i>multimedia</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-music-disk"></i>music-disk</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-music-note"></i>music-note</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pause"></i>pause</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-play-alt-1"></i>play-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-play-alt-2"></i>play-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-play-alt-3"></i>play-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-play-pause"></i>play-pause</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-record"></i>record</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-retro-music-disk"></i>retro-music-disk</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rewind"></i>rewind</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-song-notes"></i>song-notes</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sound-wave"></i>sound-wave</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sound-wave-alt"></i>sound-wave-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stop"></i>stop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-video-alt"></i>video-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-video-cam"></i>video-cam</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-volume-bar"></i>volume-bar</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-volume-mute"></i>volume-mute</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-youtube-play"></i>youtube-play</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Payment</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-amazon"></i>amazon</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-amazon-alt"></i>amazon-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-american-express"></i>american-express</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-american-express-alt"></i>american-express-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-apple-pay"></i>apple-pay</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-apple-pay-alt"></i>apple-pay-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bank-transfer"></i>bank-transfer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bank-transfer-alt"></i>bank-transfer-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-braintree"></i>braintree</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-braintree-alt"></i>braintree-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cash-on-delivery"></i>cash-on-delivery</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cash-on-delivery-alt"></i>cash-on-delivery-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-checkout"></i>checkout</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-checkout-alt"></i>checkout-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-diners-club"></i>diners-club</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-diners-club-alt-1"></i>diners-club-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-diners-club-alt-2"></i>diners-club-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-diners-club-alt-3"></i>diners-club-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-discover"></i>discover</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-discover-alt"></i>discover-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-eway"></i>eway</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-eway-alt"></i>eway-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-google-wallet"></i>google-wallet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-google-wallet-alt-1"></i>google-wallet-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-google-wallet-alt-2"></i>google-wallet-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-google-wallet-alt-3"></i>google-wallet-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-jcb"></i>jcb</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-jcb-alt"></i>jcb-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-maestro"></i>maestro</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-maestro-alt"></i>maestro-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mastercard"></i>mastercard</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mastercard-alt"></i>mastercard-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-payoneer"></i>payoneer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-payoneer-alt"></i>payoneer-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-paypal"></i>paypal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-paypal-alt"></i>paypal-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sage"></i>sage</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sage-alt"></i>sage-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-skrill"></i>skrill</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-skrill-alt"></i>skrill-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stripe"></i>stripe</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stripe-alt"></i>stripe-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-visa"></i>visa</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-visa-alt"></i>visa-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-visa-electron"></i>visa-electron</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-western-union"></i>western-union</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-western-union-alt"></i>western-union-alt</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Person</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-boy"></i>boy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-business-man"></i>business-man</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-business-man-alt-1"></i>business-man-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-business-man-alt-2"></i>business-man-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-business-man-alt-3"></i>business-man-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-funky-man"></i>funky-man</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-girl"></i>girl</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-girl-alt"></i>girl-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hotel-boy"></i>hotel-boy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hotel-boy-alt"></i>hotel-boy-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-man-in-glasses"></i>man-in-glasses</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-user"></i>user</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-user-alt-1"></i>user-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-user-alt-2"></i>user-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-user-alt-3"></i>user-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-user-alt-4"></i>user-alt-4</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-user-alt-5"></i>user-alt-5</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-user-alt-6"></i>user-alt-6</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-user-alt-7"></i>user-alt-7</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-user-female"></i>user-female</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-user-male"></i>user-male</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-user-suited"></i>user-suited</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-users"></i>users</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-users-alt-1"></i>users-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-users-alt-2"></i>users-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-users-alt-3"></i>users-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-users-alt-4"></i>users-alt-4</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-users-alt-5"></i>users-alt-5</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-users-alt-6"></i>users-alt-6</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-users-social"></i>users-social</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-waiter"></i>waiter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-woman-in-glasses"></i>woman-in-glasses</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Search</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-document-search"></i>document-search</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-folder-search"></i>folder-search</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-home-search"></i>home-search</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-job-search"></i>job-search</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-map-search"></i>map-search</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-restaurant-search"></i>restaurant-search</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-search"></i>search</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-search-alt-1"></i>search-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-search-alt-2"></i>search-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-stock-search"></i>stock-search</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-user-search"></i>user-search</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Social</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brand-drupal"></i>brand-drupal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-500px"></i>social-500px</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-aim"></i>social-aim</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-badoo"></i>social-badoo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-baidu-tieba"></i>social-baidu-tieba</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-bbm-messenger"></i>social-bbm-messenger</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-bebo"></i>social-bebo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-behance"></i>social-behance</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-blogger"></i>social-blogger</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-bootstrap"></i>social-bootstrap</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-brightkite"></i>social-brightkite</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-cloudapp"></i>social-cloudapp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-concrete5"></i>social-concrete5</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-delicious"></i>social-delicious</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-designbump"></i>social-designbump</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-designfloat"></i>social-designfloat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-deviantart"></i>social-deviantart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-digg"></i>social-digg</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-dotcms"></i>social-dotcms</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-dribbble"></i>social-dribbble</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-dribble"></i>social-dribble</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-dropbox"></i>social-dropbox</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-ebuddy"></i>social-ebuddy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-ello"></i>social-ello</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-ember"></i>social-ember</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-evernote"></i>social-evernote</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-facebook"></i>social-facebook</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-facebook-messenger"></i>social-facebook-messenger</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-feedburner"></i>social-feedburner</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-flikr"></i>social-flikr</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-folkd"></i>social-folkd</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-foursquare"></i>social-foursquare</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-friendfeed"></i>social-friendfeed</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-ghost"></i>social-ghost</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-github"></i>social-github</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-gnome"></i>social-gnome</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-google-buzz"></i>social-google-buzz</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-google-hangouts"></i>social-google-hangouts</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-google-map"></i>social-google-map</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-google-plus"></i>social-google-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-google-talk"></i>social-google-talk</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-hype-machine"></i>social-hype-machine</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-instagram"></i>social-instagram</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-kakaotalk"></i>social-kakaotalk</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-kickstarter"></i>social-kickstarter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-kik"></i>social-kik</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-kiwibox"></i>social-kiwibox</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-line"></i>social-line</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-linkedin"></i>social-linkedin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-linux-mint"></i>social-linux-mint</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-livejournal"></i>social-livejournal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-magento"></i>social-magento</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-meetme"></i>social-meetme</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-meetup"></i>social-meetup</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-mixx"></i>social-mixx</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-newsvine"></i>social-newsvine</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-nimbuss"></i>social-nimbuss</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-odnoklassniki"></i>social-odnoklassniki</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-opencart"></i>social-opencart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-oscommerce"></i>social-oscommerce</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-pandora"></i>social-pandora</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-photobucket"></i>social-photobucket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-picasa"></i>social-picasa</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-pinterest"></i>social-pinterest</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-prestashop"></i>social-prestashop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-qik"></i>social-qik</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-qq"></i>social-qq</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-readernaut"></i>social-readernaut</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-reddit"></i>social-reddit</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-renren"></i>social-renren</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-rss"></i>social-rss</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-shopify"></i>social-shopify</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-silverstripe"></i>social-silverstripe</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-skype"></i>social-skype</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-slack"></i>social-slack</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-slashdot"></i>social-slashdot</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-slidshare"></i>social-slidshare</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-smugmug"></i>social-smugmug</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-snapchat"></i>social-snapchat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-soundcloud"></i>social-soundcloud</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-spotify"></i>social-spotify</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-stack-exchange"></i>social-stack-exchange</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-stack-overflow"></i>social-stack-overflow</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-steam"></i>social-steam</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-stumbleupon"></i>social-stumbleupon</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-tagged"></i>social-tagged</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-technorati"></i>social-technorati</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-telegram"></i>social-telegram</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-tinder"></i>social-tinder</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-trello"></i>social-trello</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-tumblr"></i>social-tumblr</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-twitch"></i>social-twitch</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-twitter"></i>social-twitter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-typo3"></i>social-typo3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-ubercart"></i>social-ubercart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-viber"></i>social-viber</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-viddler"></i>social-viddler</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-vimeo"></i>social-vimeo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-vine"></i>social-vine</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-virb"></i>social-virb</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-virtuemart"></i>social-virtuemart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-vk"></i>social-vk</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-wechat"></i>social-wechat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-weibo"></i>social-weibo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-whatsapp"></i>social-whatsapp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-xing"></i>social-xing</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-yahoo"></i>social-yahoo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-yelp"></i>social-yelp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-youku"></i>social-youku</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-youtube"></i>social-youtube</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-youtube-play"></i>social-youtube-play</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-social-zencart"></i>social-zencart</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Sport</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-badminton-birdie"></i>badminton-birdie</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-baseball"></i>baseball</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-baseballer"></i>baseballer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-basketball"></i>basketball</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-basketball-hoop"></i>basketball-hoop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-billiard-ball"></i>billiard-ball</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-boot-alt-1"></i>boot-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-boot-alt-2"></i>boot-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bowling"></i>bowling</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bowling-alt"></i>bowling-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-canoe"></i>canoe</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cheer-leader"></i>cheer-leader</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-climbing"></i>climbing</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-corner"></i>corner</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cyclist"></i>cyclist</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dumbbell"></i>dumbbell</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dumbbell-alt"></i>dumbbell-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-field"></i>field</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-field-alt"></i>field-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-football-alt"></i>football-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-foul"></i>foul</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-goal"></i>goal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-goal-keeper"></i>goal-keeper</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-golf"></i>golf</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-golf-alt"></i>golf-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-golf-bag"></i>golf-bag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-golf-field"></i>golf-field</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-golfer"></i>golfer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-gym"></i>gym</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-gym-alt-1"></i>gym-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-gym-alt-2"></i>gym-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-gym-alt-3"></i>gym-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand-grippers"></i>hand-grippers</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-heart-beat-alt"></i>heart-beat-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-helmet"></i>helmet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hockey"></i>hockey</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hockey-alt"></i>hockey-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ice-skate"></i>ice-skate</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-jersey"></i>jersey</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-jersey-alt"></i>jersey-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-jumping"></i>jumping</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-kick"></i>kick</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-leg"></i>leg</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-match-review"></i>match-review</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-medal-alt"></i>medal-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-muscle"></i>muscle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-muscle-alt"></i>muscle-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-offside"></i>offside</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-olympic"></i>olympic</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-olympic-logo"></i>olympic-logo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-padding"></i>padding</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-penalty-card"></i>penalty-card</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-racer"></i>racer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-racing-car"></i>racing-car</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-racing-flag"></i>racing-flag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-racing-flag-alt"></i>racing-flag-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-racings-wheel"></i>racings-wheel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-referee"></i>referee</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-refree-jersey"></i>refree-jersey</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-result"></i>result</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rugby"></i>rugby</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rugby-ball"></i>rugby-ball</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rugby-player"></i>rugby-player</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-runner"></i>runner</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-runner-alt-1"></i>runner-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-runner-alt-2"></i>runner-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-score-board"></i>score-board</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-skiing-man"></i>skiing-man</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-skydiving-goggles"></i>skydiving-goggles</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snow-mobile"></i>snow-mobile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-steering"></i>steering</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-substitute"></i>substitute</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-swimmer"></i>swimmer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-table-tennis"></i>table-tennis</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-team"></i>team</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-team-alt"></i>team-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tennis"></i>tennis</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tennis-player"></i>tennis-player</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-time"></i>time</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-track"></i>track</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tracking"></i>tracking</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-trophy"></i>trophy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-trophy-alt"></i>trophy-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-volleyball"></i>volleyball</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-volleyball-alt"></i>volleyball-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-volleyball-fire"></i>volleyball-fire</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-water-bottle"></i>water-bottle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-whisle"></i>whisle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-win-trophy"></i>win-trophy</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Text Editor</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-align-center"></i>align-center</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-align-left"></i>align-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-align-right"></i>align-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-all-caps"></i>all-caps</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bold"></i>bold</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brush"></i>brush</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-clip-board"></i>clip-board</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-code-alt"></i>code-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-color-bucket"></i>color-bucket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-color-picker"></i>color-picker</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-copy-alt"></i>copy-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-copy-black"></i>copy-black</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cut"></i>cut</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-delete-alt"></i>delete-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-edit-alt"></i>edit-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-eraser-alt"></i>eraser-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file-alt"></i>file-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-font"></i>font</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-header"></i>header</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-indent"></i>indent</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-italic-alt"></i>italic-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-justify-all"></i>justify-all</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-justify-center"></i>justify-center</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-justify-left"></i>justify-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-justify-right"></i>justify-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-line-height"></i>line-height</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-link-alt"></i>link-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-listine-dots"></i>listine-dots</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-listing-box"></i>listing-box</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-listing-number"></i>listing-number</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-marker"></i>marker</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-outdent"></i>outdent</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-paper-clip"></i>paper-clip</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-paragraph"></i>paragraph</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pin"></i>pin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-printer"></i>printer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-redo"></i>redo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rotation"></i>rotation</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-save"></i>save</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-small-cap"></i>small-cap</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-strike-through"></i>strike-through</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sub-listing"></i>sub-listing</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-subscript"></i>subscript</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-superscript"></i>superscript</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-table"></i>table</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-text-height"></i>text-height</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-text-width"></i>text-width</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-trash"></i>trash</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-underline"></i>underline</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-undo"></i>undo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-unlink"></i>unlink</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Transport</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-air-balloon"></i>air-balloon</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-airplane"></i>airplane</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-airplane-alt"></i>airplane-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ambulance-crescent"></i>ambulance-crescent</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ambulance-cross"></i>ambulance-cross</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-articulated-truck"></i>articulated-truck</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-auto-rickshaw"></i>auto-rickshaw</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bicycle-alt-1"></i>bicycle-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bicycle-alt-2"></i>bicycle-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bull-dozer"></i>bull-dozer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bus-alt-1"></i>bus-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bus-alt-2"></i>bus-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bus-alt-3"></i>bus-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cable-car"></i>cable-car</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-car-alt-1"></i>car-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-car-alt-2"></i>car-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-car-alt-3"></i>car-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-car-alt-4"></i>car-alt-4</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-concrete-mixer"></i>concrete-mixer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-delivery-time"></i>delivery-time</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-excavator"></i>excavator</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fast-delivery"></i>fast-delivery</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fire-truck"></i>fire-truck</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fire-truck-alt"></i>fire-truck-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fork-lift"></i>fork-lift</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-free-delivery"></i>free-delivery</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-golf-cart"></i>golf-cart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-helicopter"></i>helicopter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-motor-bike"></i>motor-bike</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-motor-bike-alt"></i>motor-bike-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-motor-biker"></i>motor-biker</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-oil-truck"></i>oil-truck</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-police-car"></i>police-car</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rickshaw"></i>rickshaw</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rocket-alt-1"></i>rocket-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rocket-alt-2"></i>rocket-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sail-boat"></i>sail-boat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-scooter"></i>scooter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sea-plane"></i>sea-plane</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ship-alt"></i>ship-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-speed-boat"></i>speed-boat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-taxi"></i>taxi</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tow-truck"></i>tow-truck</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tractor"></i>tractor</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-traffic-light"></i>traffic-light</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-train-line"></i>train-line</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-train-steam"></i>train-steam</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tram"></i>tram</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-truck"></i>truck</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-truck-alt"></i>truck-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-truck-loaded"></i>truck-loaded</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-van"></i>van</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-van-alt"></i>van-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-yacht"></i>yacht</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Travel</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-5-star-hotel"></i>5-star-hotel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-anchor-alt"></i>anchor-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-beach-bed"></i>beach-bed</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-camping-vest"></i>camping-vest</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-coconut-alt"></i>coconut-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-direction-sign"></i>direction-sign</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hill-side"></i>hill-side</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-island-alt"></i>island-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-long-drive"></i>long-drive</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-map-pins"></i>map-pins</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-plane-ticket"></i>plane-ticket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sail-boat-alt-1"></i>sail-boat-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sail-boat-alt-2"></i>sail-boat-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sandals-female"></i>sandals-female</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sandals-male"></i>sandals-male</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-travelling"></i>travelling</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Weather</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-breakdown"></i>breakdown</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-celsius"></i>celsius</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-clouds"></i>clouds</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cloudy"></i>cloudy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-compass-alt"></i>compass-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dust"></i>dust</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-eclipse"></i>eclipse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fahrenheit"></i>fahrenheit</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-forest-fire"></i>forest-fire</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-full-night"></i>full-night</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-full-sunny"></i>full-sunny</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hail"></i>hail</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hail-night"></i>hail-night</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hail-rainy"></i>hail-rainy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hail-rainy-night"></i>hail-rainy-night</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hail-rainy-sunny"></i>hail-rainy-sunny</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hail-sunny"></i>hail-sunny</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hail-thunder"></i>hail-thunder</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hail-thunder-night"></i>hail-thunder-night</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hail-thunder-sunny"></i>hail-thunder-sunny</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hill"></i>hill</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hill-night"></i>hill-night</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hill-sunny"></i>hill-sunny</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hurricane"></i>hurricane</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-island"></i>island</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-meteor"></i>meteor</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-night"></i>night</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rainy"></i>rainy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rainy-night"></i>rainy-night</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rainy-sunny"></i>rainy-sunny</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rainy-thunder"></i>rainy-thunder</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-showy-night-hail"></i>showy-night-hail</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snow"></i>snow</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snow-temp"></i>snow-temp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy"></i>snowy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-hail"></i>snowy-hail</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-night"></i>snowy-night</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-night-rainy"></i>snowy-night-rainy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-rainy"></i>snowy-rainy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-sunny"></i>snowy-sunny</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-sunny-hail"></i>snowy-sunny-hail</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-sunny-rainy"></i>snowy-sunny-rainy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-thunder"></i>snowy-thunder</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-thunder-night"></i>snowy-thunder-night</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-thunder-sunny"></i>snowy-thunder-sunny</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-windy"></i>snowy-windy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-windy-night"></i>snowy-windy-night</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-snowy-windy-sunny"></i>snowy-windy-sunny</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sun-alt"></i>sun-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sun-rise"></i>sun-rise</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sun-set"></i>sun-set</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sunny"></i>sunny</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sunny-day-temp"></i>sunny-day-temp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thermometer"></i>thermometer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thinder-light"></i>thinder-light</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tornado"></i>tornado</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-umbrella-alt"></i>umbrella-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-volcano"></i>volcano</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wave"></i>wave</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind"></i>wind</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-0"></i>wind-scale-0</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-1"></i>wind-scale-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-10"></i>wind-scale-10</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-11"></i>wind-scale-11</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-12"></i>wind-scale-12</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-2"></i>wind-scale-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-3"></i>wind-scale-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-4"></i>wind-scale-4</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-5"></i>wind-scale-5</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-6"></i>wind-scale-6</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-7"></i>wind-scale-7</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-8"></i>wind-scale-8</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-scale-9"></i>wind-scale-9</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wind-waves"></i>wind-waves</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-windy"></i>windy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-windy-hail"></i>windy-hail</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-windy-night"></i>windy-night</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-windy-raining"></i>windy-raining</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-windy-sunny"></i>windy-sunny</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-windy-thunder"></i>windy-thunder</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-windy-thunder-raining"></i>windy-thunder-raining</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Web Application</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-addons"></i>addons</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-address-book"></i>address-book</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-adjust"></i>adjust</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-alarm"></i>alarm</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-anchor"></i>anchor</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-archive"></i>archive</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-at"></i>at</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-attachment"></i>attachment</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-audio"></i>audio</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-auto-mobile"></i>auto-mobile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-automation"></i>automation</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-baby"></i>baby</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-badge"></i>badge</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bag"></i>bag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ban"></i>ban</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bank"></i>bank</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bar-code"></i>bar-code</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bars"></i>bars</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-battery-empty"></i>battery-empty</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-battery-full"></i>battery-full</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-battery-half"></i>battery-half</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-battery-low"></i>battery-low</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-beach"></i>beach</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-beaker"></i>beaker</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bear"></i>bear</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-beard"></i>beard</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bed"></i>bed</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bell"></i>bell</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-beverage"></i>beverage</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bicycle"></i>bicycle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bill"></i>bill</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bin"></i>bin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-binary"></i>binary</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-binoculars"></i>binoculars</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bird"></i>bird</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-birds"></i>birds</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-black-board"></i>black-board</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bluetooth"></i>bluetooth</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bolt"></i>bolt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bomb"></i>bomb</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-book"></i>book</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-book-mark"></i>book-mark</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-boot"></i>boot</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-box"></i>box</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-brain"></i>brain</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-briefcase"></i>briefcase</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-broken"></i>broken</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bucket"></i>bucket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bucket1"></i>bucket1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bucket2"></i>bucket2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bug"></i>bug</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-building"></i>building</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bullet"></i>bullet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bullhorn"></i>bullhorn</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bullseye"></i>bullseye</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-bus"></i>bus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-butterfly"></i>butterfly</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cab"></i>cab</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-calculator"></i>calculator</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-calendar"></i>calendar</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-camera"></i>camera</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-camera-alt"></i>camera-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-car"></i>car</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-card"></i>card</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cart"></i>cart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cc"></i>cc</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-certificate"></i>certificate</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-charging"></i>charging</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-chat"></i>chat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-check"></i>check</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-check-alt"></i>check-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-check-circled"></i>check-circled</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-checked"></i>checked</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-children-care"></i>children-care</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-clock-time"></i>clock-time</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-close"></i>close</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-close-circled"></i>close-circled</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-close-line"></i>close-line</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-close-line-circled"></i>close-line-circled</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-close-line-squared"></i>close-line-squared</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-close-line-squared-alt"></i>close-line-squared-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-close-squared"></i>close-squared</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-close-squared-alt"></i>close-squared-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cloud"></i>cloud</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cloud-download"></i>cloud-download</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cloud-refresh"></i>cloud-refresh</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cloud-upload"></i>cloud-upload</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-code"></i>code</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-code-not-allowed"></i>code-not-allowed</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-coffee-cup"></i>coffee-cup</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-comment"></i>comment</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-compass"></i>compass</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-computer"></i>computer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-connection"></i>connection</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-console"></i>console</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-contacts"></i>contacts</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-contrast"></i>contrast</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-copy"></i>copy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-copyright"></i>copyright</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-credit-card"></i>credit-card</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-crop"></i>crop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-crown"></i>crown</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cube"></i>cube</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-cubes"></i>cubes</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-culinary"></i>culinary</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dashboard"></i>dashboard</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dashboard-web"></i>dashboard-web</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-data"></i>data</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-database"></i>database</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-database-add"></i>database-add</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-database-locked"></i>database-locked</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-database-remove"></i>database-remove</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-delete"></i>delete</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-diamond"></i>diamond</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-dice"></i>dice</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-disabled"></i>disabled</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-disc"></i>disc</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-diskette"></i>diskette</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-document-folder"></i>document-folder</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-download"></i>download</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-download-alt"></i>download-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-downloaded"></i>downloaded</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-earth"></i>earth</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ebook"></i>ebook</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-edit"></i>edit</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-eject"></i>eject</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-email"></i>email</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-envelope"></i>envelope</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-envelope-open"></i>envelope-open</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-eraser"></i>eraser</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-error"></i>error</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-exchange"></i>exchange</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-exclamation"></i>exclamation</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-exclamation-circle"></i>exclamation-circle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-exclamation-square"></i>exclamation-square</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-exclamation-tringle"></i>exclamation-tringle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-exit"></i>exit</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-expand"></i>expand</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-external"></i>external</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-external-link"></i>external-link</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-eye"></i>eye</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-eye-blocked"></i>eye-blocked</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-eye-dropper"></i>eye-dropper</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-favourite"></i>favourite</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fax"></i>fax</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-female"></i>female</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-file"></i>file</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-film"></i>film</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-filter"></i>filter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fire"></i>fire</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fire-burn"></i>fire-burn</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-fire-extinguisher"></i>fire-extinguisher</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-first-aid"></i>first-aid</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-flag"></i>flag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-flag-alt-1"></i>flag-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-flag-alt-2"></i>flag-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-flash"></i>flash</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-flash-light"></i>flash-light</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-flask"></i>flask</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-focus"></i>focus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-folder"></i>folder</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-folder-open"></i>folder-open</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-foot-print"></i>foot-print</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-football"></i>football</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-football-american"></i>football-american</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-game-console"></i>game-console</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-game-pad"></i>game-pad</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-gavel"></i>gavel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-gear"></i>gear</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-gears"></i>gears</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-gift"></i>gift</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-glass"></i>glass</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-globe"></i>globe</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-graduate"></i>graduate</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-graffiti"></i>graffiti</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-grocery"></i>grocery</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-group"></i>group</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hammer"></i>hammer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hand"></i>hand</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hanger"></i>hanger</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hard-disk"></i>hard-disk</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-headphone"></i>headphone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-heart"></i>heart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-heart-beat"></i>heart-beat</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-history"></i>history</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-home"></i>home</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-horn"></i>horn</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hotel"></i>hotel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-hour-glass"></i>hour-glass</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-id"></i>id</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-image"></i>image</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-inbox"></i>inbox</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-infinite"></i>infinite</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-info"></i>info</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-info-circle"></i>info-circle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-info-square"></i>info-square</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-institution"></i>institution</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-interface"></i>interface</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-invisible"></i>invisible</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-italic"></i>italic</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-jacket"></i>jacket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-jar"></i>jar</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-jewlery"></i>jewlery</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-karate"></i>karate</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-key"></i>key</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-key-hole"></i>key-hole</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-keyboard"></i>keyboard</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-kid"></i>kid</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-label"></i>label</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lamp"></i>lamp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-laptop"></i>laptop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-layers"></i>layers</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-layout"></i>layout</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-leaf"></i>leaf</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-leaflet"></i>leaflet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-learn"></i>learn</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-legal"></i>legal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lego"></i>lego</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lemon"></i>lemon</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lens"></i>lens</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-letter"></i>letter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-letterbox"></i>letterbox</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-library"></i>library</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-license"></i>license</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-life-bouy"></i>life-bouy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-life-buoy"></i>life-buoy</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-life-jacket"></i>life-jacket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-life-ring"></i>life-ring</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-light-bulb"></i>light-bulb</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lighter"></i>lighter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lightning-ray"></i>lightning-ray</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-like"></i>like</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-link"></i>link</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-live-support"></i>live-support</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-location-arrow"></i>location-arrow</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-location-pin"></i>location-pin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lock"></i>lock</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-login"></i>login</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-logout"></i>logout</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lollipop"></i>lollipop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-look"></i>look</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-loop"></i>loop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-luggage"></i>luggage</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lunch"></i>lunch</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-lungs"></i>lungs</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-magic"></i>magic</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-magic-alt"></i>magic-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-magnet"></i>magnet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mail"></i>mail</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mail-box"></i>mail-box</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-male"></i>male</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-map"></i>map</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-math"></i>math</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-maximize"></i>maximize</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-measure"></i>measure</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-medal"></i>medal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-medical"></i>medical</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-medicine"></i>medicine</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mega-phone"></i>mega-phone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-memorial"></i>memorial</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-memory-card"></i>memory-card</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mic"></i>mic</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mic-mute"></i>mic-mute</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-micro-chip"></i>micro-chip</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-microphone"></i>microphone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-microscope"></i>microscope</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-military"></i>military</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mill"></i>mill</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-minus"></i>minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-minus-circle"></i>minus-circle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-minus-square"></i>minus-square</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mobile-phone"></i>mobile-phone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-molecule"></i>molecule</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-money"></i>money</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-moon"></i>moon</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mop"></i>mop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-muffin"></i>muffin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-music"></i>music</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-music-alt"></i>music-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-music-notes"></i>music-notes</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mustache"></i>mustache</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-mute-volume"></i>mute-volume</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-navigation"></i>navigation</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-navigation-menu"></i>navigation-menu</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-Refferal"></i>Refferal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-Refferal-tower"></i>Refferal-tower</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-news"></i>news</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-newspaper"></i>newspaper</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-no-smoking"></i>no-smoking</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-not-allowed"></i>not-allowed</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-notebook"></i>notebook</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-notepad"></i>notepad</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-notification"></i>notification</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-numbered"></i>numbered</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-opposite"></i>opposite</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-optic"></i>optic</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-options"></i>options</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-package"></i>package</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-page"></i>page</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-paint"></i>paint</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-paper-plane"></i>paper-plane</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-paperclip"></i>paperclip</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-papers"></i>papers</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-paw"></i>paw</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pay"></i>pay</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pen"></i>pen</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pencil"></i>pencil</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-penguin-linux"></i>penguin-linux</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pestle"></i>pestle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-phone"></i>phone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-phone-circle"></i>phone-circle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-picture"></i>picture</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pie"></i>pie</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pine"></i>pine</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-pixels"></i>pixels</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-play"></i>play</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-plugin"></i>plugin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-plus"></i>plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-plus-circle"></i>plus-circle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-plus-square"></i>plus-square</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-polygonal"></i>polygonal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-power"></i>power</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-presentation"></i>presentation</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-price"></i>price</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-print"></i>print</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-puzzle"></i>puzzle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-qr-code"></i>qr-code</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-queen"></i>queen</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-question"></i>question</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-question-circle"></i>question-circle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-question-square"></i>question-square</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-quote-left"></i>quote-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-quote-right"></i>quote-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-radio"></i>radio</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-random"></i>random</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-recycle"></i>recycle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-refresh"></i>refresh</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-repair"></i>repair</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-reply"></i>reply</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-reply-all"></i>reply-all</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-resize"></i>resize</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-responsive"></i>responsive</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-retweet"></i>retweet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-road"></i>road</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-robot"></i>robot</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rocket"></i>rocket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-royal"></i>royal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-rss-feed"></i>rss-feed</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-safety"></i>safety</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sale-discount"></i>sale-discount</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-satellite"></i>satellite</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-send-mail"></i>send-mail</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-server"></i>server</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-settings"></i>settings</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-share"></i>share</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-share-alt"></i>share-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-share-boxed"></i>share-boxed</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-shield"></i>shield</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ship"></i>ship</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-shopping-cart"></i>shopping-cart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sign-in"></i>sign-in</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sign-out"></i>sign-out</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-signal"></i>signal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-site-map"></i>site-map</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-smart-phone"></i>smart-phone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-soccer"></i>soccer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sort"></i>sort</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sort-alt"></i>sort-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-space"></i>space</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-spanner"></i>spanner</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-speech-comments"></i>speech-comments</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-speed-meter"></i>speed-meter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-spinner"></i>spinner</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-spinner-alt-1"></i>spinner-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-spinner-alt-2"></i>spinner-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-spinner-alt-3"></i>spinner-alt-3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-spinner-alt-4"></i>spinner-alt-4</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-spinner-alt-5"></i>spinner-alt-5</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-spinner-alt-6"></i>spinner-alt-6</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-spreadsheet"></i>spreadsheet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-square"></i>square</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ssl-security"></i>ssl-security</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-star"></i>star</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-star-alt-1"></i>star-alt-1</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-star-alt-2"></i>star-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-street-view"></i>street-view</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-sun"></i>sun</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-support-faq"></i>support-faq</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tack-pin"></i>tack-pin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tag"></i>tag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tags"></i>tags</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tasks"></i>tasks</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-telephone"></i>telephone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-telescope"></i>telescope</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-terminal"></i>terminal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thumbs-down"></i>thumbs-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-thumbs-up"></i>thumbs-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tick-boxed"></i>tick-boxed</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tick-mark"></i>tick-mark</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-ticket"></i>ticket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tie"></i>tie</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-toggle-off"></i>toggle-off</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-toggle-on"></i>toggle-on</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tools"></i>tools</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-transparent"></i>transparent</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-tree"></i>tree</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-umbrella"></i>umbrella</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-unlock"></i>unlock</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-unlocked"></i>unlocked</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-upload"></i>upload</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-upload-alt"></i>upload-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-usb"></i>usb</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-usb-drive"></i>usb-drive</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-vector-path"></i>vector-path</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-verification-check"></i>verification-check</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-video"></i>video</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-video-clapper"></i>video-clapper</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-volume-down"></i>volume-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-volume-off"></i>volume-off</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-volume-up"></i>volume-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wall"></i>wall</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wall-clock"></i>wall-clock</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wallet"></i>wallet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-warning"></i>warning</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-warning-alt"></i>warning-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-water-drop"></i>water-drop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-web"></i>web</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wheelchair"></i>wheelchair</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wifi"></i>wifi</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-wifi-alt"></i>wifi-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-world"></i>world</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-zigzag"></i>zigzag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icofont icofont-zipped"></i>zipped</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	@push('scripts') 
	<script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/icons-notify.js') }}"></script>
    <script src="{{ asset('assets/js/icons/icon-clipart.js') }}"></script>
	@endpush

@endsection