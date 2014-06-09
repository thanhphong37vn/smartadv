<?php
/**
 * Class that operate on table 'tbl_thanhvien_temp'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblThanhvienTempMySqlDAO implements TblThanhvienTempDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblThanhvienTempMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_thanhvien_temp WHERE confirm_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_thanhvien_temp';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_thanhvien_temp ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblThanhvienTemp primary key
 	 */
	public function delete($confirm_code){
		$sql = 'DELETE FROM tbl_thanhvien_temp WHERE confirm_code = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($confirm_code);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblThanhvienTempMySql tblThanhvienTemp
 	 */
	public function insert($tblThanhvienTemp){
		$sql = 'INSERT INTO tbl_thanhvien_temp (UserName, HoTen, MatKhau, GioiTinh, NgaySinh, DiaChi, Email, SoDienThoai, NgayDangKi) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblThanhvienTemp->userName);
		$sqlQuery->set($tblThanhvienTemp->hoTen);
		$sqlQuery->set($tblThanhvienTemp->matKhau);
		$sqlQuery->setNumber($tblThanhvienTemp->gioiTinh);
		$sqlQuery->set($tblThanhvienTemp->ngaySinh);
		$sqlQuery->set($tblThanhvienTemp->diaChi);
		$sqlQuery->set($tblThanhvienTemp->email);
		$sqlQuery->set($tblThanhvienTemp->soDienThoai);
		$sqlQuery->set($tblThanhvienTemp->ngayDangKi);

		$id = $this->executeInsert($sqlQuery);	
		$tblThanhvienTemp->confirmCode = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblThanhvienTempMySql tblThanhvienTemp
 	 */
	public function update($tblThanhvienTemp){
		$sql = 'UPDATE tbl_thanhvien_temp SET UserName = ?, HoTen = ?, MatKhau = ?, GioiTinh = ?, NgaySinh = ?, DiaChi = ?, Email = ?, SoDienThoai = ?, NgayDangKi = ? WHERE confirm_code = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblThanhvienTemp->userName);
		$sqlQuery->set($tblThanhvienTemp->hoTen);
		$sqlQuery->set($tblThanhvienTemp->matKhau);
		$sqlQuery->setNumber($tblThanhvienTemp->gioiTinh);
		$sqlQuery->set($tblThanhvienTemp->ngaySinh);
		$sqlQuery->set($tblThanhvienTemp->diaChi);
		$sqlQuery->set($tblThanhvienTemp->email);
		$sqlQuery->set($tblThanhvienTemp->soDienThoai);
		$sqlQuery->set($tblThanhvienTemp->ngayDangKi);

		$sqlQuery->set($tblThanhvienTemp->confirmCode);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_thanhvien_temp';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserName($value){
		$sql = 'SELECT * FROM tbl_thanhvien_temp WHERE UserName = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHoTen($value){
		$sql = 'SELECT * FROM tbl_thanhvien_temp WHERE HoTen = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMatKhau($value){
		$sql = 'SELECT * FROM tbl_thanhvien_temp WHERE MatKhau = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGioiTinh($value){
		$sql = 'SELECT * FROM tbl_thanhvien_temp WHERE GioiTinh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgaySinh($value){
		$sql = 'SELECT * FROM tbl_thanhvien_temp WHERE NgaySinh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDiaChi($value){
		$sql = 'SELECT * FROM tbl_thanhvien_temp WHERE DiaChi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM tbl_thanhvien_temp WHERE Email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySoDienThoai($value){
		$sql = 'SELECT * FROM tbl_thanhvien_temp WHERE SoDienThoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgayDangKi($value){
		$sql = 'SELECT * FROM tbl_thanhvien_temp WHERE NgayDangKi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserName($value){
		$sql = 'DELETE FROM tbl_thanhvien_temp WHERE UserName = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHoTen($value){
		$sql = 'DELETE FROM tbl_thanhvien_temp WHERE HoTen = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMatKhau($value){
		$sql = 'DELETE FROM tbl_thanhvien_temp WHERE MatKhau = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGioiTinh($value){
		$sql = 'DELETE FROM tbl_thanhvien_temp WHERE GioiTinh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgaySinh($value){
		$sql = 'DELETE FROM tbl_thanhvien_temp WHERE NgaySinh = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDiaChi($value){
		$sql = 'DELETE FROM tbl_thanhvien_temp WHERE DiaChi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM tbl_thanhvien_temp WHERE Email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySoDienThoai($value){
		$sql = 'DELETE FROM tbl_thanhvien_temp WHERE SoDienThoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgayDangKi($value){
		$sql = 'DELETE FROM tbl_thanhvien_temp WHERE NgayDangKi = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblThanhvienTempMySql 
	 */
	protected function readRow($row){
		$tblThanhvienTemp = new TblThanhvienTemp();
		
		$tblThanhvienTemp->confirmCode = $row['confirm_code'];
		$tblThanhvienTemp->userName = $row['UserName'];
		$tblThanhvienTemp->hoTen = $row['HoTen'];
		$tblThanhvienTemp->matKhau = $row['MatKhau'];
		$tblThanhvienTemp->gioiTinh = $row['GioiTinh'];
		$tblThanhvienTemp->ngaySinh = $row['NgaySinh'];
		$tblThanhvienTemp->diaChi = $row['DiaChi'];
		$tblThanhvienTemp->email = $row['Email'];
		$tblThanhvienTemp->soDienThoai = $row['SoDienThoai'];
		$tblThanhvienTemp->ngayDangKi = $row['NgayDangKi'];

		return $tblThanhvienTemp;
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
	 * @return TblThanhvienTempMySql 
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