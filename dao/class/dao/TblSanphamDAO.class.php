<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
interface TblSanphamDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblSanpham 
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
 	 * @param tblSanpham primary key
 	 */
	public function delete($MaSP);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblSanpham tblSanpham
 	 */
	public function insert($tblSanpham);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblSanpham tblSanpham
 	 */
	public function update($tblSanpham);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTenSP($value);

	public function queryByMoTa($value);

	public function queryByGia($value);

	public function queryByGiaCu($value);

	public function queryByBaoHanh($value);

	public function queryBySPMoi($value);

	public function queryByKhuyenMai($value);

	public function queryByMaLoai($value);

	public function queryByMaNhaSX($value);

	public function queryByNgayThem($value);

	public function queryByNgaySua($value);

	public function queryByLinkDowload($value);

	public function queryByTrangThai($value);


	public function deleteByTenSP($value);

	public function deleteByMoTa($value);

	public function deleteByGia($value);

	public function deleteByGiaCu($value);

	public function deleteByBaoHanh($value);

	public function deleteBySPMoi($value);

	public function deleteByKhuyenMai($value);

	public function deleteByMaLoai($value);

	public function deleteByMaNhaSX($value);

	public function deleteByNgayThem($value);

	public function deleteByNgaySua($value);

	public function deleteByLinkDowload($value);

	public function deleteByTrangThai($value);


}
?>