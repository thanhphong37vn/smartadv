<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
interface TblBannerDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblBanner 
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
 	 * @param tblBanner primary key
 	 */
	public function delete($MaBanner);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblBanner tblBanner
 	 */
	public function insert($tblBanner);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblBanner tblBanner
 	 */
	public function update($tblBanner);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByChuThich($value);

	public function queryByDuongDan($value);

	public function queryByViTri($value);

	public function queryByTrangThai($value);


	public function deleteByChuThich($value);

	public function deleteByDuongDan($value);

	public function deleteByViTri($value);

	public function deleteByTrangThai($value);


}
?>