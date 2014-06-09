<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return TblAdminDAO
	 */
	public static function getTblAdminDAO(){
		return new TblAdminMySqlExtDAO();
	}

	/**
	 * @return TblBannerDAO
	 */
	public static function getTblBannerDAO(){
		return new TblBannerMySqlExtDAO();
	}

	/**
	 * @return TblChitietdhDAO
	 */
	public static function getTblChitietdhDAO(){
		return new TblChitietdhMySqlExtDAO();
	}

	/**
	 * @return TblDonhangDAO
	 */
	public static function getTblDonhangDAO(){
		return new TblDonhangMySqlExtDAO();
	}

	/**
	 * @return TblGopyDAO
	 */
	public static function getTblGopyDAO(){
		return new TblGopyMySqlExtDAO();
	}

	/**
	 * @return TblHinhanhDAO
	 */
	public static function getTblHinhanhDAO(){
		return new TblHinhanhMySqlExtDAO();
	}

	/**
	 * @return TblInfoDAO
	 */
	public static function getTblInfoDAO(){
		return new TblInfoMySqlExtDAO();
	}

	/**
	 * @return TblLoaispDAO
	 */
	public static function getTblLoaispDAO(){
		return new TblLoaispMySqlExtDAO();
	}

	/**
	 * @return TblNhasxDAO
	 */
	public static function getTblNhasxDAO(){
		return new TblNhasxMySqlExtDAO();
	}

	/**
	 * @return TblQuangcaoDAO
	 */
	public static function getTblQuangcaoDAO(){
		return new TblQuangcaoMySqlExtDAO();
	}

	/**
	 * @return TblSanphamDAO
	 */
	public static function getTblSanphamDAO(){
		return new TblSanphamMySqlExtDAO();
	}

	/**
	 * @return TblThanhvienDAO
	 */
	public static function getTblThanhvienDAO(){
		return new TblThanhvienMySqlExtDAO();
	}

	/**
	 * @return TblThanhvienTempDAO
	 */
	public static function getTblThanhvienTempDAO(){
		return new TblThanhvienTempMySqlExtDAO();
	}


}
?>