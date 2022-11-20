<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Group</h5>
                                <span>Add class of <code>.form-control</code> with
                                    <code>&lt;input&gt;</code> tag</span>
                            </div>
                            <div class="card-block">
                                <h4 class="sub-title">Group Information</h4>
                                <form method="POST" action="<?php echo $web_root ?>views/controller.php?action=save_group">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="group_title" class="form-control form-control-round" placeholder="Please fill group information">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea rows="5" name="group_desc" cols="5" class="form-control" placeholder="Group description"></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-8"></label>
                                        <div class="col-sm-8">
                                            <button type="submit" name="save_group" class="btn btn-primary btn-sm m-b-0">Save Group</button>
                                            <button type="button" class="btn btn-primary btn-sm m-b-0">Back</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="styleSelector">
    </div>
</div>