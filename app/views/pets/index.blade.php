<div class="container">
    <div class="row">
        <div class="pet" ng-repeat="pet in pets | filter:search">
            <div class="col m4">
                <div class="card hoverable" ng-click="openPetModal(pet.id)">
                    <div class="card-image ">
                        <img ng-src="<% pet.images[0].img_path %>">
                        <span class="card-title"><% pet.name %></span>
                    </div>
                    <div class="card-content">
                        <p><%$index + pet.description | limitTo : 50 : 0 %>...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>