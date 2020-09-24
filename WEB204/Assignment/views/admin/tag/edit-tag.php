            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <a href="admin.php?ctrl=<?php echo $ctrl?>" class="btn btn-danger" >
                                        <i class="fa fa-caret-left"></i> Back
                                        </a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">UPDATE TAG GAME GENRE</h3>
                                        </div>
                                        <hr>
                                        <form action="index.php?ctrl=tag&act=insert" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                              <label for="">Tag Name</label>
                                              <input type="text" name="" id="" value="<?php echo $tag['name']; ?>" class="form-control" placeholder="" aria-describedby="helpId">
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Update</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <a href="admin.php?ctrl=tag" class="btn btn-danger" >
                                <i class="fa fa-caret-left"></i> Back
                                </a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->