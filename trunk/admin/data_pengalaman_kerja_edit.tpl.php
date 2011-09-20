<?php
	// This is the HTML template include file (.tpl.php) for the data_pengalaman_kerja_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('DataPengalamanKerja') . ' - ' . $this->mctDataPengalamanKerja->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctDataPengalamanKerja->TitleVerb); ?></h2>
		<h1><?php _t('DataPengalamanKerja')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lstNipObject->RenderWithName(); ?>

		<?php $this->txtTempatKerja->RenderWithName(); ?>

		<?php $this->txtAlamat->RenderWithName(); ?>

		<?php $this->txtTahunMasuk->RenderWithName(); ?>

		<?php $this->txtTahunKeluar->RenderWithName(); ?>

		<?php $this->txtGajiTerakhir->RenderWithName(); ?>

		<?php $this->txtJabatanTerakhir->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>