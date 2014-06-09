<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
interface TblNhasxDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblNhasx 
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
 	 * @param tblNhasx primary key
 	 */
	public function delete($MaNhaSX);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblNhasx tblNhasx
 	 */
	public function insert($tblNhasx);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblNhasx tblNhasx
 	 */
	public function update($tblNhasx);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTenNhaSX($value);


	public function deleteByTenNhaSX($value);


}
?>