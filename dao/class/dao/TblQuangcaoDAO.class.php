<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
interface TblQuangcaoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblQuangcao 
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
 	 * @param tblQuangcao primary key
 	 */
	public function delete($MaQC);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblQuangcao tblQuangcao
 	 */
	public function insert($tblQuangcao);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblQuangcao tblQuangcao
 	 */
	public function update($tblQuangcao);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTenQC($value);

	public function queryByDuongDanAnh($value);

	public function queryByLink($value);

	public function queryByViTri($value);

	public function queryByTrangThai($value);


	public function deleteByTenQC($value);

	public function deleteByDuongDanAnh($value);

	public function deleteByLink($value);

	public function deleteByViTri($value);

	public function deleteByTrangThai($value);


}
?>