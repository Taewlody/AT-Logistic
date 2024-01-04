<?php
session_start();
require_once( 'class.php' );
require_once( 'function.php' );
$db=new cl;
$db->connect();
$action=post('action');
$documentID=post('documentID');
$table=$db->dbname.'.petty_cashShiping';
$table_items=$db->dbname.'.petty_cashShiping_items';
$documentDate=formatDate_dash(post('documentDate'));
$invNo=post('invNo');
$chargeitems=post('chargeitems');
$chargesDetail=post('chargesDetail');
$amount=post('amount');


if($action=='add'){
    if($documentID==''){
        $documentID=$db->genarate_docuemntID('petty_cashShiping','documentID','C-ym',4);
    }
$params=array(
'comCode'=>$db->comCode,
'documentID'=>$documentID,
'documentDate'=>$documentDate,
'refJobNo'=>post("refJobNo"),
'supCode'=>post("supCode"),
'note'=>post("note"),
'remark'=>post("remark"),
'sumTotal'=>post("sumTotal"),    
'documentstatus'=>'P',
'createID'=>$_SESSION['userID'],
'createTime'=>date('Y-m-d H:i:s'),
'editID'=>$_SESSION['userID'],
'editTime'=>date('Y-m-d H:i:s'));
    if($db->insertData($table,$params)){
        $i=0;
        $success_status=0;
        $sum_amount=0;
        if($chargeitems){
         foreach($chargeitems as $items){
            $params_items=array(
                    'comCode'=>$db->comCode,
                    'documentID'=>$documentID,
                    'invNo'=>$invNo[$i],
                    'chargeCode'=>$chargeitems[$i],
                    'chartDetail'=>$chargesDetail[$i],
                    'amount'=>$amount[$i]       
                    );
                    $db->insertData('petty_cashShiping_items',$params_items); 
             $sum_amount+=$amount[$i];
             $i++;
         }
         $success_status=1;
         }else{
         $sql_delmaster="DELETE FROM $table WHERE comCode='$db->comCode' AND documentID='$documentID' ";
         $db->deleteData($sql_delmaster);
         $success_status=0;
        }
        if($success_status==1){
            $array = array( 
            "documentID"=>$documentID,
            "result"=>'success');
            echo json_encode($array);
        }else{
            
               $array = array( 
            "documentID"=>'',
            "result"=>'error');
            echo json_encode($array);
        }
    }else{
        $array = array( 
            "documentID"=>'',
            "result"=>'error');
            echo json_encode($array);
    }

}elseif($action=='edit'){
$params=array(
'comCode'=>$db->comCode,
'documentID'=>$documentID,
'documentDate'=>$documentDate,
'accountCode'=>post("accountCode"),
'refJobNo'=>post("refJobNo"),
'supCode'=>post("supCode"),
'note'=>post("note"),
'remark'=>post("remark"),
'sumTotal'=>post("sumTotal"),       
'documentstatus'=>'P',
'editID'=>$_SESSION['userID'],
'editTime'=>date('Y-m-d H:i:s'));
    
        if($db->updateData($table,$params,"comCode='$db->comCode' AND documentID='$documentID'")){
        
         $sql_delitems="DELETE FROM $table_items WHERE comCode='$db->comCode' AND documentID='$documentID' ";
         $db->deleteData($sql_delitems);
        $i=0;
        $success_status=0;
        if($chargeitems){
         foreach($chargeitems as $items){
             
            $params_items=array(
                    'comCode'=>$db->comCode,
                    'documentID'=>$documentID,
                    'invNo'=>$invNo[$i],
                    'chargeCode'=>$chargeitems[$i],
                    'chartDetail'=>$chargesDetail[$i],
                    'amount'=>$amount[$i]       
                    );
                    $db->insertData('petty_cashShiping_items',$params_items); 
             $i++;
         }
         $success_status=1;
         }else{
            
         $sql_delmaster="DELETE FROM $table WHERE comCode='$db->comCode' AND documentID='$documentID' ";
         $db->deleteData($sql_delmaster);
         $success_status=0;  
            
        }
            
            
            
            
            
            
            
            $array = array( 
                "documentID"=>$documentID,
                "result"=>'success');
                echo json_encode($array);
        }else{
            $array = array( 
                "documentID"=>$documentID,
                "result"=>'success');
                echo json_encode($array);
        }

}elseif($action=='approve'){  
    
$params=array(
'comCode'=>$db->comCode,
'documentID'=>$documentID,
'documentDate'=>$documentDate,
'refJobNo'=>post("refJobNo"),
'supCode'=>post("supCode"),
'note'=>post("note"),
'remark'=>post("remark"),
'sumTotal'=>post("sumTotal"),       
'documentstatus'=>'A',
'editID'=>$_SESSION['userID'],
'editTime'=>date('Y-m-d H:i:s'));
        

 if($db->updateData($table,$params,"comCode='$db->comCode' AND documentID='$documentID'")){
        $array = array( 
            "documentID"=>$documentID,
            "result"=>'success');
            echo json_encode($array);
    }else{
        $array = array( 
            "documentID"=>'',
            "result"=>'errot');
            echo json_encode($array);
    }  

}elseif($action=='del'){
   
	$sql="DELETE $table, $table_items 
    FROM $table 
    inner join $table_items on $table.comCode = $table_items.comCode AND $table.documentID=$table_items.documentID
    WHERE $table.documentID='$documentID' ";
    if($db->query($sql)){
		echo 'success';
	}else{
		echo $sql;
		 echo 'error';
		
	}
	
	
}
