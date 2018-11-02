
<div class="section__content section__content--p30">
    <div class="container-fluid">

        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Class Managerment</h2>
            <div class="card-body">
                <button type="button" class="btn btn-primary" onclick="window.location.assign('classman.php?action=insert');">Insert new Class</button>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>

                            <th>Class ID</th>
                            <th>Class Name</th>
                            <th>Class Image</th>
                            <th>Class Detail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $classlist =$data['ClassList'];
                        foreach ($classlist as $class) {

                            ?>
                            <tr class="tr-shadow">

                                <td><?=$class->classId?></td>
                                <td>
                                 <?=$class->className?>
                             </td>
                             <td><img src="public/images/<?=$class->classImage?>" height="100" weight="100"></td>
                             <td class="desc"><?=$class->classDetail?></td>

                             <td>
                                <div class="table-data-feature">
                                    <a href="classman.php?action=update&id=<?=$class->classId?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button></a>
                                    <a href="classman.php?action=delete&id=<?=$class->classId?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button></a>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>

                    </tbody>
                    <?php 
                }
                ?>
            </table>
        </div>


    </div>


</div>





