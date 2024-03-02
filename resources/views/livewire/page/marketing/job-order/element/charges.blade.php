<div>
    <div class="form-group  row">
        <div class="col-md-6">
            <select class="select2_single form-control select2" style="width: 100%;"
                id="chargeCode" wire:model.change="chargeCode">
                <option value="">- select -</option>
                @foreach (Service::ChargesSelecter() as $charge)
                    <option value="{{ $charge->chargeCode }}">
                        {{ $charge->chargeName }}
                    </option>
                @endforeach

            </select>
        </div>
        <div class="col-md-2" style="padding-left: 0px;">
            <button class="btn btn-white " type="button" name="addCharge" wire:click="addCharge"
                id="addCharge"><i class="fa fa-plus"></i>
                Add</button>
        </div>
    </div>
    <div class="form-group">
        <div class="table-responsive" id="containner_charge">
            <table class="table" width="100%" id="table_charge">
                <thead>
                    <tr>
                        <th style="width:5%">No.</th>
                        <th style="width:10%">Detail</th>
                        <th style="width:10%;min-width: 140px;">Price</th>
                        <th style="width:10%;min-width: 140px;">Volum</th>
                        <th style="width:10%;min-width: 140px;">Exchange</th>
                        <th style="width:10%;min-width: 140px;">Cost</th>
                        <th style="width:10%;min-width: 140px;">Receive</th>
                        <th style="width:10%;min-width: 140px;">Bill of receipt</th>
                        <th style="width:5%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($value as $item)
                        <tr class='gradeX'
                            {{-- wire:key="charge-field-{{ $item->items }}"> --}}
                            >
                            <td>
                                {{ $loop->iteration }}
                                {{-- {{ $item->items }} --}}
                            </td>
                            <td>
                                <input type="text" class="form-control"
                                    wire:model.live.debounce.500ms="value.{{ $loop->index }}.detail">
                                    {{-- <livewire:element.input :keyName="'detail-'.$item->items" wire:model.live="value.{{ $loop->index }}.detail" /> --}}
                            </td>
                            <td class="center">
                                <input type="number" class="form-control full"
                                    {{-- onkeyup="call_price(),call_exchange(<?php echo $rowIdx; ?>)" --}}
                                    value="1">
                                    {{-- wire:model="data.{{ $loop->index }}.price"> --}}
                            </td>
                            <td class="center">
                                <input type="number" class="form-control full"
                                    {{-- onkeyup="call_price(),call_exchange(<?php echo $rowIdx; ?>)" --}}
                                    value="1">
                                    {{-- wire:model="data.{{ $loop->index }}.volum"> --}}
                            </td>
                            <td class="center">
                                <input type="number" class="form-control full"
                                    {{-- onkeyup="call_price(),call_exchange(<?php echo $rowIdx; ?>)" --}}
                                    value="1">
                                    {{-- wire:model="data.{{ $loop->index }}.exchange"> --}}
                            </td>
                            <td class="center">
                                <input type="number" class="form-control full" 
                                    wire:model.live.debounce.500ms.number="value.{{ $loop->index }}.chargesCost"
                                    @readonly($charge->ref_paymentCode != '')>
                                    {{-- <livewire:element.input :keyName="'chargesCost-'.$item->items" type="number" wire:model.live="value.{{ $loop->index }}.chargesCost" /> --}}
                            </td>
                            <td class="center">
                                <input type="number" class="form-control full"
                                    wire:model.live.debounce.500ms.number="value.{{ $loop->index }}.chargesReceive">
                                    {{-- <livewire:element.input :keyName="'chargesReceive-'.$item->items" type="number" wire:model.live="value.{{ $loop->index }}.chargesReceive" /> --}}
                            </td>
                            <td class="center">
                                <input type="number" class="form-control full"
                                    wire:model.live.debounce.500ms.number="value.{{ $loop->index }}.chargesbillReceive">
                                    {{-- <livewire:element.input :keyName="'chargesbillReceive-'.$item->items" type="number" wire:model.live="value.{{ $loop->index }}.chargesbillReceive" /> --}}
                            </td>
                            <td class='center'>
                                <button type='button'
                                    class='btn-white btn btn-xs'
                                    wire:click="$parent.removeCharge({{ $loop->index }})">Remove</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

                <tfoot>
                    <tr>
                        <td style="width:5%"></td>
                        <td style="width:50%;"><strong>Volum :
                                {{-- @foreach ($this->groupedContainer($parent->container) as $key => $GroupContainer)
                                    {{ $GroupContainer }}X{{ $key }}
                                @endforeach --}}
                            </strong></td>
                        <td style="width:10%">&nbsp;</td>
                        <td style="width:10%">&nbsp;</td>
                        <td style="width:10%">
                            <span style="width:50%; text-align: right;">Vat 7%</span>
                        </td>
                        <td style="width:10%">
                            <input type="hidden" name="vat_total_chargesCost"
                                readonly class="form-control" value="{{ Service::MoneyFormat($value->sum('chargesCost') * 0.07) }}"
                                id="vat_total_chargesCost">
                        </td>
                        <td style="width:10%">
                            <input type="text" name="vat_total_chargesReceive"
                                readonly class="form-control" value="{{ Service::MoneyFormat($this->call_price['tax7']) }}"
                                id="vat_total_chargesReceive">
                        </td>
                        <td style="width:10%">
                            <input type="hidden" name="vat_total_chargesbillReceive"
                                readonly class="form-control" value="{{ Service::MoneyFormat($value->sum('chargesbillReceive')  * 0.07) }}"
                                id="vat_total_chargesbillReceive">
                        </td>
                        <td style="width:5%">
                        </td>
                    </tr>
                    <tr>
                        <td style="width:5%"></td>
                        <td style="width:50%; text-align: right;">&nbsp;</td>
                        <td style="width:10%">&nbsp;</td>
                        <td style="width:10%">&nbsp;</td>
                        <td style="width:10%"><span
                                style="width:50%; text-align: right;">Toal 7%</span>
                        </td>
                        <td style="width:10%">
                            <input type="text"
                                name="total_chargesCost" readonly class="form-control"
                                value="{{ Service::MoneyFormat($value->sum('chargesCost')) }}" id="total_chargesCost">
                        </td>
                        <td style="width:10%">
                            <input type="text"
                                name="total_chargesReceive" readonly
                                class="form-control" value="{{ Service::MoneyFormat($this->call_price['total']) }}"
                                id="total_chargesReceive">
                        </td>
                        <td style="width:10%">
                            <input type="text"
                                name="total_chargesbillReceive" readonly
                                class="form-control" value="{{ Service::MoneyFormat($value->sum('chargesbillReceive'))}}"
                                id="total_chargesbillReceive">
                        </td>
                        <td style="width:5%"></td>
                    </tr>
                </tfoot>
            </table>
            <table class="table invoice-total">
                <tbody>
                    <tr>
                        <td><strong>รวม :</strong></td>
                        <td>
                            <span id="total">{{ Service::MoneyFormat($this->call_price['total'] + $value->sum('chargesbillReceive')) }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>ค่าบริการ Tax (3%) :</strong></td>
                        <td><span id="tax3">{{ Service::MoneyFormat($this->call_price['tax3']) }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>ค่าขนส่ง Tax (1%) :</strong></td>
                        <td><span id="tax1">{{ Service::MoneyFormat($this->call_price['tax1']) }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>รวม :</strong></td>
                        <td><span id="grand_total">{{Service::MoneyFormat(($this->call_price['total'] + $value->sum('chargesbillReceive')) - $this->call_price['tax3'] - $this->call_price['tax1'])}}</span>
                            {{-- <input type="hidden" id="h_grand_total"
                                name="h_grand_total" value="{{Service::MoneyFormat(($cal_charge['total'] + $data->charge->sum('chargesbillReceive')) - $cal_charge['tax3'] - $cal_charge['tax1']) }}"> --}}
                        </td>
                    </tr>
                    <tr>
                        <td><strong>ลูกค้าสำรองจ่าย</strong></td>
                        <td><span id="cus_paid">
                                {{Service::MoneyFormat($customer_piad->sum('sumTotal'))}}
                            </span>
                                
                        </td>
                    </tr>
                    <tr>
                        <td><strong>คงเหลือจ่ายจริง</strong></td>
                        <td><span id="net_pad">{{Service::MoneyFormat((($this->call_price['total'] + $value->sum('chargesbillReceive')) - $this->call_price['tax3'] - $this->call_price['tax1']) - $customer_piad->sum('sumTotal'))}}</span>
                            <input type="hidden" id="h_net_pad" name="h_net_pad"
                                value="">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- 
@script
    <script>
        $wire.on('cal-price', (event)=> {
            console.log("cal-price");
        })

        $wire.on('cal-success', (event)=> {
            console.log("cal-success");
        })
    </script>
@endscript --}}
