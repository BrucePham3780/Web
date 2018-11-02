
<div class="section__content section__content--p30">
    <div class="container-fluid">

        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">User Managerment</h2>
            
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>

                            <th>User ID</th>
                            <th>User Email</th>
                            <th>User Name</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $userlist =$data['UserList'];
                        foreach ($userlist as $user) {

                            ?>
                            <tr class="tr-shadow">

                                <td><?=$user->UserId?></td>
                                <td>
                                 <?=$user->Email?>
                             </td>
                             <td><?=$user->Name?></td>
                             <td type="text"><?=$user->Password?></td>

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





