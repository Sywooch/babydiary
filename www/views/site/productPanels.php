<section>
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