

window.onload = function () {

  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
      text: "Daily Food Consumption"
    },
    axisX: {
      valueFormatString: "DDD",
      minimum: new Date(2017, 10, 5, 23),
      maximum: new Date(2017, 10, 12, 1)
    },
    axisY: {
      title: "Quantity"
    },
    legend: {
      verticalAlign: "top",
      horizontalAlign: "right",
      dockInsidePlotArea: true
    },
    toolTip: {
      shared: true
    },
    data: [{
      name: "Coffee",
      showInLegend: true,
      legendMarkerType: "square",
      type: "area",
      color: "#6D4C41",
      markerSize: 0,
      dataPoints: [
      { x: new Date(2017, 10, 6), y: 220 },
      { x: new Date(2017, 10, 7), y: 120 },
      { x: new Date(2017, 10, 8), y: 144 },
      { x: new Date(2017, 10, 9), y: 162 },
      { x: new Date(2017, 10, 10), y: 129 },
      { x: new Date(2017, 10, 11), y: 109 },
      { x: new Date(2017, 10, 12), y: 129 }
      ]
    },
    {
      name: "Pizza",
      showInLegend: true,
      legendMarkerType: "square",
      type: "area",
      color: "#FFA000",
      markerSize: 0,
      dataPoints: [
      { x: new Date(2017, 10, 6), y: 42 },
      { x: new Date(2017, 10, 7), y: 200 },
      { x: new Date(2017, 10, 8), y: 29 },
      { x: new Date(2017, 10, 9), y: 42 },
      { x: new Date(2017, 10, 10), y: 150},
      { x: new Date(2017, 10, 11), y: 15 },
      { x: new Date(2017, 10, 12), y: 12 }
      ]
    },
    {
      name: "Meat",
      showInLegend: true,
      legendMarkerType: "square",
      type: "area",
      color: "#F4511E",
      markerSize: 0,
      dataPoints: [
      { x: new Date(2017, 10, 6), y: 42 },
      { x: new Date(2017, 10, 7), y: 34 },
      { x: new Date(2017, 10, 8), y: 160 },
      { x: new Date(2017, 10, 9), y: 42 },
      { x: new Date(2017, 10, 10), y: 90},
      { x: new Date(2017, 10, 11), y: 15 },
      { x: new Date(2017, 10, 12), y: 35 }
      ]
    },
    {
      name: "Healthy Stuff",
      showInLegend: true,
      legendMarkerType: "square",
      type: "area",
      color: "#76FF03",
      markerSize: 0,
      dataPoints: [
      { x: new Date(2017, 10, 6), y: 150 },
      { x: new Date(2017, 10, 7), y: 250 },
      { x: new Date(2017, 10, 8), y: 29 },
      { x: new Date(2017, 10, 9), y: 42 },
      { x: new Date(2017, 10, 10), y: 80},
      { x: new Date(2017, 10, 11), y: 15 },
      { x: new Date(2017, 10, 12), y: 12 }
      ]
    },
    {
      name: "Dairy Products",
      showInLegend: true,
      legendMarkerType: "square",
      type: "area",
      color: "#FFF59D",
      markerSize: 0,
      dataPoints: [
      { x: new Date(2017, 10, 6), y: 42 },
      { x: new Date(2017, 10, 7), y: 34 },
      { x: new Date(2017, 10, 8), y: 29 },
      { x: new Date(2017, 10, 9), y: 42 },
      { x: new Date(2017, 10, 10), y: 53},
      { x: new Date(2017, 10, 11), y: 15 },
      { x: new Date(2017, 10, 12), y: 12 }
      ]
    }
    ]
  });


  chart.render();

}