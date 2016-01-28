'use strict';
var app = angular.module('petsApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('PetsController', ['$http', '$scope',  function($http, $scope){

    function createDropzone () {
        var myDropzone = new Dropzone("#image-upload", { 
            url: "/images/pet",
            maxFilesize: 10,
            sending: function(file, xhr, formData){
                xhr.setRequestHeader('csrftoken', $scope.csrfToken);
                formData.append('pet_id', $scope.newPet.id);
            },
            success: function(file, response){
                $scope.getPets();
            }
        });
    }

    function onPostSuccess (response) {
        if (response.data.success){
            $scope.newPet.id = response.data.pet.id;
            Materialize.toast('Pet Created!', 3000, 'rounded');
            createDropzone();
            $('#image-upload-modal').openModal();
        } else {
            var errors = response.data.errors;
            for (var err in errors) {
                errors[err] = errors[err].pop();
            }
            $scope.errors = errors;
            $('#errors').openModal({
                complete: function(){
                    $('#pets-create-modal').openModal();
                }
            });
        }
        $scope.getPets();
    }

    // if a pet doesn't have images, use a placeholder based on species
    function addPlaceholders(pet){
        if (!pet.images.length) {
            var img = '';

            if (pet.species.species == 'cat') {
                img = 'http://placehold.it/400';
            } else {
                img = 'http://placehold.it/500';
            }

            pet.images.push({
                "img_path": img
            });
        }
        return pet;
    }

    String.prototype.has = function(substr){
        return this.indexOf(substr) !== -1;
    };

    $scope.petFilter = function(pet){
        var search = $scope.search;
        return (
            pet.name.has(search.name) &&
            pet.a_num.has(search.a_num) &&
            pet.color.has(search.color) &&
            pet.age.has(search.age) &&
            pet.size.size.has(search.size) &&
            pet.breed.has(search.breed) &&
            pet.status.has(search.status) &&
            pet.species.species.has(search.species) &&
            pet.gender.has(search.gender) 
        );
    }

    $scope.getPets = function(){
        $http.get('/pets').then(function(response){
            $scope.user = response.data.user;
            $scope.pets = response.data.pets.map(addPlaceholders);
        },function(e){
            console.log(e);
        });
    };

    $scope.openPetModal = function(id){
        $scope.displayedPet = $scope.pets.filter(pet => pet.id == id).pop();
        $('#show-pet-modal').openModal();
        setTimeout( function(){
            $('#show-pet-modal').css({
                "transition": "all 0.3s",
                "top": "5%"
            });
        }, 400);
    };

    $scope.addPet = function(pet){
        $('#pets-create-modal').closeModal();
        pet.user_id = $scope.user.id;
        $http({
            method: 'POST',
            url: '/pets',
            data: pet,
            headers: {
                "csrftoken": $scope.csrfToken,
                "X-Requested-With": "XMLHttpRequest"
            }
        }).then(onPostSuccess, console.log);
    };

    $scope.finishNewPet = function(){
        $scope.newPet = {};
    };

    $scope.verifyUser = function(){
        if ( !$scope.user ) {
            $('#pets-create-modal').closeModal();
            $('#auth-modal').openModal();
        }
    };

    $scope.clearSearch = function(){
        $scope.search       = {
            "raw": '',
            "name": '',
            "a_num": '',
            "color": '',
            "age": '',
            "size": '',
            "breed": '',
            "status": '',
            "species": '',
            "gender": ''
        };

        $('#search-modal select').each(function(){
            $(this).val(''); 
            $(this).material_select();
        });
    };

    $scope.pets         = [];
    $scope.displayedPet = {};
    $scope.newPet       = {};
    $scope.errors       = {};
    $scope.user         = {};
    $scope.search       = {
        "raw": '',
        "name": '',
        "a_num": '',
        "color": '',
        "age": '',
        "size": '',
        "breed": '',
        "status": '',
        "species": '',
        "gender": ''
    };

    $scope.csrfToken = $('#csrf-token input').val();

    $scope.getPets();
}]);