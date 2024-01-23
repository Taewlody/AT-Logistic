<div>
    <livewire:component.page-heading title_en="Saleman" title_th="พนักงานขาย" breadcrumb_title="Common Data" breadcrumb_page="Saleman" />

    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Saleman List</h5>
                        <div class="ibox-tools"> <a href="country_form?action=add" class="btn btn-primary btn-xs"><i
                                    class="fa fa-plus "> </i> Create new </a> </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <input type="text" class="form-control form-control-sm m-b-xs"
                                id="filter"placeholder="Search in table">

                            {{-- <table></table> --}}
                            {{-- <livewire:page.common.country.table :data="$countries"/> --}}

                            <table class="footable table table-stripped toggle-arrow-tiny"
                                data-page-size="{{ $data->total() }}" data-filter=#filter>
                                <thead>
                                    <tr>
                                        <th style="width:5%">No.</th>
                                        <th style="width:10%">Employee Code</th>
                                        <th style="width:40%">Name</th>
                                        <th  style="width:10%">Status</th>
                                        <th data-hide="phone"  style="width:10%">Update By</th>
                                        <th data-hide="phone,tablet"  style="width:10%">Action</th>
                                    </tr>
                                  </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->empCode }}</td>
                                            <td>{{ $item->empName }}</td>
                                            <td class="center"><span @class(['label', 'label-primary' => $item->isActive])>{{ $item->isActive ? 'Active' : 'Disable' }}</span></td>
                                            <td class="center">{{ $item->editBy != null? $item->editBy->username : '' }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn-white btn btn-xs" onClick="location.href='port_form?action=view&portCode={{ $item->empCode }}">View</button>
                                                    <button class="btn-white btn btn-xs" onClick="location.href='port_form?action=edit&portCode={{ $item->empCode }}">Edit</button>
                                                    <button class="btn-white btn btn-xs" onClick="return confirmDel('{{ $item->empCode }}','port_action.php');">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                            </table>
                            {{ $data->appends(['sort'])->links() }}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

