@extends('layouts.app')

@section('content')
<script type="text/javascript" src="{{asset('js/jquery-1.8.3.min.js')}}"></script>
<button onclick="show()">提交</button>
<script>
    
    function show()
    {
        $.ajax({
            url: "http://my.temp.web.com/details",
            type: "post",
            dataType: "json",
            data: {},
            headers:{
                Accept: "application/json",
                Authorization: "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBhNjE2NDdlNjU1YmE3MTZiZTU0NDI2MDBlYTZiNjJmOGE4OGMxZDU3NjgyYTY4MzliYTZhMTQ5MmQ2NmQ4NjNkMjI4ODZhYzE3YWFmYWM3In0.eyJhdWQiOiIxIiwianRpIjoiMGE2MTY0N2U2NTViYTcxNmJlNTQ0MjYwMGVhNmI2MmY4YTg4YzFkNTc2ODJhNjgzOWJhNmExNDkyZDY2ZDg2M2QyMjg4NmFjMTdhYWZhYzciLCJpYXQiOjE1MDMyNDc2MzAsIm5iZiI6MTUwMzI0NzYzMCwiZXhwIjoxNTM0NzgzNjI5LCJzdWIiOiI1Iiwic2NvcGVzIjpbXX0.iBZLhZNBOJphHfxU-0WyRnRlz_Ow73m6tHOXCiS4LxZeFaExvuAmDer5DqB3t0zGyRS1XtXB5T14mSK7KZ8-cX1VqMeYXILgZtiNHDe63P1gF0R_IeJv7_kIa6xSE-l5VyZorlnlN56KP2OjGMcB8D2x3J98-r68QyIREcd19DI8wg8RChqZGAql3lZ19ETqIIf9Bwg8_cNvmKzNuvH7FV69zxz8B9pBYeblkJVhq2tF0jD_KGe4Ur895XAnC17U45UkC5nhCm6x1bMF3GEn6G4IqXk6E5Vbrv3uzq16qbQYZ1uYqEAQGY0Nl9Tcw41IFZsSvHAAwZeVNtIxTTIvyHkbAcmDNiwXzocUf6i5-YfnWao8iI7HEaz_Kplu3Q6ulfXMvkBFWD0daTnah9anZnn-fKfOz0JoaGaqKiw1jtx35KdcDwZpZjacxSktKU9QWuFL63tEz3aDpqR2HiDDS7oM8XOku6TcAqqhffbcfNdMXunFVJRo-Ds-tVG7JRFq2D5-H_tsmUGFAgLmT5bq3UGK9YbedtuJD0wZIPbCr-ckxfRR7ylMSc4dZnsL_wyEyZ3upxSVvQRTkjSDOxMiz8lrqH1fI4PQ4zM-0E_9bHjHOHpXkWVxAqFE1tmBmb9-IDq1E5sMRbX50eBov57t4PebkHWSApVIzAH5d5IzGYA",
            },
            error: function(){
            },
            success: function(json){
            }
        });
    }

</script>
@endsection
