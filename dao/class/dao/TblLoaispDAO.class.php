<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
interface TblLoaispDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblLoaisp 
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
 	 * @param tblLoaisp primary key
 	 */
	public function delete($MaLoai);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblLoaisp tblLoaisp
 	 */
	public function insert($tblLoaisp);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblLoaisp tblLoaisp
 	 */
	public function update($tblLoaisp);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTenLoai($value);

	public function queryByMaCha($value);


	public function deleteByTenLoai($value);

	public function deleteByMaCha($value);


}
?>