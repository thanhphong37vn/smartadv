<?php
/**
 * Class that operate on table 'tbl_info'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblInfoMySqlDAO implements TblInfoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblInfoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_info WHERE MaCT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_info';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_info ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblInfo primary key
 	 */
	public function delete($MaCT){
		$sql = 'DELETE FROM tbl_info WHERE MaCT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($MaCT);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblInfoMySql tblInfo
 	 */
	public function insert($tblInfo){
		$sql = 'INSERT INTO tbl_info (TenCT, DiaChi, DienThoaiDD, HotLine, Website, ThongTin, ViTri) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblInfo->tenCT);
		$sqlQuery->set($tblInfo->diaChi);
		$sqlQuery->set($tblInfo->dienThoaiDD);
		$sqlQuery->set($tblInfo->hotLine);
		$sqlQuery->set($tblInfo->website);
		$sqlQuery->set($tblInfo->thongTin);
		$sqlQuery->setNumber($tblInfo->viTri);

		$id = $this->executeInsert($sqlQuery);	
		$tblInfo->maCT = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblInfoMySql tblInfo
 	 */
	public function update($tblInfo){
		$sql = 'UPDATE tbl_info SET TenCT = ?, DiaChi = ?, DienThoaiDD = ?, HotLine = ?, Website = ?, ThongTin = ?, ViTri = ? WHERE MaCT = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblInfo->tenCT);
		$sqlQuery->set($tblInfo->diaChi);
		$sqlQuery->set($tblInfo->dienThoaiDD);
		$sqlQuery->set($tblInfo->hotLine);
		$sqlQuery->set($tblInfo->website);
		$sqlQuery->set($tblInfo->thongTin);
		$sqlQuery->setNumber($tblInfo->viTri);

		$sqlQuery->setNumber($tblInfo->maCT);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_info';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTenCT($value){
		$sql = 'SELECT * FROM tbl_info WHERE TenCT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDiaChi($value){
		$sql = 'SELECT * FROM tbl_info WHERE DiaChi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDienThoaiDD($value){
		$sql = 'SELECT * FROM tbl_info WHERE DienThoaiDD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHotLine($value){
		$sql = 'SELECT * FROM tbl_info WHERE HotLine = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByWebsite($value){
		$sql = 'SELECT * FROM tbl_info WHERE Website = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByThongTin($value){
		$sql = 'SELECT * FROM tbl_info WHERE ThongTin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByViTri($value){
		$sql = 'SELECT * FROM tbl_info WHERE ViTri = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTenCT($value){
		$sql = 'DELETE FROM tbl_info WHERE TenCT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDiaChi($value){
		$sql = 'DELETE FROM tbl_info WHERE DiaChi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDienThoaiDD($value){
		$sql = 'DELETE FROM tbl_info WHERE DienThoaiDD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHotLine($value){
		$sql = 'DELETE FROM tbl_info WHERE HotLine = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByWebsite($value){
		$sql = 'DELETE FROM tbl_info WHERE Website = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByThongTin($value){
		$sql = 'DELETE FROM tbl_info WHERE ThongTin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByViTri($value){
		$sql = 'DELETE FROM tbl_info WHERE ViTri = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblInfoMySql 
	 */
	protected function readRow($row){
		$tblInfo = new TblInfo();
		
		$tblInfo->maCT = $row['MaCT'];
		$tblInfo->tenCT = $row['TenCT'];
		$tblInfo->diaChi = $row['DiaChi'];
		$tblInfo->dienThoaiDD = $row['DienThoaiDD'];
		$tblInfo->hotLine = $row['HotLine'];
		$tblInfo->website = $row['Website'];
		$tblInfo->thongTin = $row['ThongTin'];
		$tblInfo->viTri = $row['ViTri'];

		return $tblInfo;
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
	 * @return TblInfoMySql 
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