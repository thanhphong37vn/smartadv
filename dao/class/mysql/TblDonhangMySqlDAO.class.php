<?php
/**
 * Class that operate on table 'tbl_donhang'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblDonhangMySqlDAO implements TblDonhangDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblDonhangMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_donhang WHERE MaDH = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_donhang';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_donhang ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblDonhang primary key
 	 */
	public function delete($MaDH){
		$sql = 'DELETE FROM tbl_donhang WHERE MaDH = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($MaDH);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblDonhangMySql tblDonhang
 	 */
	public function insert($tblDonhang){
		$sql = 'INSERT INTO tbl_donhang (MaTV, TenNguoiDat, NgayDat, EmailNguoiDat, DienThoai, DiaChiNguoiDat, TenNguoiNhan, EmailNguoiNhan, DiaChiNguoiNhan, DienThoaiNN, GhiChu, ThanhToan, DaXoa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblDonhang->maTV);
		$sqlQuery->set($tblDonhang->tenNguoiDat);
		$sqlQuery->set($tblDonhang->ngayDat);
		$sqlQuery->set($tblDonhang->emailNguoiDat);
		$sqlQuery->set($tblDonhang->dienThoai);
		$sqlQuery->set($tblDonhang->diaChiNguoiDat);
		$sqlQuery->set($tblDonhang->tenNguoiNhan);
		$sqlQuery->set($tblDonhang->emailNguoiNhan);
		$sqlQuery->set($tblDonhang->diaChiNguoiNhan);
		$sqlQuery->set($tblDonhang->dienThoaiNN);
		$sqlQuery->set($tblDonhang->ghiChu);
		$sqlQuery->setNumber($tblDonhang->thanhToan);
		$sqlQuery->setNumber($tblDonhang->daXoa);

		$id = $this->executeInsert($sqlQuery);	
		$tblDonhang->maDH = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblDonhangMySql tblDonhang
 	 */
	public function update($tblDonhang){
		$sql = 'UPDATE tbl_donhang SET MaTV = ?, TenNguoiDat = ?, NgayDat = ?, EmailNguoiDat = ?, DienThoai = ?, DiaChiNguoiDat = ?, TenNguoiNhan = ?, EmailNguoiNhan = ?, DiaChiNguoiNhan = ?, DienThoaiNN = ?, GhiChu = ?, ThanhToan = ?, DaXoa = ? WHERE MaDH = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblDonhang->maTV);
		$sqlQuery->set($tblDonhang->tenNguoiDat);
		$sqlQuery->set($tblDonhang->ngayDat);
		$sqlQuery->set($tblDonhang->emailNguoiDat);
		$sqlQuery->set($tblDonhang->dienThoai);
		$sqlQuery->set($tblDonhang->diaChiNguoiDat);
		$sqlQuery->set($tblDonhang->tenNguoiNhan);
		$sqlQuery->set($tblDonhang->emailNguoiNhan);
		$sqlQuery->set($tblDonhang->diaChiNguoiNhan);
		$sqlQuery->set($tblDonhang->dienThoaiNN);
		$sqlQuery->set($tblDonhang->ghiChu);
		$sqlQuery->setNumber($tblDonhang->thanhToan);
		$sqlQuery->setNumber($tblDonhang->daXoa);

		$sqlQuery->setNumber($tblDonhang->maDH);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_donhang';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByMaTV($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE MaTV = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTenNguoiDat($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE TenNguoiDat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgayDat($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE NgayDat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmailNguoiDat($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE EmailNguoiDat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDienThoai($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE DienThoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDiaChiNguoiDat($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE DiaChiNguoiDat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTenNguoiNhan($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE TenNguoiNhan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmailNguoiNhan($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE EmailNguoiNhan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDiaChiNguoiNhan($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE DiaChiNguoiNhan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDienThoaiNN($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE DienThoaiNN = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGhiChu($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE GhiChu = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByThanhToan($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE ThanhToan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDaXoa($value){
		$sql = 'SELECT * FROM tbl_donhang WHERE DaXoa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByMaTV($value){
		$sql = 'DELETE FROM tbl_donhang WHERE MaTV = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTenNguoiDat($value){
		$sql = 'DELETE FROM tbl_donhang WHERE TenNguoiDat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgayDat($value){
		$sql = 'DELETE FROM tbl_donhang WHERE NgayDat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmailNguoiDat($value){
		$sql = 'DELETE FROM tbl_donhang WHERE EmailNguoiDat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDienThoai($value){
		$sql = 'DELETE FROM tbl_donhang WHERE DienThoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDiaChiNguoiDat($value){
		$sql = 'DELETE FROM tbl_donhang WHERE DiaChiNguoiDat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTenNguoiNhan($value){
		$sql = 'DELETE FROM tbl_donhang WHERE TenNguoiNhan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmailNguoiNhan($value){
		$sql = 'DELETE FROM tbl_donhang WHERE EmailNguoiNhan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDiaChiNguoiNhan($value){
		$sql = 'DELETE FROM tbl_donhang WHERE DiaChiNguoiNhan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDienThoaiNN($value){
		$sql = 'DELETE FROM tbl_donhang WHERE DienThoaiNN = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGhiChu($value){
		$sql = 'DELETE FROM tbl_donhang WHERE GhiChu = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByThanhToan($value){
		$sql = 'DELETE FROM tbl_donhang WHERE ThanhToan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDaXoa($value){
		$sql = 'DELETE FROM tbl_donhang WHERE DaXoa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblDonhangMySql 
	 */
	protected function readRow($row){
		$tblDonhang = new TblDonhang();
		
		$tblDonhang->maDH = $row['MaDH'];
		$tblDonhang->maTV = $row['MaTV'];
		$tblDonhang->tenNguoiDat = $row['TenNguoiDat'];
		$tblDonhang->ngayDat = $row['NgayDat'];
		$tblDonhang->emailNguoiDat = $row['EmailNguoiDat'];
		$tblDonhang->dienThoai = $row['DienThoai'];
		$tblDonhang->diaChiNguoiDat = $row['DiaChiNguoiDat'];
		$tblDonhang->tenNguoiNhan = $row['TenNguoiNhan'];
		$tblDonhang->emailNguoiNhan = $row['EmailNguoiNhan'];
		$tblDonhang->diaChiNguoiNhan = $row['DiaChiNguoiNhan'];
		$tblDonhang->dienThoaiNN = $row['DienThoaiNN'];
		$tblDonhang->ghiChu = $row['GhiChu'];
		$tblDonhang->thanhToan = $row['ThanhToan'];
		$tblDonhang->daXoa = $row['DaXoa'];

		return $tblDonhang;
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
	 * @return TblDonhangMySql 
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