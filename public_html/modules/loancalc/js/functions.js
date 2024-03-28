/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

function calculateMonthly(myForm) {

	var price = document.getElementById("price").value;
	price = parseFloat(stripAlphaChars(price));
	document.getElementById("price").value = price;

	var down_payment = document.getElementById("down_payment").value;
	down_payment = parseFloat(stripAlphaChars(down_payment));
	if(!down_payment) down_payment = 0;
	document.getElementById("down_payment").value = down_payment.toFixed(0);

	if(down_payment > price) {
		down_payment = price;
		document.getElementById("down_payment").value = price.toFixed(0);
	}

	if (typeof myForm.trade_in == 'undefined') trade_in = 0; 
	else {
		var trade_in = document.getElementById("trade_in").value;
		trade_in = parseFloat(stripAlphaChars(trade_in));
		if(!trade_in) trade_in = 0;
		document.getElementById("trade_in").value = trade_in.toFixed(0);

		if(trade_in > (price - down_payment)) {
			var t = price-down_payment;
			document.getElementById("trade_in").value = t.toFixed(0);
		}
	}

	var loan_amount = price - down_payment - trade_in;
	document.getElementById("loan_amount").value = loan_amount.toFixed(0);

	var sales_tax_var = document.getElementById("sales_tax").value;
	sales_tax_var = stripAlphaChars(sales_tax_var);
	sales_tax = parseFloat(sales_tax_var);
	if(!sales_tax) sales_tax = 0.0;
	document.getElementById("sales_tax").value = sales_tax_var;//.toFixed(2);

	var interest_rate_var = document.getElementById("interest_rate").value;
	interest_rate_var = stripAlphaChars(interest_rate_var);
	interest_rate = parseFloat(interest_rate_var);
	if(!interest_rate) interest_rate = 0.0;
	document.getElementById("interest_rate").value = interest_rate_var;

	var term_month = document.getElementById("term_month").value;
	term_month = parseFloat(term_month);
	if(!term_month) term_month = 0;
	document.getElementById("term_month").value = term_month.toFixed(0);

	var term_year_var = document.getElementById("term_year").value;
	term_year_var = stripAlphaChars(term_year_var);
	term_year = parseFloat(term_year_var);
	if(!term_year) term_year = 0.0;
	document.getElementById("term_year").value = term_year_var;


	if(term_month && term_year<=0) {

		term_year = term_month/12;
		document.getElementById("term_year").value = term_year.toFixed(2);
	}

	if(term_month==0 && term_year) {
		term_month = term_year*12;
		document.getElementById("term_month").value = term_month.toFixed(0);
	}

	// calculate monthly payment
	var total_price;
	total_price = loan_amount + price*sales_tax/100;

	if(interest_rate==0) { 
		var rate = total_price/term_month;
		document.getElementById("monthly_payment").value = rate.toFixed(2);
		return;
	}

	var rate = interest_rate/1200;

	var expo = Math.pow((rate+1),term_month);

	monthly_payment = total_price * rate*expo/(expo-1);

	document.getElementById("monthly_payment").value = monthly_payment.toFixed(2);

}

function onChangeMonth(myForm, calc) {

	var term_month_var = document.getElementById("term_month").value;
	term_month_var = stripAlphaChars(term_month_var);
	term_month = parseFloat(term_month_var);
	if(!term_month) term_month = 0;
	document.getElementById("term_month").value = term_month.toFixed(0);

	term_year = term_month/12;
	document.getElementById("term_year").value = term_year.toFixed(2);
	if(calc) calculateMonthly(myForm);
}

function onChangeYear(myForm, calc) {

	var term_year_var = document.getElementById("term_year").value;
	term_year_var = stripAlphaChars(term_year_var);
	term_year = parseFloat(term_year_var);
	if(!term_year) term_year = 0.0;
	document.getElementById("term_year").value = term_year_var;

	term_month = term_year*12;

	document.getElementById("term_month").value = term_month.toFixed(0);
	if(calc) calculateMonthly(myForm);
}

function stripAlphaChars(str) 
{ 

	var res = new String(str);
	res = res.replace(/[^0-9\.]/g, '');
	return res;

}