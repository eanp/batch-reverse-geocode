<h1 align="center">Batch Reverse Geocoding Multiple Addresses & Converter to CSV</h1>

<p align="center">
<a href="#"><img src="https://img.shields.io/badge/cacert.pem-0.svg?style=flat-square" alt="node.js version"></a>
<a href="#"><img src="https://img.shields.io/badge/composer-informational.svg?style=flat-square" alt="npm version">
</a>

</p>

Batch reverse geocoding multiple addresses & converter to CSV.

## Use Reverse Geocoding
1. Open file `geo.php `
2. Insert your google maps api to `apiKey`
3. Insert your data to `$batchData`
```
//example
$batchData = array(
    ["lat" => "-6.229728", "long" => "106.6894312"],
    ["lat" => "-6.2679629", "long" => "106.9365523"],
    ["lat" => "-6.2571719", "long" => "106.6834665"],
);
```

4. Type `php geo.php` in the terminal or command prompt to run the get file `result.json`

* ###### note   ``suggested to limit 1000 geocoding/api-call because 1 api result 500-1000 linecode.``

## Convert to CSV
1. Copy your geocoding result in `result.json` to `jsontocsv.php` between `$data = [ your result ];`

2. Replace several character 
```
      * replace brackets { } to [ ]
     ** replace : to =>
    *** also replace new line brake
       ] 
        [
    -- to -- 
      ], 
       [

* use ctrl+enter to add new line brake on vscode
```
4. Type `composer install` in the terminal or command prompt to add some package.

4. Type `php jsontocsv.php` in the terminal or command prompt to run the get file your csv file result.

## Clean Data Result in Google Sheet
1. Import yourcsvfileresult.csv to Google Sheet.
2. Copy your first column to another sheet.
3. Split your column `Select Data > Text to Columns`.
4. To get clean city district add new column and type function `=RIGHT(A:A;LEN(A:A)-8)`.
5. Block new column then type `ctrl + D`.
6. Now you get sequentially data with city district, city, province, and country. 

## Screenshots

<p align="left">
<img src="/screenshot/1.png" alt="SS1"/>
<p align="right">
<img src="/screenshot/2.png" alt="SS2"/>
<p align="center">
<img src="/screenshot/3.png" alt="SS3"/>

</p>

## About

[My Github](http://github.com/eanp)