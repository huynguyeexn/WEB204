            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <?php
                                if (isset($_SESSION['message'])) {
                                    switch ($_SESSION['message'][0]) {
                                        case 0:
                                            break;
                                        case 1:
                                            echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                            <span class="badge badge-pill badge-success">Success</span>
                                            ' . $_SESSION['message'][1] . '
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
                                        <a href="admin.php?ctrl=<?php echo $ctrl ?>" class="btn btn-danger">
                                            <i class="fa fa-caret-left"></i> Back
                                        </a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">ADD NEW GAME</h3>
                                        </div>
                                        <hr>
                                        <form action="admin.php?ctrl=<?php echo $ctrl; ?>&act=insert" method="post"
                                            id="addGame">
                                            <div class="row">

                                                <div class="form-group col-12">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" id="" class="form-control">
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="price">Price</label>
                                                    <input type="number" min="1" name="price" id=""
                                                        class="form-control">
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="releaseDate">Release Date:</label>
                                                    <input type="date" id="releaseDate" name="releaseDate">
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="destination">Destination:</label>
                                                    <textarea name="destination" id="" cols="30" rows="10"
                                                        class="form-control"></textarea>
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="user_id">Publisher</label>
                                                    <select class="form-control" name="publisher_id" id="" required>
                                                        <option value="" disabled selected hidden>Select publisher
                                                        </option>
                                                        <?php
                                                        foreach($publishers as $publisher){
                                                            echo '<option value="'.$publisher['id'].'">'.$publisher['name'].'</option>';
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <input type="text" value="[]" name="tag_id" id="tag_id" hidden>
                                                        <div class="table-responsive table--no-card m-b-30">
                                                            <table
                                                                class="table table-borderless table-data3 table-earning"
                                                                id="tags">
                                                                <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>Tags</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="form-group">
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#tagsModal">
                                                                Add tag
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <input type="text" value="[]" name="platforms_id"
                                                            id="platforms_id" hidden>
                                                        <div class="table-responsive table--no-card m-b-30">
                                                            <table
                                                                class="table table-borderless table-data3 table-earning"
                                                                id="platforms">
                                                                <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>Platforms</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="form-group">
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#platformsModal">
                                                                Add Platforms
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="form-group">
                                            <label for="">In-Game images:</label>

                                            <form action="file-upload.php?act=inGameImages"
                                                class="dropzone files-container" id="inGameImages">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>
                                            </form>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cover Game images:</label>

                                            <form action="file-upload.php?act=coverGameImages"
                                                class="dropzone files-container" id="coverGameImages">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>
                                            </form>
                                        </div>
                                        <div class="form-group">

                                            <button id="submit" type="submit" class="btn btn-lg btn-info btn-block"
                                                form="addGame">
                                                <span>Add game</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <a href="admin.php?ctrl=<?php echo $ctrl ?>" class="btn btn-danger">
                                    <i class="fa fa-caret-left"></i> Back
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bd-example-modal-lg" id="platformsModal" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">
                                Add platforms
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
                                                    <th>Platforms</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($platforms as $platform) {
                                                    echo '
                                                        <tr id="addPlatformTable' . $platform['id'] . '">
                                                            <td>
                                                                <div class="table-data-feature">
                                                                    <a onclick="addPlatform(' . $platform['id'] . ',\'' . $platform['name'] . '\');removePlatform(' . $platform['id'] . ')"
                                                                        class="item" data-toggle="tooltip" data-placement="top">
                                                                         <i class="fa fa-plus" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>' . $platform['name'] . '</td>
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


            <div class="modal fade bd-example-modal-lg" id="tagsModal" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">
                                Add Tags
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
                                                    <th>Tag</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tags as $tag) {
                                                    echo '
                                                        <tr id="addTagTable' . $tag['id'] . '">
                                                            <td>
                                                                <div class="table-data-feature">
                                                                    <a onclick="addTag(' . $tag['id'] . ',\'' . $tag['name'] . '\');removeTag(' . $tag['id'] . ')"
                                                                        class="item" data-toggle="tooltip" data-placement="top">
                                                                         <i class="fa fa-plus" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>' . $tag['name'] . '</td>
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
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->

            <script type="text/javascript">

function addPlatform(id, name) {
    var table = document.getElementById("platforms").getElementsByTagName('tbody')[0];
    var row = table.insertRow();
    row.innerHTML = '<input type="number" value="' + id + '" hidden>';
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    cell0.innerHTML = '<div class="table-data-feature"><input type="number" value="' + id +
        '" hidden><button onclick="deletePlatform(this)" type="button"class="item"><i class="zmdi zmdi-delete"></i></button></div>';
    cell1.innerHTML = name;
    var platforms_id = JSON.parse(document.getElementById("platforms_id").value);
    platforms_id.push(id);
    document.getElementById("platforms_id").value = JSON.stringify(platforms_id);
}

function removePlatform(id) {
    document.getElementById("addPlatformTable" + id).hidden = true;
}

function deletePlatform(element) {
    element.parentNode.parentNode.parentNode.remove();
    var id = element.previousElementSibling.value;
    var platforms_id = JSON.parse(document.getElementById("platforms_id").value);
    var index = platforms_id.indexOf(parseInt(id));
    platforms_id.splice(index, 1);
    document.getElementById("platforms_id").value = JSON.stringify(platforms_id);
    document.getElementById("addPlatformTable" + id).hidden = false;
}


function addTag(id, name) {
    var table = document.getElementById("tags").getElementsByTagName('tbody')[0];
    var row = table.insertRow();
    row.innerHTML = '<input type="number" value="' + id + '" hidden>';
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    cell0.innerHTML = '<div class="table-data-feature"><input type="number" value="' + id +
        '" hidden><button onclick="deleteTag(this)" type="button"class="item"><i class="zmdi zmdi-delete"></i></button></div>';
    cell1.innerHTML = name;
    var tag_id = JSON.parse(document.getElementById("tag_id").value);
    tag_id.push(id);
    document.getElementById("tag_id").value = JSON.stringify(tag_id);
}

function removeTag(id) {
    document.getElementById("addTagTable" + id).hidden = true;
}

function deleteTag(element) {
    element.parentNode.parentNode.parentNode.remove();
    var id = element.previousElementSibling.value;
    var tag_id = JSON.parse(document.getElementById("tag_id").value);
    var index = tag_id.indexOf(parseInt(id));
    tag_id.splice(index, 1);
    document.getElementById("tag_id").value = JSON.stringify(tag_id);
    document.getElementById("addTagTable" + id).hidden = false;
}


Dropzone.autoDiscover = false;
$("#inGameImages").dropzone({
    addRemoveLinks: true,
    removedfile: function(file) {
        var name = file.name;
        $.ajax({
            type: 'POST',
            url: 'file-upload.php?act=inGameImages',
            data: {
                name: name,
                request: 2
            },
            success: function(data) {
                console.log('success: ' + data);
            }
        });
        var _ref;
        return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) :
            void 0;
    }
});



Dropzone.autoDiscover = false;
$("#coverGameImages").dropzone({
    addRemoveLinks: true,
    removedfile: function(file) {
        var name = file.name;
        $.ajax({
            type: 'POST',
            url: 'file-upload.php?act=coverGameImages',
            data: {
                name: name,
                request: 2
            },
            success: function(data) {
                console.log('success: ' + data);
            }
        });
        var _ref;
        return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) :
            void 0;
    }
});
            </script>