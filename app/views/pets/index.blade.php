<div class="container">
    <div class="row">
        <div class="col m4" ng-repeat="pet in pets | filter:search">
            <div class="card hoverable" ng-click="openPetModal(pet.id)">
                <div class="card-image ">
                    <img ng-src="<% pet.images[0].img_path %>">
                    <span class="card-title"><% pet.name %></span>
                </div>
                <div class="card-content">
                    <p><% pet.description %></p>
                </div>
            </div>
        </div>
    </div>
</div>