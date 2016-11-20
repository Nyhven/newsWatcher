window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
        data: [
            {
                // Change type to "doughnut", "line", "splineArea", etc.
                type: "doughnut",
                fontSize: 14,
                dataPoints: [
                    { label: "Highest",  y: 25},
                    { label: "High", y: 15  },
                    { label: "Neutral", y: 25  },
                    { label: "Low",  y: 30  },
                    { label: "Lowest",  y: 28  }
                ]
            }
        ]
    });
    chart.render();
};