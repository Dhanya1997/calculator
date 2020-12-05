<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bgcolor">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Addition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index1.php">Subtraction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index2.php">Multiplication</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index3.php">Division</a>
          </li>
        </ul>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">

            </div>
            <div class="col col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <table class="table table-borderless">
                    <tr>
                        <td>Number 1</td>
                        <td><input type="text" class="form-control" id="no1"></td>
                    </tr>
                    <tr>
                        <td>Number 2</td>
                        <td><input type="text" class="form-control" id="no2"></td>
                    </tr>
                    <tr>
                        <td>Sum</td>
                        <td><input type="text" class="form-control" id="sum"></td>
                    </tr>
                </table>
                <table class="table table-borderless">
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button onClick=buttonclick() type="button" class="btn btn-info">ADD</button>
                            <button onClick=clr() type="button" class="btn btn-secondary">RESET</button>
                          </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">

            </div>
        </div>
    </div>
    <script>
        function buttonclick() {
           var getno1=parseInt(document.getElementById("no1").value)
           var getno2=parseInt(document.getElementById("no2").value)
           console.log(getno1)
           console.log(getno2)
           if(Number.isInteger(getno1 && getno2)){
              result=getno1+getno2
              document.getElementById("sum").value=result
            }
            else{
              alert("Enter a number")
            }
        }
        function clr() {
            document.getElementById("no1").value=''
            document.getElementById("no2").value=''
            document.getElementById("sum").value=''
        }
    </script>
</body>
</html>

                       