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
								alert(r[0]['latitude'])
								alert(r[0]['longitude'])
								$("#city_name").val(r[0]['name'])
								$("#cordinant").append("<h6 id='lat'>"+r[0]['latitude']+"</h6>")
								$("#cordinant").append("<h6 id='lng'>"+r[0]['longitude']+"</h6>")
								$("#citylist").empty()

						}
					})
			})