<?php
/* @var $this yii\web\View */
?>

<main>
    <div class="col-lg-9 col-md-9 col-sm-9 right" id="content">
        <div class="block">
            <div ng-controller="StoreController as store">
                <div ng-repeat="product in store.products">
                    <product-title></product-title>
                    <img ng-src="{{product.images[0].full}}" />
                    <h6>{{product.price | currency}}</h6>
                    <button ng-show="product.canPurchase">Add to Cart </button>
                    <br/>
                    <section ng-controller="PanelController as panel">
                        <ul class="nav nav-pills">
                            <li ng-class="{active:panel.isSelected(1)}">
                                <a href ng-click="panel.selectTab(1)">Description</a>
                            </li>
                            <li ng-class="{active:panel.isSelected(2)}">
                                <a href ng-click="panel.selectTab(2)">Specifications</a>
                            </li>
                            <li ng-class="{active:panel.isSelected(3)}">
                                <a href ng-click="panel.selectTab(3)">Reviews</a>
                            </li>
                        </ul>
                        <div class="panel" ng-show="panel.tab === 1">
                            <h5>Description</h5>
                            <blockquote>{{product.description}}</blockquote>
                        </div>
                        <div class="panel" ng-show="panel.tab === 2">
                            <h5>Specifications</h5>
                            <p>Non yet</p>
                        </div>
                        <div class="panel" ng-show="panel.tab === 3">
                            <h5>Reviews</h5>
                            <blockquote ng-repeat="review in product.reviews">
                                <b>Stars: {{review.stars}}</b>
                                {{review.body}}
                                <cite>by: {{review.author}}</cite>
                            </blockquote>
                            <form name="reviewForm" ng-controller="ReviewController as reviewCtrl" ng-submit="reviewForm.$valid && reviewCtrl.addReview(product)" novalidate="novalidate">
                                <blockquote>
                                    <b>Stars: {{reviewCtrl.review.stars}}</b>
                                    {{reviewCtrl.review.body}}
                                    <cite>by: {{reviewCtrl.review.author}}</cite>
                                </blockquote>
                                <select ng-model="reviewCtrl.review.stars" required="required">
                                    <option value="1">1 star</option>
                                    <option value="2">2 stars</option>
                                    <option value="3">3 stars</option>
                                    <option value="4">4 stars</option>
                                    <option value="5">5 stars</option>
                                </select>
                                <textarea ng-model="reviewCtrl.review.body" required="required"></textarea>
                                <label>by:</label>
                                <input type="email" ng-model="reviewCtrl.review.author" required="required" />
                                <div> reviewForm is {{reviewForm.$valid}}</div>
                                <input type="submit" value="Submit" />
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!--
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id dui sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla sed orci vel tortor volutpat vestibulum. Cras ultrices neque at dui sodales dictum. Curabitur finibus est ac dolor aliquet, in efficitur felis convallis. Mauris eu fringilla sem, vel pulvinar risus. Phasellus scelerisque ipsum id turpis maximus, sit amet iaculis mi eleifend. Donec ac nunc bibendum, suscipit risus sed, condimentum orci.</p>
            <p>Aenean aliquam viverra massa et volutpat. Vestibulum non metus a orci gravida condimentum. Ut fermentum arcu ac odio suscipit, sit amet mollis nulla scelerisque. Phasellus eros purus, efficitur et risus quis, egestas commodo ex. Aenean egestas ante diam, eu maximus purus viverra in. Etiam a massa eu diam placerat elementum. Phasellus ac gravida metus, nec pharetra enim.</p>
            <p>Phasellus sodales nec elit sed vehicula. Maecenas accumsan dolor a faucibus dignissim. Aenean tincidunt ac dolor nec pharetra. Nullam mollis luctus consectetur. Quisque vitae tincidunt nibh. Nunc odio quam, pretium molestie mollis ac, dignissim et dolor. Quisque vehicula maximus nulla, id placerat nibh condimentum fermentum. In sodales cursus quam, in pellentesque orci placerat vel. Donec in aliquet lacus. Donec in pharetra lectus.</p>
            <p>Suspendisse eu massa nec libero dignissim placerat. Vestibulum ac enim nec felis blandit commodo vitae id nunc. Proin suscipit arcu in fermentum vulputate. Fusce tempor quam in nibh lacinia, a accumsan ipsum fringilla. Maecenas rutrum et tellus ac rutrum. Cras convallis libero sit amet ante sodales, sit amet viverra quam sollicitudin. Duis a est eget mi porta pellentesque eget sed ipsum. Aenean ipsum tortor, ultricies vitae fermentum non, vestibulum non nisl. Pellentesque euismod auctor rhoncus. Aliquam gravida, orci eu placerat venenatis, tellus dolor ornare augue, ut congue diam ante eget est. Etiam porta in ex a dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
            <p>Vestibulum placerat ipsum non ligula accumsan venenatis. Aenean nec magna semper, commodo leo ac, ultrices magna. Vivamus sed tempus purus, vitae malesuada nibh. Sed sed justo commodo, mollis eros quis, varius nulla. Sed eget convallis metus. Cras posuere volutpat nisl non volutpat. Sed interdum elit est, tincidunt malesuada sem pulvinar id.</p>
            -->
        </div>
    </div>
</main>
<aside>
    <div class="col-lg-3 col-md-3 col-sm-3 sidebar left" id="sidebar">
        <?=$this->render('../templates/loginWidget');?>
    </div>
</aside>