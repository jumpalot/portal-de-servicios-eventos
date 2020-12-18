    <?php
        include '../../model/db.php';
        session_start();
        $idUsu = $_SESSION['usrId'];

        $tipo = $_SESSION['tipo'];
        $idPub = $_SESSION['idPub'];

        $titulo ="";
        $desc="";
        include '../../view/users/modifyPost/mp-common.html';
        
        switch ($tipo){

        }
        include '../../view/users/modifyPost/mp-common.html';

    ?>
</form>