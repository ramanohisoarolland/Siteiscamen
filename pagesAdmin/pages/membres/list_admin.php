<div class="d-flex mt-3 col-md-4">
        <div class="container col-md-12">
            <table class="table table-hover text-center">
                <thead class="table-header">
                    <tr class="text-center">
                        <th class="text-center">profile</th>
                        <th class="text-center">Nom D'utilisateur</th>
                        <th class="text-center">email</th>
                        <th class="text-center">type</th>
                    </tr>
                                    </thead>
                                    <tbody >
                                    <?php
                                        include('../dbcon.php');
                                        $query = "SELECT * FROM utilisateur WHERE  type='admin' ORDER BY id DESC";
                                        $statement = $conn->prepare($query);
                                        $statement->execute();
                                        $statement->setFetchMode(PDO::FETCH_OBJ);//PDO::FETCH_ASSOC 
                                        $result = $statement->fetchAll(); 
                                        if ($result) {
                                            foreach($result as $row)
                                            {
                                                ?>
                                                <tr>
                                                <td ><img src="uploads/<?= $row->fileName;?>" style="width: 60px; height: 60px; border-radius: 100%;"></td>
                                                <td><?= $row->login;  ?></td>
                                                <td><?= $row->email;  ?></td>
                                                <td><?= $row->type;  ?></td>
                                            </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                            <tr>
                                                <td colspan="5"> No Record Found</td>
                                            </tr>
                                            <?php 
                                        }
                        ?>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>