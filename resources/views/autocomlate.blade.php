<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="{{URL::asset('resources/assets/js/autocomplate.js')}}"></script> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
	.box{
		width: 500px;
		margin: 0 auto;
		}	
      #map {
        height: 500px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>

<body>
	@csrf
	<div class="container box">
		<h3 align="center">Search Any City in Russia</h3> <br/>

		<div class="form group">
			<input type="text" name="city_name" id="city_name" class="form-control" placeholder="Enter Name of City">
			<div id="citylist" align="center"></div>

		</div>
		{{csrf_field()}}
	</div>
	 <div id="map"></div>
	 <div id="cordinant" class="form group"></div>
</body>
	<script>
			$("#city_name").keyup(function(){
				var query = $(this).val()
				if(query !=''){
					var _token = $('input[mame="_token"]').val();

					$.ajax({
						url:"{{ route('autocomlate.fetch') }}",
						method:"post",
						data  :{query:query,_token:$("input[name='_token']").val()},
						success:function(r){
							$("#citylist").empty()
							$("#cordinant").empty()
							if(r!=''){
							for(var i =0;i<20;i++){
								$("#citylist").append("<li class='getid list-group-item' id='"+r[i]['geonameid']+"'>"+r[i]['name']+"</li>")
							}
							}
						}
					})
				}
			})
			$(document).on('click','li', function(){
				var id = $(this).attr('id');
				var _token = $('input[mame="_token"]').val();

				$.ajax({
						url:"{{ route('autocomlate.cordinant') }}",
						method:"post",
						data  :{id:id,_token:$("input[name='_token']").val()},
						success:function(r){
								// $("#city_name").val(r[0]['name'])
								// $("#cordinant").append("<input type='text' name='lat' value='"+r[0]['latitude']+"'>")
								// $("#cordinant").append("<input type='text' name='lng' value='"+r[0]['longitude']+"'>")
								// $("#citylist").empty()
								window.location.href="autocomlate/map";
						}
					})
			})


	</script>
	    
	
</html>
