
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
                                        <a href="admin.php?ctrl=<?php echo $ctrl?>" class="btn btn-danger">
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
                                        <form
                                            action="admin.php?ctrl=<?php echo $ctrl;?>&act=insert"
                                            method="post">
                                            <div class="form-group">
                                                <label for="user_id">User</label>
                                                <select class="form-control" name="user_id" id="user_id" required>
                                                    <option  value=""   disabled selected hidden>Select user order</option>
                                                    <?php
                                                        foreach($users as $user){
                                                            echo '<option value="'.$user['id'].'">'.$user['username'].'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select class="form-control" name="status" id="" required>
                                                    <option value="" disabled selected hidden>Select order status</option>
                                                    <?php
                                                        echo '
                                                        <option value="0">New</option>
                                                        <option value="1">Complete</option>
                                                        <option value="2">Closed</option>
                                                        <option value="3">Canceled</option>
                                                        ';
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="created">Datetime created:</label>
                                                <input type="datetime-local" id="created" name="created"
                                                    value="<?php echo str_replace(' ', 'T', $order['created']); ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" value="[]" name="game_id" id="game_id" hidden>
                                                <input type="text" value="[]" name="game_quantity" id="game_quantity" hidden>
                                                <div class="table-responsive table--no-card m-b-30">
                                                    <table class="table table-borderless table-data3 table-earning"
                                                        id="order-game">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Game</th>
                                                                <th>Price</th>
                                                                <th>Quantity</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="form-group">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModalCenter">
                                                        Add game
                                                    </button>
                                                </div>
                                                <div>
                                                    <button id="submit" type="submit"
                                                        class="btn btn-lg btn-info btn-block">
                                                        <span id="payment-button-amount">Update</span>
                                                    </button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->

            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">
                                Add game
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">

                                    <div class="table-responsive table--no-card m-b-30">
                                        <table class="table table-borderless table-data3 table-earning">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Game</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($games as $game){
                                                        echo '
                                                        <tr id="addGameTable'.$game['id'].'">
                                                            <td>
                                                                <div class="table-data-feature">
                                                                    <a onclick="addGame('.$game['id'].',\''.$game['name'].'\',\''.$game['price'].'\');remove('.$game['id'].')"
                                                                        class="item" data-toggle="tooltip" data-placement="top">
                                                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>'.$game['name'].'</td>
                                                            <td>'.$game['price'].' VNĐ</td>
                                                        </tr>
                                                        ';
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
function addGame(id, name, price) {

    var table = document.getElementById("order-game").getElementsByTagName('tbody')[0];


    var row = table.insertRow();
    row.innerHTML = '<input type="number" value="'+id+'" hidden>';
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
    var cell3 = row.insertCell(3);
    var cell4 = row.insertCell(4);

    cell0.innerHTML =
        '<div class="table-data-feature"><input type="number" value="'+id+'" hidden><button onclick="deleteGame(this)" type="button"class="item"><i class="zmdi zmdi-delete"></i></button></div>';
    cell1.innerHTML = name;
    cell2.innerHTML = price + " VNĐ";
    cell3.innerHTML = '<input type="number" value="'+id+'" hidden>x<input type="number" name="" min="1" value="1" onchange="updateAmount(this)" required>';
    cell4.innerHTML = price + " VNĐ";

    var gameId = JSON.parse(document.getElementById("game_id").value);
    gameId.push(id);

    console.log(gameId);
    document.getElementById("game_id").value = JSON.stringify(gameId);

    console.log(document.getElementById("game_id").value);

    var gameQuantity = JSON.parse(document.getElementById("game_quantity").value);
    gameQuantity.push(1);
    document.getElementById("game_quantity").value = JSON.stringify(gameQuantity);

}

function remove(id) {
    document.getElementById("addGameTable"+id).hidden = true;
}

function deleteGame(element) {
    element.parentNode.parentNode.parentNode.remove();

    var id = element.previousElementSibling.value;
    var gameId = JSON.parse(document.getElementById("game_id").value);

    var index = gameId.indexOf(parseInt(id));

    var gameQuantity = JSON.parse(document.getElementById("game_quantity").value);
    gameQuantity.splice(index, 1);
    gameId.splice(index, 1);

    document.getElementById("game_id").value = JSON.stringify(gameId);
    document.getElementById("game_quantity").value = JSON.stringify(gameQuantity);
    
    document.getElementById("addGameTable"+id).hidden = false;
}

function updateAmount(element) {
    var price = parseInt(element.parentNode.previousElementSibling.innerText.replace(' VNĐ', '').replace('.', ''));
    var quantity = element.value;
    var amountRow = element.parentNode.nextElementSibling;
    var x = price * quantity;

    x = x.toLocaleString('en-US', {
        style: 'currency',
        currency: 'VND'
    }).replace('₫', '').replaceAll(',', '.');

    amountRow.innerText = x+' VNĐ';

    var id = element.previousElementSibling.value;
    var gameId = JSON.parse(document.getElementById("game_id").value);

    var index = gameId.indexOf(parseInt(id));

    var gameQuantity = JSON.parse(document.getElementById("game_quantity").value);
    gameQuantity[index] = parseInt(quantity);
    document.getElementById("game_quantity").value = JSON.stringify(gameQuantity);
}
            </script>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->