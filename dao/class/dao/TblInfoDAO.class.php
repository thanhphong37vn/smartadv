<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
interface TblInfoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblInfo 
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
 	 * @param tblInfo primary key
 	 */
	public function delete($MaCT);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblInfo tblInfo
 	 */
	public function insert($tblInfo);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblInfo tblInfo
 	 */
	public function update($tblInfo);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTenCT($value);

	public function queryByDiaChi($value);

	public function queryByDienThoaiDD($value);

	public function queryByHotLine($value);

	public function queryByWebsite($value);

	public function queryByThongTin($value);

	public function queryByViTri($value);


	public function deleteByTenCT($value);

	public function deleteByDiaChi($value);

	public function deleteByDienThoaiDD($value);

	public function deleteByHotLine($value);

	public function deleteByWebsite($value);

	public function deleteByThongTin($value);

	public function deleteByViTri($value);


}
?>