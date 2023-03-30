<?php
include('../dbcon.php');
include('header.php');

?>
    <style>
    .main-panel{
        margin-left: 14rem;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>MOTS</h3>
                </div>
            </div><!-- end title -->
            <form action="../code.php" method="POST" enctype="multipart/form-data">
            <div class="row align-items-center">
                    <?php
                        include('../dbcon.php');
                                        $query = "SELECT * FROM mot WHERE classe='monseigneur' LIMIT 1";
                                        $statement = $conn->prepare($query);
                                        $statement->execute();
                                        $statement->setFetchMode(PDO::FETCH_OBJ);//PDO::FETCH_ASSOC 
                                        $result = $statement->fetchAll(); 
                                        if ($result) {
                                            foreach($result as $row )
                                            {
                                                ?>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>2018 BEST SmartEDU education school</h4>
                        <h2><?= $row->nom;  ?> <br> <?= $row->prenom;  ?></h2>
                        <p><?= $row->message;  ?>.</p>
                        <?php if(isset($_SESSION["login"]) && $_SESSION["type"] == "admin" ): ?>
                            <a href="modification_mot.php?id=<?= $row->id; ?>" class="hover-btn-new orange"><span>Mettre à jours</span></a>
                        <?php endif?>
                        </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="../uploads/<?= $row->fileName;?>" alt="" style="height: 27rem; width: 25rem;" class="img-fluid img-rounded">
                        <?php  } }  ?>
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
            </form>
            <form action="../code.php" method="POST" enctype="multipart/form-data">
            <div class="row align-items-center">
                    <?php
                        include('../dbcon.php');
                                        $query = "SELECT * FROM mot WHERE classe='recteur' LIMIT 1";
                                        $statement = $conn->prepare($query);
                                        $statement->execute();
                                        $statement->setFetchMode(PDO::FETCH_OBJ);//PDO::FETCH_ASSOC 
                                        $result = $statement->fetchAll(); 
                                        if ($result) {
                                            foreach($result as $row )
                                            {
                                                ?>
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                    <img src="../uploads/<?= $row->fileName;?>" alt="" style="height: 25rem; width: 25rem;" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                    <h2><?= $row->nom;  ?> <br> <?= $row->prenom;  ?></h2>
                        <p><?= $row->message;  ?>.</p>
                        <?php  } }  ?>
                        <?php if(isset($_SESSION["login"]) && $_SESSION["type"] == "admin" ): ?>
                            <a href="modification_mot.php?id=<?= $row->id; ?>" class="hover-btn-new orange"><span>Mettre à jours</span></a>
                        <?php endif?>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end container -->
</div><!-- end container -->
