<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Food Menu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
			font-family: 'Montserrat', sans-serif;
			color: #333;
			line-height: 1.6;
			/*background:black;*/
		}
		.menu_list{
			width:1048px;
			background:#fff;
			margin:0 auto;
		}
		.mb-60 {
			margin-bottom: 60px;
		}
		.section-title p {
			font-size: 24px;
			font-family: Oleo Script;
			margin-bottom: 0px;
		}
		.section-title h4 {
			font-size: 40px;
			text-transform: capitalize;
			color: #FF5E18;
			position: relative;
			display: inline-block;
			padding-bottom: 25px;
		}
		.section-title h4::before {
			width: 80px;
			height: 1.5px;
			bottom: 0;
			left: 50%;
			margin-left: -40px;
		}
		.section-title h4::before, .section-title h4::after {
			position: absolute;
			content: "";
			background-color: #FF5E18;
		}
		#myTabContent {
			margin-top: 50px;
		}
		.menu_tab {
			width: auto;
			margin: 0 auto;
		}
		.nav-tabs .nav-item {
			margin-bottom: -1px;
		}
		.nav-item a {
			color: #333;
		}
		.menu_tab .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
			color: white;
			background-color: #FF5E18;
			border-color: #FF5E18;
		}
		.single_menu_list {
			position: relative;
			padding-left: 178px;
			margin-bottom: 70px;
		}

		.single_menu_list img {
			/*max-width: 30%;*/
			position: absolute;
			left: 0px;
			top: 0;
			border: 2px solid #000;
			padding: 3px;
			border-radius: 50%;
			transition: .4s;
			width: 150px;
			height:150px;
		}

		.single_menu_list:hover img {
			border-radius: 0;
			transition: .4s
		}

		.single_menu_list h4 {
			font-size: 27px;
			border-bottom: 1px dashed #333;
			padding-bottom: 15px;
			margin-bottom: 0px;
			margin-top: 15px;
		}

		.single_menu_list h4 span{
			font-size:20px;
		}
		.single_menu_list h4 span, .single_menu_list p span {
			float: right;
			font-weight: bold;
			color: #FF5E18;
			font-style: italic;
		}

		.menu_content {
			padding-top:28px;
		}
		.card-body {
		    padding-right: 0px;
		}
		@media print {
		    .container-fluid {
		        /*display: inline;*/
		        overflow: visible;
		    }
		}
    </style>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
	<body>
		<section class="menu_list">
		 	<div class="container-fluid" style="padding-right: 0px; ">
				<div class="">
				   <div class="col-md-12">
					  <div class="section-title text-center">
						 <h4><strong>អាហារដ្ឋានធារ៉ា</strong></h4>
					  </div>
				   </div>
				</div>
				<div class="">
				   	<div  id="myTabContent">
					   	@foreach($data as $key => $foods)
					   		{{-- <br> --}}
									@if($loop->iteration == 2) <br><br> @endif
									@if($loop->iteration == 6) <br><br><br><br><br><br><br><br><br><br>@endif
									{{-- @if($loop->iteration == 7) <br><br><br>@endif --}}
									{{-- @if($loop->iteration == 8) <br>@endif --}}
									@if($loop->iteration == 13) <br>@endif
									@if($loop->iteration == 16) <br>@endif
									@if($loop->iteration == 17) <br><br><br><br><br>@endif
									@if($loop->iteration == 18) <br><br><br><br><br>@endif
					   		<div class="card ">
					   			<div class="card-header section-title text-center" >
									<h4>{{ $loop->iteration }}. {{ $key }}</h4>
							  	</div>
								<div class="card-body row container" @if($loop->iteration ==9) style="padding-bottom: 0px;" @endif>
								  	@foreach($foods as $food)
						   		    <div class="single_menu_list  col-md-6">
						   			  	{{-- <img src="https://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-2.jpg" alt=""> --}}
						   			  	<img src="food_list/{{ $loop->parent->iteration }}/{{ $loop->iteration }}.jpg" alt="">
						   			  	<div class="menu_content">
						   				 	<h4>@if(strlen($food[0])>53) <small>{{ $food[0] }}</small> @else {{$food[0] }}@endif<span>{{ $food[1] }}៛</span></h4>
						   				 	<p>{{ $food[2] }} 	<span>{{ $food[3] }}</span></p>
						   				</div>
						   		    </div>
								   	@endforeach
				   		        </div>
						   	</div>
					   	@endforeach
				   	</div>
				</div>
			</div>
	  	</section>
	</body>
</html>
