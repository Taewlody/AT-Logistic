{{-- @push('css')
    <style>
        .form-body input:disabled {
            border: none;
            background: none;
            color: black;
            padding: 0;
        }
        .form-body input[type='radio']:disabled:not(:checked) + label{
            display: none;
        }
        .form-body input[type='radio']:disabled:not(:checked){
            display: none;
        }
        .form-body input[type='radio']:disabled:checked {
            display: none;
        }
        .form-body select:disabled {
            border: none;
            background: none;
            color: black;
            padding: 0;
        }
    </style>
@endpush --}}
<div>
    <livewire:component.page-heading title_main="Port" title_sub="ท่าเรือ" breadcrumb_title="Common Data"
        breadcrumb_page="Port" breadcrumb_page_title="Port Form" />

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-content">
                    <form class="form-body" wire:submit="save">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">
                                <h3>Port info</h3>
                            </label>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label"> Code</label>
                            <div class="col-md-2">
                                <input name="portCode" type="text" class="form-control " id="portCode"
                                    autocomplete="off" wire:model="data.portCode"  @disabled($action != 'create')>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label"> Name (TH)</label>
                            <div class="col-sm-8"><input name="portNameTH" type="text" class="form-control "
                                    id="portNameTH" autocomplete="empty" wire:model="data.portNameTH" @disabled($action != 'create' && $action != 'edit')></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Name (EN)</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control " name="portNameEN" autocomplete="empty"
                                    id="portNameEN" wire:model="data.portNameEN" @disabled($action != 'create' && $action != 'edit')>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Country</label>
                            <div class="col-md-4">
                                <select class="select2_single form-control select2" name="countryCode" id="countryCode" wire:model="data.countryCode" @disabled($action != 'create' && $action != 'edit')>
                                    <option value="">- select -</option>
                                    @foreach ($countryList as $country)
                                        <option value="{{ $country->countryCode }}">{{ $country->countryNameEN }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                    <input id="activeRadio" type="radio" name="isActive" value="true" wire:model="data.isActive" @disabled($action != 'create' && $action != 'edit')>
                                    <label for="activeRadio" class="checkbox-inline i-checks">Active </label>   
                                
                                    <input id="inactiveRadio" type="radio" name="isActive" value="false" wire:model="data.isActive" @disabled($action != 'create' && $action != 'edit')>
                                    <label for="inactiveRadio" class="i-checks">Inactive</label>
                            </div>
                        </div>
                        @if($action != 'create')
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Create By</label>
                            <div class="col-sm-10">
                                <label>{{ $data->createBy->username }} {{$data->createTime ?? ''}}</label>
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Update By</label>
                            <div class="col-sm-10">
                                <label>{{ $data->editBy->username }} {{$data->editTime ?? ''}}</label>
                            </div>
                        </div>
                        @endif
                        <div class="hr-line-dashed"></div>

                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <a name="back" class="btn btn-white" type="button"
                                        href="{{route('port')}}"><i class="fa fa-reply"></i> Back</a>
                                    @if ($action == 'create' || $action == 'edit')
                                        <button name="save" id="save" class="btn btn-primary" type="submit"><i
                                                class="fa fa-save"></i> Save</button>
                                    @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>