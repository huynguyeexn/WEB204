<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
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
                    <h2 class="title-5 m-b-35">Users</h2>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <a href="admin.php?ctrl=<?php echo $ctrl?>&act=add" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>add user
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-data3 table-earning">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>UserName</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Birthday</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                                foreach($users as $user){
                                                    echo '
                                                    <tr>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <a href="admin.php?ctrl='.$ctrl.'&act=edit&id='.$user['id'].'"  class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </a>
                                                                <button onclick="deleteRow(\''.$user['username'].'\','.$user['id'].')" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td>'.$user['username'].'</td>
                                                        <td>'.$user['fullname'].'</td>
                                                        <td>'.$user['email'].'</td>
                                                        <td>'.$user['phone'].'</td>
                                                        <td>'.$user['birthday'].'</td>
                                                        <td>'.$user['created'].'</td>
                                                    </tr>';
                                                }
                                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="user-data__footer">
                                    <button class="au-btn au-btn-load">load more</button>
                                </div> -->
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <a href="admin.php?ctrl=tag&act=add" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>add user
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function deleteRow(name,id){
    swal({
        icon: "warning",
        title: "Bạn có muốn xoá tài khoản \""+name+"\" không!",
        text: "Tác vụ này sẽ không thể hoàn tác",
        dangerMode: true,
        buttons: {
            cancel: true,
            confirm: true,
        },
        closeOnClickOutside: false,
        closeOnEsc: false,
    }).then((willDelete) => {
        if (willDelete) {
            var link = './admin.php?ctrl=<?php echo $ctrl;?>&act=delete&id='+id;
            location.href = link;
        }
    });
}
</script>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->