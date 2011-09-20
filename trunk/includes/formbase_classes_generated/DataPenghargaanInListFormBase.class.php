<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the DataPenghargaanIn class.  It uses the code-generated
	 * DataPenghargaanInDataGrid control which has meta-methods to help with
	 * easily creating/defining DataPenghargaanIn columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both data_penghargaan_in_list.php AND
	 * data_penghargaan_in_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class DataPenghargaanInListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list DataPenghargaanIns
		/**
		 * @var DataPenghargaanInDataGrid dtgDataPenghargaanIns
		 */
		protected $dtgDataPenghargaanIns;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			parent::Form_Run();
		}

		protected function Form_Create() {
			parent::Form_Create();

			// Instantiate the Meta DataGrid
			$this->dtgDataPenghargaanIns = new DataPenghargaanInDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgDataPenghargaanIns->CssClass = 'datagrid';
			$this->dtgDataPenghargaanIns->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgDataPenghargaanIns->Paginator = new QPaginator($this->dtgDataPenghargaanIns);
			$this->dtgDataPenghargaanIns->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/data_penghargaan_in_edit.php';
			$this->dtgDataPenghargaanIns->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for data_penghargaan_in's properties, or you
			// can traverse down QQN::data_penghargaan_in() to display fields that are down the hierarchy)
			$this->dtgDataPenghargaanIns->MetaAddColumn(QQN::DataPenghargaanIn()->NipObject);
			$this->dtgDataPenghargaanIns->MetaAddColumn('JenisPenghargaan');
			$this->dtgDataPenghargaanIns->MetaAddColumn('NoSk');
		}
	}
?>
