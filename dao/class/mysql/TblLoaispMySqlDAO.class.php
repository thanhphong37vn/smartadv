<?php
/**
 * Class that operate on table 'tbl_loaisp'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblLoaispMySqlDAO implements TblLoaispDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblLoaispMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_loaisp WHERE MaLoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_loaisp';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_loaisp ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblLoaisp primary key
 	 */
	public function delete($MaLoai){
		$sql = 'DELETE FROM tbl_loaisp WHERE MaLoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($MaLoai);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblLoaispMySql tblLoaisp
 	 */
	public function insert($tblLoaisp){
		$sql = 'INSERT INTO tbl_loaisp (TenLoai, MaCha) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblLoaisp->tenLoai);
		$sqlQuery->setNumber($tblLoaisp->maCha);

		$id = $this->executeInsert($sqlQuery);	
		$tblLoaisp->maLoai = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblLoaispMySql tblLoaisp
 	 */
	public function update($tblLoaisp){
		$sql = 'UPDATE tbl_loaisp SET TenLoai = ?, MaCha = ? WHERE MaLoai = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblLoaisp->tenLoai);
		$sqlQuery->setNumber($tblLoaisp->maCha);

		$sqlQuery->setNumber($tblLoaisp->maLoai);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_loaisp';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTenLoai($value){
		$sql = 'SELECT * FROM tbl_loaisp WHERE TenLoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMaCha($value){
		$sql = 'SELECT * FROM tbl_loaisp WHERE MaCha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTenLoai($value){
		$sql = 'DELETE FROM tbl_loaisp WHERE TenLoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMaCha($value){
		$sql = 'DELETE FROM tbl_loaisp WHERE MaCha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblLoaispMySql 
	 */
	protected function readRow($row){
		$tblLoaisp = new TblLoaisp();
		
		$tblLoaisp->maLoai = $row['MaLoai'];
		$tblLoaisp->tenLoai = $row['TenLoai'];
		$tblLoaisp->maCha = $row['MaCha'];

		return $tblLoaisp;
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
	 * @return TblLoaispMySql 
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