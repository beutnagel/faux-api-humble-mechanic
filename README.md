# faux-api-humble-mechanic
An API for the Humble Mechanic workshop - baaa.dk
https://github.com/beutnagel/humble-mechanic

## Usage
Expects to receive a __reg_number__ key with the POST method

This repository is synched to https://humble-mechanic-api.herokuapp.com/

## Example code
```
var data = new FormData();
data.append("reg_number", "am31793");

var xhr = new XMLHttpRequest();

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "https://humble-mechanic-api.herokuapp.com/");


xhr.send(data);
```
