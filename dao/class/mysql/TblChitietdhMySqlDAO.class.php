<?php
/**
 * Class that operate on table 'tbl_chitietdh'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-11 02:37
 */
class TblChitietdhMySqlDAO implements TblChitietdhDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblChitietdhMySql 
	 */
	public function load($maDH, $maSP){
		$sql = 'SELECT * FROM tbl_chitietdh WHERE MaDH = ?  AND MaSP = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($maDH);
		$sqlQuery->setNumber($maSP);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_chitietdh';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_chitietdh ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblChitietdh primary key
 	 */
	public function delete($maDH, $maSP){
		$sql = 'DELETE FROM tbl_chitietdh WHERE MaDH = ?  AND MaSP = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($maDH);
		$sqlQuery->setNumber($maSP);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblChitietdhMySql tblChitietdh
 	 */
	public function insert($tblChitietdh){
		$sql = 'INSERT INTO tbl_chitietdh (SoLuong, DonGia, MaDH, MaSP) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblChitietdh->soLuong);
		$sqlQuery->set($tblChitietdh->donGia);

		
		$sqlQuery->setNumber($tblChitietdh->maDH);

		$sqlQuery->setNumber($tblChitietdh->maSP);

		$this->executeInsert($sqlQuery);	
		//$tblChitietdh->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblChitietdhMySql tblChitietdh
 	 */
	public function update($tblChitietdh){
		$sql = 'UPDATE tbl_chitietdh SET SoLuong = ?, DonGia = ? WHERE MaDH = ?  AND MaSP = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblChitietdh->soLuong);
		$sqlQuery->set($tblChitietdh->donGia);

		
		$sqlQuery->setNumber($tblChitietdh->maDH);

		$sqlQuery->setNumber($tblChitietdh->maSP);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_chitietdh';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySoLuong($value){
		$sql = 'SELECT * FROM tbl_chitietdh WHERE SoLuong = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDonGia($value){
		$sql = 'SELECT * FROM tbl_chitietdh WHERE DonGia = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySoLuong($value){
		$sql = 'DELETE FROM tbl_chitietdh WHERE SoLuong = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDonGia($value){
		$sql = 'DELETE FROM tbl_chitietdh WHERE DonGia = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblChitietdhMySql 
	 */
	protected function readRow($row){
		$tblChitietdh = new TblChitietdh();
		
		$tblChitietdh->maDH = $row['MaDH'];
		$tblChitietdh->maSP = $row['MaSP'];
		$tblChitietdh->soLuong = $row['SoLuong'];
		$tblChitietdh->donGia = $row['DonGia'];

		return $tblChitietdh;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return TblChitietdhMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>