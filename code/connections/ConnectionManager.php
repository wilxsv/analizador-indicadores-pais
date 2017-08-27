<?php
class ConnectionManager
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();

	
	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */	
	protected $_tablesConnectionIds;
	
	
	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}
	
	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */	
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}
	
	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */	
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}
	
	/**
	 * Get connection object by the connection id 
	 * @param String connId
	 * @return Connection
	 */	
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) )
			$this->cache[ $connId ] = $this->getConnection( $connId );

		return $this->cache[ $connId ];
	}
	
	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "delitos_at_localhost" );
	}

	/**
	 * Get the users table db connection 
	 * @return Connection
	 */	
	public function getForLogin()
	{
		return $this->byId( "delitos_at_localhost" );
	}
	
	/**
	 * Get the log table db connection 
	 * @return Connection
	 */	
	public function getForAudit()
	{
		return $this->getDefault();
	}
	
	/**
	 * Get the locking table db connection 
	 * @return Connection
	 */		
	public function getForLocking()
	{
		return $this->getDefault();
	}	
	
	/**
	 * Get the 'ug_groups' table db connection 
	 * @return Connection
	 */	
	public function getForUserGroups()
	{
		return $this->getDefault();
	}		

	/**
	 * Get the saved searches table db connection 
	 * @return Connection
	 */	
	public function getForSavedSearches()
	{
		return $this->getDefault();
	}

	/**
	 * Get the webreports tables db connection 
	 * @return Connection
	 */		
	public function getForWebReports()
	{
		return $this->getDefault();
	}
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		include_once getabspath("connections/Connection.php");
		
		$data = $this->_connectionsData[ $connId ];	
		switch( $data["connStringType"] )
		{
			case "mysql":
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/MySQLiConnection.php");
					return new MySQLiConnection( $data );
				}
				
				include_once getabspath("connections/MySQLConnection.php");	
				return new MySQLConnection( $data );	

			case "mssql":
			case "compact":
				if( useMSSQLWinConnect() )
				{
					include_once getabspath("connections/MSSQLWinConnection.php");
					return new MSSQLWinConnection( $data );
				}
				if( isSqlsrvExtLoaded() )
				{
					include_once getabspath("connections/MSSQLSrvConnection.php");	
					return new MSSQLSrvConnection( $data );
				}
				
				if( function_exists("mssql_connect") ) {
					include_once getabspath("connections/MSSQLUnixConnection.php");
					return new MSSQLUnixConnection( $data );			
				}

				if( class_exists("PDO") ) {
					include_once getabspath("connections/PDOConnection.php");
					$drivers = pdo_drivers();
					if( in_array( "sqlsrv", $drivers) )
					{
						$data["PDOString"] = "sqlsrv:Server=" . $data["connInfo"][0] . ";Database=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
					if( in_array( "dblib", $drivers) )
					{
						$data["PDOString"] = "dblib:host=" . $data["connInfo"][0] . ";dbname=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
				}
				echo "No SQL Server driver found in your PHP settings.";
				if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
					echo "<br>To enable SQL Server support add the following line to php.ini file:";
					echo "<br>extension=php_com_dotnet.dll";
				}
				exit();

			case "msaccess":
			case "odbc":
			case "odbcdsn":
			case "custom":
			case "file":
				if( stripos($data["ODBCString"], 'Provider=') !== false )
				{
					include_once getabspath("connections/ADOConnection.php");
					return new ADOConnection( $data );
				}
				
				include_once getabspath("connections/ODBCConnection.php");
				return new ODBCConnection( $data );
			
			case "oracle":
				include_once getabspath("connections/OracleConnection.php");
				return new OracleConnection( $data );

			case "postgre":
				include_once getabspath("connections/PostgreConnection.php");
				return new PostgreConnection( $data );

			case "db2":
				include_once getabspath("connections/DB2Connection.php");
				return new DB2Connection( $data );

			case "informix":
				include_once getabspath("connections/InformixConnection.php");
				return new InformixConnection( $data );

			case "sqlite":
				include_once getabspath("connections/SQLite3Connection.php");
				return new SQLite3Connection( $data );
			case "pdo":
				include_once getabspath("connections/PDOConnection.php");
				return new PDOConnection( $data );
		}
	}
	
	/**
	 * Set the data representing the project's 
	 * db connection properties
	 */	 
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();
		
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "delitos_at_localhost";
		$data["connName"] = "delitos at localhost";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;localhost;root;;;delitos;;1"; //currently unused
		
		$this->_connectionsIdByName["delitos at localhost"] = "delitos_at_localhost";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "root";
		$data["ODBCPWD"] = "";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "localhost";
		$data["connInfo"][1] = "root";
		$data["connInfo"][2] = "";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "delitos";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 3.51 Driver};Server=localhost;Uid=root;Pwd=;Database=delitos;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["delitos_at_localhost"] = $data;
		$this->_connectionsData = $connectionsData;
	}
	
	/**
	 * Set the data representing the correspondence between 
	 * the project's table names and db connections
	 */	 
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["Delitos especificos"] = "delitos_at_localhost";
		$connectionsIds["carcel1"] = "delitos_at_localhost";
		$connectionsIds["class_lugarespecifico"] = "delitos_at_localhost";
		$connectionsIds["sectorppdf"] = "delitos_at_localhost";
		$connectionsIds["tipo_mara"] = "delitos_at_localhost";
		$connectionsIds["carcel_CAMBIOS"] = "delitos_at_localhost";
		$connectionsIds["clasificacion"] = "delitos_at_localhost";
		$connectionsIds["Espacios abiertos"] = "delitos_at_localhost";
		$connectionsIds["hechosdelictivos"] = "delitos_at_localhost";
		$connectionsIds["hechosdelictivos_lugaresp"] = "delitos_at_localhost";
		$connectionsIds["Todos los datos PPL"] = "delitos_at_localhost";
		$connectionsIds["PPL pertenecientes a Pandilla"] = "delitos_at_localhost";
		$connectionsIds["Sector PPD"] = "delitos_at_localhost";
		$connectionsIds["Homicidios tentados por rango etarios, según sexo victima"] = "delitos_at_localhost";
		$connectionsIds["Hurtos por rango etarios, según sexo victima"] = "delitos_at_localhost";
		$connectionsIds["Hurtos de vehículo por rango etarios, según sexo victima"] = "delitos_at_localhost";
		$connectionsIds["Lesiones por rango etarios etarios, según sexo victima"] = "delitos_at_localhost";
		$connectionsIds["Robos por rango etario, según sexo victima"] = "delitos_at_localhost";
		$connectionsIds["Robo de vehículo por rango etario, según sexo victima"] = "delitos_at_localhost";
		$connectionsIds["Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima"] = "delitos_at_localhost";
		$connectionsIds["Personas privadas de libertad por Sectores Estandarizados según género"] = "delitos_at_localhost";
		$connectionsIds["Delitos por área"] = "delitos_at_localhost";
		$connectionsIds["Personas privadas de libertad por rango etario según género"] = "delitos_at_localhost";
		$connectionsIds["Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino"] = "delitos_at_localhost";
		$connectionsIds["Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino"] = "delitos_at_localhost";
		$connectionsIds["Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas"] = "delitos_at_localhost";
		$connectionsIds["Delitos por lugar del hecho"] = "delitos_at_localhost";
		$connectionsIds["Delitos por Móvil"] = "delitos_at_localhost";
		$connectionsIds["Conteo de delitos por sector estandarizado según Movil"] = "delitos_at_localhost";
		$connectionsIds["Delitos por tipo de arma"] = "delitos_at_localhost";
		$connectionsIds["Ocupación de la víctima por Delitos"] = "delitos_at_localhost";
		$connectionsIds["Amenazas, por rango etarios, según sexo victima"] = "delitos_at_localhost";
		$connectionsIds["Delitos Sexuales  por rango etarios, según sexo victima"] = "delitos_at_localhost";
		$connectionsIds["Homicidios por rango etarios, según sexo"] = "delitos_at_localhost";
		$connectionsIds["Delitos por sector Estandarizado"] = "delitos_at_localhost";
		$connectionsIds["Delitos por rango de horas"] = "delitos_at_localhost";
		$connectionsIds["Conteo de delitos, por Sector Estandarizado según Movil"] = "delitos_at_localhost";
		$connectionsIds["Delitos por mes del hecho"] = "delitos_at_localhost";
		$connectionsIds["homicidios_sv_2016"] = "delitos_at_localhost";
		$connectionsIds["homicidios_sv_2016 Report"] = "delitos_at_localhost";
		$connectionsIds["homicidios_sv_2016 Report1"] = "delitos_at_localhost";
		$connectionsIds["Muertes PNC enfrentamientos"] = "delitos_at_localhost";
		$connectionsIds["homicidios_municipio"] = "delitos_at_localhost";
		$connectionsIds["Municipios con porcentaje de enfrentamiento"] = "delitos_at_localhost";
		$connectionsIds["PPL pertenecientes a pandillas por municipio"] = "delitos_at_localhost";
		$connectionsIds["PPL delitos"] = "delitos_at_localhost";
		$connectionsIds["Transito class Rango Etario"] = "delitos_at_localhost";
		$connectionsIds["PPL delitos_clasificacion"] = "delitos_at_localhost";
		$connectionsIds["Carcel_hurto_mercaderia"] = "delitos_at_localhost";
		$connectionsIds["PPL_educacion"] = "delitos_at_localhost";
		$connectionsIds["hechos_delictivos_class delitos"] = "delitos_at_localhost";
		$connectionsIds["Sector PPD por pandilla de afiliacion (prueba)"] = "delitos_at_localhost";
		$connectionsIds["tipo organizacion delictiva"] = "delitos_at_localhost";
		$connectionsIds["carcel visualizacion todos"] = "delitos_at_localhost";
		$connectionsIds["Grupos etarios por estado civil (masculino)"] = "delitos_at_localhost";
		$connectionsIds["Grupo etarios por estado civil (masculino)"] = "delitos_at_localhost";
		$connectionsIds["Grupo etarios por estado civil (femenino)"] = "delitos_at_localhost";
		$connectionsIds["PPL Grupos etarios por afiliación a Pandillas"] = "delitos_at_localhost";
		$connectionsIds["PPL Grupos etarios por afiliación a Pandillas femenino"] = "delitos_at_localhost";
		$connectionsIds["PPL grupos etarios por Deportado masculino"] = "delitos_at_localhost";
		$connectionsIds["PPL grupos etarios por Deportado Femenino"] = "delitos_at_localhost";
		$connectionsIds["PPL grupos etarios delito genero masculino"] = "delitos_at_localhost";
		$connectionsIds["hechos_delictivos1"] = "delitos_at_localhost";
		$connectionsIds["PPL Grupos etarios por delitos masculino"] = "delitos_at_localhost";
		$connectionsIds["PPL Grupos etarios por delitos femenino"] = "delitos_at_localhost";
		$connectionsIds["carcel prueba santa tecla"] = "delitos_at_localhost";
		$connectionsIds["carcel_clasificacion lugar"] = "delitos_at_localhost";
		$connectionsIds["mes_corregido"] = "delitos_at_localhost";
		$connectionsIds["Hechos delictivos dia del hecho"] = "delitos_at_localhost";
		$connectionsIds["hechos_delictivos11"] = "delitos_at_localhost";
		$connectionsIds["BD Carcel"] = "delitos_at_localhost";
		$connectionsIds["DB PNC"] = "delitos_at_localhost";
		$connectionsIds["Hechosdelictivos movil class"] = "delitos_at_localhost";
		$connectionsIds["hechosdelictivos_tipo_arma"] = "delitos_at_localhost";
		$connectionsIds["Municipios y delitos"] = "delitos_at_localhost";
		$connectionsIds["Hechosdelictivos ocupacion class"] = "delitos_at_localhost";
		$connectionsIds["hechosdelictivos_relacion_vict_agresor"] = "delitos_at_localhost";
		$connectionsIds["Relacion de victima con agresor"] = "delitos_at_localhost";
		$connectionsIds["hechosdelictivos_lugar_del_hecho"] = "delitos_at_localhost";
		$connectionsIds["pnc911"] = "delitos_at_localhost";
		$connectionsIds["pnc9111 class delito"] = "delitos_at_localhost";
		$connectionsIds["pnc9111"] = "delitos_at_localhost";
		$connectionsIds["pnc911 Sector por eventos"] = "delitos_at_localhost";
		$connectionsIds["pnc911municipios"] = "delitos_at_localhost";
		$connectionsIds["horas_completar"] = "delitos_at_localhost";
		$connectionsIds["hora_sustituir"] = "delitos_at_localhost";
		$connectionsIds["hechos_delictivos"] = "delitos_at_localhost";
		$connectionsIds["hechosdelictivos2"] = "delitos_at_localhost";
		$connectionsIds["PPL pertenecientes a Pandilla_prueba"] = "delitos_at_localhost";
		$connectionsIds["PPL pertenecientes a Pandilla_prueba1"] = "delitos_at_localhost";
		$connectionsIds["retornados"] = "delitos_at_localhost";
		$connectionsIds["Retornados, clasificacion rango etario"] = "delitos_at_localhost";
		$connectionsIds["BD Retornados"] = "delitos_at_localhost";
		$connectionsIds["Retornados-Región Repatriación por año"] = "delitos_at_localhost";
		$connectionsIds["mes corregido retornado"] = "delitos_at_localhost";
		$connectionsIds["Retornados-Regiones repatriación por meses"] = "delitos_at_localhost";
		$connectionsIds["Retornados-Consulados por año"] = "delitos_at_localhost";
		$connectionsIds["Retornados-Departamento por año"] = "delitos_at_localhost";
		$connectionsIds["Retornados-Municipios por año"] = "delitos_at_localhost";
		$connectionsIds["Retornados-Rango etario por sexo"] = "delitos_at_localhost";
		$connectionsIds["Retornados-Rango etario por antecedentes género masculino"] = "delitos_at_localhost";
		$connectionsIds["Retornados-Rango etario por antecedentes género femenino"] = "delitos_at_localhost";
		$connectionsIds["transito"] = "delitos_at_localhost";
		$connectionsIds["Tránsito- Departamento por resultado del accidente"] = "delitos_at_localhost";
		$connectionsIds["Tránsito- municipio por resultado del accidente"] = "delitos_at_localhost";
		$connectionsIds["Tránsito-Fallecidos Rango etario víctima por sexo víctima"] = "delitos_at_localhost";
		$connectionsIds["Tránsito-Lesionados Rango etario víctima por sexo víctima"] = "delitos_at_localhost";
		$connectionsIds["Tránsito-Calidad de la víctima por resultado del accidente"] = "delitos_at_localhost";
		$connectionsIds["Tránsito-Tipo de accidente por resultado del accidente"] = "delitos_at_localhost";
		$connectionsIds["Transito class causas"] = "delitos_at_localhost";
		$connectionsIds["transito1"] = "delitos_at_localhost";
		$connectionsIds["Tránsito-Causa del accidente por resultado del accidente"] = "delitos_at_localhost";
		$connectionsIds["Transito class tipo vehículo"] = "delitos_at_localhost";
		$connectionsIds["Tránsito-Tipo de vehículo por resultado del accidente"] = "delitos_at_localhost";
		$connectionsIds["Tránsito-Ruta transporte colectivo por resultado del accidente"] = "delitos_at_localhost";
		$connectionsIds["Tránsito-Responsable accidente detenido por resultado del accidente"] = "delitos_at_localhost";
		$connectionsIds["Transito extraer mes"] = "delitos_at_localhost";
		$connectionsIds["Tránsito-Resultado del accidente por meses de accidentes"] = "delitos_at_localhost";
		$connectionsIds["Tránsito-Resultado del accidente por rango horario de accidentes"] = "delitos_at_localhost";
		$connectionsIds["Tránsito-Dirección accidente por resultado del accidente"] = "delitos_at_localhost";
		$connectionsIds["Transito prueba datos"] = "delitos_at_localhost";
		$connectionsIds["empalme tablas"] = "delitos_at_localhost";
		$connectionsIds["hechos_delictivos12"] = "delitos_at_localhost";
		$connectionsIds["Municipios"] = "delitos_at_localhost";
		$connectionsIds["Transito arreglar guiones"] = "delitos_at_localhost";
		$connectionsIds["sectorppd1"] = "delitos_at_localhost";
		$connectionsIds["Sector PPD 24"] = "delitos_at_localhost";
		$connectionsIds["sectorppd1 Report"] = "delitos_at_localhost";
		$connectionsIds["sectorppd1 Chart"] = "delitos_at_localhost";
		$connectionsIds["Hechosdelictivos_rango etario"] = "delitos_at_localhost";
		$connectionsIds["carcel Report"] = "delitos_at_localhost";
		$connectionsIds["pnc9112 PRUEBA"] = "delitos_at_localhost";
		$connectionsIds["Sector PPD por tipo de arma"] = "delitos_at_localhost";
		$connectionsIds["Cruce Sector PPD"] = "delitos_at_localhost";
		$connectionsIds["enlazando sector"] = "delitos_at_localhost";
		$connectionsIds["Retornados-Todos los departamentos"] = "delitos_at_localhost";
		$connectionsIds["reemplazar sectores"] = "delitos_at_localhost";
		$connectionsIds["hechos_delictivos_VISTA"] = "delitos_at_localhost";
		$connectionsIds["reemplazar sectores PPL"] = "delitos_at_localhost";
		$connectionsIds["anexar_carcel"] = "delitos_at_localhost";
		$connectionsIds["anexar_carcel1"] = "delitos_at_localhost";
		$connectionsIds["SUPRIMIR REGISTROS ANEXO CARCEL"] = "delitos_at_localhost";
		$connectionsIds["Personas privadas de libertad por rango etario, segun nivel educativo y género femenino"] = "delitos_at_localhost";
		$connectionsIds["PPL por rango etario según género"] = "delitos_at_localhost";
		$connectionsIds["reemplazar_sectores_hechosdelictivos"] = "delitos_at_localhost";
		$connectionsIds["mined"] = "delitos_at_localhost";
		$connectionsIds["mined1"] = "delitos_at_localhost";
		$connectionsIds["mined2"] = "delitos_at_localhost";
		$connectionsIds["mined21"] = "delitos_at_localhost";
		$connectionsIds["mined Report"] = "delitos_at_localhost";
		$connectionsIds["MINED INDICE"] = "delitos_at_localhost";
		$connectionsIds["mined11"] = "delitos_at_localhost";
		$connectionsIds["calcular indice MINED"] = "delitos_at_localhost";
		$connectionsIds["calcular indice MINED2"] = "delitos_at_localhost";
		$connectionsIds["mined1 Report"] = "delitos_at_localhost";
		$connectionsIds["Maxima Matricula Mined"] = "delitos_at_localhost";
		$connectionsIds["Matricula Relativa Final"] = "delitos_at_localhost";
		$connectionsIds["IPCE_NAIVE"] = "delitos_at_localhost";
		$connectionsIds["IPCE_FINAL"] = "delitos_at_localhost";
		$connectionsIds["Mined_Maximo IPCE"] = "delitos_at_localhost";
		$connectionsIds["mined maximo valor"] = "delitos_at_localhost";
		$connectionsIds["BD Mined"] = "delitos_at_localhost";
		$connectionsIds["mined3"] = "delitos_at_localhost";
		$connectionsIds["valor maximo mined 2"] = "delitos_at_localhost";
		$connectionsIds["BD SECTORES"] = "delitos_at_localhost";
		$connectionsIds["Anexar Sector a PPL"] = "delitos_at_localhost";
		$connectionsIds["mined4"] = "delitos_at_localhost";
		$connectionsIds["anexar_carcel2"] = "delitos_at_localhost";
		$connectionsIds["BD ANEXO CARCEL"] = "delitos_at_localhost";
		$this->_tablesConnectionIds = $connectionsIds;
	}
	
	/**
	 * Check if It's possible to add to one table's sql query 
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];
		
		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;
			
		return true;	
	}
	
	/**
	 * Close db connections
	 * @destructor
	 */
	function __desctruct() 
	{
		foreach( $this->cache as $connection )
		{
			$connection->close();
		}
	}
}
?>