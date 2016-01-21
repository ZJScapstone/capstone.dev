var fs = require('fs');
var file = 'breeds.txt';

function createVariableNameObject(breed){
    breed = breed.trim();
    var breedAsVar = breed.replace(/[^a-zA-Z]/g, '');
    breedAsVar = breedAsVar.substr(0,1).toLowerCase() + breedAsVar.substr(1);
    return {
        "varName" : '$' + breedAsVar.replace(/\s/g, ''),
        "name": breed
    };
}

var contents = fs.readFileSync(file).toString().trim().split('\n');

var split = contents.indexOf('');

var dogs = contents.slice(0, split);
var cats = contents.slice(split + 1);


cats.map(createVariableNameObject).forEach(function(breed){
    console.log(breed.varName + ' = new Breed();');
    console.log();
    console.log(breed.varName + '->breed = \'' + breed.name + '\';');
    console.log(breed.varName + '->species = \'cat\'');
    console.log(breed.varName + '->save();');
    console.log();
});

dogs.map(createVariableNameObject).forEach(function(breed){
    console.log(breed.varName + ' = new Breed();');
    console.log();
    console.log(breed.varName + '->breed = \'' + breed.name + '\';');
    console.log(breed.varName + '->species = \'dog\'');
    console.log(breed.varName + '->save();');
    console.log();
});
