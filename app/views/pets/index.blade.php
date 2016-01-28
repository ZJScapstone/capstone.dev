<div class="container">
    <div class="row">
        <div ng-repeat="pet in pets | filter:petFilter | filter:search.raw">
            <div class="row" ng-if="$index % 3 == 0"></div>
            <div class="col m4">
                <div class="card hoverable" ng-click="openPetModal(pet.id)">
                    <div class="card-image ">
                        <img ng-src="<% pet.images[0].img_path %>">
                        <span class="card-title"><% pet.name %></span>
                    </div>
                    <div class="card-content">
                        <p><% pet.description | limitTo : 25 : 0 %>...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>