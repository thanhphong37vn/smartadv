<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
interface TblChitietdhDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblChitietdh 
	 */
	public function load($maDH, $maSP);

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
 	 * @param tblChitietdh primary key
 	 */
	public function delete($maDH, $maSP);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblChitietdh tblChitietdh
 	 */
	public function insert($tblChitietdh);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblChitietdh tblChitietdh
 	 */
	public function update($tblChitietdh);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySoLuong($value);

	public function queryByDonGia($value);


	public function deleteBySoLuong($value);

	public function deleteByDonGia($value);


}
?>