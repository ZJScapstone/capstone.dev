<form>
    <h4 class="center"> Create A New Pet Listing </h4>
    <p>To post a pet you must first login or register </p>
    <div class="row">
        <div class="input-field col s4">
            <select>
                <option value="" disabled selected>Status</option>
                <option value="1">Lost</option>
                <option value="2">Found</option>
                <option value="3">Adoptable</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select>
                <option value="" disabled selected>Species</option>
                <option value="1">Dog</option>
                <option value="2">Cat</option>
                <option value="3">Other</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select>
                <option value="" disabled selected>Breed</option>
                <option value="1">Dog</option>
                <option value="2">Cat</option>
                <option value="3">Other</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
            <select>
                <option value="" disabled selected>Shelter</option>
                <option value="1">SAPA</option>
                <option value="2">Purrfect Haven</option>
                <option value="3">ACS</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select>
                <option value="" disabled selected>Age</option>
                <option value="1">Baby</option>
                <option value="2">Young</option>
                <option value="3">Adult</option>
                <option value="4">Senior</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select>
                <option value="" disabled selected>Gender</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Unknown</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input  id="pet_name" type="text" class="validate">
            <label for="pet_name">Pet Name</label>
        </div>
        <div class="input-field col s6">
            <input id="pet_color" type="text" class="validate">
            <label for="pet_color">Pet Color</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea placeholder="Tell us about this friend" id="description" class="materialize-textarea"></textarea>
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
