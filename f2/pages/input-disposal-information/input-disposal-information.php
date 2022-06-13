<div class="content-wrapper" style="min-height: 901px;">

  <div class="card-body">
    <?php

    echo '<table class="table table-bordered">';
    echo '<thead><tr>';
    echo '<td>SL #</td>';
    echo '<td>Mode of disposal</td>';
    echo '<td>Species Name</td>';
    echo '<td>Place of disposal</td>';
    echo '<td>Date of disposal</td>';
    echo '<td>Name of official of disposal</td>';

    echo '<tbody ><tr>';
    echo '<td>sl</td>';
    echo '<td>mode</td>';
    echo '<td>species</td>';
    echo '<td>place</td>';
    echo '<td>date0</td>';
    echo '<td>incharge</td>';

    echo '</tr>';

    echo '</tbody></table>';

    ?>

    <section class="content">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="innerPage-box">
              <h3 class="innerPage-head" id="dis-info">
                <?php echo trans("dis-info", 'en'); ?>
                <br>
                <?php echo trans("dis-info", 'bn'); ?>
              </h3>

              <table class="table table-bordered">
                <form class="inputs-p10 " id="commentForm" method="post" action="#input-sample-collection" enctype="multipart/form-data">
                  <thead>
                    <tr>
                      <th style="width: 10px" id="sl">
                        <?php echo trans("sl", 'en'); ?>
                        <br>
                        <?php echo trans("sl", 'bn'); ?>
                      </th>
                      <th id="mode">
                        <?php echo trans("mode", 'en'); ?>
                        <br>
                        <?php echo trans("mode", 'bn'); ?>
                      </th>
                      <th id="speciesname">
                        <?php echo trans("speciesname", 'en'); ?>
                        <br>
                        <?php echo trans("speciesname", 'bn'); ?>
                      </th>
                      <th id="pl-dis">
                        <?php echo trans("pl-dis", 'en'); ?>
                        <br>
                        <?php echo trans("pl-dis", 'bn'); ?>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="width: 10px"><input placeholder="" name="sl" id="sl" type="number" /></td>
                      <td><input placeholder="" name="mode" id="mode" /></td>
                      <td><input placeholder="" name="species_name" id="species_name" /></td>
                      <td><input placeholder="" name="place" id="place" /></td>
                    </tr>
                    <thead>
                      <tr>
                        <th id="dis-date">
                          <?php echo trans("dis-date", 'en'); ?>
                          <br>
                          <?php echo trans("dis-date", 'bn'); ?>
                        </th>
                        <th id="incharge">
                          <?php echo trans("incharge", 'en'); ?>
                          <br>
                          <?php echo trans("incharge", 'bn'); ?>
                        </th>
                      </tr>
                    </thead>
                  <tbody>
                    <tr>
                      <td><input placeholder="" class="form-control inner-textfield datepick" id="date0" name="date0" /> <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i></td>
                      <td><input placeholder="" name="incharge" id="incharge" /></td>
                      <!-- <td><a id="add_new_row" class="btn btn-primary"><i class="fa fa-plus"></i>+</a></td> -->
                      <td><button class="btn-primary"></i>Submit</button></td>
                    </tr>
                    <tr></tr>
                  </tbody>
                </form>
              </table>
            </div>
          </div>

        </div>
        <div>
          <a href="#input-witness-information " class="listinBtn pull-left"> <label id="pre">
              <?php echo trans("pre", 'en'); ?>

              <?php echo trans("pre", 'bn'); ?>
            </label></a>

          <a href="#action-input-disposal-information" class="listinBtn"> <label id="next">
              <?php echo trans("next", 'en'); ?>

              <?php echo trans("next", 'bn'); ?>
            </label></a>

        </div>
      </div>
    </section>
  </div>
  <div class="control-sidebar-bg"></div>