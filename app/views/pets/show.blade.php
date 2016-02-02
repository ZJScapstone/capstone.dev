<p class="modal-action modal-close modal-dismiss">x</p>
<div class="container">
    <h2 class="center" id="displaypetname"><% displayedPet.name %></h2>
    <hr>
    <div class="row">
        <div class="col m6">
            <p>posted by <a href="/users/<% displayedPet.user.id %>"><% displayedPet.user.username %></a> <% displayedPet.posted %></p>
            <p><strong>Status:</strong> <em><% displayedPet.status %></em></p>
            <p><strong>ID#:</strong> <% displayedPet.a_num %></p>
        </div>
        <div class="col m6">
            <p><strong>Species:</strong> <% displayedPet.species.species %></p>
            <p><strong>Gender:</strong> <% displayedPet.gender %></p>
            <p><strong>Breed:</strong> <% displayedPet.breed %></p>
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
        <button class="right modal-action modal-close btn waves-effect waves-light" id="ft-green">Close</button>
    </div>
</div>