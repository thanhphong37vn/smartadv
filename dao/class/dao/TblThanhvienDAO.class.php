<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
interface TblThanhvienDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblThanhvien 
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
 	 * @param tblThanhvien primary key
 	 */
	public function delete($MaTV);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblThanhvien tblThanhvien
 	 */
	public function insert($tblThanhvien);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblThanhvien tblThanhvien
 	 */
	public function update($tblThanhvien);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserName($value);

	public function queryByHoTen($value);

	public function queryByMatKhau($value);

	public function queryByGioiTinh($value);

	public function queryByNgaySinh($value);

	public function queryByDiaChi($value);

	public function queryByEmail($value);

	public function queryBySoDienThoai($value);

	public function queryByNgayDangKi($value);

	public function queryByNgayLoginGanNhat($value);

	public function queryByNgaySuaGanNhat($value);


	public function deleteByUserName($value);

	public function deleteByHoTen($value);

	public function deleteByMatKhau($value);

	public function deleteByGioiTinh($value);

	public function deleteByNgaySinh($value);

	public function deleteByDiaChi($value);

	public function deleteByEmail($value);

	public function deleteBySoDienThoai($value);

	public function deleteByNgayDangKi($value);

	public function deleteByNgayLoginGanNhat($value);

	public function deleteByNgaySuaGanNhat($value);


}
?>