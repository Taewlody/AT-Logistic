<div>
    <livewire:component.page-heading title_main="Advance payment" title_sub="เงินสำรองจ่ายล่วงหน้า"
        breadcrumb_title="Customer" breadcrumb_page="Advance parment" breadcrumb_page_title="Advance parment Form" />

    <div class="wrapper wrapper-content animated fadeInRight">
        {{-- loading --}}
        <div wire:loading.block class="loader-wrapper">
            <div class="loader"></div>
        </div>

        <!-- Body-->
        <form class="form-body" wire:submit="save">
            <div class="row">

                {{-- Section 1 --}}
                <div class="col-lg-7" style="margin-bottom: 1px; ">
                    <div id="accordion-1" class="default-according">
                        <div class="card">
                            <div class="card-header" id="headingDocument">
                                <h2 class="mb-0">
                                    <a role="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseDocument" aria-expanded="true"
                                        aria-controls="collapseDocument">
                                        Document
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseDocument" role="tabpanel" class="collapse show"
                                aria-labelledby="headingDocument" data-bs-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label"><span class="col-form-label"
                                                style="padding-top: 5px;">Document</span> No.</label>
                                        <div class="col-md-4">
                                            <input type="text" name="documentID" id="documentID" class="form-control"
                                                wire:model="data.documentID" readonly>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="col-form-label" style="padding-top: 5px;">Document
                                                Date</label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group date"> <span class="input-group-addon"><i
                                                        class="fa fa-calendar"></i></span>
                                                <input type="text" name="documentDate" class="form-control"
                                                    wire:model="data.documentDate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label"><span class="col-form-label"
                                                style="padding-top: 5px;">ลูกค้า</span></label>
                                        <div class="col-md-4">
                                            <select name="cusCode" class="select2_single form-control select2"
                                                id="cusCode" wire.model="data.cusCode">
                                                {{-- <?php
                                                if ($_SESSION['userTypecode'] == '4') {
                                                    $cusCode = $_SESSION['userID'];
                                                }
                                                $db->s_customer_advance($cusCode, $_SESSION['userTypecode']); ?> --}}
                                            </select>

                                        </div>
                                        <div class="col-md-2">
                                            <label class="col-form-label" style="padding-top: 5px;">Ref. JobNo.</label>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="select2_single form-control select2" name="refJobNo"
                                                id="refJobNo" wire:model="data.refJobNo">
                                                {{-- <?php $db->s_jobref_advance($refJobNo, $cusCode); ?> --}}
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Note</label>
                                        <div class="col-md-9">
                                            <textarea name="note" rows="4" class="form-control" wire:model="data.note"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Section 2 --}}
                <div class="col-lg-5" style="margin-bottom: 1px; ">
                    <div id="accordion-2" class="default-according">
                        <div class="card">
                            <div class="card-header" id="headingPayment">
                                <h2 class="mb-0">
                                    <a role="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsePayment" aria-expanded="true"
                                        aria-controls="collapsePayment">
                                        Payment
                                    </a>
                                </h2>
                            </div>
                            <div id="collapsePayment" role="tabpanel" class="collapse show"
                                aria-labelledby="headingPayment" data-bs-parent="#accordion-2">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"><span class="col-form-label"
                                                style="padding-top: 5px;">ชื่อบัญชี</span></label>
                                        <div class="col-md-9">
                                            <select name="accountCode" id="accountCode"
                                                class="select2_single form-control select2"
                                                wire:model="data.accountCode" style="width: 100%">
                                                {{-- <?php $db->s_account(''); ?> --}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group  row">
                                        <label class="col-sm-3 col-form-label">โดย By</label>
                                        <div class="col-md-9">
                                            <div class="i-checks">
                                                <input type="radio" id="cash" value="c" name="payType"
                                                    wire:model="data.payType">
                                                <label for="cash"> <i></i>เงินสด Cash </label>
                                                <input type="radio" id="bank" value="b" name="payType"
                                                    wire:model="data.payType">
                                                <label for="bank"> <i></i>เช็คธนาคาร Bank </label>

                                            </div>
                                            <div class="i-checks">
                                                <input type="radio" id="other" value="o"
                                                    name="payType"wire:model="data.payType">
                                                <Label for="other"><i></i>อื่นๆ Other</Label>
                                                @if ($data->payType == 'o')
                                                    <input type="text" name="payTypeOther" id="payTypeOther"
                                                        class="form-control col-sm-6" wire:model="data.payTypeOther">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group  row">
                                        <label class="col-sm-3 col-form-label">สาขา Branch</label>
                                        <div class="col-md-3">
                                            <input type="text" name="branch" id="branch" class="form-control"
                                                wire:model="data.branch">
                                        </div>

                                        <label class="col-sm-2 col-form-label">เลขที่เช็ค</label>
                                        <div class="col-md-3">
                                            <input type="text" name="chequeNo" id="chequeNo"
                                                class="form-control" wire:model="data.chequeNo">
                                        </div>
                                    </div>
                                    <div class="form-group  row">
                                        <div class="col-md-3">
                                            <label class="col-form-label" style="padding-top: 5px;"> Date</label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group date"> <span class="input-group-addon"><i
                                                        class="fa fa-calendar"></i></span>
                                                <input type="text" name="dueDate" class="form-control"
                                                    qire:model="data.dueDate">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <label class="col-form-label" style="padding-top: 5px;"> Time</label>
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" name="dueTime" class="form-control"
                                                wire:model="data.dueTime">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Section 3 --}}
                <div class="col-lg-12">
                    <div id="accordion-3" class="default-according">
                        <div class="card">
                            <div class="card-header" id="headingCustomerPayment">
                                <h2 class="mb-0">
                                    <a role="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseCustomerPayment" aria-expanded="true"
                                        aria-controls="collapseCustomerPayment">
                                        ลูกค้าสำรองจ่าย
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseCustomerPayment" role="tabpanel" class="collapse"
                                aria-labelledby="headingCustomerPayment" data-bs-parent="#accordion-3">
                                <div class="card-body">
                                    <div class="form-group  row">
                                        <div class="col-md-6">
                                            <select class="select2_single form-control select2" style="width: 100%;"
                                                id="chargeCode">
                                                {{-- <?php //$db->s_charge('C-032');
                                                ?> --}}
                                                <option value="C-032">ลูกค้าสำรองจ่าย</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2" style="padding-left: 0px;">
                                            <button class="btn btn-white " type="button" name="addCharge"
                                                id="addCharge"><i class="fa fa-plus"></i>
                                                Add</button>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="table-responsive" id="containner_charge">
                                            <table class="table" width="100%" id="table_charge">
                                                <thead>
                                                    <tr>
                                                        <th style="width:10%">เลขที่บิล No.</th>
                                                        <th style="width:35%">รายการ Particulars</th>
                                                        <th style="width:10%">จำนวนเงิน Amount</th>
                                                        <th style="width:5%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- <?php
                                              $sql = "SELECT
                                                          t.comCode,
                                                          t.documentID,
                                                          t.invNo,
                                                          t.chargeCode,
                                                          t.chartDetail,
                                                          t.amount
                                                          FROM $db->dbname.advance_payment_items AS t  WHERE t.comCode='$db->comCode' AND t.documentID='$documentID' ";
                                              $result = $db->query($sql);
                                              $i = 1;
                                              $isActiveStype = "";
                                              $rowIdx = 99;
                                              while ($r = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr class='gradeX' id='tr<?php echo $rowIdx; ?>'>
                                                        <td><input type='text' name='invNo[]' class='form-control'
                                                                value='<?php echo $r['invNo']; ?>'
                                                                id='invNo<?php echo $rowIdx; ?>'>
                                                            <input type='hidden' name='chargeitems[]'
                                                                value='<?php echo $r['chargeCode']; ?>'
                                                                id='chargeitems<?php echo $rowIdx; ?>'>
                                                        </td>
                                                        <td><input type='text' name='chargesDetail[]'
                                                                class='form-control' value='<?php echo $r['chartDetail']; ?>'
                                                                id='chargesDetail<?php echo $rowIdx; ?>'></td>
                                                        <td class='center'><input type='number' name='amount[]'
                                                                onkeyup='call_price()' class='form-control'
                                                                value='<?php echo $r['amount']; ?>'
                                                                id='amount<?php echo $rowIdx; ?>'></td>
                                                        <td class='center'><button type='button'
                                                                class='btn-white btn btn-xs'
                                                                onClick='return FN_Remove_Table("<?php echo $rowIdx; ?>")'>Rempove</button>
                                                        </td>
                                                    </tr>
                                                    <?php $rowIdx++;
                                              } ?> --}}
                                                </tbody>
                                                <tfoot>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-6 col-form-label"> remark
                                                <textarea rows="3" name="remark" class="form-control"></textarea>
                                            </label>
                                            <div class="col-lg-6">
                                                <table class="table invoice-total">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>TOTAL :</strong></td>
                                                            <td><span id="total">
                                                                    {{$data->sumTotal ?? 0}}
                                                                </span>
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Section 4 --}}
                <div class="col-lg-12 mb-2">
                    <div id="accordion-4" class="default-according">
                        <div class="card">
                            <div class="card-header" id="headingAttachment">
                                <h2 class="mb-0">
                                    <a role="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseAttachment" aria-expanded="true"
                                        aria-controls="collapseAttachment">
                                        Attach File / ไฟล์แนบ
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseAttachment" role="tabpanel" class="collapse"
                                aria-labelledby="headingAttachment" data-bs-parent="#accordion-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <table class="table" width="100%" name="table_attach" id="table_attach">
                                            <thead>
                                                <tr>
                                                    <th style="width:10%">document</th>
                                                    <th style="width:50%">File Name</th>
                                                    <th style="width:10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <?php
                                            $sql = "SELECT
                                              t.items,
                                              t.comCode,
                                              t.documentID,
                                              t.cusCode,
                                              t.fileDetail,
                                              t.fileName
                                              FROM
                                              joborder_attach AS t
                                              WHERE t.comCode='$db->comCode' AND t.documentID='$documentID' ";
                                            $result = $db->query( $sql );
                                            $i_container = 1;
                                            $i = 99;
                            
                                            if ( $acton != 'add' && $acton != 'copy' ) {
                                              while ( $r = mysqli_fetch_array( $result ) ) {
                            
                                                ?>
                                            <tr class='gradeX' id='tr<?php echo $i; ?>'>
                                              <td><?php echo $r['documentID']; ?></td>
                                              <td><input type='hidden' name='imgKey[]'  value='"+obj.fileName+"' id='imgKey<?php echo $i; ?>'>
                                                <input type='text' name='fileName[]' class='form-control' value='<?php echo $r['fileDetail']; ?>' id='fileName<?php echo $i; ?>'></td>
                                              <td class='center'><a class='btn-white btn btn-xs' href='customer_path/<?php echo $r['cusCode'] . '/' . $r['fileName']; ?>' target='_blank'>View</a>
                                                </button>
                                                &nbsp;
                                                <button type='button' class='btn-white btn btn-xs' onClick='return FN_Remove_Table("<?php echo $i; ?>")'>Remove</button></td>
                                            </tr>
                                            <?php $i++; } } ?>
                                            <?php
                            
                                            $sql = "SELECT
                                              t.documentID,
                                              f.supCode,
                                              t.refJobNo,
                                              f.fileDetail,
                                              f.fileName
                                              FROM
                                              payment_voucher AS t
                                              INNER JOIN payment_voucher_attach AS f ON t.comCode = f.comCode AND t.documentID = f.documentID
                                              WHERE t.comCode='$db->comCode' AND t.refJobNo='$documentID' AND t.documentstatus='A' ";
                                            $result = $db->query( $sql );
                                            if ( $acton != 'add' && $acton != 'copy' ) {
                                              while ( $r = mysqli_fetch_array( $result ) ) {
                            
                                                ?>
                                            <tr class='gradeX' id='tr<?php echo $i; ?>'>
                                              <td><?php echo $r['documentID']; ?></td>
                                              <td><input type='hidden' name='imgKey[]'  value='"+obj.fileName+"' id='imgKey<?php echo $i; ?>'>
                                                <input type='text' name='fileName[]' class='form-control' value='<?php echo $r['fileDetail']; ?>' id='fileName<?php echo $i; ?>'></td>
                                              <td class='center'><a class='btn-white btn btn-xs' href='supplier_path/<?php echo $r['supCode'] . '/' . $r['fileName']; ?>' target='_blank'>View</a>
                                                </button>
                                                &nbsp;
                                                <button type='button' class='btn-white btn btn-xs' onClick='return FN_Remove_Table("<?php echo $i; ?>")'>Remove</button></td>
                                            </tr>
                                            <?php $i++; }} ?>
                                            <?php
                                            $sql = "SELECT
                                              t.documentID,
                                              f.cusCode,
                                              t.refJobNo,
                                              f.fileDetail,
                                              f.fileName
                                              FROM
                                              advance_payment AS t
                                              INNER JOIN advance_payment_attach AS f ON t.comCode = f.comCode AND t.documentID = f.documentID
                                              WHERE t.comCode='$db->comCode' AND t.refJobNo='$documentID' AND t.documentstatus='A'  ";
                                            $result = $db->query( $sql );
                                            if ( $acton != 'add' && $acton != 'copy' ) {
                                              while ( $r = mysqli_fetch_array( $result ) ) {
                            
                                                ?>
                                            <tr class='gradeX' id='tr<?php echo $i; ?>'>
                                              <td><?php echo $r['documentID']; ?></td>
                                              <td><input type='hidden' name='imgKey[]'  value='"+obj.fileName+"' id='imgKey<?php echo $i; ?>'>
                                                <input type='text' name='fileName[]' class='form-control' value='<?php echo $r['fileDetail']; ?>' id='fileName<?php echo $i; ?>'></td>
                                              <td class='center'><a class='btn-white btn btn-xs' href='customer_path/<?php echo $r['cusCode'] . '/' . $r['fileName']; ?>' target='_blank'>View</a>
                                                </button>
                                                &nbsp;
                                                <button type='button' class='btn-white btn btn-xs' onClick='return FN_Remove_Table("<?php echo $i; ?>")'>Remove</button></td>
                                            </tr>
                                            <?php $i++; }} ?>
                                            <?php
                                            $sql = "SELECT
                                              t.documentID,
                                              f.cusCode,
                                              t.refJobNo,
                                              f.fileDetail,
                                              f.fileName
                                              FROM
                                              deposit AS t
                                              INNER JOIN deposit_attach AS f ON t.comCode = f.comCode AND t.documentID = f.documentID
                                              WHERE t.comCode='$db->comCode' AND t.refJobNo='$documentID' AND t.documentstatus='A'  ";
                                            $result = $db->query( $sql );
                                            if ( $acton != 'add' && $acton != 'copy' ) {
                                              while ( $r = mysqli_fetch_array( $result ) ) {
                            
                                                ?>
                                            <tr class='gradeX' id='tr<?php echo $i; ?>'>
                                              <td><?php echo $r['documentID']; ?></td>
                                              <td><input type='hidden' name='imgKey[]'  value='"+obj.fileName+"' id='imgKey<?php echo $i; ?>'>
                                                <input type='text' name='fileName[]' class='form-control' value='<?php echo $r['fileDetail']; ?>' id='fileName<?php echo $i; ?>'></td>
                                              <td class='center'><a class='btn-white btn btn-xs' href='customer_path/<?php echo $r['cusCode'] . '/' . $r['fileName']; ?>' target='_blank'>View</a>
                                                </button>
                                                &nbsp;
                                                <button type='button' class='btn-white btn btn-xs' onClick='return FN_Remove_Table("<?php echo $i; ?>")'>Remove</button></td>
                                            </tr>
                                            <?php $i++; }} ?> --}}
                                            </tbody>
                                            <tfoot>
                                            </tfoot>
                                        </table>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">File Name</label>
                                            <div class="col-md-4">
                                                <input type="text" name="attach_name" class="form-control"
                                                    id="attach_name">
                                            </div>
                                            <div id="container_attach" class="fileinput fileinput-new"
                                                data-provides="fileinput"> <span
                                                    class="btn btn-primary btn-file"><span
                                                        class="fileinput-new">Select file</span><span
                                                        class="fileinput-exists">Change</span>
                                                    <input type="file" name="attach_file" id="attach_file">
                                                </span> <span class="fileinput-filename"></span> <a href="#"
                                                    class="close fileinput-exists" data-dismiss="fileinput"
                                                    style="float: none">&times;</a> </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Action</label>
                                            <div class="col-md-4">
                                                <button class="btn btn-primary " type="button" name="btnUpload"
                                                    id="btnUpload"><i class="fa fa-save"></i> Upload File</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h2>Action</h2>
                        </div>
                        <div class="ibox-content">

                            @if ($action != 'edit' && $action != 'create')
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Create By</label>
                                    <div class="col-sm-10">
                                        <label>{{ $data->createBy->username }} {{ $data->createTime ?? '' }}</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Update By</label>
                                    <div class="col-sm-10">
                                        <label>{{ $data->editBy->username }} {{ $data->editTime ?? '' }}</label>
                                    </div>
                                </div>
                            @endif

                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">

                                <div class="col-sm-10 col-sm-offset-2">


                                    <button name="save" id="save" class="btn btn-primary" type="button"
                                        @disabled($data->documentstatus != 'A')>
                                        <i class="fa fa-save"></i> Save</button>
                                    <button name="approve" id="approve" class="btn btn-success " type="button"
                                        @disabled($data->documentstatus == 'A')>
                                        <i class="fa fa-check"></i> Approve</button>


                                    <button class="btn btn-white " type="button" onclick=""><i
                                            class="fa fa-print"></i>
                                        Print</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </form>
</div>
</div>