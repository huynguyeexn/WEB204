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
                    <h2 class="title-5 m-b-35">Orders</h2>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <a href="admin.php?ctrl=order&act=add"
                                class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>add order
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive table--no-card m-b-30">

                        <table class="table table-borderless table-data3 table-earning">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                                foreach($orders as $order){
                                                    echo '
                                                    <tr>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <a href="admin.php?ctrl=order&act=edit&id='.$order['id'].'"  class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </a>
                                                                <button onclick="deleteRow(\''.trim(getUserById($order['user_id'])['username']).'\','.$order['id'].')" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td>'.getUserById($order['user_id'])['username'].'</td>
                                                        <td>
                                                            ';
                                                             switch($order['status']){
                                                                case 0:
                                                                    echo '<span class="badge badge-primary">New</span>';
                                                                break;
                                                                case 1:
                                                                    echo '<span class="badge badge-success">Complete</span>';
                                                                break;
                                                                case 2:
                                                                    echo '<span class="badge badge-secondary">Closed</span>';
                                                                break;
                                                                case 3:
                                                                    echo '<span class="badge badge-danger">Canceled</span>';
                                                                break;
                                                            }
                                                        echo '
                                                        </td>
                                                        <td>'.$order['created'].'</td>
                                                        <td>'.number_format((int)orderAmount($order['id'])[0][0].'000', 0, '', ',').' VNĐ</td>
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
                                <i class="zmdi zmdi-plus"></i>add order
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
        title: "Bạn có muốn xoá đơn hàng của \""+name+"\" không!",
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
            var link = './admin.php?ctrl=order&act=delete&id='+id;
            //console.log(link);
            location.href = link;
        }
    });
}
</script>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->