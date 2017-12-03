# Pop Excel API 

PopExcelApi is easy to use and highly customizeable. Do you have columns in your csv file you would want to get data from ? What about pushing the data from the columns into arrays. 
PopExcelAPi has already set up names and contacts with the assumption that the CSV file contains names in its first column and contacts in its second column. A bit on how to customize these coming shortly. 

## Installing 
Download the ZIP file from Github and extract into your project. On every script that you would use the popExcelAPI make sure you require /path/to/vendor/autoload.php. The autoload.php is an automatic loader for all dependencies of the popExcelApi. Also after requiring in the autolaod file, make sure you import the classes in the src folder using the use keyword as all classes are namespaced. An example folder has been provided. Dig in to get a better explanation.   

**Note : Composer was used to manage the autoloading of classes asuch it may be required for a smooth operation. If you are new to composer, just follow the basic useage examples in this document. 

## Basic Usage 
In html, you would have a file input field with a name attribute, in this example our file input field has the name excel_file; 

```html
<input type="file" name="excel_file">
```

Next, in the php script that the data would be sent to, you can extract the data this way: 

```php
require_once '../vendor/autoload.php';

use Lixweb\Helpers;
use Lixweb\popExcelApiContract; 
use Lixweb\popExcelApi; 

$form_input_field = 'excel_file'; 
$excelApi = new popExcelApi($form_input_field);

$names    = $excelApi->getNames();
$contacts = $excelApi->getContacts(); 
```
From this example, the excel file contains in its first column names, and the second columnn contacts and i bet, the trend is becoming clear. In your project you may have columns like first_name, last_name, address etc... For those applications you would have to expand the code a bit. This library was a hack for a little project. And since the developer didnt want to waste time studying other php excel libraries which provide more features anyway, he came up with his own to fit his needs. If you want a more robust solution, you are free to look at PHPOffice, but if you want something simple to extract columns from a csv file into an array then this gets the Job Done. 


## Error codes 
By default the getDataByColumn function would return two types of errors. When it returns "err2", it means the name of the file has not been set. Since this is done implicitly hardly would you come accross this error in development but it is good to know incase you want to edit the code. Incase "err1" is returned, this means the extension of the file is invalid. We are expecting csv files only. Any other file type would not be processed asuch the error "err1" would be returned. 

## Extending the existing functionalities 
As said earlier, you can get data from only 2 columns. The column count begins at 1. If your csv file has more columns you can provide more descriptive methods for accessing such columns. This can be done in the popExcelApiContract.php and popExcelApi.php file. Assuming my excel file contains a third column for address, in the popExcelApiContract.php file in src directory i would add a new contract i.e a method signature e.g:

```
abstract public function getAddress();
```

Remember to add a new field to the field list in the same file. For this demonstration i would add a new empty array field with the name address_arr
Thus we would have :

```php 
protected $address_arr = []; 
```
After this is done, in the popExcelApi.php file i would provide an implementation for the method signature: 

```php 
public function getAddress( ){
 return $this->address_arr = $this->getDataByColumn( 3 );
}
```
Since the count of the columns begins at index 1, the third column is number 3, Giving that the first one is number 1. 

Voila, that is all you need to do, now you can go ahead and use that new function in your application. Make pull requests, add features, correct the code; Just hack something @dirtyScreen regards.... :)
