<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detail</title>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <style>
            td.fix-width {
                width:50px;
            }
        </style>
    </head>
    <body>
       <div id="app">
           <div class='container'>
            <?php include 'php_include_files/page_header.php';?>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-hover table-condensed">
                        <tr>
                            <th>Items</th><th>Part Name</th>
                        </tr>
                        <tr v-for="(row, index) in rows">
                            <td class="col-md-3">{{row}}</td>
                            <td>{{get_data[index]}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
     </div>

       <script src="node_modules/vue/dist/vue.min.js"></script>
       <script src="js/indexi.js"></script>
    </body>
</html>