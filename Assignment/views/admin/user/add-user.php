            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                            <?php
                                if(isset($_SESSION['message'])){
                                    switch($_SESSION['message'][0]){
                                        case 0:
                                        break;
                                        case 1:
                                            echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">Success</span>
                                            '.$_SESSION['message'][1].'
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>';
                                        break;
                                        case 2:
                                        break;
                                        case 3:
                                        break;
                                    }
                                    session_destroy();
                                }
                            ?>
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
                                            <h3 class="text-center title-2">ADD USER</h3>
                                        </div>
                                        <hr>
                                        <form action="index.php?ctrl=<?php echo $ctrl?>&act=insert" method="post">
                                            <div class="form-group">
                                              <label for="">Username:</label>
                                              <input type="text" name="username" id="" class="form-control" placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="">Password:</label>
                                              <input type="password" name="password" id="" class="form-control" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="">Full Name:</label>
                                              <input type="text" name="fullname" id="" class="form-control" placeholder="Full Name" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="">Email:</label>
                                              <input type="email" name="email" id="" class="form-control" placeholder="Email" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="">Phone Number:</label>
                                              <input type="phone" name="phone" id="" class="form-control" placeholder="Phone Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="created">Birthday:</label>
                                                <input type="date" id="birthday" name="birthday"
                                                    value=""  required>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span>Insert</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <a href="admin.php?ctrl=<?php echo $ctrl?>" class="btn btn-danger" >
                                <i class="fa fa-caret-left"></i> Back
                                </a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->