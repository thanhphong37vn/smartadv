<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
interface TblDonhangDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblDonhang 
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
 	 * @param tblDonhang primary key
 	 */
	public function delete($MaDH);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblDonhang tblDonhang
 	 */
	public function insert($tblDonhang);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblDonhang tblDonhang
 	 */
	public function update($tblDonhang);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByMaTV($value);

	public function queryByTenNguoiDat($value);

	public function queryByNgayDat($value);

	public function queryByEmailNguoiDat($value);

	public function queryByDienThoai($value);

	public function queryByDiaChiNguoiDat($value);

	public function queryByTenNguoiNhan($value);

	public function queryByEmailNguoiNhan($value);

	public function queryByDiaChiNguoiNhan($value);

	public function queryByDienThoaiNN($value);

	public function queryByGhiChu($value);

	public function queryByThanhToan($value);

	public function queryByDaXoa($value);


	public function deleteByMaTV($value);

	public function deleteByTenNguoiDat($value);

	public function deleteByNgayDat($value);

	public function deleteByEmailNguoiDat($value);

	public function deleteByDienThoai($value);

	public function deleteByDiaChiNguoiDat($value);

	public function deleteByTenNguoiNhan($value);

	public function deleteByEmailNguoiNhan($value);

	public function deleteByDiaChiNguoiNhan($value);

	public function deleteByDienThoaiNN($value);

	public function deleteByGhiChu($value);

	public function deleteByThanhToan($value);

	public function deleteByDaXoa($value);


}
?>