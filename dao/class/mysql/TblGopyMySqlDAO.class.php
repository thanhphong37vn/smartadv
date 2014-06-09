<?php
/**
 * Class that operate on table 'tbl_gopy'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblGopyMySqlDAO implements TblGopyDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblGopyMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_gopy WHERE MaGopY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_gopy';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_gopy ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblGopy primary key
 	 */
	public function delete($MaGopY){
		$sql = 'DELETE FROM tbl_gopy WHERE MaGopY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($MaGopY);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblGopyMySql tblGopy
 	 */
	public function insert($tblGopy){
		$sql = 'INSERT INTO tbl_gopy (TieuDe, HoTen, DienThoai, Email, DiaChi, NoiDung, NgayGopY) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblGopy->tieuDe);
		$sqlQuery->set($tblGopy->hoTen);
		$sqlQuery->set($tblGopy->dienThoai);
		$sqlQuery->set($tblGopy->email);
		$sqlQuery->set($tblGopy->diaChi);
		$sqlQuery->set($tblGopy->noiDung);
		$sqlQuery->set($tblGopy->ngayGopY);

		$id = $this->executeInsert($sqlQuery);	
		$tblGopy->maGopY = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblGopyMySql tblGopy
 	 */
	public function update($tblGopy){
		$sql = 'UPDATE tbl_gopy SET TieuDe = ?, HoTen = ?, DienThoai = ?, Email = ?, DiaChi = ?, NoiDung = ?, NgayGopY = ? WHERE MaGopY = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblGopy->tieuDe);
		$sqlQuery->set($tblGopy->hoTen);
		$sqlQuery->set($tblGopy->dienThoai);
		$sqlQuery->set($tblGopy->email);
		$sqlQuery->set($tblGopy->diaChi);
		$sqlQuery->set($tblGopy->noiDung);
		$sqlQuery->set($tblGopy->ngayGopY);

		$sqlQuery->setNumber($tblGopy->maGopY);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_gopy';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTieuDe($value){
		$sql = 'SELECT * FROM tbl_gopy WHERE TieuDe = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHoTen($value){
		$sql = 'SELECT * FROM tbl_gopy WHERE HoTen = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDienThoai($value){
		$sql = 'SELECT * FROM tbl_gopy WHERE DienThoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM tbl_gopy WHERE Email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDiaChi($value){
		$sql = 'SELECT * FROM tbl_gopy WHERE DiaChi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNoiDung($value){
		$sql = 'SELECT * FROM tbl_gopy WHERE NoiDung = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgayGopY($value){
		$sql = 'SELECT * FROM tbl_gopy WHERE NgayGopY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTieuDe($value){
		$sql = 'DELETE FROM tbl_gopy WHERE TieuDe = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHoTen($value){
		$sql = 'DELETE FROM tbl_gopy WHERE HoTen = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDienThoai($value){
		$sql = 'DELETE FROM tbl_gopy WHERE DienThoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM tbl_gopy WHERE Email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDiaChi($value){
		$sql = 'DELETE FROM tbl_gopy WHERE DiaChi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNoiDung($value){
		$sql = 'DELETE FROM tbl_gopy WHERE NoiDung = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgayGopY($value){
		$sql = 'DELETE FROM tbl_gopy WHERE NgayGopY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblGopyMySql 
	 */
	protected function readRow($row){
		$tblGopy = new TblGopy();
		
		$tblGopy->maGopY = $row['MaGopY'];
		$tblGopy->tieuDe = $row['TieuDe'];
		$tblGopy->hoTen = $row['HoTen'];
		$tblGopy->dienThoai = $row['DienThoai'];
		$tblGopy->email = $row['Email'];
		$tblGopy->diaChi = $row['DiaChi'];
		$tblGopy->noiDung = $row['NoiDung'];
		$tblGopy->ngayGopY = $row['NgayGopY'];

		return $tblGopy;
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
	 * @return TblGopyMySql 
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