<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <script src="js/vue.min.js"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/animate.min.css"> -->
    <script src="js/jquery.js"></script>
    <style>
          .loading {
              width: 200px;
              height: 8px;
              margin-top: 80px;
              border-radius: 5px;
              background-color: #fff;
              overflow: hidden;
              transition: 0.5s;
            }
            .loading .bar {
              background-color: #E55A54;
              width: 0%;
              height: 100%;
            }
    </style>
</head>
<body>
    <div class="loading">
        <div class="bar"></div>
    </div>

    <script> 
        var percent = 0;
        var timer = setInterval(function(){
          // $(".bar").css("width",percent+"%")
          document.querySelector(".bar").style.setProperty("width",percent+"%")
          percent+=1
          if (percent>100){
            // $(".pageLoading").addClass("complete")
        
            clearInterval(timer);
          }
        },15)
    </script>
</body>
</html>