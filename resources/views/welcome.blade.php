<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <script type='text/javascript'>
        function GetMap() {
            var map = new Microsoft.Maps.Map('#myMap', {
                credentials: 'Atr4d5l22jvlJKFyx4LT_kh0dZhAXCFYAH1N0nFO3ePncdg9lf0O_stsCD2x7jmE',
                center: new Microsoft.Maps.Location(40.227908, 44.549217)
            });

            var center = map.getCenter();

            //Create custom Pushpin
            var pin = new Microsoft.Maps.Pushpin(center, {
                title: 'Microsoft',
                subTitle: 'City Center',
                text: '1'
            });

            //Add the pushpin to the map
            map.entities.push(pin);
        }
    </script>
    <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
</head>
<body>
<div id="myMap" style="position:relative;width:600px;height:400px;"></div>
</body>
</html>
