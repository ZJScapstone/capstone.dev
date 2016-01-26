<h4><% displayedPet.name %></h4>
<div class="col s3" ng-repeat="image in displayedPet.images">
    <img ng-src="<% image.img_path %>">
</div>
<p><% displayedPet.description %></p>
<p>posted by <a href="/users/<% displayedPet.user.id %>"><% displayedPet.user.email %></a></p>