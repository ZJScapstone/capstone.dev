<form ng-submit="addPet(newPet)">
    <h4 class="center"> Create A New Pet Listing </h4>
    <p>To post a pet you must first login or register </p>
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
                <option value="3">Other</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select ng-model="newPet.breed_id">
                <option value="" disabled selected>Breed</option>
                @foreach($breeds as $breed)
                    <option value="{{ $breed->id }}">{{ $breed->breed }}</option>
                @endforeach
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
            <select ng-model="newPet.gender">
                <option value="" disabled selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="unknown">Unknown</option>
            </select>
        </div>
        <div class="input-field col s4">
            <input type="text" id="a_num" class="validate" ng-model="newPet.a_num">
            <label for="a_num">Pet ID#</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="pet_name" type="text" class="validate" ng-model="newPet.name">
            <label for="pet_name">Pet Name</label>
        </div>
        <div class="input-field col s6">
            <input id="pet_color" type="text" class="validate" ng-model="newPet.color">
            <label for="pet_color">Pet Color</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea placeholder="Tell us about this friend" id="description" class="materialize-textarea" ng-model="newPet.description"></textarea>
            <label for="description">Pet Description</label>
        </div>
    </div>
    <div class="file-field">
        <div class="btn">
            <span>Images</span>
            <input name="image[]"  type="file" multiple>
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload one or more images of your pet">
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="left modal-action modal-close waves-effect waves-light btn">Close</a>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">></i>
        </button>
    </div>
</form>
