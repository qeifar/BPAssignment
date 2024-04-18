@extends('layouts.app')

@section('breadtitle', 'Pizza Order')
@section('breaddesc', 'Order the best pizza :D')

@section('bodycontent')
<div>
</div>
@endsection
@section('cardcontent')
    <form id="orderForm">
        <label for="size">Select Pizza Size:</label>
        <select  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example id="size" name="size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="pepperoni" name="pepperoni">
        <label class="form-check-label" for="pepperoni">Pepperoni (+ RM3)</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="extraCheese" name="extra_cheese">
        <label class="form-check-label" for="extraCheese">Extra Cheese (+ RM6)</label>
        </div>
        <button type="submit" class="btn mb-2 btn-outline-primary">Place Order</button>
    </form>

    <div id="totalBill"></div>
@endsection
@section('jscontext')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('/js/order.js') }}"></script>

@endsection