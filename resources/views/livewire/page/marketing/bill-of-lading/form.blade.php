<div>

    <livewire:component.page-heading title_main="Bill of lading" title_sub="ใบตราส่งสินค้า" breadcrumb_title="Marketing"
        breadcrumb_page="Bill of lading" breadcrumb_page_title="Bill of lading Form" />

    <div class="wrapper wrapper-content animated fadeInRight">

        {{-- loading --}}
        <div wire:loading.block class="loader-wrapper">
            <div class="loader"></div>
        </div>
        
        <!-- Body-->
        <form class="form-body" wire:submit="save">

            <div class="row">
                <div class="col-lg-6">

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
                                    <div class="form-group  row">
                                        <label class="col-sm-3 col-form-label">Document No.</label>
                                        <div class="col-md-4">
                                            <input type="text" name="documentID" id="documentID" class="form-control"
                                                wire:model="data.documentID" readonly>
                                        </div>
                                    </div>
        
        
                                    <div class="form-group  row">
                                        <label class="col-sm-3 col-form-label">Document Date</label>
                                        <div class="col-md-4">
                                            <div class="input-group date">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="text" name="documentDate" class="form-control" wire:model="data.documentDate">
                                            </div>
                                        </div>
                                    </div>
        
        
                                    <div class="form-group  row">
                                        <label class="col-sm-3 col-form-label">Customer</label>
                                        <div class="col-md-9">
                                            <select class="select2_single form-control select2" name="cusCode" wire:model="data.cusCode">
                                                <option value="">Select Customer</option>
                                                @foreach($customerList as $customer)
                                                    <option value="{{ $customer->cusCode }}">{{ $customer->cusName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
        
                                    <div class="form-group  row">
                                        <label class="col-sm-3 col-form-label">Shipper</label>
                                        <div class="col-md-9">
                                            <select class="select2_single form-control select2" name="shipperCode" wire:model="data.shipperCode">
                                                <option value="">Select Shipper</option>
                                                @foreach($supplierList as $supplier)
                                                    <option value="{{ $supplier->supCode }}">{{ $supplier->supName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
        
        
                                    <div class="form-group  row">
                                        <label class="col-sm-3 col-form-label">Consignee</label>
                                        <div class="col-md-9">
                                            <select class="select2_single form-control select2" name="consigneeCode" wire:model="data.consigneeCode">
                                                <option value="">Select Consignee</option>
                                                @foreach($supplierList as $supplier)
                                                    <option value="{{ $supplier->supCode }}">{{ $supplier->supName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
        
                                    <div class="form-group  row">
                                        <label class="col-sm-3 col-form-label">Ref. JobNo.</label>
                                        <div class="col-md-9">
                                            <select class="select2_single form-control select2" name="ref_jobID" wire:model="data.ref_jobID">
                                                <option value="">Select JobNo</option>
                                                @foreach($jobOrderList as $job)
                                                    <option value="{{ $job->jobID }}">{{ $job->jobID }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Section 2 --}}
                <div class="col-lg-6">

                    <div id="accordion-2" class="default-according">
                        <div class="card">
                            <div class="card-header" id="headingDetail">
                                <h2 class="mb-0">
                                    <a role="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseDetail" aria-expanded="true"
                                        aria-controls="collapseDetail">
                                        Detail
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseDetail" role="tabpanel" class="collapse show"
                                aria-labelledby="headingDetail" data-bs-parent="#accordion-2">
                                <div class="card-body">
                                    <div class="form-group  row">
                                        <label class="col-sm-3 col-form-label">Notify Party</label>
                                        <div class="col-md-9">
                                            <input type="text" name="notify_party" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cargo Delivery, Please Contact</label>
                                        <div class="col-md-9">
                                            <input type="text" name="cargo_deliverry" class="form-control">
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Marks Number</label>
                                        <div class="col-md-9">
                                            <input type="text" name="marks_number" class="form-control">
                                        </div>
                                    </div>
        
        
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Freight Detal, Charges etc.</label>
                                        <div class="col-md-9">
                                            <input type="text" name="freight_detail" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group  row">
                                        <label class="col-sm-3 col-form-label">Prepaid</label>
                                        <div class="col-md-9">
                                            <input type="text" name="prepaid" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group  row">
                                        <label class="col-sm-3 col-form-label">Collect</label>
                                        <div class="col-md-9">
                                            <input type="text" name="collerct" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <br>
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h2>Action</h2>
                    </div>
                    <div class="ibox-content">

                        @if ($action != 'create')
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


        </form>
    </div>
</div>