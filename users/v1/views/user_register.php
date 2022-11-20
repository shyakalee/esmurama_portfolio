
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>User registration</h5>
                                <span>Add class of <code>.form-control</code> with
                                    <code>&lt;input&gt;</code> tag</span>
                            </div>

                            <div class="card-block">
                                <h4 class="sub-title">Basic Information</h4>
                                <form method="POST" action="<?php echo $web_root ?>views/controller.php?action=insert">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">First name</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="firstname" class="form-control form-control-round" placeholder="Please fill firstname information">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Last name</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="lastname" class="form-control form-control-round" placeholder="Please fill lastname information">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="username" class="form-control form-control-round" placeholder="Please fill username">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Access Group</label>
                                        <div class="col-sm-10">                                   

                                            <select name="group_val"  class="form-control">  
                                            <?php
                                           $string="SELECT * FROM tbl_groups";
                                           $mydb->setQuery($string);
                                                $cur = $mydb->loadResultList();
                                                foreach ($cur as $result) { 
                                           ?>                                       
                                                <option value="<?php echo $result->id ?>"><?php echo $result->title ?></option> 
                                                <?php } ?>                                           
                                            </select>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password"  name="password" class="form-control form-control-round" placeholder="****************">
                                        </div>
                                    </div>
                                

                                    <div class="row">
                                        <label class="col-sm-8"></label>
                                        <div class="col-sm-8">
                                            <button name="send_datas" type="submit" class="btn btn-primary btn-sm m-b-0">Save datas</button>
                                            <button type="button" class="btn btn-primary btn-sm m-b-0">Cancel</button>
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