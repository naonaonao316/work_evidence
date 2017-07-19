<DOCTYPE html>
<html>
<head>
  <style = type="text/css">
  .arrow-up {
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 5px solid black;
  }

  .arrow-down {
    width: 0;
    height: 0;
    border-left: 20px solid transparent;
    border-right: 20px solid transparent;
    border-top: 20px solid #f00;
  }
  .arrow-left {
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-right:10px solid blue;
  }
  .arrow-right {
    width: 0;
    height: 0;
    border-top: 60px solid transparent;
    border-bottom: 60px solid transparent;
    border-left: 60px solid green;
  }
  .arrow {
    position: relative;
    display: inline-block;
    padding: 0 0 0 16px;
    color: #000;
    vertical-align: middle;
    text-decoration: none;
    font-size: 15px;
  }
  .arrow::before,
  .arrow::after {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    content: "";
    vertical-align: middle;
  }
  .sample1-1::before{
    left: 4px;
    width: 5px;
    height: 1px;
    background: #7a0;
  }
  .sample1-1::after{
    left: 4px;
    width: 4px;
    height: 4px;
    border-top: 1px solid #7a0;
    border-right: 1px solid #7a0;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
  }

  </style>
</head>
<body>
<div class="arrow-up"></div>
<div class="arrow-down"></div>
<div class="arrow-left"></div>
<div class="arrow-right"></div>
<br>
<div class="arrow sample1-1"></div>
</body>
</html>
