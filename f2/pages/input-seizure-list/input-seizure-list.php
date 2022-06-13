<div class="content-wrapper" style="min-height: 901px;">

  <div class="card-body">
    <?php

    echo '<table class="table table-bordered">';
    echo '<thead><tr>';
    echo '<td>SL #</td>';
    echo '<td>Name</td>';
    echo '<td>Number</td>';
    echo '<td>Weight</td>';
    echo '<td>Value</td>';
    echo '<td>Length</td>';
    echo '<td>Width</td>';
    echo '<td>Height</td>';
    echo '</tr></thead>';

    echo '<tbody><tr>';
    echo '<td>sl</td>';
    echo '<td>name</td>';
    echo '<td>number</td>';
    echo '<td>weight</td>';
    echo '<td>value</td>';
    echo '<td>length</td>';
    echo '<td>width</td>';
    echo '<td>height</td>';
    echo '</tr>';

    echo '</tbody></table>';

    ?>
  </div>

  <section class="content">
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
          <div class="innerPage-box">
            <h3 class="innerPage-head" id="seiz">
              <?php echo trans("seiz", 'en'); ?>
              <br>
              <?php echo trans("seiz", 'bn'); ?>
            </h3>
            <table class="table table-bordered">
              <form action="" id="commentForm" class="inputs-p10 " method="post">
                <thead>
                  <tr>
                    <th style="width: 10px" id="sl"><?php echo trans("sl", 'en'); ?>
                      <br>
                      <?php echo trans("sl", 'bn'); ?>
                    </th>
                    <th id="spname"><?php echo trans("spname", 'en'); ?>
                      <br>
                      <?php echo trans("spname", 'bn'); ?>
                    </th>
                    <th id="num"><?php echo trans("num", 'en'); ?>
                      <br>
                      <?php echo trans("num", 'bn'); ?>
                    </th>
                    <th id="weight"><?php echo trans("weight", 'en'); ?>
                      <br>
                      <?php echo trans("weight", 'bn'); ?>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 10px"><input placeholder="" name="sl" /></td>
                    <td><input placeholder="" name="name" /></td>
                    <td><input placeholder="" name="number" /></td>
                    <td><input placeholder="" name="weight" /></td>
                  </tr>
                  <thead>
                    <tr>
                      <th id="value"><?php echo trans("value", 'en'); ?>
                        <br>
                        <?php echo trans("value", 'bn'); ?>
                      </th>
                      <th id="length"><?php echo trans("length", 'en'); ?>
                        <br>
                        <?php echo trans("length", 'bn'); ?>
                      </th>
                      <th id="width"><?php echo trans("width", 'en'); ?>
                        <br>
                        <?php echo trans("width", 'bn'); ?>
                      </th>
                      <th id="height"><?php echo trans("height", 'en'); ?>
                        <br>
                        <?php echo trans("height", 'bn'); ?>
                      </th>
                    </tr>
                  </thead>
                <tbody>
                  <tr>
                    <td><input placeholder="" name="value" /></td>
                    <td><input placeholder="" name="length" /></td>
                    <td><input placeholder="" name="width" /></td>
                    <td><input placeholder="" name="height" /></td>
                    <td><a href="javascript:void(0);" class="btn btn-primary"><i class="fas fa-plus"></i></a></td>
                    <td><button class="btn-primary"></i>Submit</button></td>
                  </tr>
                </tbody>
              </form>
            </table>
          </div>
        </div>
      </div>
      <div>
        <a href="" class="listinBtn pull-left"> <label id="pre">
            <?php echo trans("pre", 'en'); ?>
            <?php echo trans("pre", 'bn'); ?>
          </label></a>
        <a href="#action-input-seizure-list" class="listinBtn" value="Next(পরবর্তী)" name="submit" title="Next">Next(পরবর্তী)</a>
      </div>
    </div>
</div>
<div class="control-sidebar-bg"></div>