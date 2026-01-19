<!DOCTYPE html>
<html>
<head>
    <title> StayLuxe | Gallery</title>
   
</head>
<body>
    <div class="content">
        <div class="wrap" style="display: flex; justify-content: center;">
            
            <form method="post" action="process.php">
                <fieldset>
                    <legend>Room Booking:</legend>
                    
                    <label>First Name</label>
                    <input type="text" name="first_name" />
                    <br />
                    
                    <label>Last Name</label>
                    <input type="text" name="last_name" />
                    <br />
                    
                    <label>Room</label>
                    <select name="room">
                        <option value="deluxe">deluxe</option>
                        <option value="semi_deluxe">semi deluxe</option>
                        <option value="regular">regular</option>
                        <option value="luxury">luxury</option>
                    </select>
                    <br />
                    
                    <label>Duration of stay</label>
                    <input type="number" name="duration" />
                    <br />
                    
                    <label>Email</label>
                    <input type="text" name="email" />
                    <br />
                    
                    <input type="submit" value="Book Room">
                </fieldset>
            </form>

        </div>
    </div>

</body>
</html>