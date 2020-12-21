<form id="modifyDataForm">
    <?php
        function getList($result){
            if($result!=null){
                $list = '[';
                while($espacio = $result->fetch_object())
                    $list .= $espacio->id.',';
                $list .= ']';
                return $list;
            }
            return '[]';
        }

        include '../../model/db.php';
        session_start();
        $idUsu = $_SESSION['usrId'];

        $tipo = $_SESSION['tipo'];
        $idPub = $_SESSION['idPub'];

        $publi = getEditData($tipo, $idPub);

        $titulo = $publi->titulo;
        $desc = $publi->descripcion;
        include '../../view/users/modifyPost/mp-common.php';

        include "../../view/users/modifyPost/mp-$tipo.html";
        
        $zona = $publi->zona;
        $subtipo = $publi->subtipo;
        if ($tipo=='salon'){
            $capacidad = getCapacidad($idPub);
            $lespacios = getList( getEspaciosPub($idPub) );
            $lservicios = getList( getSalonlServicio($idPub) );
        }
        if ($publi->nivel=="2"){
            $descuento = $publi->descuento;
            include '../../view/users/modifyPost/mp-descuento.php';
        }
    ?>
</form>
<script>
    inicializarSelects('<?=$tipo?>', '#modifyDataModal');
    setTimeout(()=>{
        selectOption('select.zonas', '#modifyDataModal', <?=$zona?>);
        selectOption('select.subtipo', '#modifyDataModal', <?=$subtipo?>);
        <?php if($tipo=="salon"): ?>
            $('#modifyDataModal #cap').val('<?=$capacidad?>');
            selectOption('select#espacios', '#modifyDataModal', <?=$lespacios?>);
            selectOption('select#servicios', '#modifyDataModal', <?=$lservicios?>);
        <?php endif; ?>
    },500);
</script>