<h4><% displayedPet.name %></h4>
<div class="col s3" ng-repeat="path in displayedPet.images">
    <img ng-src="<% path %>">
</div>
<p><% displayedPet.description %></p>
<p>posted by <a href="/users/<% displayedPet.user.id %>"><% displayedPet.user.email %></a></p>