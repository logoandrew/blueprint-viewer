<?php
?>


<div id="menu">
  <div class="dropdown">
    <select name="quickview" id="dropdown-select">

      <option disabled value="">Select...</option>
      <option disabled value="">---</option>


      <?php
      $config = require '../../config_EDIT.php';
      $keys = array_keys($config);

      $dir = basename(dirname($_SERVER['PHP_SELF'], 1));
      $activePage = basename($_SERVER['PHP_SELF']);
      $url = $dir . "/" . $activePage;

      function actv($x)
      {
        global $url;
        if ($url == $x)
          return 'selected="selected"';
      }


      for ($b = 1; $b < count($config); $b++) {
        echo '<option disabled value=""></option>';
        if ($config[$keys[$b]]["brand"] != false) {
          echo '<option disabled value="">' . $config[$keys[$b]]["brand"] . '</option>';
        };
        if ($config[$keys[$b]]["palette"] != false) {
          echo '<option disabled value="">' . $config[$keys[$b]]["palette"] . '</option>';
        };
        for ($p = 1; $p <= $config[$keys[$b]]["num_pages"]; $p++) {
          $checkurl = $config[$keys[$b]]["blueprint_folder"] . "/page" . $p . ".php";
          echo '<option ' . actv($checkurl) . ' value="../' . $checkurl . '">'
            . (array_key_exists($p, $config[$keys[$b]]["page_name_override"]) ?
              $config[$keys[$b]]["page_name_override"][$p] : $config[$keys[0]][$p - 1]) .
            '</option>';
        };
        if ($config[$keys[$b]]["google_link"] != false) {
          echo '<option value="' . $config[$keys[$b]]["google_link"] . '">Link to Google Sheet</option>';
        };
      }
      ?>


    </select>
  </div>
</div>