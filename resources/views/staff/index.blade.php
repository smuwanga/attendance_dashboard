@extends("theme.default")
@section("content")


<div class="container">
	<form>	  	
		<table class='table table-borderless'>
			
		   <body>
		   	 <tr>
		    	<td width='20%' >
		    	
					<span>
					    <input id='datepicker_start' type="text" class='form-control datepicker' data-date-format="dd/mm/yyyy"></input>
			        </span>
				   
        
		    	</td>
		    	<td width='20%' >
		    		
					<span>
					    <input id='datepicker_end' type="text" class='form-control datepicker' default=date('Y-m-01')></input>
			        </span>

		    	</td>
		    	<td width='25%'>
		    		
					<span>
						
					  

					   <select class="form-control" id="department">
						  <option>Select Department</option>
						  <option>I.T.</option>
						  <option>HR</option> 
						  <option>Call Centre</option> 
						  <option>DHI</option> 
						</select>
				    </span>
		    	</td>
		    	<td width='25%'>
		    		
					<span>
						
					   <select class="form-control" id="staff">
					   	  <option>Select Staff</option>
						  <option>Alfred Bagenda</option>
						  <option>Patrick L</option>
						  <option>Kategaya</option> 
						  <option>Asiimwe</option> 
						  <option>Okello</option> 
				    </span>
		    	</td>
		    	<td width='10%'>

			    
		    		<button class="btn btn-info" type="submit">Search</button>
		    	</td>
		    </tr>
		   </body>
		</table>
	</form>
</div>


@stop