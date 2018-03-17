


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <title>Document</title>
    <script>
        //these are examples.
        $(document).ready(function(){
            $('button').click(function(){
                console.log('click initiated');
                $.ajax({
                    url: 'index_insert.php',
                    type: 'POST',
                    data: {
                        'n': $('input[name=n]').val(),
                        'g': $('input[name=g]').val(),
                        'c': $('input[name=c]').val()
                    },
                    success: function(result) {
                        console.log('AJAX Success function called, with the following result:', result);
                        $('#name').text($('input[name=n]').val());
                        $('#grade').text($('input[name=g]').val());
                        $('#course').text($('input[name=c]').val());


                        $('input[name=n]').val('');
                        $('input[name=g]').val('');
                        $('input[name=c]').val('');
                    },
                    error: function(result){
                        console.log('AJAX Fail');
                    }
                });
                console.log('End of click function');
                debugger;
            });
        });
    </script>
</head>
<body>
<form>
    <!--<form method="POST" action="index_insert.php">-->
    <input type="text" placeholder="Name" name="n" />
    <input type="number" placeholder="Grade" name="g" />
    <input type="text" placeholder="Course" name="c" />

    <button type="button">Submit</button>
</form>

<ul>
    <li id="name"></li>
    <li id="grade"></li>
    <li id="course"></li>
</ul>

</body>
<script>
    //    index_insert.php
    //    <form method="POST" action="index_insert.php">
    //        <input type="text" placeholder="Name" name="n" />
    //        <input type="number" placeholder="Grade" name="g" />
    //        <input type="text" placeholder="Course" name="c" />
    //
    //        <button type="submit">Submit</button>
    //        </form>

</script>

</html>