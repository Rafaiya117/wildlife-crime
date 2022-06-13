<div class="content-wrapper" style="min-height: 901px;">
    <section class="content">
        <div class="box-body">
            <div class="row" style="height:600px;">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <h3 class="innerPage-head">
                            <?php echo trans("head", 'en'); ?>
                            <br>
                            <?php echo trans("head", 'bn'); ?>
                        </h3>
                        <form class="inputs-p10 " id="commentForm" method="post" action="#input-rescue-information" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-md-13" id="inner-label">
                                    <label class="inner-label">
                                        <?php echo trans("innerlabel", 'en'); ?>
                                        <br>
                                        <?php echo trans("innerlabel", 'bn'); ?>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-9">
                                    <p><input type='text' id='name' name="name" placeholder="What are you looking for?(আপনি কি খুজছেন?)" class="inputs-p10  form-control inner-textfield auto" required></p>
                                </div>
                            </div>
                            <div class="col-xs-6 text-center p-0">
                                <a href="#action-yes-identify-species" value="Search(অনুসন্ধান করুন)" class="listinBtn">Search(অনুসন্ধান করুন)</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</div>
</section>
</div>


<div class="control-sidebar-bg"></div>
</div>
<?php
