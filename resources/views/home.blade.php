@extends('application')

@section('content')
<style type="text/css">

	@font-face {
	  font-family: 'manifesto';
	  src: url('../fonts/LHF American Sans.otf');
	}
	@font-face {
	  font-family: 'manifesto-bold';
	  src: url('../fonts/LHFCigarShopMaduro.ttf');
	}

	html {
		background-color: #183050;
		overflow: hidden;
	}	
	html, body { height: 100%; margin: 0; padding: 0; }
	
	* {
		font-family: 'manifesto';
	}

	h1,h2,h3 {
		font-family: 'manifesto-bold';
	}

	#landing-page-wrapper {
		background-color: #183050;
		height: 100%;
		position: absolute;
		z-index: 100;
	}	
		#landing-page-logo {
			position: relative;
			top:100px;
		}

    #map { height: 100%; width: 100%; position: absolute; opacity:0; z-index: 10;}

    #place-search-input {
    	font-family: manifesto;
    	position: absolute;
    	left: initial !important;
	    right: -500px;
    	top: 10px !important;
    	height:50px;
    	width:500px;
    	opacity: 0;
    	border: 2px solid #183050;
    	font-size:21px;
    }
    	#search-btn {
	    	position: absolute;
	    	left: initial !important;
		    right: 10px !important;
	    	top: 10px !important;
	    	height:50px;
	    	background-color: #BBD5F8;
	    	border-color: #BBD5F8;
	    	color: #183050;
    	}

    	#toggle-sidepanel-btn {
	    	position: absolute;
		    left: 10px;
	    	top: 10px !important;
	    	height:50px;
	    	background-color: #183050;
	    	border-color: #183050;
	    	color:#BBD5F8;
	    	z-index:99;
    	}

    	.fa-search, .fa-bars {
    		font-size: 30px;
    	}

   	#bldg-details-panel {
   		position: absolute;
   		height: 100%;
   		width: 0;
   		z-index: 0;
   		background-color: white;
   		border-right: 2px solid #183050;
   		padding:10px;
   		overflow-y:scroll;
   		overflow-x:hidden;
   	}

</style>

<div class="container-fluid" style="margin:0;padding:0;height:100%;">


	<a id="toggle-sidepanel-btn" class="btn btn-info btn-lg"><i class="fa fa-bars"></i></a>
	
	<div id="bldg-details-panel">
		
		<div class="row">
			<div class="col-xs-10">
				<div id="bldg-details-header" class="pull-left"></div>
			</div>
			<div class="col-xs-2"></div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="well">
					<code>sample data</code>
				</div><hr>
				<div class="well">
					<code>sample data</code>
				</div><hr>
				<div class="well">
					<code>sample data</code>
				</div><hr>
				<div class="well">
					<code>sample data</code>
				</div><hr>
				<div class="well">
					<code>sample data</code>
				</div><hr>
				<div class="well">
					<code>sample data</code>
				</div><hr>
				<div class="well">
					<code>sample data</code>
				</div><hr>
				<div class="well">
					<code>sample data</code>
				</div><hr>
				<div class="well">
					<code>sample data</code>
				</div><hr>
				<div class="well">
					<code>sample data</code>
				</div><hr>
				<div class="well">
					<code>sample data</code>
				</div><hr>
				<div class="well">
					<code>sample data</code>
				</div>
			</div>
		</div>
		

	</div>

	<input class="form-control" id="place-search-input" />
	<div id="map"></div>

	<div id="landing-page-wrapper">
		<div class="row">
			<span id="search-btn" class="btn btn-info btn-lg"><i class="fa fa-search"></i></span>
		</div>
		<div class="row text-center">
			<div class="col-xs-6 col-xs-offset-3">
				<img id="landing-page-logo" class="img-responsive animated" src="{{ asset('/images/tw_blue.png') }}"  />
			</div>
		</div>
	</div>
</div>


@endsection
