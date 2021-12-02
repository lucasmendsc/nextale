<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# How can should i run it ?

This aplication has an API posted and ready to use at [Postman Repository](https://www.postman.com/satellite-physicist-92716702/workspace/nextale/overview),wich has these endpoints:

## Tale

Create a Tale `(tales/create)`

    1. POST method
    2. Needs to go to the`Boddy` session and give the required camps
    3. Creates a new Tale
    
Get all Tales `(tales/)`

    1. GET method
    2. Gets all Tales
    
Get a single Tale `(tales/getTale)`

    1. GET method
    2. Gets a Tale
    
Update Tale `(tales/update/id)`

    1. POST method
    2. Needs to go to the`Boddy` session and give the required camps
    2. Updates a Tale
    
Delete Tale `(tales/delete/id)`
 
    1. GET method
    2. Deletes a Tale
    
## Media

Create a Media and make a Media belong to a Tale `(medias/create)`

    1. POST method
    2. Needs to go to the`Boddy` session and give the required camps
    3. Upload a new Media and referece her Tale
    
Get all urls `(medias/urls/id)`

    1. GET method
    2. Gets all urls of a Tale
    3. Shows the file name, that will be used to Download a file
    
Download file `(tales/download)`

    1. GET method
    2. Downloads a file by giving his name
    
Delete Media `(medias/delete/name)`

    1. GET method
    2. Deletes a Media file and a Media row
    
