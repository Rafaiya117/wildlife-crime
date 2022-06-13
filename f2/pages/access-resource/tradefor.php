<?php global $trade_for_data; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Trade For List
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box listing-panel">
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Class</th>
                  <th>Description</th>
                </tr>
              </thead>
              <?php echo "<tbody>";

              for ($i = 1, $ilen = sizeof($trade_for_data); $i <= $ilen; $i++) {
                echo "<tr><td>" . ($trade_for_data[$i]['b']) . "</td>";
                echo "<td>" . ($trade_for_data[$i]['c']) . "</td>";
                echo "<td>" . ($trade_for_data[$i]['d']) . "</td></tr>";
              }
              echo "</tbody>";
              ?>
            </table>
          </div>
        </div>
      </div>
  </section>
</div>

<div class="control-sidebar-bg"></div>

</div>