<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
interface TblAdminDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblAdmin 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param tblAdmin primary key
 	 */
	public function delete($MaAdmin);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblAdmin tblAdmin
 	 */
	public function insert($tblAdmin);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblAdmin tblAdmin
 	 */
	public function update($tblAdmin);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTenDangNhap($value);

	public function queryByMatKhau($value);

	public function queryByHoTen($value);

	public function queryByEmail($value);

	public function queryByDienThoai($value);

	public function queryByQuyenHan($value);

	public function queryByNgayTao($value);

	public function queryByNgayLoginGanNhat($value);

	public function queryByNgaySuaGanNhat($value);

	public function queryByAvatar($value);


	public function deleteByTenDangNhap($value);

	public function deleteByMatKhau($value);

	public function deleteByHoTen($value);

	public function deleteByEmail($value);

	public function deleteByDienThoai($value);

	public function deleteByQuyenHan($value);

	public function deleteByNgayTao($value);

	public function deleteByNgayLoginGanNhat($value);

	public function deleteByNgaySuaGanNhat($value);

	public function deleteByAvatar($value);


}
?>