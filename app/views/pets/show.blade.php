<h2 class="center"><% displayedPet.name %></h2>
<div class="row">
    <div class="col m6">
        <p>Status: <% displayedPet.status %></p>
        <p>posted by <a href="/users/<% displayedPet.user.id %>"><% displayedPet.user.email %></a> <% displayedPet.posted %></p>
        <p>ID#: <% displayedPet.a_num %></p>
    </div>
    <div class="col m6">
        <p>Species: <% displayedPet.species.species %></p>
        <p>Gender: <% displayedPet.gender %></p>
        <p>Breed: <% displayedPet.breed.breed %></p>
    </div>
</div>
<div class="row">
    <div class="col m12">
        <p><% displayedPet.description %></p>
    </div>
</div>
<div class="col s3" ng-repeat="image in displayedPet.images">
    <div class="card hoverable">
        <div class="card-image">
            <img ng-src="<% image.img_path %>">
        </div>
    </div>
</div>