<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>History</title>
</head>
<body>
    <h1>Prediction History</h1>
    <?php include 'log.php' ?>
    <!-- create history table -->
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>CP</th>
                    <th>Trestbps</th>
                    <th>Chol</th>
                    <th>FBS</th>
                    <th>Restecg</th>
                    <th>Thalach</th>
                    <th>Exang</th>
                    <th>Oldpeak</th>
                    <th>Slope</th>
                    <th>CA</th>
                    <th>Thal</th>
                    <th>Result</th>
                </tr>
            </thead>
        <?php for($i=0;$i<sizeof($his);$i++){ ?>
            <?php if($i==sizeof($his)-1){break;}?>
            <tbody>
                <tr>
                    <td><?php echo $i+1?></td>
                    <?php for($j=0;$j<sizeof($his[$i]);$j++){ ?>
                    <td><?php echo $his[$i][$j]?></td>
                    <?php } ?>
                </tr>
            </tbody>
        <?php }?>
        </table>
    </div>
    <!-- Back button to index -->
    <div>
        <a href="index.html"><button type="button" class="btn btn-secondary">Back</button></a>
    </div>

</body>
</html>