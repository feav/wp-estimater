  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

<div class="container wp-estimater--calculator">
                <div class="row">
                    <div class="col-12 col-lg-8 wp-estimater--questions">
                        <div class="questions">
                            <div class="question">
                                <div class="row">
                                    <div class="col-12 col-md-8 question-question">
                                        <p>Budget moyen estimé 
                                        	<img src="<?php echo WE_URL; ?>templates/img/info.png" alt="" class="img-responsive  open-tooltip">
                                        	<span class="tooltip">Veuillez sélectionner le montant mensuel que vous souhaitez investir dans votre campagne</span>
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-4 question-value">
                                        <span>€&nbsp; <span id="budget_value">100</span></span>
                                    </div>
                                </div>
                                <div class="row d-none d-md-inline-block question-detail">
                                    <div class="col-12">à combien estimez-vous vos dépenses par mois en publicité online ?</div>
                                </div>
                                <div class="row question-slider">
                                    <div class="col-12">
                                        <div class="input-box">
                                            <span class="budget-button less" id="less-budget">-</span>
                                            <div class="slider slider-horizontal" id="">
                                            	<div id="slide_budget_"></div>
                                            </div>
                                            <span class="budget-button more" id="more-budget">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="question">
                                <div class="row">
                                    <div class="col-12 col-md-9 question-question">
                                        <p>CPC estimé <img src="<?php echo WE_URL; ?>templates/img/info.png" alt="" class="img-responsive  open-tooltip">
                                        <span class="tooltip">Tout dépend du coût par clic de chaque canal, mais une moyenne peut vous donner une idée du coût par clic. </span></p>
                                    </div>
                                    <div class="col-12 col-md-3 question-value">
                                        <span>€&nbsp; <span id="est_cpc_value">0,1</span></span>
                                    </div>
                                </div>
                                <div class="row d-none d-md-inline-block question-detail">
                                    <div class="col-12">à combien évaluez-vous votre coût par clic moyen ?</div>
                                </div>
                                <div class="row question-slider">
                                    <div class="col-12">
                                        <div class="input-box">
                                            <span class="budget-button less" id="less-budget">-</span>
                                            <div class="slider slider-horizontal" id="">
                                                <div id="slide_cpc_"></div>
                                            </div>
                                            <span class="budget-button more" id="more-budget">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="question">
                                <div class="row">
                                    <div class="col-12 col-md-9 question-question">
                                        <p>Taux de conversion estimé <img src="<?php echo WE_URL; ?>templates/img/info.png" alt="" class="img-responsive  open-tooltip">
                                        	<span class="tooltip">Si vous avez déjà une estimation moyenne provenant d’une campagne précédente, c’est parfait! Il vous suffit de reporter ce montant. Dans le cas contraire, essayez de vous imaginer combien de visiteurs pourraient convertir en fonction du trafic généré.</span></p>
                                    </div>
                                    <div class="col-12 col-md-3 question-value">
                                        <span id="conversion_rate_value">0,1 %</span>
                                    </div>
                                </div>
                                <div class="row d-none d-md-inline-block question-detail">
                                    <div class="col-12">combien de visiteurs finalisent une vente sur votre site ecommerce ou un lead sur votre landing page ?</div>
                                </div>
                                <div class="row question-slider">
                                    <div class="col-12">
                                        <div class="input-box">
                                            <span class="budget-button less" id="less-conversion_rate">-</span>
                                            <div class="slider slider-horizontal" id="">
                                            	<div id="slide_conversion_"></div>
                                            </div>
                                            <span class="budget-button more" id="more-conversion_rate">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="question">
                                <div class="row">
                                    <div class="col-12 col-md-9 question-question">
                                        <p>Coût par conversion estimé <img src="<?php echo WE_URL; ?>templates/img/info.png" alt="" class="img-responsive  open-tooltip">
                                        	<span class="tooltip">S’il s’agit d’un objectif vente, veuillez reporter le montant de votre panier moyen. S’il s’agit dun lead prospects, combien représente t-il pour vous ?</span></p>
                                    </div>
                                    <div class="col-12 col-md-3 question-value">
                                        <span>€&nbsp; <span id="est_conversion_value">1</span></span>
                                    </div>
                                </div>
                                <div class="row d-none d-md-inline-block question-detail">
                                    <div class="col-12">quel est le coût moyen d’une conversion ?</div>
                                </div>
                                <div class="row question-slider">
                                    <div class="col-12">
                                        <div class="input-box">
                                            <span class="budget-button less" id="less-conversion_value">-</span>
                                            <div class="slider slider-horizontal" id="">
                                                <div id="slide_sale_price_"></div>
                                            </div>
                                            <span class="budget-button more" id="more-conversion_value">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="question">
                                <div class="row">
                                    <div class="col-12 col-md-10 question-question">
                                        <p>Taux de conversion de Lead en client <img src="<?php echo WE_URL; ?>templates/img/info.png" alt="" class="img-responsive  open-tooltip">
                                        	<span class="tooltip">Cet indicateur définira le taux de réussite de votre campagne CPL</span></p>
                                    </div>
                                    <div class="col-12 col-md-2 question-value">
                                        <span id="lead_to_customer_rate">1 %</span>
                                    </div>
                                </div>
                                <div class="row d-none d-md-inline-block question-detail">
                                    <div class="col-12">en moyenne, combien de prospects se transforment en nouveaux clients ?</div>
                                </div>
                                <div class="row question-slider">
                                    <div class="col-12">
                                        <div class="input-box">
                                            <span class="budget-button less" id="less-leads">-</span>
                                            <div class="slider slider-horizontal" id="">
                                                <div id="slide_lead_to_customer_"></div>
                                            </div>
                                            <span class="budget-button more" id="more-leads">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- 
                    <div class="col-12 d-md-none wp-estimater--calculatebtn">
                        <div class="form-group">
                            <button type="button" class="btn btn-lg btn-block btn-cta btn-advertisers_wp-estimater-" tabindex="0" id="mobilecalculatebutton">CALCULER  <img src="/wp-content/themes/kwankotheme/assets/images/btn_arrow_down.png"></button>
                        </div>
                    </div> -->
                    <div class="col-12 d-none d-md-block col-lg-4 wp-estimater--results">
                        <div class="row text-center results">
                            <div class="col-12 results-title">
                                <p class="text-capitalize">Résultats</p>
                            </div>
                            <div class="col-12 results-result results-num_clicks">
                                <p class="title">Nombre de clics</p>
                                <p class="value" id="number_of_clicks_value">1.000</p>
                            </div>
                            <div class="col-12 results-result results-num_leads">
                                <p class="title">Nombre de prospects</p>
                                <p class="value" id="number_of_leads_value">1</p>
                            </div>
                            <div class="col-12 results-result results-cost_per_lead">
                                <p class="title">Coût par prospect</p>
                                <p class="value">€ <span id="cost_per_lead_value">100</span></p>
                            </div>
                            <div class="col-12 results-result results-lead_worth">
                                <p class="title">Valeur prospect</p>
                                <p class="value">€ <span id="lead_value">0</span></p>
                            </div>
                            <div class="col-12 results-result results-est_revenue">
                                <p class="title">Revenu estimé</p>
                                <p class="value">€ <span id="estimated_revenue">0</span></p>
                            </div>
                            <div class="col-12 results-result results-est_profit">
                                <p class="title">Profit estimé</p>
                                <p class="value">€ <span id="estimated_profit">-100</span></p>
                            </div>
                            <div class="col-12 results-wp-estimater-">
                                <p class="title">Retour sur investissement</p>
                                <p class="value" id="wp-estimater-_value">-100 %</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
