


</div>



<script type="text/javascript">               //for about page

            $(document).ready(function(){
               
			   
			   $("input#search").live("keyup", function(e) {
				   
				   if ($('#results').is(":hidden")) {
            		$('#results').slideDown('slow');	
            		$('#contactdiv').slideUp('slow');
					$('#aboutdiv').slideUp('slow');
				   } 			   
				     var search_string = $(this).val();
                     if(search_string !== ''){
						$.ajax({
							type: "POST",
							url: "search.php",
							data: { search: search_string },
							cache: false,
						    success: function(html){
							$("div#results").html(html);
								}
							});
                          }else {
						     $('#contactdiv').slideUp('slow');
						     $('#results').slideUp('slow');	

            			     $('#aboutdiv').slideUp('slow');
            			  
							  
							  
						  }return false;
				   
				   
				  });  

			   
			   
			   
			   
                $("#show").click(function(){
            		if ($('#showmore').is(":hidden")) {
            		$('#showmore').slideDown('slow');	
            		$('#show').text("Show Less");
            		

            		}else{
                     $(showmore).slideUp('slow');	
            		$('#show').text("Show More");
                        
            		}
            });

		  $('.myMenu > li').bind('mouseover', openSubMenu);
		$('.myMenu > li').bind('mouseout', closeSubMenu);
		
		function openSubMenu() {
			$(this).find('ul').css('visibility', 'visible');	
		};
		
		function closeSubMenu() {
			$(this).find('ul').css('visibility', 'hidden');	
		 };
		 
		 
		 $("#about").click(function(){
            		if ($('#aboutdiv').is(":hidden")) {
            		$('#contactdiv').slideUp('slow');
                    $('#results').slideUp('slow');	
					
            		$("#aboutdiv").slideDown('slow');
            		

            		}else{

                        $('#contactdiv').slideUp('slow');
						$('#results').slideUp('slow');	

            			$('#aboutdiv').slideUp('slow');
            		}
            });
		 
				 
		 });  
           
             </script>
			 
			 
			 
			 
			 
			 
			 
			 <script type="text/javascript">               //for contact page

            $(document).ready(function(){

            	$("#contact").click(function(){
            		if ($('#contactdiv').is(":hidden")) {
            		$('#aboutdiv').slideUp('slow');
            		$('#results').slideUp('slow');	
					
            		$("#contactdiv").slideDown('slow');
            		

            		}else{
                        $('#aboutdiv').slideUp('slow');
            		    $('#results').slideUp('slow');	
						
            			$('#contactdiv').slideUp('slow');
            		}
            });



            	$("#close").click(function(){
				$(this).fadeOut('slow');	
                 $("div#infohere").slideUp('slow');




            	})


            });  
			
			
			function championinfo(name){
            	
            	$.post('/championinfo.php', {name: name}, function(data){
            		if ($('div#infohere').is(":hidden")) {
            		$("div#infohere").slideDown('slow');	
            		$('div#infohere').html(data);
					$("#close").fadeIn('slow');
            	}else{
                 $('div#infohere').html(data);  
                 }

            	});
            }

			</script>
			
			<script>
			
$(function() {
    $( "#slider" ).slider({
      orientation: "vertical",
      range: "min",
      min: 0,
      max: 100,
      value: 60,
      slide: function( event, ui ) {
       
      }
    });
    $( ".slide" ).val( $( "#slider-vertical" ).slider( "value" ) );
  });
			
			
			
			</script>
			
			
			
</body>
</html>