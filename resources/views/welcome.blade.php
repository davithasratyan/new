<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />

    <script type='text/javascript'
            src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=Atr4d5l22jvlJKFyx4LT_kh0dZhAXCFYAH1N0nFO3ePncdg9lf0O_stsCD2x7jmE'
            async defer></script>

    <script type='text/javascript'>
        function GetMap() {
            var map = new Microsoft.Maps.Map('#myMap', {
                credentials: 'Atr4d5l22jvlJKFyx4LT_kh0dZhAXCFYAH1N0nFO3ePncdg9lf0O_stsCD2x7jmE',
                center: new Microsoft.Maps.Location(47.6149, -122.1941)
            });

            Microsoft.Maps.Events.addHandler(map, 'click', function (e) {
                // Get the location where the user clicked
                var clickedLocation = e.location;
                console.log(clickedLocation.latitude)
                console.log(clickedLocation.longitude)

                var pin = new Microsoft.Maps.Pushpin(clickedLocation, {
                    title: 'Marker',
                    subTitle: 'clicked'
                });
                map.entities.push(pin);
            });
        }
    </script>
</head>
<body>
<div id="myMap" style="position:relative;width:600px;height:400px;"></div>

<div id="location"></div>
</body>
</html>
