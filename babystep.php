<?php
  
  if (isset($_GET["getdata"])) {
    $data = Array(
      "testing"=> Array(1=>"2", 3=>"4"),
      "example"=> Array("is this thing on?","Hello world!"),
      "random"=>rand(),
      "time"=>time()
    );
    if (isset($_POST["data"])) {
      //if the param data was sent as POST, include it in the data
      $data["post"] = $_POST["data"];
    }
    echo json_encode($data,JSON_PRETTY_PRINT); //makes it easier for humans to read, but makes the data transfer larger (use when testing)
    echo json_encode($data);  //use in production
    //$siteoptions["nolayout"] = true; //use this on the actual website to remove the styling
  }
  ?>
  <script>
     let btn = document.createElement('button');
     
     btn.textContent = 'Click me';
     document.appendChild(btn);
  </script>