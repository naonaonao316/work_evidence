<DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <style type="text/css">
    table {
      /*table-layout: fixed;*/
      position: absolute;
      border: 0;
    }
    th, td {
      border-bottom: 1px solid #ddd;
      width: 25px;
      height: 30px;
      position: absolute;
    }
    .header1 {
      background-color: aquamarine;
      width: 79px;
    }
    .header2 {
      background-color: blueviolet;
      left: 83px;
      width: 79px;
    }
    .column1 {
    }
    .column2 {
      left: 27px;
    }
    .column3 {
      left: 54px;
    }
    .column4 {
      left: 81px;
    }
    .column5 {
      left: 108px;
    }
    .column6 {
      left: 135px;
    }
    .column7 {
      left: 162px;
    }
    .column8 {
      left: 189px;
    }
    #row2 {
      position: absolute;
      top: 33px;
    }
    #row3 {
      position: absolute;
      top: 66px;
    }
    #row4 {
      position: absolute;
      top: 99px;
    }
    #row5 {
      position: absolute;
      top: 132px;
    }
    #row6 {
      position: absolute;
      top: 165px;
    }
    #row7 {
      position: absolute;
      top: 198px;
    }
    #row8 {
      position: absolute;
      top: 231px;
    }
    #row9 {
      position: absolute;
      top: 264px;
    }
    #row10 {
      position: absolute;
      top: 297px;
    }
    #row11 {
      position: absolute;
      top: 330px;
    }
    #row12 {
      position: absolute;
      top: 363px;
    }
    @keyframes move1 {
      from {height: 0px;}
      to {height: 31px;}
    }
    @keyframes move2 {
      from {height: 0px;}
      to {height: 65px;}
    }
    @keyframes move3 {
      from {height: 0px;}
      to {height: 98px;}
    }
    </style>
  </head>
  <body>
    <center>
      <div class="outside" style="position: absolute; left: 400px; width: 100px; height: 150px; overflow: scroll;">
        <table class="target_table">
          <tr id="row1">
            <td class="header1">RoomA</th>
            <td class="header2">RoomB</th>
          </tr>
          <tr id="row2">
            <td class="column1"><div class="class1 class2 class3" style="background-color: blue; animation: move2 1s; animation-fill-mode: forwards;">1-1</div></td>
            <td class="column2"><div class="class1 class2 class3" style="background-color: pink; animation: move3 1s; animation-fill-mode: forwards;">1-2</div></td>
            <td class="column3"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-3</div></td>
            <td class="column4"><div class="class1 class2 class3">1-4</div></td>
            <td class="column5"><div class="class1 class2 class3" style="background-color: blue; animation: move2 1s; animation-fill-mode: forwards;">1-5</div></td>
            <td class="column6"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-6</div></td>
            <td class="column7"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-7</div></td>
            <td class="column8"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-8</div></td>
          </tr>
          <tr id="row3">
            <td class="column1"><div class="class1 class2 class3">2-1</div></td>
            <td class="column2"><div class="class1 class2 class3">2-2</div></td>
            <td class="column3"><div class="class1 class2 class3">2-3</div></td>
            <td class="column4"><div class="class1 class2 class3" style="background-color: pink; animation: move3 1s; animation-fill-mode: forwards;">2-4</div></td>
            <td class="column5"><div class="class1 class2 class3">2-5</div></td>
            <td class="column6"><div class="class1 class2 class3">2-6</div></td>
            <td class="column7"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-7</div></td>
            <td class="column8"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-8</div></td>
          </tr>
          <tr id="row4">
            <td class="column1"><div class="class1 class2 class3">3-1</div></td>
            <td class="column2"><div class="class1 class2 class3">3-2</div></td>
            <td class="column3"><div class="class1 class2 class3" style="background-color: blue; animation: move2 1s; animation-fill-mode: forwards;">3-3</div></td>
            <td class="column4"><div class="class1 class2 class3">3-4</div></td>
            <td class="column5"><div class="class1 class2 class3">3-5</div></td>
            <td class="column6"><div class="class1 class2 class3">3-6</div></td>
            <td class="column7"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-7</div></td>
            <td class="column8"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-8</div></td>
          </tr>
          <tr id="row5">
            <td class="column1"><div class="class1 class2 class3">4-1</div></td>
            <td class="column2"><div class="class1 class2 class3">4-2</div></td>
            <td class="column3"><div class="class1 class2 class3">4-3</div></td>
            <td class="column4"><div class="class1 class2 class3">4-4</div></td>
            <td class="column5"><div class="class1 class2 class3">4-5</div></td>
            <td class="column6"><div class="class1 class2 class3">4-6</div></td>
            <td class="column7"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-7</div></td>
            <td class="column8"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-8</div></td>
          </tr>
          <tr id="row6">
            <td class="column1"><div class="class1 class2 class3">5-1</div></td>
            <td class="column2"><div class="class1 class2 class3">5-2</div></td>
            <td class="column3"><div class="class1 class2 class3">5-3</div></td>
            <td class="column4"><div class="class1 class2 class3">5-4</div></td>
            <td class="column5"><div class="class1 class2 class3">5-5</div></td>
            <td class="column6"><div class="class1 class2 class3">5-6</div></td>
            <td class="column7"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-7</div></td>
            <td class="column8"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-8</div></td>
          </tr>
          <tr id="row7">
            <td class="column1"><div class="class1 class2 class3">6-1</div></td>
            <td class="column2"><div class="class1 class2 class3">6-2</div></td>
            <td class="column3"><div class="class1 class2 class3">6-3</div></td>
            <td class="column4"><div class="class1 class2 class3">6-4</div></td>
            <td class="column5"><div class="class1 class2 class3">6-5</div></td>
            <td class="column6"><div class="class1 class2 class3">6-6</div></td>
            <td class="column7"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-7</div></td>
            <td class="column8"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-8</div></td>
          </tr>
          <tr id="row8">
            <td class="column1"><div class="class1 class2 class3">7-1</div></td>
            <td class="column2"><div class="class1 class2 class3">7-2</div></td>
            <td class="column3"><div class="class1 class2 class3">7-3</div></td>
            <td class="column4"><div class="class1 class2 class3">7-4</div></td>
            <td class="column5"><div class="class1 class2 class3">7-5</div></td>
            <td class="column6"><div class="class1 class2 class3">7-6</div></td>
            <td class="column7"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-7</div></td>
            <td class="column8"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-8</div></td>
          </tr>
          <tr id="row9">
            <td class="column1"><div class="class1 class2 class3">8-1</div></td>
            <td class="column2"><div class="class1 class2 class3">8-2</div></td>
            <td class="column3"><div class="class1 class2 class3">8-3</div></td>
            <td class="column4"><div class="class1 class2 class3">8-4</div></td>
            <td class="column5"><div class="class1 class2 class3">8-5</div></td>
            <td class="column6"><div class="class1 class2 class3">8-6</div></td>
            <td class="column7"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-7</div></td>
            <td class="column8"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-8</div></td>
          </tr>
          <tr id="row10">
            <td class="column1"><div class="class1 class2 class3">9-1</div></td>
            <td class="column2"><div class="class1 class2 class3">9-2</div></td>
            <td class="column3"><div class="class1 class2 class3">9-3</div></td>
            <td class="column4"><div class="class1 class2 class3">9-4</div></td>
            <td class="column5"><div class="class1 class2 class3">9-5</div></td>
            <td class="column6"><div class="class1 class2 class3">9-6</div></td>
            <td class="column7"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-7</div></td>
            <td class="column8"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-8</div></td>
          </tr>
          <tr id="row11">
            <td class="column1"><div class="class1 class2 class3">10-1</div></td>
            <td class="column2"><div class="class1 class2 class3">10-2</div></td>
            <td class="column3"><div class="class1 class2 class3">10-3</div></td>
            <td class="column4"><div class="class1 class2 class3">10-4</div></td>
            <td class="column5"><div class="class1 class2 class3">10-5</div></td>
            <td class="column6"><div class="class1 class2 class3">10-6</div></td>
            <td class="column7"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-7</div></td>
            <td class="column8"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-8</div></td>
          </tr>
          <tr id="row12">
            <td class="column1"><div class="class1 class2 class3">11-1</div></td>
            <td class="column2"><div class="class1 class2 class3">11-2</div></td>
            <td class="column3"><div class="class1 class2 class3">11-3</div></td>
            <td class="column4"><div class="class1 class2 class3">11-4</div></td>
            <td class="column5"><div class="class1 class2 class3">11-5</div></td>
            <td class="column6"><div class="class1 class2 class3">11-6</div></td>
            <td class="column7"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-7</div></td>
            <td class="column8"><div class="class1 class2 class3" style="background-color: darkturquoise; animation: move1 1s; animation-fill-mode: forwards;">1-8</div></td>
          </tr>
        </table>
      </div>
    </center>
    <br>
    <footer>
    </footer>
  </body>
</html>
