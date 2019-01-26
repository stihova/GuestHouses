<p align="center">Gues Houses System</p>
<p align="center">University PHP Frameworks - Laravel project</p>

1. Controllers:
- House Controller
- Location Controller
- Type Controller
- Image Controller
- Search Controller

2. Models:
2.1. House
    - fields to fill in:
        - houseName
        - locationName
        - numberOfRooms
        - numberOfBeds
        - houseType
2.2 Location
    - fields to fill in:
        - locationName
2.3. Type
    - fields to fill in:
        - houseType
2.4. Image
    - fields to fill in:
        - fileName
        - imageDescription
2.5. User
    - fields to fill in:
        - name
        - email
        - password
    - hidden fields:
        - password
        - remember_token
    
3. Views:
3.1. auth
    -password
        - email
        - reset
    -login
    -register
    -verify
3.2. houses
    - create
        Create new house filling the fields houseName, locationName, numberOfRooms, numberOfBeds and houseType and add the new house in         the list of all houses
    - index
        Show the list of all houses
    - edit
        Change some information for the current house
    - show
        Show only the information about the current house
    - search
        Searching house of all houses
    We've got the opportunity to delete a choosen house and the information about it

3.3. images
    - create
        Add new image and give it a name
    - index
        Show the list of all images

3.4. locations
    - create
        Create new location filling the field locationName and add the new location in the list of all locations
    - index
        Show the list of all locations
    - edit
        Change some information for the current location
    - show
        Show only the information about the current location
    We've got the opportunity to delete a choosen location and the information about it

3.5. types
    - create
        Create new house type filling the field houseType and add the new type in the list of all types
    - index
        Show the list of all types
    - edit
        Change some information for the current type
    - show
        Show only the information about the current type
    We've got the opportunity to delete a choosen type and the information about it

- home
    Receiving a message "Welcome to our site!" when you are loged in
- welcome
    The start up page where we've got a menu whith HOUSES, LOCATIONS, HOUSE TYPES, IMAGE buttons
