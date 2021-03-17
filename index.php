<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>  
    <style>*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container-body  {
    position: absolute;
    margin: 0 auto;
    background-color: rgb(204, 132, 204);
    height: 100%;
    width: 100%;
}

.container-main{
    width: 60%;
    height: auto;
    margin: 0 auto;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid grey;
    padding: 10px;
    background-color: rgb(49, 47, 47);
    color: white;
    top: 30%;
}

.container-left{
    height: 20%;
    width: 50%;
    padding: 10px;
}

.container-right{
    
    padding: 10px;
}

form{
    display: flex;
    flex-direction: column;
    margin: 10px;
}

.input{
    margin: 1rem;
    padding: 10px;
    width: 20vw;
}
.select-style{
    margin: 1rem;
    padding: 10px;
    width: 20vw;
}
.app-form-button{
    margin: .5rem;
    padding: 3px;
    width: 20vw;
}
.app-form-text p{
    position: absolute;
    left: 35rem;
    bottom: 0;
    z-index: 2;
    border: 2px solid black;
}
</style>
</head>

<body>
    <div class="container-body">
        <div class="container-main">
            <div class="container-left">
                <h2>PHP Calculator</h2>
            </div>
            <div class="container-right">
                <form method="POST">
                    <div class="app-form-group">
                        <input type="text" name="num1" class="input" placeholder="Enter Number">
                    </div>
                    <div class="app-form-group">
                        <input type="text" name="num2" class="input" placeholder="Enter Number">
                    </div>
                    <div class="select-style">
                        <select name="operation" id="select">
                            <option value="0">Select operation</option>
                            <option value="1">ADD</option>
                            <option value="2">SUBTRACT</option>
                            <option value="3">MULTIPLY</option>
                            <option value="4">DIVIDE</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="submit" class="app-form-button">
                    </div>
                </form>
            </div>
        </div>
        <div>
            <div class="app-form-text">
                <p>
                    <?php
                        if(isset($_POST['submit'])){
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            $operation = $_POST['operation'];

                            switch($operation){
                                case "0": echo "Please select valid operation";
                                case "1": $sum = $num1+$num2;
                                echo "The sum of two numbers is {$sum}";
                                break;
                                case "2": $diff = $num1-$num2; 
                                echo "The difference of two numbers is {$diff}";
                                break;
                                case "3": $mul = $num1*$num2;
                                echo "The product of two numbers is {$mul}";
                                break;
                                case "4": $div = $num1/$num2;   
                                echo "The division of two numbers is {$div}";
                                break;

                        }
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html> 