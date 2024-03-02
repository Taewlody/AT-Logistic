<div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">Document No.</label>
        <div class="col-md-4">
            <input name="documentID" {!! $action == 'create' ? "type='hidden'" : "type='text'" !!} class="form-control"
                id="documentID" wire:model.live.debounce.500ms="value.documentID" readonly>
        </div>

        <div class="col-md-2">
            <label class="col-form-label" style="padding-top: 5px;">Document
                Date</label>
        </div>
        <div class="col-lg-4">
            <div class="input-group date">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                <input type="date" name="documentDate" class="form-control" placeholder="dd/mm/yyyy"
                    wire:model.live.debounce.500ms="value.documentDate" @disabled($action != 'create' && $action != 'edit')>
            </div>
        </div>
    </div>
    <div class="form-group  row">
        <label class="col-sm-2 col-form-label">Bound</label>
        <div class="col-md-4">
            <select name="bound" class="select2_single form-control select2"
                id="bound" wire:model.change="value.bound" @disabled($action != 'create' && $action != 'edit')>
                <option value="1">IN BOUND</option>
                <option value="2">OUT BOUND</option>
            </select>
        </div>
        <div class="col-md-2">
            <label class="col-form-label" style="padding-top: 5px;">Freight</label>
        </div>
        <div class="col-md-4">
            <select name="freight" class="select2_single form-control select2"
                id="freight" wire:model.change="value.freight" @disabled($action != 'create' && $action != 'edit')>
                <option value="">- select -</option>
                @foreach (Service::TransportTypeSelecter() as $transportType)
                    <option value="{{ $transportType->transportCode }}">
                        {{ $transportType->transportName }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group  row">
        <label class="col-sm-2 col-form-label">Port of Loading</label>
        <div class="col-md-4">
            <select name="port_of_landing" class="select2_single form-control select2"
                id="port_of_landing" wire:model.change="value.port_of_landing"
                @disabled($action != 'create' && $action != 'edit')>
                <option value="">- select -</option>
                @foreach (Service::PortSelecter() as $port)
                    <option value="{{ $port->portCode }}">{{ $port->portNameEN }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label class="col-form-label" style="padding-top: 5px;">Port of
                Discharge
            </label>
        </div>
        <div class="col-md-4">
            <select name="port_of_discharge" class="select2_single form-control select2"
                id="port_of_discharge" wire:model.change="value.port_of_discharge"
                @disabled($action != 'create' && $action != 'edit')>
                <option value="">- select -</option>
                @foreach (Service::PortSelecter() as $port)
                    <option value="{{ $port->portCode }}">{{ $port->portNameEN }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">M B/L</label>
        <div class="col-md-4">
            <input type="text" name="mbl" class="form-control" id="mbl"
                wire:model.live.debounce.500ms="value.mbl" @disabled($action != 'create' && $action != 'edit')>
        </div>
        <div class="col-md-2">
            <label class="col-form-label" style="padding-top: 5px;">H B/L</label>
        </div>
        <div class="col-md-4">
            <input type="text" name="hbl" class="form-control" id="hbl"
                wire:model.live.debounce.500ms="value.hbl" @disabled($action != 'create' && $action != 'edit')>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">C/O</label>
        <div class="col-md-4">
            <input type="text" name="co" class="form-control" id="co"
                wire:model.live.debounce.500ms="value.co" @disabled($action != 'create' && $action != 'edit')>
        </div>
        <div class="col-md-2">
            <label class="col-form-label" style="padding-top: 5px;">Paper Less
                Code</label>
        </div>
        <div class="col-md-4">
            <input type="text" name="paperless" class="form-control"
                id="paperless" wire:model.live.debounce.500ms="value.paperless"
                @disabled($action != 'create' && $action != 'edit')>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">Bill of lading</label>
        <div class="col-md-4">
            <input type="text" name="bill_of_landing" class="form-control"
                id="bill_of_landing" wire:model.live.debounce.500ms="value.bill_of_landing"
                @disabled($action != 'create' && $action != 'edit')>
        </div>
        <label class="col-lg-2 col-form-label">Import Entry</label>
        <div class="col-md-4">
            <input type="text" name="import_entry" class="form-control"
                id="import_entry" wire:model.live.debounce.500ms="value.import_entry"
                @disabled($action != 'create' && $action != 'edit')>
        </div>
    </div>
    <div class="form-group row date">
        <label class="col-lg-2 col-form-label">ETD</label>
        <div class="col-lg-4">
            <div class="input-group date"> 
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                <input type="date" name="etdDate" id="etdDate"
                    class="form-control" wire:model.live.debounce.500ms="value.etdDate"
                    @disabled($action != 'create' && $action != 'edit')>
            </div>
        </div>
        <div class="col-md-2">
            <label class="col-form-label" style="padding-top: 5px;">ETA</label>
        </div>
        <div class="col-lg-4">
            <div class="input-group date"> 
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                <input name="etaDate" id="etaDate" type="date"
                    class="form-control" wire:model.live.debounce.500ms="value.etaDate"
                    @disabled($action != 'create' && $action != 'edit')>
            </div>
        </div>
    </div>
    <div class="form-group row date">
        <label class="col-lg-2 col-form-label">Closing Date</label>
        <div class="col-lg-4">
            <div class="input-group date">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                <input name="closingDate" type="date" class="form-control"
                    id="closingDate" wire:model.live.debounce.500ms="value.closingDate"
                    @disabled($action != 'create' && $action != 'edit')>
            </div>
        </div>
        <div class="col-md-2">
            <label class="col-form-label" style="padding-top: 5px;">Time</label>
        </div>
        <div class="col-lg-4">
            <div class="input-group clockpicker" value-autoclose="true">
                <input name="closingTime" type="text" class="form-control"
                    id="closingTime" wire:model.live.debounce.500ms="value.closingTime"
                    @disabled($action != 'create' && $action != 'edit')>
                <span class="input-group-addon">
                    <span class="fa fa-clock-o"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">INV No.</label>
        <div class="col-md-4">
            <input type="text" name="invNo" class="form-control" id="invNo"
                wire:model.live.debounce.500ms="value.invNo" @disabled($action != 'create' && $action != 'edit')>
        </div>
        <div class="col-md-2">
            <label class="col-form-label" style="padding-top: 5px;">Bill</label>
        </div>
        <div class="col-md-4">
            <input type="text" name="bill" class="form-control" id="bill"
                wire:model.live.debounce.500ms="value.bill" @disabled($action != 'create' && $action != 'edit')>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">Booking No.</label>
        <div class="col-md-4">
            <input type="text" name="bookingNo" class="form-control"
                id="bookingNo" wire:model.live.debounce.500ms="value.bookingNo"
                @disabled($action != 'create' && $action != 'edit')>
        </div>
        <div class="col-md-2">
            <label class="col-form-label" style="padding-top: 5px;">Delivery
                Type</label>
        </div>
        <div class="col-md-4">
            <select name="deliveryType" class="select2_single form-control select2"
                id="deliveryType" wire:model.change="value.deliveryType"
                @disabled($action != 'create' && $action != 'edit')>
                <option value="FCL">FCL</option>
                <option value="LCL">LCL</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">FOB AT</label>
        <div class="col-md-4">
            <select name="fob" class="select2_single form-control select2"
                id="fob" wire:model.change="value.fob" @disabled($action != 'create' && $action != 'edit')>
                <option value="">- select -</option>
                @foreach (Service::PlaceSelecter() as $place)
                    <option value="{{ $place->pCode }}">{{ $place->pName }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label class="col-form-label" style="padding-top: 5px;">Place of
                receive
            </label>
        </div>
        <div class="col-md-4">
            <select name="place_receive" class="select2_single form-control select2"
                id="place_receive" wire:model.change="value.place_receive"
                @disabled($action != 'create' && $action != 'edit')>
                <option value="">- select -</option>
                @foreach (Service::PlaceSelecter() as $place)
                    <option value="{{ $place->pCode }}">{{ $place->pName }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">Free Time</label>
        <div class="col-md-4">
            <input type="number" name="freetime" class="form-control"
                id="freetime" wire:model.live.debounce.500ms="value.freetime"
                @disabled($action != 'create' && $action != 'edit')>
        </div>
        <div class="col-md-2">
            <label class="col-form-label" style="padding-top: 5px;">
                <span
                    id="textboundType">{{ $value->bound == '1' ? 'IN BOUND' : 'OUT BOUND' }}</span>
            </label>
        </div>
        <div class="col-md-4">
            <div class="input-group date">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                <input name="freetimeEXP" id="freetimeEXP" type="date"
                    wire:model.live.debounce.500ms="value.freetimeEXP" class="form-control"
                    @disabled($action != 'create' && $action != 'edit')>
            </div>
        </div>
    </div>
</div>