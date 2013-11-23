/*
 * SURF CALI
 * SURF FORECAST FOR VARIOUS CALIFORNIAN LOCATIONS POWERED BY SPITCAST API
 *
 * Copyright 2013 LIAM TARPEY http://www.liamtarpey.com
 * Released under the MIT License
 */

(function($){

	$.fn.surfcali = function(options) {


		var defaults = $.extend({
            spot_id: "1",
            county: "santa-cruz"
        }, options );

        var url_general = 'http://api.spitcast.com/api/spot/forecast/' + defaults.spot_id + '/';
        var url_wind = 'http://api.spitcast.com/api/county/wind/' + defaults.county + '/';
        var url_temp = 'http://api.spitcast.com/api/county/water-temperature/' + defaults.county + '/';
        var url_swell = 'http://api.spitcast.com/api/county/swell/' + defaults.county + '/';
        var url_tide = 'http://api.spitcast.com/api/county/tide/' + defaults.county + '/';

        // General forecast
	    $.getJSON(url_general, function (data) {
	    	var items = [];
	    	$.each(data, function (key, val) {
		        $('.forecast-general').html('<h2>' + val.spot_name + '</h2>\
		        	<ul>\
			        	<li class="date">' + val.date + '<span> - ' + val.hour + '</span></li>\
			        	<li> Wind: ' + val.shape_detail.wind + '</li>\
			        	<li> Tide: ' + val.shape_detail.tide + '</li>\
			        	<li> Swell: ' + val.shape_detail.swell + '</li>\
			        	<li> Wave Shape: ' + val.shape + '</li>\
		        	</ul>'
		        );
		    });
	    });

	    // Wind Detailled
	    $.getJSON(url_wind, function (data) {
	    	var items = [];
	    	$.each(data, function (key, val) {
		        $('.forecast-wind').html('<h3> ' + val.name + '</h3>\
		        	<ul>\
			        	<li> Wind direction: ' + val.direction_degrees + '&deg; - ' + val.direction_text + '</li>\
			        	<li> Wind speed: ' + val.speed_kts + ' kts / ' + val.speed_mph + ' mph</li>\
		        	</ul>'
		        );
		    });
	    });

	    // Water temperature
	    $.getJSON(url_temp, function(data) {
		    $(".forecast-water-temp").html('<ul>\
		    	<li>Water temperature: ' + data.fahrenheit + '&deg;F / ' + data.celcius + ' &deg;C</li>\
		    	<li>Recommended: ' + data.wetsuit + '</li>\
		    	</ul>');
		});

	    // Water swell
		$.getJSON(url_swell, function (data) {
	    	var items = [];
	    	$.each(data, function (key, val) {
		        $('.forecast-swell').html('<ul>\
			        	<li> Significant wave height: ' + val[i].hs + '</li>\
			        	<li> Peak period: ' + val[i].tp + '</li>\
			        	<li> Swell direction: ' + val[i].dir + '&deg;</li>\
		        	</ul>'
		        );
		    });
	    });

	    // Water tide
		$.getJSON(url_tide, function (data) {
	    	var items = [];
	    	$.each(data, function (key, val) {
		        $('.forecast-tide').html('<ul>\
			        	<li> Tide: ' + val.tide + ' ft / ' + val.tide_meters + ' m</li>\
		        	</ul>'
		        );
		    });
	    });




	};

})(jQuery);