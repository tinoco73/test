<?php
//=====================================================================================================
//=====>	INICIO_H
	include_once("../core/go.login.inc.php");
	include_once("../core/core.error.inc.php");
	include_once("../core/core.html.inc.php");
	include_once("../core/core.init.inc.php");
	$theFile					= __FILE__;
	$permiso					= getSIPAKALPermissions($theFile);
	if($permiso === false){		header ("location:../404.php?i=999");	}
	$_SESSION["current_file"]	= addslashes( $theFile );
//<=====	FIN_H
	$iduser = $_SESSION["log_id"];
//=====================================================================================================

$xHP		= new cHPage("ejemplo de forma", HP_FORM);
$xHP->setIncludes();

echo $xHP->getHeader();

echo $xHP->setBodyinit();

$xFrm   = new cHForm("frmTest", "form.php");
$xFrm->addHElementsInArray(
    Array(
            Array("id", "texto"),
            Array("id2", "texto2"),
          )
);
echo $xFrm->get();
?>

<?php
$xHP->setBodyEnd();

$xHP->end();

?>