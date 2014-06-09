<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
interface TblHinhanhDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblHinhanh 
	 */
	public function load($maSP, $duongDan);

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
 	 * @param tblHinhanh primary key
 	 */
	public function delete($maSP, $duongDan);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblHinhanh tblHinhanh
 	 */
	public function insert($tblHinhanh);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblHinhanh tblHinhanh
 	 */
	public function update($tblHinhanh);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>