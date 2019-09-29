<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Payment Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group pt-2">
                <label class="control-label" for="paystack_payment_method">Paystack</label>
                <select name="paystack_payment_method" id="paystack_payment_method" class="form-control">
                    <option value="1" {{ (config('settings.paystack_payment_method')) == 1 ? 'selected' : '' }}>Enabled</option>
                    <option value="0" {{ (config('settings.paystack_payment_method')) == 0 ? 'selected' : '' }}>Disabled</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" for="paystack_client_id">Client ID</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter paystack client Id"
                    id="paystack_client_id"
                    name="paystack_client_id"
                    value="{{ config('settings.paystack_client_id') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="paystack_secret_id">Secret ID</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter paystack secret id"
                    id="paystack_secret_id"
                    name="paystack_secret_id"
                    value="{{ config('settings.paystack_secret_id') }}"
                />
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>