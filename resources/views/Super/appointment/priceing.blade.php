<div class="form-group">
    <label>Pricing</label>
    <select class="form-control multiple select2-show-search" id="pricing_id" name="pricing_id[]"
        data-placeholder="Select Pricing" multiple>
        <option label="Select Pricing"></option>
        @isset($pricings)
            @foreach ($pricings as $pricingdata)
                <option value="{{ $pricingdata['id'] }}"
                    @isset($selected_issues)
                    @foreach ($selected_issues as $selected_issue)
                    {{ $selected_issue == $pricingdata->id ? 'selected' : '' }}
                    @endforeach
                    @endisset>
                    {{ $pricingdata['name'] }}</option>
            @endforeach
        @endisset
    </select>
</div>
