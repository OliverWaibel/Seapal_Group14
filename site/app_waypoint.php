<!DOCTYPE html>

<html lang="de">
	<head>
		
		<!-- Header -->
		<?php include('_include/header.php'); ?>
		
	</head>
	<body>
		
		<!-- Navigation -->
		<?php include('_include/navigation.php'); ?>
		
		<!-- Container -->
		<div class="container-fluid">
			
			<!-- Content -->		
			<div id="appWrapper" align="center">
			    <br />
			    <h2>Wegpunkt</h2>
			    <br />
			    <div class="container-fluid" align="center">
	            	<form class="form-horizontal"> 
		            	<div class="row well" style="margin-left: 15%;" align="center">
		            		<div class="span4" align="center">	            		
			            		<div class="control-group">
			            			<label class="control-label">Name</label>
			            			<input class="input-medium" type="text" id="name"/>
			            		</div>
			            		<div class="control-group">
			            			<label class="control-label">Time</label>
			            			<input class="input-medium" type="date" id="wdate"/>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">Date</label>
			            			<input class="input-medium" type="date" id="wtime"/>
			                    </div>
		            		</div>
		            		<div class="span4">
		            			<div class="control-group">
			            			<label class="control-label">Latitude</label>
			            			<input class="input-medium" type="text" id="lat"/>
			            		</div>
			            		<div class="control-group">
			            			<label class="control-label">Longitude</label>
			            			<input class="input-medium" type="text" id="lng"/>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">Fahrt nach</label>
			            			<select name="fahrtziel" id="marker" style="width: 165px;"></select>
			                    </div>
		            		</div>
		            		<div class="span4">
		            			<div class="control-group">
			            			<label class="control-label">COG</label>
			            			<input class="input-medium" type="text" id="cog"/>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">SOG</label>
			            			<input class="input-medium" type="text" id="sog"/>
			                    </div>
			                    
			                    <div class="control-group">
			                    	<label class="control-label">Manoever</label>
			            			<select name="manoever" id="manoever" style="width: 165px;"></select>
			                    </div>                   
		            		</div>
		            		<div class="span4">
		            			<div class="control-group">
			            			<label class="control-label">BTM</label>
			            			<input class="input-medium" type="text" id="btm"/>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">DTM</label>
			            			<input class="input-medium" type="text" id="dtm"/>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">Vorsegel</label>
			            			<select name="vorsegel" id="vorsegel" style="width: 165px;"></select>
			            		</div>
		            		</div>
		            	</div>      	 
					
					</form>
				</div>
	
			    <br />
			    <br />
				
				<br />
			    <h2>Wetterinformationen</h2>
			    <br />
			    <div class="container-fluid" align="center">
	            	<form class="form-horizontal"> 
						<!-- Hier kann man auf row-fluid ändern, damit es auf 12 Spalten gesetzt wird-->
		            	<div class="row well" style="margin-left: 15%;" align="center">
						
						
		            		<div class="span4" align="center">	            		
			            		<div class="control-group">
			            			<label class="control-label">Windstärke</label>
			            			<input class="input-medium" type="text" id="windstaerke"/>
			            		</div>
			            		<div class="control-group">
			            			<label class="control-label">Windrichtung</label>
										<select name="wdirection" id="wdirection" style="width: 165px;">
                                            <option value="north">north</option>
                                            <option value="east">east</option>
                                            <option value="south">south</option>
                                            <option value="west">west</option>
                                            <option value="north-east">north-east</option>
                                            <option value="south-east">south-east</option>
                                            <option value="south-west">south-west</option>
                                            <option value="north-west">north-west</option>
                                        </select>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">Luftdruck</label>
			            			<input class="input-medium" type="text" id="luftdruck"/>
			                    </div>
		            		</div>
		            		<div class="span4">
		            			<div class="control-group">
			            			<label class="control-label">Temperatur</label>
			            			<input class="input-medium" type="text" id="temperatur"/>
			            		</div>
			            		<div class="control-group">
			            			<label class="control-label">Wolken</label>
			            			<input class="input-medium" type="text" id="wolken"/>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">Regen</label>
										<select name="rain" id="rain" style="width: 165px;">
                                            <option value="rain_yes">yes</option>
                                            <option value="rain_no">no</option>
                                        </select>
			                    </div>
		            		</div>
		            		<div class="span4">
		            			<div class="control-group">
			            			<label class="control-label">Wellenhöhe</label>
			            			<input class="input-medium" type="text" id="wellenhoehe"/>
			                    </div>
			                    <div class="control-group">
			            			<label class="control-label">Wellenrichtung</label>
										<select name="wavedirection" id="wavedirection" style="width: 165px;">
                                            <option value="north">north</option>
                                            <option value="east">east</option>
                                            <option value="south">south</option>
                                            <option value="west">west</option>
                                            <option value="north-east">north-east</option>
                                            <option value="south-east">south-east</option>
                                            <option value="south-west">south-west</option>
                                            <option value="north-west">north-west</option>
                                        </select>
			                    </div>
			                    <form action="../templates/db_storage-php"><button>Aufzeichnung speichern</button></form>              
		            		</div>
							<div class="span4">
		            			<div class="control-group">
		            				<!-- DateTimePicker JQuery-->
			            			<label class="control-label">Datum und Uhrzeit der Aufzeichnung</label>
			            			<input class="input-medium"  type="text" id="datetimepicker" />
			                    </div>
			        			<form><button>Aufzeichnung laden</button></form> 
		            		</div>
		            		
		            	</div>    
					</form>
	            </div>
			    <div class="container" align="center">
			    <div class="row" style="margin-left:5%;">
			        <div class="span4" id="appNotes">
			        	<h4>Notes</h4>
			            <textarea style="width:96%; height:360px;"></textarea>
			        </div>
			        <div class="span4" id="markerMap">
			        	<h4>Map</h4>
			        	<iframe style="width:96%; height:360px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="map.html"></iframe><br /><small><a href="map.html" style="color:#0000FF;text-align:left">Größere Kartenansicht</a></small>
			        </div>
			        <div class="span4" id="appPhotos">
			        	<h4>Photos</h4>
				        <img src="../img/icons/no_image.jpg" id="appInfoPhoto" style="width:100%; heigt: 100%;"/>
				    </div>
				</div>
			    </div>
			</div><!-- Content -->
			
		</div><!-- Container -->
		
		<!-- Java Script -->
		<script src="../js/bootstrap/bootstrap-transition.js"></script>
	    <script src="../js/bootstrap/bootstrap-button.js"></script>
	    <script src="../js/bootstrap/bootstrap-collapse.js"></script>
	    <script src="../js/bootstrap/bootstrap-affix.js"></script>
		
		<!-- Additional Java-Script -->
		<script src="../js/app/ajax/waypoint.js" type="text/javascript"></script>
		
	</body>
</html>