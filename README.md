# CustomerIO Laravel package

.  |  .
:-------------------------:|:-------------------------:
![](https://i.pinimg.com/favicons/fbca8b7a6100411130abc2f23527a18ba614184a1ff1b52293e4cc04.ico?15b542fe9aae58f3af08772d23415742)  |  ![](https://www.fullfatthings.com/sites/default/files/styles/1of4_square_xs/public/field_card_image/laravel-logo.png.jpg?itok=8gp9lXmr)


## About

* Laravel CustomerIO is a module that implements the customer.io service API in the Laravel framework.

## Installation

From your project folder:
* Run `composer require fabioferreira/customerio`
* Run `php artisan vendor:publish --all`

Then add the following keys to your .env file (you can grab the correct keys in the workspace integration settings page):
* CUSTOMERIO_SITE_ID=your_workspace_site_id
* CUSTOMERIO_API_KEY=your_workspace_api_key
## Getting started
Laravel CustomerIO package provides a facade that you can just import and use virtually anywhere in your project:

Example:

```
use FabioFerreira\CustomerIO\Facades\CustomerIO;

Route::get('/create-customer', function () {

    $customerID = 123;
    $customerAttributes = ['first_name' => 'Fabio', 'email' => 'fabio86ferreira@gmail.com'];

    return CustomerIO::createCustomer($customerID, $customerAttributes);

 });
```

### Available methods

Method | Parameters | Description
--- | --- | ---
createCustomer | string customerId, array customerAttributes | Creates a new customer
updateCustomer | string customerId, array customerAttributes | Updates a customer by its ID
triggerEventOnCustomer | string customerId, string eventName, array eventAttributes | Sends an event on a customer

## Contributing

Feel free to create issues and report bugs.


## License

[MIT](https://opensource.org/licenses/MIT)