<p class="modal-action modal-close modal-dismiss">x</p>
<h2 class="center"><% displayedPet.name %></h2>
<div class="row">
    <div class="col m6">
        <p>posted by <a href="/users/<% displayedPet.user.id %>"><% displayedPet.user.email %></a> <% displayedPet.posted %></p>
        <p><strong>Status:</strong> <em><% displayedPet.status %></em></p>
        <p><strong>ID#:</strong> <% displayedPet.a_num %></p>
    </div>
    <div class="col m6">
        <p><strong>Species:</strong> <% displayedPet.species.species %></p>
        <p><strong>Gender:</strong> <% displayedPet.gender %></p>
        <p><strong>Breed:</strong> <% displayedPet.breed.breed %></p>
    </div>
</div>
<div class="row">
    <div class="col m12">
        <p><% displayedPet.description %></p>
    </div>
</div>
<div class="row">
    <div class="col m6" ng-repeat="image in displayedPet.images">
        <img class="responsive-img" ng-src="<% image.img_path %>">
    </div>
</div>
<div class="modal-footer">
    <button class="right modal-action modal-close btn waves-effect waves-light">Close</button>
</div>