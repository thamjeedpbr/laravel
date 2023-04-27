<div class="form-group">
    <label>Device</label>
    <select class="form-control select2-show-search" name="device_id" id="device" data-placeholder="Select Device">
        <option label="Select Devices"></option>
        <div>
            @isset($devices)
                @foreach ($devices as $device)
                    <option value="{{ $device->id }}"
                        @isset($pricing)
             @if ($pricing->device_id == $device->id) selected @endif
             @endisset>
                        {{ $device->name }}</option>
                @endforeach
                <option value="0"
                    @isset($pricing)
                    @if ($pricing->device_id == 0)
                        selected
                    @endif
                @endisset>
                    Others</option>
            @endisset

        </div>

    </select>
</div>
