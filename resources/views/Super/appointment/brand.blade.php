<div class="form-group">
    <label>Brand</label>
    <select class="form-control select2-show-search" id="brand" name="brand_id" data-placeholder="Select Brand">
        <option label="Select Brand"></option>
        @foreach ($brands as $brand)
            <option value="{{ $brand->id }}"
                @isset($appointment)
                @if ($appointment->brand_id == $brand->id)
                    selected
                @endif
            @endisset>
                {{ $brand->name }}</option>
        @endforeach
        <option value="0"
            @isset($appointment)
                @if ($appointment->brand_id == 0)
                    selected
                @endif
            @endisset>
            Others</option>
    </select>
</div>
