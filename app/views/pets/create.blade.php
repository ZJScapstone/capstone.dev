<p class="modal-action modal-close modal-dismiss">x</p>
<form ng-submit="addPet(newPet)">
    <div id="csrf-token">
        {{ Form::token() }}
    </div>
    <h4 class="center"> Create A New Pet Listing </h4>
    <div class="row">
        <div class="input-field col s4">
            <select id="pet-status" ng-init-"newPet.status=null" ng-model="newPet.status">
                <option value="" disabled selected>Status</option>
                <option value="available">Available</option>
                <option value="inprogress">In Progress</option>
                <option value="adopted">Adopted</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select ng-model="newPet.species_id">
                <option value="" disabled selected>Species</option>
                <option value="1">Dog</option>
                <option value="2">Cat</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select ng-model="newPet.gender">
                <option value="" disabled selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
            <select ng-model="newPet.age">
                <option value="" disabled selected>Age</option>
                <option value="baby">Baby</option>
                <option value="young">Young</option>
                <option value="adult">Adult</option>
                <option value="senior">Senior</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select ng-model="newPet.size_id">
                <option value="" disabled selected>Size</option>
                <option value="1">Small</option>
                <option value="2">Medium</option>
                <option value="3">Large</option>
                <option value="4">Xtra Large</option>
            </select>
        </div>
        <div class="input-field col s4">
            <input type="text" id="breed" ng-model="newPet.breed">
            <label for="breed">Breed</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
            <input id="pet_name" type="text" ng-model="newPet.name">
            <label for="pet_name">Pet Name</label>
        </div>
        <div class="input-field col s4">
            <input type="text" id="a_num" ng-model="newPet.a_num">
            <label for="a_num">Pet ID#</label>
        </div>
        <div class="input-field col s4">
            <input id="pet_color" type="text" ng-model="newPet.color">
            <label for="pet_color">Pet Color</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea placeholder="Tell us about your pet! e.g. are they spayed/ neutered? microchipped? vaccinated?" id="description" class="materialize-textarea" ng-model="newPet.description"></textarea>
            <label for="description">Pet Description</label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="left modal-action modal-close waves-effect waves-light btn">Close</a>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
    </div>
</form>
