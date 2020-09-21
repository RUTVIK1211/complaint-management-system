<?php
require_once 'dbconnection.php';
	class model extends dbconnection
	{
		/**
		 * @param  $table
		 * @param  $data
		 * @return boolean
		 */

 		public function insert($table,$data)
		{
			$conn = $this->getpdoconnection();
			$colum = "";
			$value = "";
			$i=1;

			foreach ($data as $key => $val)
			{
				if($i==1)
				{
					$colum.= $key;
					$value.="'".$val."'";
				}
				else
				{
					$colum.=','.$key;
					$value.=','."'".$val."'";
				}
				$i++;
			}
			$result = $conn->query("INSERT INTO $table($colum) VALUES($value)");
			if ($result) {
				return true;
			}
			else
			{
				return false;
			}
		}

		/**
		 * @param  string
		 * @param  string
		 * @param  string
		 * @param  string
		 * @return boleand
		 */
		public function select($table='', $field = '*',$where='',$limit='')
		{
			$conn = $this->getpdoconnection();
			$data = array();
			if ($where != '')
			{
				$where = 'where '.$where;
			}
			if ($limit!='')
			{
				$limit = 'limit '.$limit;
			}
			if ($field!='*')
			{
				$data = $field;
				$field='';
				$i=1;
				foreach ($data as $key)
				{
					if($i==1)
					{
						$field.="'".$key."'";
					}
					else
					{
						$field.=','."'".$val."'";
					}
					$i++;
				}
			}
			$query = $conn->query("SELECT $field FROM $table $where $limit");

			if ($query->rowCount())
			{
				while ($result = $query->fetch(PDO::FETCH_ASSOC))
				{
					array_push($data, $result);
				}
				return $data;
			}
			else
			{
				return false;
			}
		}

		public function delete($table,$where)
		{

			$conn = $this->getpdoconnection();
			$conn->query("DELETE FROM $table WHERE $where");
		}
		public function update($table,$data,$where)
		{

			$conn = $this->getpdoconnection();
			$colum = "";
			$value = "";
			$i=1;
			foreach ($data as $key => $val)
			{
				if($i==1)
				{
					$colum.= $key."=".$val;
				}
				else
				{
					$colum.=','.$key."=".$val;
				}
				$i++;
			}
			$result = $conn->query("UPDATE $table SET $colum");
			if ($result) {
				return true;
			}
			else
			{
				return false;
			}
		}
	}
?>
