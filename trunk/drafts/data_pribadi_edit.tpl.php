<?php
	// This is the HTML template include file (.tpl.php) for the data_pribadi_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('DataPribadi') . ' - ' . $this->mctDataPribadi->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctDataPribadi->TitleVerb); ?></h2>
		<h1><?php _t('DataPribadi')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lstNipObject->RenderWithName(); ?>

		<?php $this->txtTempatLahir->RenderWithName(); ?>

		<?php $this->calTglLahir->RenderWithName(); ?>

		<?php $this->txtAgama->RenderWithName(); ?>

		<?php $this->txtStatusNikah->RenderWithName(); ?>

		<?php $this->txtJumTanggungan->RenderWithName(); ?>

		<?php $this->txtAlamat->RenderWithName(); ?>

		<?php $this->txtNamaBapak->RenderWithName(); ?>

		<?php $this->txtNamaIbu->RenderWithName(); ?>

		<?php $this->txtJenisKelamin->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>