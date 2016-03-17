
Runner.controls.gMap=Runner.extend(Runner.emptyFn,{geoCoder:null,constructor:function(){this.geoCoder=new google.maps.Geocoder();},createMap:function($mapElem,zoom,centerLat,centerLng){return new google.maps.Map($mapElem.get(0),{zoom:zoom,center:new google.maps.LatLng(centerLat||0,centerLng||0),mapTypeId:google.maps.MapTypeId.ROADMAP});},setCenter:function(address,map,zoom){this.geoCoder.geocode({address:address},function(geoResult,status){if(status==google.maps.GeocoderStatus.OK){map.setCenter(geoResult[0].geometry.location,zoom);}});},mapsLatLng:function(lat,lng){return new google.maps.LatLng(lat,lng);},setMarkerByCoords:function(markerData,mapData){var position=this.mapsLatLng(this.parseValue(markerData.lat),this.parseValue(markerData.lng)),rstep=.004,marker,icon;if(mapData.clustering){mapData.addedCoordinates=mapData.addedCoordinates||{};mapData.clusterMarkers=mapData.clusterMarkers||[];while(mapData.addedCoordinates[this.coordToString(position)]){position=new google.maps.LatLng(position.lat()+rstep*(Math.random()-1),position.lng()+rstep*(Math.random()-1));}}
if(this.mapIsHeatmap(mapData)){marker={position:position};}else{icon=null;if(markerData.mapIcon&&mapData.type=='BIG_MAP'){icon={url:settings.global["webRootPath"]+markerData.mapIcon};}else if(markerData.mapIcon){icon={url:settings.global["webRootPath"]+"images/menuicons/"+markerData.mapIcon};}
marker=new google.maps.Marker({position:position,title:markerData.desc,icon:icon});marker.setMap(mapData.map);}
markerData.marker=marker;if(mapData.clustering&&marker){mapData.clusterMarkers.push(marker);mapData.addedCoordinates[this.coordToString(marker.getPosition())]=true;}},setMarkerByAddress:function(markerData,mapData,onAddressResolvedHandler){this.geoCoder.geocode({address:markerData.address},function(geoResult,status){var marker,icon;if(status!=google.maps.GeocoderStatus.OK){return;}
icon=null;if(markerData.mapIcon&&mapData.type=='BIG_MAP'){icon={url:settings.global["webRootPath"]+markerData.mapIcon};}else if(markerData.mapIcon){icon={url:settings.global["webRootPath"]+"images/menuicons/"+markerData.mapIcon};}
marker=new google.maps.Marker({position:geoResult[0].geometry.location,icon:icon,title:markerData.desc});marker.setMap(mapData.map);markerData.lat=geoResult[0].geometry.location.lat().toString();markerData.lng=geoResult[0].geometry.location.lng().toString();markerData.marker=marker;onAddressResolvedHandler();});},addOnMarkerClickHandler:function(marker,handler){google.maps.event.addListener(marker,"click",handler);},triggerMarkerClickEvent:function(marker){google.maps.event.trigger(marker,"click");},destroyMarker:function(map,marker){if(marker&&marker instanceof google.maps.Marker){marker.setMap(null);}},setZoomAuto:function(map,markers,boundLatLng){var newMapBounds=new google.maps.LatLngBounds();if(boundLatLng){newMapBounds.extend(markers[boundLatLng.minLatID].marker.position);newMapBounds.extend(markers[boundLatLng.minLngID].marker.position);newMapBounds.extend(markers[boundLatLng.maxLatID].marker.position);newMapBounds.extend(markers[boundLatLng.maxLngID].marker.position);}
map.fitBounds(newMapBounds);},triggerResizeEvent:function(map){google.maps.event.trigger(map,'resize');},setMapCenter:function(map,zoom,lat,lng){map.setCenter(this.mapsLatLng(lat,lng),zoom);},setZoom:function(map,zoom){map.setZoom(zoom);},parseValue:function(aVal){return typeof(aVal)=='string'?parseFloat(aVal.replace(',','.')):aVal;},addOnMapLoadHandler:function(map,handler){google.maps.event.addDomListenerOnce(map,"tilesloaded",handler);},addOnMapViewPortChangedHandler:function(map,handler){google.maps.event.addListener(map,"dragend",handler);google.maps.event.addListener(map,"zoom_changed",handler);},getMapViewPortCoordinates:function(map){var mapBounds=map.getBounds(),ne,sw;if(!mapBounds){return null;}
ne=mapBounds.getNorthEast();sw=mapBounds.getSouthWest();return{n:ne.lat(),s:sw.lat(),e:ne.lng(),w:sw.lng()};},mapBoundsContains:function(marker,map){var mapBounds=map.getBounds();return mapBounds&&mapBounds.contains(marker.getPosition());},setMarkerActive:function(marker,customIcon){if(!marker){return;}
if(!customIcon){marker.setIcon({url:settings.global["webRootPath"]+"images/icons/gYellowMarker.png",size:new google.maps.Size(26,42),scaledSize:new google.maps.Size(26,42)});return;}
marker.setAnimation(google.maps.Animation.BOUNCE);setTimeout(function(){marker.setAnimation(null);},500);},setMarkerInactive:function(marker,customIcon){if(!marker){return;}
if(!customIcon){marker.setIcon(null);}else{marker.setAnimation(null);}},mapIsHeatmap:function(mapData){return mapData&&mapData.type=='BIG_MAP'&&mapData.markers&&mapData.markers.length&&mapData.heatMap&&!mapData.clustering;},initHeatMap:function(mapData){var map=mapData.map,data=[],i,weight,markerHeatData,heatmap;if(!map||!this.mapIsHeatmap(mapData)){return;}
for(i=0;i<mapData.markers.length;i++){weight=parseFloat(mapData.markers[i].weight);if(mapData.weightField&&!weight){continue;}
markerHeatData={location:new google.maps.LatLng(mapData.markers[i].lat,mapData.markers[i].lng)};if(weight){markerHeatData.weight=weight;}
data.push(markerHeatData);}
heatmap=new google.maps.visualization.HeatmapLayer({data:data,maxIntensity:100,dissipating:true,radius:40});heatmap.setMap(map);},initializeClusterMarkers:function(mapData){return new MarkerClusterer(mapData.map,mapData.clusterMarkers);},isClusterHandlerToAdd:function(markerData){return!!markerData.subMarkers;},clusterHandler:function(markerData){if(!markerData.subMarkers){return;}
var map=markerData.marker.getMap();map.setCenter(markerData.marker.position);map.setZoom(map.getZoom()+1);},coordToString:function(latlng){return Math.round(latlng.lat()*100000).toString()+' '+Math.round(latlng.lng()*100000).toString();}});