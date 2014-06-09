<?php
/**
 * Class that operate on table 'tbl_banner'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblBannerMySqlDAO implements TblBannerDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblBannerMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_banner WHERE MaBanner = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_banner';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_banner ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblBanner primary key
 	 */
	public function delete($MaBanner){
		$sql = 'DELETE FROM tbl_banner WHERE MaBanner = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($MaBanner);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblBannerMySql tblBanner
 	 */
	public function insert($tblBanner){
		$sql = 'INSERT INTO tbl_banner (ChuThich, DuongDan, ViTri, TrangThai) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblBanner->chuThich);
		$sqlQuery->set($tblBanner->duongDan);
		$sqlQuery->setNumber($tblBanner->viTri);
		$sqlQuery->setNumber($tblBanner->trangThai);

		$id = $this->executeInsert($sqlQuery);	
		$tblBanner->maBanner = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblBannerMySql tblBanner
 	 */
	public function update($tblBanner){
		$sql = 'UPDATE tbl_banner SET ChuThich = ?, DuongDan = ?, ViTri = ?, TrangThai = ? WHERE MaBanner = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblBanner->chuThich);
		$sqlQuery->set($tblBanner->duongDan);
		$sqlQuery->setNumber($tblBanner->viTri);
		$sqlQuery->setNumber($tblBanner->trangThai);

		$sqlQuery->setNumber($tblBanner->maBanner);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_banner';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByChuThich($value){
		$sql = 'SELECT * FROM tbl_banner WHERE ChuThich = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDuongDan($value){
		$sql = 'SELECT * FROM tbl_banner WHERE DuongDan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByViTri($value){
		$sql = 'SELECT * FROM tbl_banner WHERE ViTri = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTrangThai($value){
		$sql = 'SELECT * FROM tbl_banner WHERE TrangThai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByChuThich($value){
		$sql = 'DELETE FROM tbl_banner WHERE ChuThich = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDuongDan($value){
		$sql = 'DELETE FROM tbl_banner WHERE DuongDan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByViTri($value){
		$sql = 'DELETE FROM tbl_banner WHERE ViTri = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTrangThai($value){
		$sql = 'DELETE FROM tbl_banner WHERE TrangThai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblBannerMySql 
	 */
	protected function readRow($row){
		$tblBanner = new TblBanner();
		
		$tblBanner->maBanner = $row['MaBanner'];
		$tblBanner->chuThich = $row['ChuThich'];
		$tblBanner->duongDan = $row['DuongDan'];
		$tblBanner->viTri = $row['ViTri'];
		$tblBanner->trangThai = $row['TrangThai'];

		return $tblBanner;
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
	 * @return TblBannerMySql 
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