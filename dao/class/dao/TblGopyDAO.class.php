<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
interface TblGopyDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblGopy 
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
 	 * @param tblGopy primary key
 	 */
	public function delete($MaGopY);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblGopy tblGopy
 	 */
	public function insert($tblGopy);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblGopy tblGopy
 	 */
	public function update($tblGopy);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTieuDe($value);

	public function queryByHoTen($value);

	public function queryByDienThoai($value);

	public function queryByEmail($value);

	public function queryByDiaChi($value);

	public function queryByNoiDung($value);

	public function queryByNgayGopY($value);


	public function deleteByTieuDe($value);

	public function deleteByHoTen($value);

	public function deleteByDienThoai($value);

	public function deleteByEmail($value);

	public function deleteByDiaChi($value);

	public function deleteByNoiDung($value);

	public function deleteByNgayGopY($value);


}
?>