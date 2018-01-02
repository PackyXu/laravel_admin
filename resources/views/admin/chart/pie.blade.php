 <canvas id="chartArea" width="400" height="400"></canvas>

 <script>
     $(function () {
         var randomScalingFactor = function() {
             return Math.round(Math.random() * 199);
         };
         var ctx = document.getElementById("chartArea").getContext('2d');
         var chartArea = new Chart(ctx, {
             type: 'pie',
             data: {
                 labels: ["Red", "Blue", "Green" ,"Orange", "Purple"],
                 datasets: [{
                     label: 'Pie of Votes',
                     backgroundColor: [
                         'rgba(255, 0, 0, 0.8)',
                         'rgba(0, 0, 255, 0.8)',
                         'rgba(0, 255, 0, 0.8)',
                         'rgba(255, 153, 0, 0.8)',
                         'rgba(147,112,219, 0.8)'
                     ],
                     data: [
                         randomScalingFactor(),
                         randomScalingFactor(),
                         randomScalingFactor(),
                         randomScalingFactor(),
                         randomScalingFactor()
                     ]
                 }]
             },
             options: {
                 responsive: true

             }
         });
     });
 </script>