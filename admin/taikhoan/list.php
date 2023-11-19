<div class="content-body">
            <div class="container-fluid">	
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Danh sách user</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"><strong>Id</strong></th>
                                                <th><strong>Name</strong></th>
                                                <th><strong>Pass</strong></th>
                                                <th><strong>Money</strong></th>
                                                <th><strong>Role</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($listtaikhoan as $taikhoan){
                                                extract($taikhoan);
                                            ?>
                                            <tr>
                                                <td><strong><?php echo $id_user?></strong></td>
                                                <td><?php echo $ten_user?></td>
                                                <td><?php echo $pass?></td>
                                                <td><?php echo $money?></td>	
                                                <td><?php echo $role?></td>											
                                            </tr>
                                            <?php
                                            }
                                            ?>                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 