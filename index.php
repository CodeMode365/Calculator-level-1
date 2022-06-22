<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Php Project</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            color:rgba(0, 128, 0, 0.76);
        }
        body{
            background-color: rgb(0 0 0 / 60%);
        }
        .cal-body{
            background-color: red;
            width: 500px;
            height: 300px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            display: grid;
            grid-template-columns:repeat(2,1fr);
            grid-template-rows:repeat(4,1fr);
            background-color: rgb(235 197 197 / 94%);
            outline: 3px solid white;
            border-radius: 10px;
        }
        .logo-side, .interactive-side{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            grid-row: 1/4;
        }
        .interactive-side{
            padding-left: 25px;
        }
        .logo-side{
            border-right: 3px solid white;
            font-family: cursive;
            font-weight: 900;
            color:rgba(0, 128, 0, 0.76);

        }
        .logo-side h2{
            padding:15px;
            animation: textAnimation 1s linear infinite;
        }
        @keyframes textAnimation{
            0%{
            font-size: 1.5rem;
            }
            50%{
                font-size: 1.7rem;
            }
            100%{
                font-size: 1.5rem;
            }
        }
        .result{
            padding:0;
            margin: 0;
            background-color: rgba(13, 18, 13, 0.653);
            text-align: center;
            display: flex;
            grid-column: 1/-1;
            align-items: center;
            justify-content: center;
        }
        input{
            background-color: black;
            text-align: center;
            font-size: 0.7rem;
            color: white;
            margin:5px;
            padding: 5px 0;
        }
        input::placeholder{
            color: white;
            text-transform: uppercase;
            font-family: cursive;
        }
        #submit-butn{
            padding:5px;
            padding: 10px;
            color: white;
            background-color: rgba(0, 128, 0, 0.76);
            border-radius: 12px;
            margin-top: 5px;
        }
    #result p{
        color:white;
    }
    label{
        color: :rgba(0, 128, 0, 0.76);
    }
    </style>
</head>
<body>
    <div class="cal-body">
        <div class="logo-side">
            <h2>PHP<br>Calculator</h2>
        </div>
        <div class="interactive-side">
            <label >
                <form method="POST">
                    <label for="data1">Enter first number</label><br>
                    <input type="number" name="data1" id="data1" value="data1" placeholder="0"><br>
                    <label for="data2">Enter the second number</label>
                    <input type="number" name="data2" id="data2" value="data2" placeholder="0">
                   <br><select name="operation" id="selection">
                       <option value="mul">multiply</option>
                       <option value="add">add</option>
                       <option value="sub">sub</option>
                       <option value="div">division</option>
                   </select><br>
                   <input type="submit" name='submit' value="submit" id="submit-butn">
                </form>
            </label>
        </div>
        <div id="result" class="result">
            <p>
                <?php
                if(isset($_POST['submit'])){

                    //fetch data from the input fields using post method
                    $num1=$_POST['data1'];
                    $num2=$_POST['data2'];
                    # echo "{$num1} {$num2}";
                    //fetch operational data from the select field
                    $operation=$_POST['operation'];

                    //check the operator and work according to it
                    switch($operation){
                        case 'add':{
                            $sum=$num1+$num2;
                            echo "The addition of given number is: {$sum}";
                            break;
                        } case 'mul':{
                            $mul=$num1*$num2;
                            echo "The multiplication of given number is: ".$mul;
                            break;
                        } case 'div':{
                            $div=$num1/$num2;
                            echo "The division of given number is: ".$div;
                            break;
                        } case 'sub':
                            $sub=$num1-$num2;
                            echo "The subtraction of given number is: ".$sub;
                            break;
                        
                         default:{
                            echo "Enter valid data";

                         }
                        
                    }
                }
                ?>
            </p>
        </div>
    </div>
</body>
</html>