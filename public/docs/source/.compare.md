---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#ConcessionController
Se encarga de realizar las operaciones relacionadas
a Concession.
<!-- START_d29da5737d84418fcc7c07a83a8b758a -->
## Muestra Concession en base al id de PartNumber.

GET /concession/partnumber/{id}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/concession/partnumber/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/concession/partnumber/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/concession/partnumber/{id}`

`HEAD api/v1/concession/partnumber/{id}`


<!-- END_d29da5737d84418fcc7c07a83a8b758a -->

<!-- START_51ea882e0bd39cca7d80784b569daa9d -->
## Obtiene todas las Concession reistradas.

GET /concession/

> Example request:

```bash
curl -X GET "http://localhost/api/v1/concession" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/concession",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/concession`

`HEAD api/v1/concession`


<!-- END_51ea882e0bd39cca7d80784b569daa9d -->

<!-- START_b470eadebc71bfac683af5f67d570466 -->
## Guarda una Concession nueva en la base de datos.

POST /concession/

> Example request:

```bash
curl -X POST "http://localhost/api/v1/concession" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/concession",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/concession`


<!-- END_b470eadebc71bfac683af5f67d570466 -->

<!-- START_e4197900c980c8887f4735d3efb7ec77 -->
## Muestra la Concession con el id especificado si existe.

GET /concession/{id}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/concession/{concession}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/concession/{concession}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/concession/{concession}`

`HEAD api/v1/concession/{concession}`


<!-- END_e4197900c980c8887f4735d3efb7ec77 -->

<!-- START_639bc0758ac6ac63e809f2626657f968 -->
## Actualiza una Concession.

PUT /concession/{id}

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/concession/{concession}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/concession/{concession}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/concession/{concession}`

`PATCH api/v1/concession/{concession}`


<!-- END_639bc0758ac6ac63e809f2626657f968 -->

<!-- START_132e23a6086eb37007d5d80420bd75f8 -->
## Elimina la Concesión especificada de la base de datos.

DELETE /concession/{id}

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/concession/{concession}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/concession/{concession}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/concession/{concession}`


<!-- END_132e23a6086eb37007d5d80420bd75f8 -->

#CustomerController
Se encarga de realizar las operaciones relacionadas
a Customer.
<!-- START_8263eab430e39add569c4cbb6a942370 -->
## Obtiene todos los Customer registrados.

GET /customer/

> Example request:

```bash
curl -X GET "http://localhost/api/v1/customer" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/customer",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/customer`

`HEAD api/v1/customer`


<!-- END_8263eab430e39add569c4cbb6a942370 -->

<!-- START_6f3777f6f7b214f3be250b794dec2a1a -->
## Guarda un Costumer nuevo en la base de datos.

POST /customer/

> Example request:

```bash
curl -X POST "http://localhost/api/v1/customer" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/customer",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/customer`


<!-- END_6f3777f6f7b214f3be250b794dec2a1a -->

<!-- START_352803e113b9a673e4850c1de81402b8 -->
## Muestra un Customer por id.

GET /customer/{id}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/customer/{customer}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/customer/{customer}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/customer/{customer}`

`HEAD api/v1/customer/{customer}`


<!-- END_352803e113b9a673e4850c1de81402b8 -->

<!-- START_f1fdd209416dc704c749d4a793558292 -->
## Actualiza el Customer especificado en la base de datos.

PUT /customer/{id}

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/customer/{customer}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/customer/{customer}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/customer/{customer}`

`PATCH api/v1/customer/{customer}`


<!-- END_f1fdd209416dc704c749d4a793558292 -->

<!-- START_5ad629e7ba922e1eac0702c6a5e42512 -->
## Elimina el Customer especificado de la base de datos.

DELETE /customer/{id}

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/customer/{customer}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/customer/{customer}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/customer/{customer}`


<!-- END_5ad629e7ba922e1eac0702c6a5e42512 -->

#PartNumberController
Se encarga de realizar las operaciones relacionadas
a PartNumber.
<!-- START_764f2b6fb8fd1eec8f8ddfbd3c1ce2a5 -->
## Muestra el PartNumber por nombre.

GET /partnumber/name/{name}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/partnumber/name/{name}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/partnumber/name/{name}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/partnumber/name/{name}`

`HEAD api/v1/partnumber/name/{name}`


<!-- END_764f2b6fb8fd1eec8f8ddfbd3c1ce2a5 -->

<!-- START_8e3ccdd7bbc269280f46c2a3e1cb0878 -->
## Muestra la lista de PartNumber registrados.

GET /partnumber/

> Example request:

```bash
curl -X GET "http://localhost/api/v1/partnumber" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/partnumber",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/partnumber`

`HEAD api/v1/partnumber`


<!-- END_8e3ccdd7bbc269280f46c2a3e1cb0878 -->

<!-- START_afee55c7cb9ff944accc343f1af7f608 -->
## Guarda un PartNumber nuevo en la base de datos.

POST /partnumber/

> Example request:

```bash
curl -X POST "http://localhost/api/v1/partnumber" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/partnumber",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/partnumber`


<!-- END_afee55c7cb9ff944accc343f1af7f608 -->

<!-- START_6a310d6b3177791ec2291b89329959d1 -->
## Muestra un PartNumber pr ID.

GET /partnumber/{id}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/partnumber/{partnumber}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/partnumber/{partnumber}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/partnumber/{partnumber}`

`HEAD api/v1/partnumber/{partnumber}`


<!-- END_6a310d6b3177791ec2291b89329959d1 -->

<!-- START_06ae9a5aeb514813f947df6979f33897 -->
## Actualiza el PartNumber en la base de datos.

PUT /partnumber/{id}

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/partnumber/{partnumber}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/partnumber/{partnumber}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/partnumber/{partnumber}`

`PATCH api/v1/partnumber/{partnumber}`


<!-- END_06ae9a5aeb514813f947df6979f33897 -->

<!-- START_ed4ef6f9e137c9b0fd73a96cc5ea67c7 -->
## Elimina el PartNumber con el id especificado de la base de datos.

DELETE /partnumber/{id}

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/partnumber/{partnumber}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/partnumber/{partnumber}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/partnumber/{partnumber}`


<!-- END_ed4ef6f9e137c9b0fd73a96cc5ea67c7 -->

#RiskReleaseController
Se encarga de realizar las operaciones relacionadas
a RiskRelease.
<!-- START_98f7451dce31a4a32d5690be1783edf8 -->
## Muestra los RiskRelease registrados.

GET /riskrelease/

> Example request:

```bash
curl -X GET "http://localhost/api/v1/riskrelease" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/riskrelease",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/riskrelease`

`HEAD api/v1/riskrelease`


<!-- END_98f7451dce31a4a32d5690be1783edf8 -->

<!-- START_eab74c118cca7f80a0ca2948c0a83e8c -->
## Guarda un RiskRelease nuevo en la base de datos.

POST /riskrelease/

> Example request:

```bash
curl -X POST "http://localhost/api/v1/riskrelease" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/riskrelease",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/riskrelease`


<!-- END_eab74c118cca7f80a0ca2948c0a83e8c -->

<!-- START_10a0e0b59037461249b1cae39558aacb -->
## Muestra un RiskRelease en base al id si es que existe.

GET /riskrelease/{id}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/riskrelease/{riskrelease}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/riskrelease/{riskrelease}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/riskrelease/{riskrelease}`

`HEAD api/v1/riskrelease/{riskrelease}`


<!-- END_10a0e0b59037461249b1cae39558aacb -->

<!-- START_05aee69a552700c5f788993ebed37c7d -->
## Actualia el Riskrelease especificado.

PUT /riskrelease/{id}

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/riskrelease/{riskrelease}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/riskrelease/{riskrelease}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/riskrelease/{riskrelease}`

`PATCH api/v1/riskrelease/{riskrelease}`


<!-- END_05aee69a552700c5f788993ebed37c7d -->

<!-- START_566ae00430439605d53eba834d1e2e0f -->
## Elimina el RiskRelease con el id especificado de la base de datos.

DELETE /riskrelease/{id}

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/riskrelease/{riskrelease}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/riskrelease/{riskrelease}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/riskrelease/{riskrelease}`


<!-- END_566ae00430439605d53eba834d1e2e0f -->

#SupplierController
Se encarga de realizar las operaciones relacionadas
a Supplier.
<!-- START_c76b4f33144272e3b74b9c04bb88ef99 -->
## Obtiene los Supplier registrados.

GET /supplier/

> Example request:

```bash
curl -X GET "http://localhost/api/v1/supplier" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/supplier",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/supplier`

`HEAD api/v1/supplier`


<!-- END_c76b4f33144272e3b74b9c04bb88ef99 -->

<!-- START_a770589a936da6762c3a80a18ddc4e2e -->
## Guarda un Supplier nuevo en la base de datos.

POST /supplier/

> Example request:

```bash
curl -X POST "http://localhost/api/v1/supplier" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/supplier",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/supplier`


<!-- END_a770589a936da6762c3a80a18ddc4e2e -->

<!-- START_7f17d356374b8f107d8b2604be98075e -->
## Muestra un Supplier en base al id si es que existe.

GET /supplier/{id}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/supplier/{supplier}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/supplier/{supplier}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/supplier/{supplier}`

`HEAD api/v1/supplier/{supplier}`


<!-- END_7f17d356374b8f107d8b2604be98075e -->

<!-- START_58f69e36c39a424e2b4c4afa3ea9fd05 -->
## Actualiza el Supplier especificado.

PUT /supplier/{id}

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/supplier/{supplier}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/supplier/{supplier}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/supplier/{supplier}`

`PATCH api/v1/supplier/{supplier}`


<!-- END_58f69e36c39a424e2b4c4afa3ea9fd05 -->

<!-- START_1397f10be53a5850899f52593051d39d -->
## Elimina el Supplier especificado de la base de datos.

DELETE /supplier/{id}

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/supplier/{supplier}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/supplier/{supplier}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/supplier/{supplier}`


<!-- END_1397f10be53a5850899f52593051d39d -->

#UserController
Se encarga de realizar las operaciones relacionadas
a User.
<!-- START_b2892eb191cd19c0a6f1aae56ba43db4 -->
## Obtiene los User registrados.

GET /user/

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/user`

`HEAD api/v1/user`


<!-- END_b2892eb191cd19c0a6f1aae56ba43db4 -->

<!-- START_96b8840d06e94c53a87e83e9edfb44eb -->
## Guarda un User nuevo en la base de datos.

POST /user/

> Example request:

```bash
curl -X POST "http://localhost/api/v1/user" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/user`


<!-- END_96b8840d06e94c53a87e83e9edfb44eb -->

<!-- START_eda2b3d78b052ccb36bffab3b344d72a -->
## Muestra un User en base al id especificado.

GET /user/{id}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/user/{user}`

`HEAD api/v1/user/{user}`


<!-- END_eda2b3d78b052ccb36bffab3b344d72a -->

<!-- START_1006d782d67bb58039bde349972eb2f0 -->
## Actualiza un User especificado.

PUT /user/{id}

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/user/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/{user}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/user/{user}`

`PATCH api/v1/user/{user}`


<!-- END_1006d782d67bb58039bde349972eb2f0 -->

<!-- START_a5d7655acadc1b6c97d48e68f1e87be9 -->
## Elimina un User especificado de la base de datos.

DELETE /user/{id}

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/user/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/{user}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/user/{user}`


<!-- END_a5d7655acadc1b6c97d48e68f1e87be9 -->

