<div class="container">
    <div class="row">
        <div ng-repeat="pet in pets | filter:petFilter | filter:search.raw">
            <div class="row" ng-if="$index % 3 == 0"></div>
            <div class="col m4">
                <div class="card small hoverable" ng-click="openPetModal(pet.id)">
                    <div class="card-image">
                        <img ng-src="<% pet.images[0].img_path %>">
                    </div>
                    <div class="card-content">
                        <p class="center"><strong><% pet.name | limitTo : 25 : 0 %></strong></p>
                        <p><% pet.a_num | limitTo : 25 : 0 %></p>
                        <p><% pet.gender | limitTo : 25 : 0 %></p>
                        <p><% pet.breed | limitTo : 35 : 0 %></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>