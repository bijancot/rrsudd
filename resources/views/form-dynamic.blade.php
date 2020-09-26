<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .row{
            margin-right: 0px;
            margin-left: 0px;
        }

    </style>
</head>
<body>
    <div class="row">
        <div class="col">
            <h1>Data Pasien</h1>
        </div>
    </div>
    <form action="">
        <div class="row">
            <div class="col-6 column1">
            </div>
            <div class="col-6 column2"></div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/jsonform/underscore.js"></script>
    <script src="js/jsonform/jsv.js"></script>
    <script src="js/jsonform/jsonform.js"></script>
    <script>
        //column1
        $.getJSON('data-form/resume-medis.json', function(data){
            $('.column1').jsonForm(data.column1);
            $('.column2').jsonForm(data.column2);
        })
    </script>

</body>
</html>