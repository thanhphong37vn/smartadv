<?php
/**
 * Class that operate on table 'tbl_hinhanh'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblHinhanhMySqlDAO implements TblHinhanhDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblHinhanhMySql 
	 */
	public function load($maSP, $duongDan){
		$sql = 'SELECT * FROM tbl_hinhanh WHERE MaSP = ?  AND DuongDan = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($maSP);
		$sqlQuery->setNumber($duongDan);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_hinhanh';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_hinhanh ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblHinhanh primary key
 	 */
	public function delete($maSP, $duongDan){
		$sql = 'DELETE FROM tbl_hinhanh WHERE MaSP = ?  AND DuongDan = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($maSP);
		$sqlQuery->setNumber($duongDan);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblHinhanhMySql tblHinhanh
 	 */
	public function insert($tblHinhanh){
		$sql = 'INSERT INTO tbl_hinhanh ( MaSP, DuongDan) VALUES ( ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		

		
		$sqlQuery->setNumber($tblHinhanh->maSP);

		$sqlQuery->setNumber($tblHinhanh->duongDan);

		$this->executeInsert($sqlQuery);	
		//$tblHinhanh->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblHinhanhMySql tblHinhanh
 	 */
	public function update($tblHinhanh){
		$sql = 'UPDATE tbl_hinhanh SET  WHERE MaSP = ?  AND DuongDan = ? ';
		$sqlQuery = new SqlQuery($sql);
		

		
		$sqlQuery->setNumber($tblHinhanh->maSP);

		$sqlQuery->setNumber($tblHinhanh->duongDan);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_hinhanh';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}



	
	/**
	 * Read row
	 *
	 * @return TblHinhanhMySql 
	 */
	protected function readRow($row){
		$tblHinhanh = new TblHinhanh();
		
		$tblHinhanh->maSP = $row['MaSP'];
		$tblHinhanh->duongDan = $row['DuongDan'];

		return $tblHinhanh;
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
	 * @return TblHinhanhMySql 
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