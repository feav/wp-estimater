function calcul_nombre_clics(budget, cpc){
    var num_clicks = budget / cpc;
    return num_clicks.toLocaleString("pt", {maximumFractionDigits: 0});
}
function calcul_nombre_prospect(budget, cpc,conversion){
    var conversion_rate = conversion / 100;
    var num_clicks = budget / cpc;
    num_leads = num_clicks * conversion_rate;
    return  num_leads.toLocaleString("pt", {maximumFractionDigits: 0});
}
function calcul_cout_prospect(cpc,conversion){
    var conversion_rate = conversion / 100;
    var cost_per_lead = cpc / conversion_rate;
    return cost_per_lead.toLocaleString("pt", {maximumFractionDigits: 0 });
}
function calcul_valeur_prospect(cpc,conversion, sale_price, lead_to_customer){
    var lead_to_customer_rate = lead_to_customer / 100;
    var value_of_lead = sale_price * lead_to_customer_rate;
    return value_of_lead.toLocaleString("pt", { maximumFractionDigits: 0 });
}
function calcul_revenu_estime(budget, cpc, conversion, sale_price, lead_to_customer){
    var conversion_rate = conversion / 100;
    var expected_revenue = budget / cpc * (conversion_rate / 100) * (sale_price * (lead_to_customer / 100));
    return expected_revenue.toLocaleString("pt", { maximumFractionDigits: 0});
}
function calcul_profit_estime(budget, cpc, conversion, sale_price, lead_to_customer){
    var conversion_rate = conversion / 100;
    var expected_revenue = budget / cpc * (conversion_rate / 100) * (sale_price * (lead_to_customer / 100));
    expected_revenue = expected_revenue.toFixed(0);
    var expected_profit = expected_revenue - budget;
    return expected_profit.toLocaleString("pt", {maximumFractionDigits: 0});
}

function calcul_roi(budget, cpc, conversion, sale_price, lead_to_customer){
    var conversion_rate = conversion / 100;
    var expected_revenue = budget / cpc * (conversion_rate / 100) * (sale_price * (lead_to_customer / 100));
    expected_revenue = expected_revenue.toFixed(0);
    var expected_profit = expected_revenue - budget;
    var investissement = expected_profit / budget * 100;
    return investissement.toLocaleString("pt", {maximumFractionDigits: 0});
}
function percentage(min,max,val){
  var v = (max*val)/100;
  return v<min?min:v;
}
function getStyleValue(target){
  return parseFloat(jQuery("#slide_"+target+"_ > div").attr("style").replace("width: ","").replace("%","").replace(";",""));
}
function refresh(){
  var budget_ = getStyleValue("budget"), 
      cpc_ = getStyleValue("cpc"), 
      conversion_ = getStyleValue("conversion"), 
      sale_price_ = getStyleValue("sale_price"), 
      lead_to_customer_ = getStyleValue("lead_to_customer");
  var budget = percentage(100,50000,budget_), 
      cpc = percentage(0.1,50,cpc_), 
      conversion = percentage(0.1,50,conversion_), 
      sale_price = percentage(0.1,50,sale_price_), 
      lead_to_customer = percentage(0.1,50,lead_to_customer_);
      jQuery("#budget_value").html(budget);
      jQuery("#est_cpc_value").html(cpc);
      jQuery("#conversion_rate_value").html(conversion);
      jQuery("#est_conversion_value").html(sale_price);
      jQuery("#lead_to_customer_rate").html(lead_to_customer);

      var x1 = calcul_nombre_clics(budget, cpc);
      jQuery("#number_of_clicks_value").html(x1);
      var x2 = calcul_nombre_prospect(budget, cpc,conversion);
      jQuery("#number_of_leads_value").html(x2);
      var x3 = calcul_cout_prospect(cpc,conversion);
      jQuery("#cost_per_lead_value").html(x3);
      var x4 = calcul_valeur_prospect(cpc,conversion, sale_price, lead_to_customer);
      jQuery("#lead_value").html(x4);
      var x5 = calcul_revenu_estime(budget, cpc, conversion, sale_price, lead_to_customer);
      jQuery("#estimated_revenue").html(x5);
      var x6 = calcul_profit_estime(budget, cpc, conversion, sale_price, lead_to_customer);
      jQuery("#estimated_profit").html(x6);
      var x7 = calcul_roi(budget, cpc, conversion, sale_price, lead_to_customer);
      jQuery("#wp-estimater-_value").html(x7);
}
  function hexFromRGB(r, g, b) {
    var hex = [
      r.toString( 16 ),
      g.toString( 16 ),
      b.toString( 16 )
    ];
    jQuery.each( hex, function( nr, val ) {
      if ( val.length === 1 ) {
        hex[ nr ] = "0" + val;
      }
    });
    return hex.join( "" ).toUpperCase();
  }
  function refreshSwatch() {
    var red = jQuery( "#red" ).slider( "value" ),
      green = jQuery( "#green" ).slider( "value" ),
      blue = jQuery( "#blue" ).slider( "value" ),
      hex = hexFromRGB( red, green, blue );
    jQuery( "#swatch" ).css( "background-color", "#" + hex );
  }
  jQuery(function() {

    jQuery(".slider-horizontal > div" ).slider( {
      orientation: "horizontal",
      range: "min",
      max: 100,
      value: 0,
      slide: refresh,
      change: refresh
    });

    // jQuery(".slider-horizontal > div > span" ).hover( function(){refresh()});
    // jQuery( "#red" ).slider( "value", 255 );
    // jQuery( "#green" ).slider( "value", 140 );
    // jQuery( "#blue" ).slider( "value", 60 );
  });