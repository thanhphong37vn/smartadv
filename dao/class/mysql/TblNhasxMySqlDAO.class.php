<?php
/**
 * Class that operate on table 'tbl_nhasx'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblNhasxMySqlDAO implements TblNhasxDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblNhasxMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_nhasx WHERE MaNhaSX = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_nhasx';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_nhasx ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblNhasx primary key
 	 */
	public function delete($MaNhaSX){
		$sql = 'DELETE FROM tbl_nhasx WHERE MaNhaSX = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($MaNhaSX);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblNhasxMySql tblNhasx
 	 */
	public function insert($tblNhasx){
		$sql = 'INSERT INTO tbl_nhasx (TenNhaSX) VALUES (?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblNhasx->tenNhaSX);

		$id = $this->executeInsert($sqlQuery);	
		$tblNhasx->maNhaSX = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblNhasxMySql tblNhasx
 	 */
	public function update($tblNhasx){
		$sql = 'UPDATE tbl_nhasx SET TenNhaSX = ? WHERE MaNhaSX = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblNhasx->tenNhaSX);

		$sqlQuery->setNumber($tblNhasx->maNhaSX);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_nhasx';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTenNhaSX($value){
		$sql = 'SELECT * FROM tbl_nhasx WHERE TenNhaSX = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTenNhaSX($value){
		$sql = 'DELETE FROM tbl_nhasx WHERE TenNhaSX = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblNhasxMySql 
	 */
	protected function readRow($row){
		$tblNhasx = new TblNhasx();
		
		$tblNhasx->maNhaSX = $row['MaNhaSX'];
		$tblNhasx->tenNhaSX = $row['TenNhaSX'];

		return $tblNhasx;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return TblNhasxMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>