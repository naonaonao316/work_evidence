<DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <style type="text/css">
    th, td {
      border-bottom: 1px solid #ddd;
     }
     .column1 {
       background-color: red;
       transition: height 2s;
     }
     .column1:hover {
       height: 100px;
     }
     .column2 {
       background-color: blue;
     }
     .column3 {
       background-color: green;
     }
     div.test {
       width: 100px;
       height: 100px;
       background: red;
       -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
       transition: width 2s;
     }
     div:hover {
       width: 300px;
     }
    </style>
  </head>
  <body>
    <header>
    </header>
    <table class="target_table">
      <tr id="header">
        <th colspan="2">C23</th>
      </tr>
      <tr id="row1">
        <td class="column1" ><span class="content">1-1</span></td>
        <td class="column2" rowspan="3"><span class="column2 content">1-2</span></td>
        <td class="column3" rowspan="1"><span class="column3a content">1-3</span></td>
      </tr>
      <tr id="row2">
        <td class="column1">2-1</td>
        <td class="column2">2-2</td>
      </tr>
      <tr id="row3">
        <td class="column1">3-1</td>
        <td class="column2">3-2</td>
        <td class="column3">3-3</td>
      </tr>
      <tr id="row4">
        <td class="column1">4-1</td>
        <td class="column2">4-2</td>
        <td class="column3">4-3</td>
      </tr>
    </table>
    <br>
    <div class="test"></div>
    <footer>
    </footer>
  </body>
</html>
