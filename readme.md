App Framework
=============
The App Framework is the basic skeleton app that I use for most simple PHP projects. It works the way I want and definetly built around my preferences and how I code.

The framework is built using the folowing components:
* PHP 5.4.24
* Smarty 
* Sqlite 3.1.18
* Bootstrap 3.1.1

There are a number of classes and helpers that make setting up a quick one-off application easy:
* App
* DB
* Validate
* Smarty Plugins
* Utility Functions

App
---
### flash
### page
### set
### error
### errorField
### success
### info
### pages
### config
### crumb
### header_nav
### left_nav
### render

DB
--
### Basic Usage:
$db->sql=$your_query
$db->values = array(val1, val2);
$result = $db->getOne();

### getOne
### getRow
### execute_query
### getArray
### exists($key, $table, $column='id')
$key can be a hash in the form of $key['column_name'] = $value or single variable for the row you wish to locate
Basic Example:
if($db->exists(1, 'people')){
    ...do some stuff
}

Extended Example:
if($db->exists('some_username', 'people', 'username')){
    ...do some stuf
}

Hash Example:
$search = array('first_name' => 'Joe', 'last_name' => 'Smith', 'email'=>'joe.smith@someisp.net');
if($db->exists($search, 'people')){
    ...do some stuff
}

### echo_sql
Debug utility for printing the current query.


Validate
--------
coming soon

Smarty Plugins
--------------
### checkbox
### checkbox_list
### input_field
### radio_list
### select
### submit
### textaera
### agoify

Utility Functions
-----------------
coming soon