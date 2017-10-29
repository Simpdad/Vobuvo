@extends('layouts.skeleton')


@section('title')

@endsection


@section('content')
<hr style="margin-left:10%;margin-right:10%;background-color:#ddd;height:0.5px"/>
<div id="activities" class="container">
	<div class="row">
		<div id="map-id" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h2>Que faire à Alger ?</h2>					       
					                
					                   		
					                   			<a  data-toggle="collapse" data-target="#categories-activities">Catégories</a>	
					                   		<div id="" class="row">

					                           <div id="categories-activities" class="collapse"> 
					                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">                             
					                                 <div class="control-group">
					                                    <label class="control control--checkbox">$
					                                        <input type="checkbox" value="active" name="" />
					                                        <div class="control__indicator"></div>
					                                    </label>
					                                  </div>
					                            </div>

					                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">                             
					                                 <div class="control-group">
					                                    <label class="control control--checkbox">$$
					                                        <input type="checkbox" value="active" name="" />
					                                        <div class="control__indicator"></div>
					                                    </label>
					                                  </div>
					                            </div>

					                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">                             
					                                 <div class="control-group">
					                                    <label class="control control--checkbox">$$$
					                                        <input type="checkbox" value="active" name="" />
					                                        <div class="control__indicator"></div>
					                                    </label>
					                                  </div>
					                            </div>

					                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">                             
					                                 <div class="control-group">
					                                    <label class="control control--checkbox">$$$$
					                                        <input type="checkbox" value="active" name="" />
					                                        <div class="control__indicator"></div>
					                                    </label>
					                                  </div>
					                            </div>


					                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                             
					                                 <div class="control-group">
					                                    <label class="control control--checkbox">Sites et Monuments
					                                        <input type="checkbox" value="active" name="" />
					                                        <div class="control__indicator"></div>
					                                    </label>
					                                  </div>
					                            </div>	

					                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                             
					                                 <div class="control-group">
					                                    <label class="control control--checkbox">Parcs et Natures
					                                        <input type="checkbox" value="active" name="" />
					                                        <div class="control__indicator"></div>
					                                    </label>
					                                  </div>
					                            </div>


					                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                             
					                                 <div class="control-group">
					                                    <label class="control control--checkbox">Arts et Cultures
					                                        <input type="checkbox" value="active" name="" />
					                                        <div class="control__indicator"></div>
					                                    </label>
					                                  </div>
					                            </div>	


					                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                             
					                                 <div class="control-group">
					                                    <label class="control control--checkbox">Vie Nocturne
					                                        <input type="checkbox" value="active" name="" />
					                                        <div class="control__indicator"></div>
					                                    </label>
					                                  </div>
					                            </div>		


					                           </div><!-- collapse -->

					                        </div><!-- row -->

					              @for($i=0;$i<4;$i++)<!-- -->          
					                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					                	<h4 class="bootbox-btn"><a># {{$i+1}}.Champ Elysee</a></h4>
					                	<h6 class="site-desc">Lieux emblématiques - Shopping</h6>
					                	<h6 class="site-desc">$$$</h6>
					                <hr style="margin-right:10%;background-color:#ddd;height:0.5px"/>
					                </div>
					              @endfor
					                 	    
					                   				                
						</div> <!--col -->


		
</div>














<!-- SCRIPTS -->
<script type="text/javascript">
	
	var mymap = L.map('map-id').setView([36.783336, 3.058450], 13);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=sk.eyJ1Ijoic2ltcGRhZCIsImEiOiJjajhpazZmOXQwejZyMzNucmp0ZXF6ZndrIn0.UN8bIaGBunZ3XFmD8mGPdg', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);



	var msg="msg";

	$(".bootbox-btn").click(function(){
			bootbox.dialog({message: msg });
	});
</script>

@endsection