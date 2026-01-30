<?php 
class manage_lib
{
     public function Lget_ID($table)
     {
       $sql = "SELECT count(*) FROM  $table";
	    $result=mysql_query($sql);
		
		if(mysql_result($result,0)==0)
		{
		   return 1;
		 }
		 else
		 {
		      $sql = "SELECT max(id) FROM  $table";
	            $result=mysql_query($sql);
				$result=mysql_result($result,0);
				return ($result+1);
		 }  
     }
	 
	 	 
	 
	public function LchksubNam($nam)
	{
	  $sql = "SELECT * FROM `subject` WHERE `subject_name` LIKE '$nam'";
	        $result=mysql_query($sql);
				$result=@mysql_result($result,0);
				return ($result);
	
	
	}
	 
	 public function  Lset_sub($id,$sname)
	 {
	   
	   $sql = "INSERT INTO `suryalib`.`subject` (`id`, `subject_name`) VALUES ('$id', '$sname')"or die(" Server was unable to insert data ".mysql_error());
	   $result=mysql_query($sql);
	   if($result)
	   return "add";
	   else
	   return "error";
	 
	 }
	  public function Lset_rac($id,$rname)
	  {
	   $sql = "INSERT INTO `suryalib`.`rack` (`id`, `Rack_location`) VALUES ('$id', '$rname')"or die(" Server was unable to insert        data ".mysql_error());
	   $result=mysql_query($sql);
	   if($result)
	   return "add";
	   else
	   return "error";
	 
	 }
	 
	 public function Lset_wri($id,$wname)
	  {
	   $sql = "INSERT INTO `suryalib`.`writer` (`id`, `writer_name`) VALUES ('$id', '$wname')"or die(" Server was unable to insert data ".mysql_error());
	   $result=mysql_query($sql);
	   if($result)
	   return "add";
	   else
	   return "error";
	 
	 }
	 public function Lget_rec($tab)
	 {
	  $sql = "SELECT * FROM $tab ORDER BY id  ASC";
	  $result=mysql_query($sql);
	 if(mysql_num_rows($result)>=1)
	 return $result;
	 else
	 return "Notavailable";
	 }
	  

	  
	 public function Lset_book($k,$bt,$bp,$ba,$dat,$bpr,$bre,$br,$bs)
	 {
	  $sql = "INSERT INTO book (Bid, B_Title, B_Pub, B_Aut, B_PurDate, B_Price, B_Remark, B_Rack_No, B_Subject_Id,Activate) VALUES ('$k',UPPER('$bt'), UPPER('$bp'), '$ba', '$dat', '$bpr', UPPER('$bre'), '$br', '$bs','1')";
	  $result=mysql_query($sql)or die(" Server was unable to insert data ".mysql_error());
	  return $result;
	 }
	 
	 
	  public function LaddNote($k,$Nsub,$d,$rn,$lan,$rem)
	  {
	      $sql = "INSERT INTO notes (Note_id, Subject_name, B_Rack_no, Remark, Date, Activate, type) VALUES ('$k', '$Nsub', '$rn',              '$rem', '$d', '1', '$lan')";
	      $result=mysql_query($sql)or die(" Server was unable to insert data ".mysql_error());
	      return $result;
	  
	  }
 
	public function  Lget_Larger_bid($ba,$bs)
	{
	
	   $sql="SELECT max( Bid ) FROM book WHERE B_Aut =$ba AND B_Subject_Id = $bs";
	   $result=mysql_query($sql)or die(" Server was unable to connect ".mysql_error());
		return mysql_result($result,0); 
	  
    }	
	
	
		public function Lget_Larger_nid($sn)
		{
	
	    $sql="SELECT max( Note_id ) FROM notes WHERE Subject_name = '$sn'";
	    $result=mysql_query($sql) or die(" Server was unable to connect ".mysql_error());
		return mysql_result($result,0); 
	   
       }
	   
	   public function LgetNSname($sn)
	   {
	
	   $sql = "SELECT  subject_name FROM subject WHERE id = '$sn'";
		
	    $result=mysql_query($sql) or die("Server was unable to connect ".mysql_error());
		
		return mysql_result($result,0); 
	   
       }
	   
	   
	   	
	 public function LgetNsub($ns)
	 {
	     $sql="SELECT id FROM notes WHERE Subject_name = $id"or die(" Server was unable to connect ".mysql_error());
	    $result=mysql_query($sql);
		return mysql_result($result,0); 
	 
	 }
		
	
	public function LgetBookrec()
	{
	   $sql="select * from book";
		$result=mysql_query($sql) or die(" could fecth data".mysql_error());
		return $result;
	
	}
	
	public function  LgetNoterec()
	{
	   $sql="select * from notes";
		$result=mysql_query($sql) or die(" could fecth data".mysql_error());
		return $result;
	
	}
	
	public function  LgetBook($bid)
	{
	    $sql = "SELECT * FROM book WHERE Bid='$bid'";
		$result=mysql_query($sql) or die(" could not fecth data ".mysql_error());
		return $result;
	
	}
	
	public function  LgetNOTE($nid)
	{
	    $sql = "SELECT * FROM notes WHERE Note_id='$nid'";
		$result=mysql_query($sql) or die(" could not fecth data ".mysql_error());
		return $result;
	
	}
	
	public function LupdBook($nam,$pub,$rno,$dat,$rem,$pr,$bt,$bp)
	{
          $sql = "UPDATE book SET B_Title = '$nam', B_Pub = '$pub', B_PurDate = '$dat', B_Price = '$pr', B_Remark = '$rem', B_Rack_No = '$rno' WHERE B_Title = '$bt' AND B_Pub = '$bp'";
		  
	    
		$result=mysql_query($sql) or die(" could  not fecth data ".mysql_error());
		return $result;
	
	}
	
	public function LupdNote($nam,$rno,$dat,$rem)
	{
           $sql = "UPDATE notes SET Rack_no = '$rno', Remark = '$rem' , Date='$dat' WHERE Note_id = '$nam'";
		  $result=mysql_query($sql) or die(" could  not fecth data ".mysql_error());
		  return $result;	
		  
	}
	
	public function LdellBook($id)
	{
	   $sql = "delete from book where Bid='$id'";
	    $result=mysql_query($sql) or die(" could not delete data ".mysql_error());
		return $result;
	}
	
	public function Ldelproject($pid)
	{
	   $sql = "delete from project where project_id='$pid'";
	    $result=mysql_query($sql) or die(" could not delete data ".mysql_error());
		return $result;
	}
	
	public function LdellNote($ni)
	{
	   $sql = "delete from notes where Note_id='$ni'";
	    $result=mysql_query($sql) or die(" could not delete data ".mysql_error());
		return $result;
	}
	
	
	public function Lgetsubject()
	{
	   $sql="select * from subject ORDER BY id  ASC";
		$result=mysql_query($sql) or die(" could fecth data".mysql_error());
		return $result;
	
	}
	
  	public function Lupdsubject($nam,$sname)
	{
         $sql = "UPDATE subject SET subject_name = '$sname' WHERE id = '$nam'";	    
		$result=mysql_query($sql) or die(" could  not fecth data ".mysql_error());
		return $result;
	
	}
	public function Lupdwriter($nam,$sname)
	{
	    $sql = "UPDATE writer SET writer_name = '$sname' WHERE id = '$nam'";	    
		$result=mysql_query($sql) or die(" could  not fecth data ".mysql_error());
		return $result;
	
	}
	
	public function Lgetwriter()
	{
	   $sql="select * from writer ORDER BY id  ASC";
		$result=mysql_query($sql) or die(" could fecth data".mysql_error());
		return $result;
	
	}
	
	public function  LGetProjdetail()
	{
	   $sql="select * from project ORDER BY project_id  ASC";
		$result=mysql_query($sql) or die(" could fecth data".mysql_error());
		return $result;
	
	}
	
	public function LGetOneProjdetail($id)
	{
	   $sql="select * from project where project_id  ='$id'";
		$result=mysql_query($sql) or die(" could fecth data".mysql_error());
		return $result;
	
	}
	
	
	public function Lgetrack()
	{
	   $sql="select * from rack ORDER BY id  ASC";
		$result=mysql_query($sql) or die(" could fecth data".mysql_error());
		return $result;
	
	}
	
	public function Lupdrack($nam,$sname)
	{
	    $sql = "UPDATE rack SET Rack_location = '$sname' WHERE id = '$nam'";	    
		$result=mysql_query($sql) or die(" could  not fecth data ".mysql_error());
		return $result;
	
	}
	
	   public function LupdProjdetail($id,$Pnam,$Ptec,$Plev)
	   {  $sql = "UPDATE project SET project_name = '$Pnam', tecnology = '$Ptec', level = '$Plev' WHERE project_id = '$id'";
		  $result=mysql_query($sql) or die(" could  not fecth data ".mysql_error());
		  return $result;	   
	   }
	   
     
	 public function Ldelrack($rid)
		{
		 $sql = "delete FROM rack WHERE id='$rid'";
		$result=mysql_query($sql) or die(" could not delete rack".mysql_error());
		 if($result)
		  {
		   return $result;
		  }
		}	
		
		public function LGetProID()
		{
		   $sql = "SELECT count(*) FROM  project";
		    $num = mysql_query($sql);
	        $num = mysql_result($num,0);
	        ++$num; 
           $len = strlen($num);
               for($i=$len; $i< 5; ++$i) 
	           {
                   $num = '0'.$num;
               }
              return "PR".$num;
		   
		}
		
		public function LSetProj($id,$Pnam,$Ptec,$Plev)
		{  		  
		   $sql = "INSERT INTO project (project_id, project_name, tecnology, level,Activate) VALUES ('$id', '$Pnam', '$Ptec', '$Plev','1')";
		    $result=mysql_query($sql) or die(" could  not insert data ".mysql_error());
			return $result;
							     
		}
		
		
		public function web_news($id,$dat,$des)
		{  		  
		   $sql = "INSERT INTO news (id ,date ,description) VALUES ('$id', '$dat', '$des')";
		    $result=mysql_query($sql) or die(" could  not insert data ".mysql_error());
			return $result;
							     
		}
		
		public function Getweb_news()
		{
	      $sql="select * from news ORDER BY date  ASC";
		$result=mysql_query($sql) or die(" could fecth data".mysql_error());
		return $result;
		}
		
		public function Newsrecords($id)
		{
	      $sql="select * from news where id='$id'";
		$result=mysql_query($sql) or die(" could fecth data".mysql_error());
		return $result;
		}
		
		public function updWebnews($id,$dat,$des)
		 {  $sql = "UPDATE news SET date = '$dat',description = '$des' WHERE id = '$id'";
		  $result=mysql_query($sql) or die(" could  not update data ".mysql_error());
		  return $result;	   
	   }
	   public function delWebnews($bi)
	   { 
		 $sql = "delete FROM news WHERE id='$bi'";
		 $result=mysql_query($sql) or die(" could not delete news".mysql_error());
		 return $result;
		  
		}	
		
}
?>