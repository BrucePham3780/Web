
<div class="section__content section__content--p30">
    <div class="container-fluid">

        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Coach Managerment</h2>
            <div class="card-body">
                <button type="button" class="btn btn-primary" onclick="window.location.assign('coachman.php?action=insert');">Insert new Coach</button>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>

                            <th>Coach ID</th>
                            <th>Coach Name</th>
                            <th>Coach Image</th>
                            <th>Coach Detail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $coachlist =$data['CoachList'];
                        foreach ($coachlist as $coach) {

                            ?>
                            <tr class="tr-shadow">

                                <td><?=$coach->coachId?></td>
                                <td>
                                 <?=$coach->coachName?>
                             </td>
                             <td><img src="public/images/<?=$coach->coachImage?>" height="100" weight="100"></td>
                             <td class="desc"><?=$coach->coachDetail?></td>

                             <td>
                                <div class="table-data-feature">
                                    <a href="coachman.php?action=update&id=<?=$coach->coachId?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button></a>
                                    <a href="coachman.php?action=delete&id=<?=$coach->coachId?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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





