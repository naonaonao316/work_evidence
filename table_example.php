<DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <style type="text/css">
    table {
      /*table-layout: fixed;*/
      position: absolute;
      left: 400px;
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
  <?php require_once("lib/idiorm.php") ?>
  <?php
    ORM::configure('mysql:host=localhost;dbname=test_database');
    ORM::configure('username', 'root');
    ORM::configure('password', 'jiji4649');

    $base_width = 25;
    $rooms = ORM::for_table('rooms')->find_many();
    foreach ($rooms as $room) {
      echo $room->name;
      echo "<br>";
      $event_counts = ORM::for_table('events')
                      ->where('room_id', $room->id)
                      ->count();
      echo $event_counts;
      echo "<br>";
      $width = ($base_width * $event_counts) + (2 * $event_counts);
      echo "width: $width";
      echo "<br>";
    }
  ?>
    <header>
    </header>
    <center>
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
        </tr>
        <tr id="row3">
          <td class="column1"><div class="class1 class2 class3">2-1</div></td>
          <td class="column2"><div class="class1 class2 class3">2-2</div></td>
          <td class="column3"><div class="class1 class2 class3">2-3</div></td>
          <td class="column4"><div class="class1 class2 class3" style="background-color: pink; animation: move3 1s; animation-fill-mode: forwards;">2-4</div></td>
          <td class="column5"><div class="class1 class2 class3">2-5</div></td>
          <td class="column6"><div class="class1 class2 class3">2-6</div></td>
        </tr>
        <tr id="row4">
          <td class="column1"><div class="class1 class2 class3">3-1</div></td>
          <td class="column2"><div class="class1 class2 class3">3-2</div></td>
          <td class="column3"><div class="class1 class2 class3" style="background-color: blue; animation: move2 1s; animation-fill-mode: forwards;">3-3</div></td>
          <td class="column4"><div class="class1 class2 class3">3-4</div></td>
          <td class="column5"><div class="class1 class2 class3">3-5</div></td>
          <td class="column6"><div class="class1 class2 class3">3-6</div></td>
        </tr>
        <tr id="row5">
          <td class="column1"><div class="class1 class2 class3">4-1</div></td>
          <td class="column2"><div class="class1 class2 class3">4-2</div></td>
          <td class="column3"><div class="class1 class2 class3">4-3</div></td>
          <td class="column4"><div class="class1 class2 class3">4-4</div></td>
          <td class="column5"><div class="class1 class2 class3">4-5</div></td>
          <td class="column6"><div class="class1 class2 class3">4-6</div></td>
          <td class="column7"><div class="class1 class2 class3">4-7</div></td>
          <td class="column8"><div class="class1 class2 class3">4-8</div></td>
        </tr>
      </table>
    </center>
    <br>
    <div class="test"></div>
    <footer>
    </footer>
  </body>
</html>
