<p align="center">gues-houses-system</p>
<p align="center">University PHP Frameworks - Laravel project</p>

Controllers:
- House Controller
- Location Controller
- Type Controller
- Image Controller
- Search Controller

Models:
- House
    -- fields to fill in:
        --- houseName
        --- locationName
        --- numberOfRooms
        --- numberOfBeds
        --- houseType
- Location
    -- fields to fill in:
        --- locationName
- Type
    -- fields to fill in:
        --- houseType
- Image
    -- fields to fill in:
        --- fileName
        --- imageDescription
- User
    -- fields to fill in:
        --- name
        --- email
        --- password
    -- hidden fields:
        --- password
        --- remember_token
    
Views:
- auth
    -password
        -- email
        -- reset
    --login
    --register
    --verify
- houses
    -- create
        Create new house filling the fields houseName, locationName, numberOfRooms, numberOfBeds and houseType and add the new house in         the list of all houses
    -- index
        Show the list of all houses
    -- edit
        Change some information for the current house
    -- show
        Show only the information about the current house
    -- search
        Searching house of all houses
    We've got the opportunity to delete a choosen house and the information about it

- images
    -- create
        Add new image and give it a name
    -- index
        Show the list of all images

- locations
    -- create
        Create new location filling the field locationName and add the new location in the list of all locations
    -- index
        Show the list of all locations
    -- edit
        Change some information for the current location
    -- show
        Show only the information about the current location
    We've got the opportunity to delete a choosen location and the information about it

- types
    -- create
        Create new house type filling the field houseType and add the new type in the list of all types
    -- index
        Show the list of all types
    -- edit
        Change some information for the current type
    -- show
        Show only the information about the current type
    We've got the opportunity to delete a choosen type and the information about it

-- home
    Receiving a message "Welcome to our site!" when you are loged in
-- welcome
    The start up page where we've got a menu whith HOUSES, LOCATIONS, HOUSE TYPES, IMAGE buttons
