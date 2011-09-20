<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the DataPribadi class.  It uses the code-generated
	 * DataPribadiMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a DataPribadi columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_pribadi_edit.php AND
	 * data_pribadi_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class DataPribadiEditPanel extends QPanel {
		// Local instance of the DataPribadiMetaControl
		/**
		 * @var DataPribadiMetaControl
		 */
		protected $mctDataPribadi;

		// Controls for DataPribadi's Data Fields
		public $lstNipObject;
		public $txtTempatLahir;
		public $calTglLahir;
		public $txtAgama;
		public $txtStatusNikah;
		public $txtJumTanggungan;
		public $txtAlamat;
		public $txtNamaBapak;
		public $txtNamaIbu;
		public $txtJenisKelamin;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		/**
		 * @var QButton Save
		 */
		public $btnSave;
		/**
		 * @var QButton Delete
		 */
		public $btnDelete;
		/**
		 * @var QButton Cancel
		 */
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $strNip = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/DataPribadiEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the DataPribadiMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctDataPribadi = DataPribadiMetaControl::Create($this, $strNip);

			// Call MetaControl's methods to create qcontrols based on DataPribadi's data fields
			$this->lstNipObject = $this->mctDataPribadi->lstNipObject_Create();
			$this->txtTempatLahir = $this->mctDataPribadi->txtTempatLahir_Create();
			$this->calTglLahir = $this->mctDataPribadi->calTglLahir_Create();
			$this->txtAgama = $this->mctDataPribadi->txtAgama_Create();
			$this->txtStatusNikah = $this->mctDataPribadi->txtStatusNikah_Create();
			$this->txtJumTanggungan = $this->mctDataPribadi->txtJumTanggungan_Create();
			$this->txtAlamat = $this->mctDataPribadi->txtAlamat_Create();
			$this->txtNamaBapak = $this->mctDataPribadi->txtNamaBapak_Create();
			$this->txtNamaIbu = $this->mctDataPribadi->txtNamaIbu_Create();
			$this->txtJenisKelamin = $this->mctDataPribadi->txtJenisKelamin_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('DataPribadi'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctDataPribadi->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the DataPribadiMetaControl
			$this->mctDataPribadi->SaveDataPribadi();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the DataPribadiMetaControl
			$this->mctDataPribadi->DeleteDataPribadi();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}

		
	}
?>