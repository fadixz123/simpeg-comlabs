<?php
	/**
	 * The abstract DataPenghargaanInGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DataPenghargaanIn subclass which
	 * extends this DataPenghargaanInGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DataPenghargaanIn class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $Nip the value for strNip (PK)
	 * @property string $JenisPenghargaan the value for strJenisPenghargaan 
	 * @property string $NoSk the value for strNoSk 
	 * @property DataPegawai $NipObject the value for the DataPegawai object referenced by strNip (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DataPenghargaanInGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column data_penghargaan_in.nip
		 * @var string strNip
		 */
		protected $strNip;
		const NipMaxLength = 45;
		const NipDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var string __strNip;
		 */
		protected $__strNip;

		/**
		 * Protected member variable that maps to the database column data_penghargaan_in.jenis_penghargaan
		 * @var string strJenisPenghargaan
		 */
		protected $strJenisPenghargaan;
		const JenisPenghargaanMaxLength = 150;
		const JenisPenghargaanDefault = null;


		/**
		 * Protected member variable that maps to the database column data_penghargaan_in.no_sk
		 * @var string strNoSk
		 */
		protected $strNoSk;
		const NoSkMaxLength = 45;
		const NoSkDefault = null;


		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column data_penghargaan_in.nip.
		 *
		 * NOTE: Always use the NipObject property getter to correctly retrieve this DataPegawai object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DataPegawai objNipObject
		 */
		protected $objNipObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->strNip = DataPenghargaanIn::NipDefault;
			$this->strJenisPenghargaan = DataPenghargaanIn::JenisPenghargaanDefault;
			$this->strNoSk = DataPenghargaanIn::NoSkDefault;
		}


		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a DataPenghargaanIn from PK Info
		 * @param string $strNip
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataPenghargaanIn
		 */
		public static function Load($strNip, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return DataPenghargaanIn::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DataPenghargaanIn()->Nip, $strNip)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all DataPenghargaanIns
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataPenghargaanIn[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DataPenghargaanIn::QueryArray to perform the LoadAll query
			try {
				return DataPenghargaanIn::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DataPenghargaanIns
		 * @return int
		 */
		public static function CountAll() {
			// Call DataPenghargaanIn::QueryCount to perform the CountAll query
			return DataPenghargaanIn::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCUBED QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcubed Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = DataPenghargaanIn::GetDatabase();

			// Create/Build out the QueryBuilder object with DataPenghargaanIn-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'data_penghargaan_in');
			DataPenghargaanIn::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('data_penghargaan_in');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcubed Query method to query for a single DataPenghargaanIn object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DataPenghargaanIn the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataPenghargaanIn::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DataPenghargaanIn object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DataPenghargaanIn::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;
				}
				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if(null === $objDbRow)
					return null;
				return DataPenghargaanIn::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DataPenghargaanIn objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DataPenghargaanIn[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataPenghargaanIn::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DataPenghargaanIn::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of DataPenghargaanIn objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DataPenghargaanIn::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

		public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DataPenghargaanIn::GetDatabase();

			$strQuery = DataPenghargaanIn::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/datapenghargaanin', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DataPenghargaanIn::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DataPenghargaanIn
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'data_penghargaan_in';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'nip', $strAliasPrefix . 'nip');
			$objBuilder->AddSelectItem($strTableName, 'jenis_penghargaan', $strAliasPrefix . 'jenis_penghargaan');
			$objBuilder->AddSelectItem($strTableName, 'no_sk', $strAliasPrefix . 'no_sk');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DataPenghargaanIn from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DataPenghargaanIn::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DataPenghargaanIn
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the DataPenghargaanIn object
			$objToReturn = new DataPenghargaanIn();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'nip', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nip'] : $strAliasPrefix . 'nip';
			$objToReturn->strNip = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$objToReturn->__strNip = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'jenis_penghargaan', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'jenis_penghargaan'] : $strAliasPrefix . 'jenis_penghargaan';
			$objToReturn->strJenisPenghargaan = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'no_sk', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'no_sk'] : $strAliasPrefix . 'no_sk';
			$objToReturn->strNoSk = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Nip != $objPreviousItem->Nip) {
						continue;
					}

					// complete match - all primary key columns are the same
					return null;
				}
			}

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'data_penghargaan_in__';

			// Check for NipObject Early Binding
			$strAlias = $strAliasPrefix . 'nip__nip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objNipObject = DataPegawai::InstantiateDbRow($objDbRow, $strAliasPrefix . 'nip__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of DataPenghargaanIns from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DataPenghargaanIn[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();

			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DataPenghargaanIn::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DataPenghargaanIn::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single DataPenghargaanIn object,
		 * by Nip Index(es)
		 * @param string $strNip
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DataPenghargaanIn
		*/
		public static function LoadByNip($strNip, $objOptionalClauses = null) {
			return DataPenghargaanIn::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DataPenghargaanIn()->Nip, $strNip)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this DataPenghargaanIn
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DataPenghargaanIn::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `data_penghargaan_in` (
							`nip`,
							`jenis_penghargaan`,
							`no_sk`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNip) . ',
							' . $objDatabase->SqlVariable($this->strJenisPenghargaan) . ',
							' . $objDatabase->SqlVariable($this->strNoSk) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`data_penghargaan_in`
						SET
							`nip` = ' . $objDatabase->SqlVariable($this->strNip) . ',
							`jenis_penghargaan` = ' . $objDatabase->SqlVariable($this->strJenisPenghargaan) . ',
							`no_sk` = ' . $objDatabase->SqlVariable($this->strNoSk) . '
						WHERE
							`nip` = ' . $objDatabase->SqlVariable($this->__strNip) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__strNip = $this->strNip;


			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this DataPenghargaanIn
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->strNip)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DataPenghargaanIn with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DataPenghargaanIn::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`data_penghargaan_in`
				WHERE
					`nip` = ' . $objDatabase->SqlVariable($this->strNip) . '');
		}

		/**
		 * Delete all DataPenghargaanIns
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DataPenghargaanIn::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`data_penghargaan_in`');
		}

		/**
		 * Truncate data_penghargaan_in table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DataPenghargaanIn::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `data_penghargaan_in`');
		}

		/**
		 * Reload this DataPenghargaanIn from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DataPenghargaanIn object.');

			// Reload the Object
			$objReloaded = DataPenghargaanIn::Load($this->strNip);

			// Update $this's local variables to match
			$this->Nip = $objReloaded->Nip;
			$this->__strNip = $this->strNip;
			$this->strJenisPenghargaan = $objReloaded->strJenisPenghargaan;
			$this->strNoSk = $objReloaded->strNoSk;
		}



		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Nip':
					/**
					 * Gets the value for strNip (PK)
					 * @return string
					 */
					return $this->strNip;

				case 'JenisPenghargaan':
					/**
					 * Gets the value for strJenisPenghargaan 
					 * @return string
					 */
					return $this->strJenisPenghargaan;

				case 'NoSk':
					/**
					 * Gets the value for strNoSk 
					 * @return string
					 */
					return $this->strNoSk;


				///////////////////
				// Member Objects
				///////////////////
				case 'NipObject':
					/**
					 * Gets the value for the DataPegawai object referenced by strNip (PK)
					 * @return DataPegawai
					 */
					try {
						if ((!$this->objNipObject) && (!is_null($this->strNip)))
							$this->objNipObject = DataPegawai::Load($this->strNip);
						return $this->objNipObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Nip':
					/**
					 * Sets the value for strNip (PK)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						$this->objNipObject = null;
						return ($this->strNip = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'JenisPenghargaan':
					/**
					 * Sets the value for strJenisPenghargaan 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strJenisPenghargaan = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NoSk':
					/**
					 * Sets the value for strNoSk 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNoSk = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'NipObject':
					/**
					 * Sets the value for the DataPegawai object referenced by strNip (PK)
					 * @param DataPegawai $mixValue
					 * @return DataPegawai
					 */
					if (is_null($mixValue)) {
						$this->strNip = null;
						$this->objNipObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a DataPegawai object
						try {
							$mixValue = QType::Cast($mixValue, 'DataPegawai');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED DataPegawai object
						if (is_null($mixValue->Nip))
							throw new QCallerException('Unable to set an unsaved NipObject for this DataPenghargaanIn');

						// Update Local Member Variables
						$this->objNipObject = $mixValue;
						$this->strNip = $mixValue->Nip;

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="DataPenghargaanIn"><sequence>';
			$strToReturn .= '<element name="NipObject" type="xsd1:DataPegawai"/>';
			$strToReturn .= '<element name="JenisPenghargaan" type="xsd:string"/>';
			$strToReturn .= '<element name="NoSk" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DataPenghargaanIn', $strComplexTypeArray)) {
				$strComplexTypeArray['DataPenghargaanIn'] = DataPenghargaanIn::GetSoapComplexTypeXml();
				DataPegawai::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DataPenghargaanIn::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DataPenghargaanIn();
			if ((property_exists($objSoapObject, 'NipObject')) &&
				($objSoapObject->NipObject))
				$objToReturn->NipObject = DataPegawai::GetObjectFromSoapObject($objSoapObject->NipObject);
			if (property_exists($objSoapObject, 'JenisPenghargaan'))
				$objToReturn->strJenisPenghargaan = $objSoapObject->JenisPenghargaan;
			if (property_exists($objSoapObject, 'NoSk'))
				$objToReturn->strNoSk = $objSoapObject->NoSk;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DataPenghargaanIn::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objNipObject)
				$objObject->objNipObject = DataPegawai::GetSoapObjectFromObject($objObject->objNipObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->strNip = null;
			return $objObject;
		}


		////////////////////////////////////////
		// METHODS for JSON Object Translation
		////////////////////////////////////////

		// this function is required for objects that implement the
		// IteratorAggregate interface
		public function getIterator() {
			///////////////////
			// Member Variables
			///////////////////
			$iArray['Nip'] = $this->strNip;
			$iArray['JenisPenghargaan'] = $this->strJenisPenghargaan;
			$iArray['NoSk'] = $this->strNoSk;
			return new ArrayIterator($iArray);
		}

		// this function returns a Json formatted string using the
		// IteratorAggregate interface
		public function getJson() {
			return json_encode($this->getIterator());
		}


	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Nip
     * @property-read QQNodeDataPegawai $NipObject
     * @property-read QQNode $JenisPenghargaan
     * @property-read QQNode $NoSk
     *
     *

     * @property-read QQNodeDataPegawai $_PrimaryKeyNode
     **/
	class QQNodeDataPenghargaanIn extends QQNode {
		protected $strTableName = 'data_penghargaan_in';
		protected $strPrimaryKey = 'nip';
		protected $strClassName = 'DataPenghargaanIn';
		public function __get($strName) {
			switch ($strName) {
				case 'Nip':
					return new QQNode('nip', 'Nip', 'VarChar', $this);
				case 'NipObject':
					return new QQNodeDataPegawai('nip', 'NipObject', 'VarChar', $this);
				case 'JenisPenghargaan':
					return new QQNode('jenis_penghargaan', 'JenisPenghargaan', 'VarChar', $this);
				case 'NoSk':
					return new QQNode('no_sk', 'NoSk', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQNodeDataPegawai('nip', 'Nip', 'VarChar', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @property-read QQNode $Nip
     * @property-read QQNodeDataPegawai $NipObject
     * @property-read QQNode $JenisPenghargaan
     * @property-read QQNode $NoSk
     *
     *

     * @property-read QQNodeDataPegawai $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDataPenghargaanIn extends QQReverseReferenceNode {
		protected $strTableName = 'data_penghargaan_in';
		protected $strPrimaryKey = 'nip';
		protected $strClassName = 'DataPenghargaanIn';
		public function __get($strName) {
			switch ($strName) {
				case 'Nip':
					return new QQNode('nip', 'Nip', 'string', $this);
				case 'NipObject':
					return new QQNodeDataPegawai('nip', 'NipObject', 'string', $this);
				case 'JenisPenghargaan':
					return new QQNode('jenis_penghargaan', 'JenisPenghargaan', 'string', $this);
				case 'NoSk':
					return new QQNode('no_sk', 'NoSk', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNodeDataPegawai('nip', 'Nip', 'string', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>
