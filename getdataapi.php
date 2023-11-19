<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>
<body>


<script>

$.ajax({
    type: 'GET',
    url:'https://jsonplaceholder.typicode.com/posts',
    datatype:'json',
    success: function(data){
        // alert(data);

        for(var i=0; i<data.length; i++){           
            var id = data[i].id;
            var title = data[i].title;          

            console.log(title);
        }
    }
});

</script>
    
</body>
</html>