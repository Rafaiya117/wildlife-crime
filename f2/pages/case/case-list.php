<div class="content-wrapper" style="min-height: 901px;">
    <section class="content">
        <div class="box-body">
            <div class="row" style="height:600px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="innerPage-box">
                                <h3 class="innerPage-head" id="list">
                                    <?php echo trans("list", 'en'); ?>
                                    <br>
                                    <?php echo trans("list", 'bn'); ?>
                                </h3>
                                <table class="table table-bordered">
                                    <form action="" id="commentForm" class="inputs-p10 " method="post">
                                        <div class="col-sm-6">
                                            <div id="example2_filter" class="dataTables_filter">
                                                <label id="search"><?php echo trans("search", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("search", 'bn'); ?>:<input type="search" class="form-control inner-textfield" placeholder="Search by case no." aria-controls="example2">
                                                    <br>
                                                </label>

                                            </div>
                                        </div>

                                        <thead>
                                            <tr>
                                                <th style="width: 10px" id="casno"><?php echo trans("casno", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("casno", 'bn'); ?>
                                                </th>
                                                <th id="type"><?php echo trans("type", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("type", 'bn'); ?>
                                                </th>
                                                <th id="law"><?php echo trans("law", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("law", 'bn'); ?>
                                                </th>
                                                <th id="offname"><?php echo trans("offname", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("offname", 'bn'); ?>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td onclick="location.href='#case-details'">001111</td>
                                                <td onclick="location.href='#case-details'">Trade</td>
                                                <td>52/1A</td>
                                                <td onclick="location.href='#offender-details'">Sharma</td>
                                                <!-- <td><a href="./details.php"  class="btn btn-primary">Details</a></td> -->
                                            </tr>
                                            <tr>
                                                <td onclick="location.href='#offender-details'">001112</td>
                                                <td onclick="location.href='#case-details'">Procession</td>
                                                <td>41/3B,51/1AS</td>
                                                <td onclick="location.href='#offender-details'">Singh</td>
                                                <!-- <td><a href="./details.php"  class="btn btn-primary">Details</a></td> -->
                                            </tr>
                                        </tbody>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>
    </section>
</div>
<div class="control-sidebar-bg"></div>