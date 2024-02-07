<div>
    <livewire:component.page-heading title_main="Container Type" title_sub="ประเภทตู้คอนเทนเนอร์" breadcrumb_title="Common Data" breadcrumb_page="Container Type" />

    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-7"></div>
                        <div class="col-3">
                            <input type="text" id="search" name="search" class="form-control" wire:model.live="searchText" placeholder="Search in table">
                        </div>
                        <div class="col-2" style="justify-content: flex-end; display: flex">
                            <a href="{{ route('transport-type.form', ['action' => 'create']) }}" class="btn btn-primary">
                                <i class="fa fa-plus "> </i> Create new 
                            </a>
                        </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="footable table table-stripped toggle-arrow-tiny"
                        data-page-size="{{ $data->total() }}" data-filter=#filter>
                        <thead>
                            <tr>
                                <th style="width:5%">No.</th>
                                <th style="width:10%">Code</th>
                                <th style="width:40%">Type Name</th>
                                <th  style="width:10%">Status</th>
                                <th data-hide="phone"  style="width:10%">Update By</th>
                                <th data-hide="phone,tablet"  style="width:10%">Action</th>
                            </tr>
                          </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->containertypeCode }}</td>
                                    <td>{{ $item->containertypeName }}</td>
                                    <td class="center"><span @class(['badge', 'label-primary' => $item->isActive])>{{ $item->isActive ? 'Active' : 'Disable' }}</span></td>
                                    <td class="center">{{ $item->editBy != null? $item->editBy->username : '' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-xs btn-success" href="{{ route('transport-type.form', ['action' => 'view', 'id' => $item->containertypeCode]) }}">View</a>
                                            <a class="btn btn-xs btn-primary" href="{{ route('transport-type.form', ['action' => 'edit', 'id' => $item->containertypeCode]) }}">Edit</a>
                                            <button class="btn btn-xs btn-danger" wire:confirm="Are you sure want to delete {{$item->containertypeName}}" wire:click="delete('{{$item->containertypeCode}}')" wire:refresh="$refresh">Delete</button>
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

