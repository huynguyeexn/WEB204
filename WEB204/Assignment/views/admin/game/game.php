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
                    <h2 class="title-5 m-b-35">games</h2>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <a href="admin.php?ctrl=<?php echo $ctrl?>&act=add" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>add game
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-data3 table-earning">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Images</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Tags</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($games as $game){

                                        $images = explode(',',str_replace('"','',str_replace(']','',str_replace('[','',$game["images"]))));
                                        $tags = explode(',',str_replace('"','',str_replace(']','',str_replace('[','',$game["tag_id"]))));

                                        foreach($tags as $tag){

                                        }


                                        echo '
                                        <tr>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a href="admin.php?ctrl='.$ctrl.'&act=edit&id='.$game['id'].'"  class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    <button onclick="deleteRow(\''.$game['name'].'\','.$game['id'].')" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td><img src="assets/images/thumb/'.$game['id'].'/square/'.$images[0].'" alt="" class="game-thumbnail-sm"></td>
                                            <td>'.$game['name'].'</td>
                                            <td>'.$game['price'].'</td>
                                            <td>';
                                            foreach($tags as $tag){
                                                echo '<a href="" class="badge badge-primary mx-2">'.getTagById($tag)['name'].'</a>';
                                            }
                                            echo '</td>
                                        </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="game-data__footer">
                                    <button class="au-btn au-btn-load">load more</button>
                                </div> -->
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <a href="admin.php?ctrl=tag&act=add" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>add game
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