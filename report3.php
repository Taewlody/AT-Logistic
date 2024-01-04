<?php
require_once( 'class.php' );
require_once( 'function.php' );

$db=new cl;
$db->connect();


$cusCode=post('cusCode');
$saleman=post('saleman');
$documentID=post('documentID');
/*
$dateStart=date('d/m/Y');
$dateEnd=date('d/m/Y');
*/
$dateStart=isset($_POST['dateStart'])?$_POST['dateStart']:date('1/n/Y');
$dateEnd=isset($_POST['dateEnd'])?$_POST['dateEnd']:date('j/n/Y');

$var_dateStart=formatDate_dash($dateStart);
$var_dateEnd=formatDate_dash($dateEnd);
?>

<!-- Data picker -->
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script> 


<!-- FooTable --> 
<script src="js/plugins/footable/footable.all.min.js"></script> 
<!-- FooTable -->
<link href="css/plugins/footable/footable.core.css" rel="stylesheet">

<script>
 
function confirmDel(ID,URL){
  swal({
        title: "Are you sure?",
        text: "You will not be able to recover this Data !",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function () {
	  
	
  					var jsonObj={
						action:'del',
						documentID:ID
					}; 
					$.ajax({
					   	type: "POST",
					   	url: URL,
					   	data: jsonObj,
					   	success: function(data) {
                              console.log("Result : ", data);
						if(data=='success'){
						 swal("Deleted!", "Your Data file has been deleted.", "success");
							setTimeout(function(){ 
							 window.location.reload(1);	
							}, 1000);
						  }else{
							 msgError();
							 console.log("Error : ", data);
						  }	 
					   }
					 });
    });

} 
        $(document).ready(function(){
			
			
			$('.select2_single').select2({});
			

			
			
$('.footable').footable();
			
			
			
      $('.input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
                
            });
      /*      
     var mem = $('#dateEnd .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
			*/
				
        });

    </script>

<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>รายงาน ยอดขายตามใบแจ้งหนี้</h2>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"> <a>Home</a></li>
      <li class="breadcrumb-item"> <a>รายงาน</a></li>
      <li class="breadcrumb-item"> <a>รายงาน ยอดขายตามใบแจ้งหนี้</a></li>
    </ol>
  </div>
  <div class="col-lg-2"> </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight ecommerce">

  <div class="ibox-title">
          <h5>Search Condition</h5>
          <div class="ibox-tools"> 
			
	  
	  
	  
	  </div>
        </div>
            <div class="ibox-content m-b-sm border-bottom">
				
              <form id="form" name="form" method="post">
              <div class="row m-b-sm m-t-sm">
                <div class="col-md-11">
                  <div class="input-group">
                    <div class="form-group col-margin0" id="dateStart" style="width: 150px;">
                      <label class="font-normal">Date Range</label>
                      <div class="input-group date"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" name="dateStart" class="form-control" value="<?php echo $dateStart;?>" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group col-margin0 " id="dateEnd" style="width: 150px;">
                      <label class="font-normal">To</label>
                      <div class="input-group date"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" name="dateEnd" class="form-control " value="<?php echo $dateEnd;?>" autocomplete="off">
                      </div>
                    </div>
                <div class="form-group" >
                      <label class="font-normal">Document  No.</label>
                      <div class="input-group">
                        <input type="text" id="documentID" name="documentID" class="form-control" value="">
                      </div>
                    </div>
                    <div class="form-group col-margin0" >
                      <label class="font-normal">Customer</label>
                      <div >
                        <select class="select2_single form-control select2" style="width:300px;" name="cusCode" id="cusCode">
                           <?php $db->s_customer($cusCode);?>
                        </select>
                      </div>
                    </div>

                

                    <div class="form-group col-margin0" >
                      <label class="font-normal">Sale</label>
                      <div class="input-group">
                        <div class="">
                          <select class="select2_single form-control select2" style="width: 200px;" name="saleman" id="saleman">
                           <?php  $db->s_saleman($saleman);?>
                          </select>
                        </div>
                      </div>
                    </div>

                    
                    <div class="form-group" >
                      <label class="font-normal" style="color: wheat">.</label>
                      <div class="input-group">
                        <button type="submit" class="btn btn-primary">Search</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
						
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
              <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th data-toggle="true" width="10%">Document  No.</th>
                  <th data-hide="phone" width="10%"> Date</th>
                  <th data-hide="phone,tablet" width="10%">Customer Name</th>
                  <th data-hide="phone,tablet" width="10%">Amount</th>
                  <th data-hide="phone,tablet" width="10%">Vat</th>
                  <th data-hide="phone,tablet" width="10%">3%</th>
                  <th data-hide="phone,tablet" width="10%">1%</th>
                  <th data-hide="phone,tablet" width="10%">Reserve</th>
                 <th data-hide="phone,tablet" width="10%">Total Net</th>
                  <th data-hide="phone,tablet"  data-sort-ignore="true" width="5%">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php
$sql="SELECT
j.documentID,
date_format(j.documentDate,'%d/%m/%Y') as documentDate,
j.documentstatus,
c.custNameTH,
s.empName,
j.total_amt,
j.total_vat,
j.tax3,
j.tax1,
j.cus_paid,
j.total_netamt

FROM $db->dbname.invoice AS j
INNER JOIN $db->dbname.common_customer AS c ON j.comCode = c.comCode AND j.cusCode = c.cusCode
INNER JOIN $db->dbname.common_saleman AS s ON j.comCode = s.comCode AND j.saleman = s.usercode
WHERE (j.documentDate BETWEEN  '$var_dateStart' AND '$var_dateEnd') 
AND j.cusCode LIKE'$cusCode%' 
AND j.saleman LIKE '$saleman%'
AND j.documentstatus='A' order by j.documentID
";
$result=$db->query($sql);
$i=1;
$total_amt=0;
$total_vat=0;
$tax3=0;
$tax1=0;
 $cus_paid=0;
$total_netamt=0;
                                           
                  
                  
while($r=mysqli_fetch_array($result)){
    
    $total_amt+=$r['total_amt'];
    $total_vat+=$r['total_vat'];
    $tax3+=$r['tax3'];
    $tax1+=$r['tax1'];
    $cus_paid+=$r['cus_paid'];
    $total_netamt+=$r['total_netamt'];
?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $r['documentID'];?></td>
                  <td><?php echo $r['documentDate'];?></td>
                  <td><?php echo $r['custNameTH'];?></td>
                  <td><?php echo n2($r['total_amt']);?></td>
                <td><?php echo n2($r['total_vat']);?></td>
                <td><?php echo n2($r['tax3']);?></td>
                <td><?php echo n2($r['tax1']);?></td>
                <td><?php echo n2($r['cus_paid']);?></td>
                <td><?php echo n2($r['total_netamt']);?></td>
                  <td class="center">
                    <div class="btn-group">
                      <button class="btn-white btn btn-xs" onClick="location.href='invoice_form?action=view&documentID=<?php echo $r['documentID'];?>' ">View</button>
               
                    </div>
                  </td>
                </tr>
                <?php  
$i++;	
}
?>
      
      
              </tbody>
              <tfoot>
                
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong><?php echo n2($total_amt);?></strong></td>
                  <td><strong><?php echo n2($total_vat);?></strong></td>
                  <td><strong><?php echo n2($tax3);?></strong></td>
                  <td><strong><?php echo n2($tax1);?></strong></td>
                  <td><strong><?php echo n2($cus_paid);?></strong></td>
                  <td><strong><?php echo n2($total_netamt);?></strong></td>
                  <td class="center">&nbsp;</td>
                </tr>  
                <tr>
                  <td colspan="14"><ul class="pagination float-left">
                    </ul></td>
                </tr>
              </tfoot>
            </table>

                        </div>
                    </div>
                </div>
            </div>


        </div>

<!--  END Body-->