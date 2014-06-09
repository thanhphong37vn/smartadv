<?php
/**
 * Class that operate on table 'tbl_admin'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblAdminMySqlDAO implements TblAdminDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblAdminMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_admin WHERE MaAdmin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_admin';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_admin ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblAdmin primary key
 	 */
	public function delete($MaAdmin){
		$sql = 'DELETE FROM tbl_admin WHERE MaAdmin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($MaAdmin);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblAdminMySql tblAdmin
 	 */
	public function insert($tblAdmin){
		$sql = 'INSERT INTO tbl_admin (TenDangNhap, MatKhau, HoTen, Email, DienThoai, QuyenHan, NgayTao, NgayLoginGanNhat, NgaySuaGanNhat, Avatar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblAdmin->tenDangNhap);
		$sqlQuery->set($tblAdmin->matKhau);
		$sqlQuery->set($tblAdmin->hoTen);
		$sqlQuery->set($tblAdmin->email);
		$sqlQuery->set($tblAdmin->dienThoai);
		$sqlQuery->setNumber($tblAdmin->quyenHan);
		$sqlQuery->set($tblAdmin->ngayTao);
		$sqlQuery->set($tblAdmin->ngayLoginGanNhat);
		$sqlQuery->set($tblAdmin->ngaySuaGanNhat);
		$sqlQuery->set($tblAdmin->avatar);

		$id = $this->executeInsert($sqlQuery);	
		$tblAdmin->maAdmin = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblAdminMySql tblAdmin
 	 */
	public function update($tblAdmin){
		$sql = 'UPDATE tbl_admin SET TenDangNhap = ?, MatKhau = ?, HoTen = ?, Email = ?, DienThoai = ?, QuyenHan = ?, NgayTao = ?, NgayLoginGanNhat = ?, NgaySuaGanNhat = ?, Avatar = ? WHERE MaAdmin = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblAdmin->tenDangNhap);
		$sqlQuery->set($tblAdmin->matKhau);
		$sqlQuery->set($tblAdmin->hoTen);
		$sqlQuery->set($tblAdmin->email);
		$sqlQuery->set($tblAdmin->dienThoai);
		$sqlQuery->setNumber($tblAdmin->quyenHan);
		$sqlQuery->set($tblAdmin->ngayTao);
		$sqlQuery->set($tblAdmin->ngayLoginGanNhat);
		$sqlQuery->set($tblAdmin->ngaySuaGanNhat);
		$sqlQuery->set($tblAdmin->avatar);

		$sqlQuery->setNumber($tblAdmin->maAdmin);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_admin';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTenDangNhap($value){
		$sql = 'SELECT * FROM tbl_admin WHERE TenDangNhap = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMatKhau($value){
		$sql = 'SELECT * FROM tbl_admin WHERE MatKhau = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHoTen($value){
		$sql = 'SELECT * FROM tbl_admin WHERE HoTen = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM tbl_admin WHERE Email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDienThoai($value){
		$sql = 'SELECT * FROM tbl_admin WHERE DienThoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByQuyenHan($value){
		$sql = 'SELECT * FROM tbl_admin WHERE QuyenHan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgayTao($value){
		$sql = 'SELECT * FROM tbl_admin WHERE NgayTao = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgayLoginGanNhat($value){
		$sql = 'SELECT * FROM tbl_admin WHERE NgayLoginGanNhat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNgaySuaGanNhat($value){
		$sql = 'SELECT * FROM tbl_admin WHERE NgaySuaGanNhat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAvatar($value){
		$sql = 'SELECT * FROM tbl_admin WHERE Avatar = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTenDangNhap($value){
		$sql = 'DELETE FROM tbl_admin WHERE TenDangNhap = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMatKhau($value){
		$sql = 'DELETE FROM tbl_admin WHERE MatKhau = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHoTen($value){
		$sql = 'DELETE FROM tbl_admin WHERE HoTen = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM tbl_admin WHERE Email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDienThoai($value){
		$sql = 'DELETE FROM tbl_admin WHERE DienThoai = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByQuyenHan($value){
		$sql = 'DELETE FROM tbl_admin WHERE QuyenHan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgayTao($value){
		$sql = 'DELETE FROM tbl_admin WHERE NgayTao = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgayLoginGanNhat($value){
		$sql = 'DELETE FROM tbl_admin WHERE NgayLoginGanNhat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNgaySuaGanNhat($value){
		$sql = 'DELETE FROM tbl_admin WHERE NgaySuaGanNhat = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAvatar($value){
		$sql = 'DELETE FROM tbl_admin WHERE Avatar = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblAdminMySql 
	 */
	protected function readRow($row){
		$tblAdmin = new TblAdmin();
		
		$tblAdmin->maAdmin = $row['MaAdmin'];
		$tblAdmin->tenDangNhap = $row['TenDangNhap'];
		$tblAdmin->matKhau = $row['MatKhau'];
		$tblAdmin->hoTen = $row['HoTen'];
		$tblAdmin->email = $row['Email'];
		$tblAdmin->dienThoai = $row['DienThoai'];
		$tblAdmin->quyenHan = $row['QuyenHan'];
		$tblAdmin->ngayTao = $row['NgayTao'];
		$tblAdmin->ngayLoginGanNhat = $row['NgayLoginGanNhat'];
		$tblAdmin->ngaySuaGanNhat = $row['NgaySuaGanNhat'];
		$tblAdmin->avatar = $row['Avatar'];

		return $tblAdmin;
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
	 * @return TblAdminMySql 
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