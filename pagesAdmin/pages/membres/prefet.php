            
            <?php
        include('header.php');
        ?>
    <style>
    .main-panel{
        margin-left: 14rem;
    }
</style>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form action="action.php" method="POST">
                            <div class="row row-fluid">
                                <div class="d-flex col-md-12">
                                    <div class="col-md-12">
                                        <div class="col-lg-12 col-md-6 col-sm-6">
                                        <label for="">Nom d'Expediteur</label>
                                            <input type="text" name="expediteur" id="first_name" class="form-control" placeholder="votre nom">
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6" style="margin-top:2rem;">
                                        <label for="">OBJET</label>
                                            <input type="text" name="objet" id="last_name" class="form-control" placeholder="votre objet">
                                        </div>
                                    </div>
                                    <div class="navbar col-md-12">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="">MESSAGES</label>
                                            <textarea class="form-control" name="message" id="comments" rows="6" placeholder="votre message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="container text-center pd" style="margin-top:2rem;">
                                    <button type="submit" name="informer" value="Envoyer" id="submit" class="btn btn-lg btn-primary btn-radius btn-brd grd1 btn-block">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end row -->
    </div><!-- end row -->