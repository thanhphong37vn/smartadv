<?php
/**
 * Class that operate on table 'tbl_quangcao'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblQuangcaoMySqlDAO implements TblQuangcaoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblQuangcaoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_quangcao WHERE MaQC = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_quangcao';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_quangcao ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblQuangcao primary key
 	 */
	public function delete($MaQC){
		$sql = 'DELETE FROM tbl_quangcao WHERE MaQC = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($MaQC);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblQuangcaoMySql tblQuangcao
 	 */
	public function insert($tblQuangcao){
		$sql = 'INSERT INTO tbl_quangcao (TenQC, DuongDanAnh, Link, ViTri, TrangThai) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblQuangcao->tenQC);
		$sqlQuery->set($tblQuangcao->duongDanAnh);
		$sqlQuery->set($tblQuangcao->link);
		$sqlQuery->setNumber($tblQuangcao->viTri);
		$sqlQuery->setNumber($tblQuangcao->trangThai);

		$id = $this->executeInsert($sqlQuery);	
		$tblQuangcao->maQC = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblQuangcaoMySql tblQuangcao
 	 */
	public function update($tblQuangcao){
		$sql = 'UPDATE tbl_quangcao SET TenQC = ?, DuongDanAnh = ?, Link = ?, ViTri = ?, TrangThai = ? WHERE MaQC = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblQuangcao->tenQC);
		$sqlQuery->set($tblQuangcao->duongDanAnh);
		$sqlQuery->set($tblQuangcao->link);
		$sqlQuery->setNumber($tblQuangcao->viTri);
		$sqlQuery->setNumber($tblQuangcao->trangThai);

		$sqlQuery->setNumber($tblQuangcao->maQC);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_quangcao';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTenQC($value){
		$sql = 'SELECT * FROM tbl_quangcao WHERE TenQC = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDuongDanAnh($value){
		$sql = 'SELECT * FROM tbl_quangcao WHERE DuongDanAnh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLink($value){
		$sql = 'SELECT * FROM tbl_quangcao WHERE Link = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByViTri($value){
		$sql = 'SELECT * FROM tbl_quangcao WHERE ViTri = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTrangThai($value){
		$sql = 'SELECT * FROM tbl_quangcao WHERE TrangThai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTenQC($value){
		$sql = 'DELETE FROM tbl_quangcao WHERE TenQC = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDuongDanAnh($value){
		$sql = 'DELETE FROM tbl_quangcao WHERE DuongDanAnh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLink($value){
		$sql = 'DELETE FROM tbl_quangcao WHERE Link = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByViTri($value){
		$sql = 'DELETE FROM tbl_quangcao WHERE ViTri = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTrangThai($value){
		$sql = 'DELETE FROM tbl_quangcao WHERE TrangThai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblQuangcaoMySql 
	 */
	protected function readRow($row){
		$tblQuangcao = new TblQuangcao();
		
		$tblQuangcao->maQC = $row['MaQC'];
		$tblQuangcao->tenQC = $row['TenQC'];
		$tblQuangcao->duongDanAnh = $row['DuongDanAnh'];
		$tblQuangcao->link = $row['Link'];
		$tblQuangcao->viTri = $row['ViTri'];
		$tblQuangcao->trangThai = $row['TrangThai'];

		return $tblQuangcao;
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
	 * @return TblQuangcaoMySql 
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