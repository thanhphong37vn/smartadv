<?php
/**
 * Class that operate on table 'tbl_sanpham'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblSanphamMySqlDAO implements TblSanphamDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblSanphamMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_sanpham WHERE MaSP = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_sanpham';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_sanpham ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblSanpham primary key
 	 */
	public function delete($MaSP){
		$sql = 'DELETE FROM tbl_sanpham WHERE MaSP = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($MaSP);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblSanphamMySql tblSanpham
 	 */
	public function insert($tblSanpham){
		$sql = 'INSERT INTO tbl_sanpham (TenSP, MoTa, Gia, GiaCu, BaoHanh, SPMoi, KhuyenMai, MaLoai, MaNhaSX, NgayThem, NgaySua, LinkDowload, TrangThai) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblSanpham->tenSP);
		$sqlQuery->set($tblSanpham->moTa);
		$sqlQuery->set($tblSanpham->gia);
		$sqlQuery->set($tblSanpham->giaCu);
		$sqlQuery->setNumber($tblSanpham->baoHanh);
		$sqlQuery->setNumber($tblSanpham->sPMoi);
		$sqlQuery->setNumber($tblSanpham->khuyenMai);
		$sqlQuery->setNumber($tblSanpham->maLoai);
		$sqlQuery->setNumber($tblSanpham->maNhaSX);
		$sqlQuery->set($tblSanpham->ngayThem);
		$sqlQuery->set($tblSanpham->ngaySua);
		$sqlQuery->set($tblSanpham->linkDowload);
		$sqlQuery->setNumber($tblSanpham->trangThai);

		$id = $this->executeInsert($sqlQuery);	
		$tblSanpham->maSP = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblSanphamMySql tblSanpham
 	 */
	public function update($tblSanpham){
		$sql = 'UPDATE tbl_sanpham SET TenSP = ?, MoTa = ?, Gia = ?, GiaCu = ?, BaoHanh = ?, SPMoi = ?, KhuyenMai = ?, MaLoai = ?, MaNhaSX = ?, NgayThem = ?, NgaySua = ?, LinkDowload = ?, TrangThai = ? WHERE MaSP = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblSanpham->tenSP);
		$sqlQuery->set($tblSanpham->moTa);
		$sqlQuery->set($tblSanpham->gia);
		$sqlQuery->set($tblSanpham->giaCu);
		$sqlQuery->setNumber($tblSanpham->baoHanh);
		$sqlQuery->setNumber($tblSanpham->sPMoi);
		$sqlQuery->setNumber($tblSanpham->khuyenMai);
		$sqlQuery->setNumber($tblSanpham->maLoai);
		$sqlQuery->setNumber($tblSanpham->maNhaSX);
		$sqlQuery->set($tblSanpham->ngayThem);
		$sqlQuery->set($tblSanpham->ngaySua);
		$sqlQuery->set($tblSanpham->linkDowload);
		$sqlQuery->setNumber($tblSanpham->trangThai);

		$sqlQuery->setNumber($tblSanpham->maSP);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_sanpham';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTenSP($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE TenSP = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMoTa($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE MoTa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGia($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE Gia = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGiaCu($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE GiaCu = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBaoHanh($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE BaoHanh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySPMoi($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE SPMoi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByKhuyenMai($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE KhuyenMai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMaLoai($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE MaLoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMaNhaSX($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE MaNhaSX = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgayThem($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE NgayThem = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgaySua($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE NgaySua = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLinkDowload($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE LinkDowload = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTrangThai($value){
		$sql = 'SELECT * FROM tbl_sanpham WHERE TrangThai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTenSP($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE TenSP = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMoTa($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE MoTa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGia($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE Gia = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGiaCu($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE GiaCu = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBaoHanh($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE BaoHanh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySPMoi($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE SPMoi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByKhuyenMai($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE KhuyenMai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMaLoai($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE MaLoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMaNhaSX($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE MaNhaSX = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgayThem($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE NgayThem = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgaySua($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE NgaySua = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLinkDowload($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE LinkDowload = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTrangThai($value){
		$sql = 'DELETE FROM tbl_sanpham WHERE TrangThai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblSanphamMySql 
	 */
	protected function readRow($row){
		$tblSanpham = new TblSanpham();
		
		$tblSanpham->maSP = $row['MaSP'];
		$tblSanpham->tenSP = $row['TenSP'];
		$tblSanpham->moTa = $row['MoTa'];
		$tblSanpham->gia = $row['Gia'];
		$tblSanpham->giaCu = $row['GiaCu'];
		$tblSanpham->baoHanh = $row['BaoHanh'];
		$tblSanpham->sPMoi = $row['SPMoi'];
		$tblSanpham->khuyenMai = $row['KhuyenMai'];
		$tblSanpham->maLoai = $row['MaLoai'];
		$tblSanpham->maNhaSX = $row['MaNhaSX'];
		$tblSanpham->ngayThem = $row['NgayThem'];
		$tblSanpham->ngaySua = $row['NgaySua'];
		$tblSanpham->linkDowload = $row['LinkDowload'];
		$tblSanpham->trangThai = $row['TrangThai'];

		return $tblSanpham;
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
	 * @return TblSanphamMySql 
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