<?php
/**
 * Class that operate on table 'tbl_thanhvien'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblThanhvienMySqlDAO implements TblThanhvienDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblThanhvienMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_thanhvien WHERE MaTV = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_thanhvien';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_thanhvien ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblThanhvien primary key
 	 */
	public function delete($MaTV){
		$sql = 'DELETE FROM tbl_thanhvien WHERE MaTV = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($MaTV);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblThanhvienMySql tblThanhvien
 	 */
	public function insert($tblThanhvien){
		$sql = 'INSERT INTO tbl_thanhvien (UserName, HoTen, MatKhau, GioiTinh, NgaySinh, DiaChi, Email, SoDienThoai, NgayDangKi, NgayLoginGanNhat, NgaySuaGanNhat) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblThanhvien->userName);
		$sqlQuery->set($tblThanhvien->hoTen);
		$sqlQuery->set($tblThanhvien->matKhau);
		$sqlQuery->setNumber($tblThanhvien->gioiTinh);
		$sqlQuery->set($tblThanhvien->ngaySinh);
		$sqlQuery->set($tblThanhvien->diaChi);
		$sqlQuery->set($tblThanhvien->email);
		$sqlQuery->set($tblThanhvien->soDienThoai);
		$sqlQuery->set($tblThanhvien->ngayDangKi);
		$sqlQuery->set($tblThanhvien->ngayLoginGanNhat);
		$sqlQuery->set($tblThanhvien->ngaySuaGanNhat);

		$id = $this->executeInsert($sqlQuery);	
		$tblThanhvien->maTV = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblThanhvienMySql tblThanhvien
 	 */
	public function update($tblThanhvien){
		$sql = 'UPDATE tbl_thanhvien SET UserName = ?, HoTen = ?, MatKhau = ?, GioiTinh = ?, NgaySinh = ?, DiaChi = ?, Email = ?, SoDienThoai = ?, NgayDangKi = ?, NgayLoginGanNhat = ?, NgaySuaGanNhat = ? WHERE MaTV = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblThanhvien->userName);
		$sqlQuery->set($tblThanhvien->hoTen);
		$sqlQuery->set($tblThanhvien->matKhau);
		$sqlQuery->setNumber($tblThanhvien->gioiTinh);
		$sqlQuery->set($tblThanhvien->ngaySinh);
		$sqlQuery->set($tblThanhvien->diaChi);
		$sqlQuery->set($tblThanhvien->email);
		$sqlQuery->set($tblThanhvien->soDienThoai);
		$sqlQuery->set($tblThanhvien->ngayDangKi);
		$sqlQuery->set($tblThanhvien->ngayLoginGanNhat);
		$sqlQuery->set($tblThanhvien->ngaySuaGanNhat);

		$sqlQuery->setNumber($tblThanhvien->maTV);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_thanhvien';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserName($value){
		$sql = 'SELECT * FROM tbl_thanhvien WHERE UserName = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHoTen($value){
		$sql = 'SELECT * FROM tbl_thanhvien WHERE HoTen = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMatKhau($value){
		$sql = 'SELECT * FROM tbl_thanhvien WHERE MatKhau = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGioiTinh($value){
		$sql = 'SELECT * FROM tbl_thanhvien WHERE GioiTinh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgaySinh($value){
		$sql = 'SELECT * FROM tbl_thanhvien WHERE NgaySinh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDiaChi($value){
		$sql = 'SELECT * FROM tbl_thanhvien WHERE DiaChi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM tbl_thanhvien WHERE Email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySoDienThoai($value){
		$sql = 'SELECT * FROM tbl_thanhvien WHERE SoDienThoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgayDangKi($value){
		$sql = 'SELECT * FROM tbl_thanhvien WHERE NgayDangKi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgayLoginGanNhat($value){
		$sql = 'SELECT * FROM tbl_thanhvien WHERE NgayLoginGanNhat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgaySuaGanNhat($value){
		$sql = 'SELECT * FROM tbl_thanhvien WHERE NgaySuaGanNhat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserName($value){
		$sql = 'DELETE FROM tbl_thanhvien WHERE UserName = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHoTen($value){
		$sql = 'DELETE FROM tbl_thanhvien WHERE HoTen = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMatKhau($value){
		$sql = 'DELETE FROM tbl_thanhvien WHERE MatKhau = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGioiTinh($value){
		$sql = 'DELETE FROM tbl_thanhvien WHERE GioiTinh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgaySinh($value){
		$sql = 'DELETE FROM tbl_thanhvien WHERE NgaySinh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDiaChi($value){
		$sql = 'DELETE FROM tbl_thanhvien WHERE DiaChi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM tbl_thanhvien WHERE Email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySoDienThoai($value){
		$sql = 'DELETE FROM tbl_thanhvien WHERE SoDienThoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgayDangKi($value){
		$sql = 'DELETE FROM tbl_thanhvien WHERE NgayDangKi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgayLoginGanNhat($value){
		$sql = 'DELETE FROM tbl_thanhvien WHERE NgayLoginGanNhat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgaySuaGanNhat($value){
		$sql = 'DELETE FROM tbl_thanhvien WHERE NgaySuaGanNhat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblThanhvienMySql 
	 */
	protected function readRow($row){
		$tblThanhvien = new TblThanhvien();
		
		$tblThanhvien->maTV = $row['MaTV'];
		$tblThanhvien->userName = $row['UserName'];
		$tblThanhvien->hoTen = $row['HoTen'];
		$tblThanhvien->matKhau = $row['MatKhau'];
		$tblThanhvien->gioiTinh = $row['GioiTinh'];
		$tblThanhvien->ngaySinh = $row['NgaySinh'];
		$tblThanhvien->diaChi = $row['DiaChi'];
		$tblThanhvien->email = $row['Email'];
		$tblThanhvien->soDienThoai = $row['SoDienThoai'];
		$tblThanhvien->ngayDangKi = $row['NgayDangKi'];
		$tblThanhvien->ngayLoginGanNhat = $row['NgayLoginGanNhat'];
		$tblThanhvien->ngaySuaGanNhat = $row['NgaySuaGanNhat'];

		return $tblThanhvien;
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
	 * @return TblThanhvienMySql 
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