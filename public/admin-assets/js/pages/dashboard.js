//[Dashboard Javascript]

//Project:	CrmX Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	var options = {
	  chart: {
		  height: 340,
		  type: 'bar',
		  toolbar: {
			  show: false
		  }
	  },
	  plotOptions: {
		  bar: {
			  horizontal: false,
			  endingShape: 'rounded',
			  columnWidth: '35%',
		  },
	  },
	  dataLabels: {
		  enabled: false
	  },
	  stroke: {
		  show: true,
		  width: 2,
		  colors: ['transparent']
	  },
	  colors: ["#2444e8", "#c6cffb"],
	  series: [{
		  name: 'New Visitors',
		  data: [70, 45, 51, 58, 59, 58, 61, 65, 60, 69]
	  }, {
		  name: 'Unique Visitors',
		  data: [55, 71, 80, 100, 89, 98, 110, 95, 116, 90]
	  },],
	  xaxis: {
		  categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
		  axisBorder: {
			show: true,
			color: '#bec7e0',
		  },  
		  axisTicks: {
			show: true,
			color: '#bec7e0',
		  },    
	  },
	  legend: {
          position: 'top',
           horizontalAlign: 'right',
        },
	  yaxis: {
		  title: {
			  text: 'Visitors'
		  }
	  },
	  fill: {
		  opacity: 1

	  },
	  // legend: {
	  //     floating: true
	  // },
	  grid: {
		  row: {
			  colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
			  opacity: 0.2
		  },
		  borderColor: '#f1f3fa'
	  },
	  tooltip: {
		  y: {
			  formatter: function (val) {
				  return "" + val + "k"
			  }
		  }
	  }
	}

	var chart = new ApexCharts(
	  document.querySelector("#yearly-comparison"),
	  options
	);

	chart.render();
	
	
	
	var myConfig = {
        "type": "line",
		"utc": true,
        "plot": {
          "animation": {
            "delay": 500,
            "effect": "ANIMATION_SLIDE_LEFT"
          }
        },
        "plotarea": {
          "margin": "10px 25px 70px 46px"
        },
        "scale-y": {
          "values": "0:100:25",
          "line-color": "none",
          "guide": {
            "line-style": "solid",
            "line-color": "#d2dae2",
            "line-width": "1px",
            "alpha": 0.5
          },
          "tick": {
            "visible": false
          },
          "item": {
            "font-color": "#8391a5",
            "font-family": "Arial",
            "font-size": "10px",
            "padding-right": "5px"
          }
        },
        "scale-x": {
          "line-color": "#d2dae2",
          "line-width": "2px",
          "values": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          "tick": {
            "line-color": "#d2dae2",
            "line-width": "1px"
          },
          "guide": {
            "visible": false
          },
          "item": {
            "font-color": "#8391a5",
            "font-family": "Arial",
            "font-size": "10px",
            "padding-top": "5px"
          }
        },
        "legend": {
          "layout": "x4",
          "background-color": "none",
          "shadow": 0,
          "margin": "auto auto 15 auto",
          "border-width": 0,
          "item": {
            "font-color": "#707d94",
            "font-family": "Arial",
            "padding": "0px",
            "margin": "0px",
            "font-size": "9px"
          },
          "marker": {
            "show-line": "true",
            "type": "match",
            "font-family": "Arial",
            "font-size": "10px",
            "size": 4,
            "line-width": 2,
            "padding": "3px"
          }
        },
        "crosshair-x": {
          "lineWidth": 1,
          "line-color": "#707d94",
          "plotLabel": {
            "shadow": false,
            "font-color": "#000",
            "font-family": "Arial",
            "font-size": "10px",
            "padding": "5px 10px",
            "border-radius": "5px",
            "alpha": 1
          },
          "scale-label": {
            "font-color": "#ffffff",
            "background-color": "#707d94",
            "font-family": "Arial",
            "font-size": "10px",
            "padding": "5px 10px",
            "border-radius": "5px"
          }
        },
        "tooltip": {
          "visible": false
        },
        "series": [{
          "values": [69, 68, 54, 48, 70, 74, 98, 70, 72, 68, 49, 69],
          "text": "Kenmore",
          "line-color": "#389f99",
          "line-width": "2px",
          "shadow": 0,
          "marker": {
            "background-color": "#fff",
            "size": 3,
            "border-width": 1,
            "border-color": "#389f99",
            "shadow": 0
          },
          "palette": 0
        }, {
          "values": [51, 53, 47, 60, 48, 52, 75, 52, 55, 47, 60, 48],
          "text": "Craftsman",
          "line-width": "2px",
          "line-color": "#38649f",
          "shadow": 0,
          "marker": {
            "background-color": "#fff",
            "size": 3,
            "border-width": 1,
            "border-color": "#38649f",
            "shadow": 0
          },
          "palette": 1,
          "visible": 1
        }, {
          "values": [42, 43, 30, 50, 31, 48, 55, 46, 48, 32, 50, 38],
          "text": "DieHard",
          "line-color": "#ee1044",
          "line-width": "2px",
          "shadow": 0,
          "marker": {
            "background-color": "#fff",
            "size": 3,
            "border-width": 1,
            "border-color": "#ee1044",
            "shadow": 0
          },
          "palette": 2,
          "visible": 1
        }, {
          "values": [25, 15, 26, 21, 24, 26, 33, 25, 15, 25, 22, 24],
          "text": "Land's End",
          "line-color": "#ff8f00",
          "line-width": "2px",
          "shadow": 0,
          "marker": {
            "background-color": "#fff",
            "size": 3,
            "border-width": 1,
            "border-color": "#ff8f00",
            "shadow": 0
          },
          "palette": 3
        }]
      };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: 305,
      width: '100%'
    });
	
	
	
	var options = {
    chart: {
      type: 'radialBar',
      height: 305,
    },
    plotOptions: {
      radialBar: {
        offsetY: -10,
        startAngle: 0,
        endAngle: 270,
        hollow: {
          margin: 5,
          size: '50%',
          background: 'transparent',
  
        },
        track: {
          show: false,
        },
        dataLabels: {
          name: {
              fontSize: '18px',
          },
          value: {
              fontSize: '16px',
              color: '#50649c',
          },          
        }
      },
    },
    colors: ['#2444e8', '#ec4b71', '#45b6c6'],
    stroke: {
      lineCap: 'round'
    },
    series: [67, 75, 98],
    labels: ['Sent', 'Open', 'Not Open'],
    legend: {
      show: true,
      floating: true,
      position: 'left',
      offsetX: 0,
      offsetY: 0,
    },
    responsive: [{
        breakpoint: 480,
        options: {
            legend: {
                show: true,
                floating: true,
                position: 'left',
                offsetX: 10,
                offsetY: 0,
            }
        }
    }]
  }
  
  
  var chart = new ApexCharts(
    document.querySelector("#email-campaign"),
    options
  );
  
  chart.render();
	
  
	var options1 = {
        series: [{
          data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
        chart: {
          type: 'line',
          width: 100,
          height: 50,
          sparkline: {
            enabled: true
          }
        },
		 stroke: {
          curve: 'smooth',
			 width: 3,
        },
		 
		markers: {
			size: 0,
		},
        tooltip: {
          fixed: {
            enabled: false
          },
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function (seriesName) {
                return ''
              }
            }
          },
          marker: {
            show: false
          }
        }
      };

      var chart1 = new ApexCharts(document.querySelector("#visitors-char"), options1);
      chart1.render();
	
	
	// Apex  start
  if($('#apexChart2').length) {
    var options2 = {
      chart: {
        type: "bar",
        height: 150,
        sparkline: {
          enabled: !0
        }
      },
      plotOptions: {
        bar: {
          columnWidth: "25%"
        }
      },
      colors: ["#ffffff"],
      series: [{
        data: [36, 77, 52, 90, 74, 35, 55, 23, 47, 10, 63, 36, 77, 52, 90, 74, 35, 55, 23, 47]
      }],
      labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
      xaxis: {
        crosshairs: {
          width: 2
        }
      },
      tooltip: {
        fixed: {
          enabled: !1
        },
        x: {
          show: !1
        },
        y: {
          title: {
            formatter: function(e) {
              return ""
            }
          }
        },
        marker: {
          show: !1
        }
      }
    };
    new ApexCharts(document.querySelector("#apexChart2"),options2).render();
  }
  // Apex  end
	
	
	
	
	
	var ts2 = 1484418600000;
			var dates = [];
			var spikes = [5, -5, 3, -3, 8, -8]
			for (var i = 0; i < 120; i++) {
			  ts2 = ts2 + 86400000;
			  var innerArr = [ts2, dataSeries[1][i].value];
			  dates.push(innerArr)
			}

			var options = {
			  chart: {
				type: 'area',
				stacked: false,
				height: 300,
				zoom: {
				  type: 'x',
				  enabled: true
				},
				toolbar: {
				  autoSelected: 'zoom'
				}
			  },
			  dataLabels: {
				enabled: false
			  },
			  series: [{
				name: 'Stock',
				data: dates
			  }],
			  markers: {
				size: 0,
			  },
			  fill: {
				gradient: {
				  enabled: true,
				  shadeIntensity: 1,
				  inverseColors: false,
				  opacityFrom: 0.9,
				  opacityTo: 0.2,
				  stops: [0, 90, 100]
				},
			  },
			  yaxis: {
				min: 20000000,
				max: 250000000,
				labels: {
				  formatter: function (val) {
					return (val / 1000000).toFixed(0);
				  },
				},
			  },
				
			  xaxis: {
				type: 'datetime',
			  },
				
				
			  tooltip: {
				shared: false,
				y: {
				  formatter: function (val) {
					return (val / 1000000).toFixed(0)
				  }
				}
			  }
			}

			var chart = new ApexCharts(
			  document.querySelector("#chart-line"),
			  options
			);

			chart.render();
	
	
	
	
	am4core.ready(function() {

	// Themes begin
	am4core.useTheme(am4themes_dataviz);
	am4core.useTheme(am4themes_animated);
	// Themes end

	// Create map instance
	var chart = am4core.create("reports", am4maps.MapChart);

	// Set map definition
	chart.geodata = am4geodata_worldLow;

	// Set projection
	chart.projection = new am4maps.projections.Miller();

	// Create map polygon series
	var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

	// Exclude Antartica
	polygonSeries.exclude = ["AQ"];

	// Make map load polygon (like country names) data from GeoJSON
	polygonSeries.useGeodata = true;

	// Configure series
	var polygonTemplate = polygonSeries.mapPolygons.template;
	polygonTemplate.tooltipText = "{name}";
	polygonTemplate.fill = chart.colors.getIndex(0).lighten(0.5);

	// Create hover state and set alternative fill color
	var hs = polygonTemplate.states.create("hover");
	hs.properties.fill = chart.colors.getIndex(0);

	// Add image series
	var imageSeries = chart.series.push(new am4maps.MapImageSeries());
	imageSeries.mapImages.template.propertyFields.longitude = "longitude";
	imageSeries.mapImages.template.propertyFields.latitude = "latitude";
	imageSeries.data = [ {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Brussels",
	  "latitude": 50.8371,
	  "longitude": 4.3676
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Copenhagen",
	  "latitude": 55.6763,
	  "longitude": 12.5681
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Paris",
	  "latitude": 48.8567,
	  "longitude": 2.3510
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Reykjavik",
	  "latitude": 64.1353,
	  "longitude": -21.8952
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Moscow",
	  "latitude": 55.7558,
	  "longitude": 37.6176
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Madrid",
	  "latitude": 40.4167,
	  "longitude": -3.7033
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "London",
	  "latitude": 51.5002,
	  "longitude": -0.1262,
	  "url": "http://www.google.co.uk"
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Peking",
	  "latitude": 39.9056,
	  "longitude": 116.3958
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "New Delhi",
	  "latitude": 28.6353,
	  "longitude": 77.2250
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Tokyo",
	  "latitude": 35.6785,
	  "longitude": 139.6823,
	  "url": "http://www.google.co.jp"
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Ankara",
	  "latitude": 39.9439,
	  "longitude": 32.8560
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Buenos Aires",
	  "latitude": -34.6118,
	  "longitude": -58.4173
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Brasilia",
	  "latitude": -15.7801,
	  "longitude": -47.9292
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Ottawa",
	  "latitude": 45.4235,
	  "longitude": -75.6979
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Washington",
	  "latitude": 38.8921,
	  "longitude": -77.0241
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Kinshasa",
	  "latitude": -4.3369,
	  "longitude": 15.3271
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Cairo",
	  "latitude": 30.0571,
	  "longitude": 31.2272
	}, {
	  "zoomLevel": 5,
	  "scale": 0.5,
	  "title": "Pretoria",
	  "latitude": -25.7463,
	  "longitude": 28.1876
	} ];

	// add events to recalculate map position when the map is moved or zoomed
	chart.events.on( "mappositionchanged", updateCustomMarkers );

	// this function will take current images on the map and create HTML elements for them
	function updateCustomMarkers( event ) {

	  // go through all of the images
	  imageSeries.mapImages.each(function(image) {
		// check if it has corresponding HTML element
		if (!image.dummyData || !image.dummyData.externalElement) {
		  // create onex
		  image.dummyData = {
			externalElement: createCustomMarker(image)
		  };
		}

		// reposition the element accoridng to coordinates
		var xy = chart.geoPointToSVG( { longitude: image.longitude, latitude: image.latitude } );
		image.dummyData.externalElement.style.top = xy.y + 'px';
		image.dummyData.externalElement.style.left = xy.x + 'px';
	  });

	}

	// this function creates and returns a new marker element
	function createCustomMarker( image ) {

	  var chart = image.dataItem.component.chart;

	  // create holder
	  var holder = document.createElement( 'div' );
	  holder.className = 'map-marker';
	  holder.title = image.dataItem.dataContext.title;
	  holder.style.position = 'absolute';

	  // maybe add a link to it?
	  if ( undefined != image.url ) {
		holder.onclick = function() {
		  window.location.href = image.url;
		};
		holder.className += ' map-clickable';
	  }

	  // create dot
	  var dot = document.createElement( 'div' );
	  dot.className = 'dot';
	  holder.appendChild( dot );

	  // create pulse
	  var pulse = document.createElement( 'div' );
	  pulse.className = 'pulse';
	  holder.appendChild( pulse );

	  // append the marker to the map container
	  chart.svgContainer.htmlElement.appendChild( holder );

	  return holder;
	}

	}); // end am4core.ready()
	
	
}); // End of use strict


$(function () {

  'use strict';

	//dashboard_daterangepicker
	
	if(0!==$("#dashboard_daterangepicker").length) {
		var n=$("#dashboard_daterangepicker"),
		e=moment(),
		t=moment();
		n.daterangepicker( {
			startDate:e, endDate:t, opens:"left", ranges: {
				Today: [moment(), moment()], Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")], "Last 7 Days": [moment().subtract(6, "days"), moment()], "Last 30 Days": [moment().subtract(29, "days"), moment()], "This Month": [moment().startOf("month"), moment().endOf("month")], "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
			}
		}
		, a),
		a(e, t, "")
	}
	function a(e, t, a) {
		var r="",
		o="";
		t-e<100||"Today"==a?(r="Today:", o=e.format("MMM D")): "Yesterday"==a?(r="Yesterday:", o=e.format("MMM D")): o=e.format("MMM D")+" - "+t.format("MMM D"), n.find(".subheader_daterange-date").html(o), n.find(".subheader_daterange-title").html(r)
	}

}); // End of use strict