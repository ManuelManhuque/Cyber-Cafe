<!DOCTYPE html>
<html>
<head>
    <title>Admin Form</title>
</head>
<body>
    <h1>Admin Form</h1>
    <form action="process_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="user_type">User Type:</label>
        <select id="user_type" name="user_type">
            <option value="Member">Member</option>
            <option value="Casual">Casual</option>
        </select><br><br>

        <label for="credit_card">Credit Card Number:</label>
        <input type="text" id="credit_card" name="credit_card" required><br><br>

        <label for="assigned_machine">Assigned Machine:</label>
        <input type="text" id="assigned_machine" name="assigned_machine" required><br><br>

        <label for="years_of_membership">Years of Membership:</label>
        <input type="text" id="years_of_membership" name="years_of_membership"><br><br>

        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="Bronze">Bronze</option>
            <option value="Silver">Silver</option>
            <option value="Gold">Gold</option>
        </select><br><br>

        <label for="service_type">Service Type:</label>
        <select id="service_type" name="service_type">
            <option value="Navigation">Navigation</option>
            <option value="Cafeteria">Cafeteria</option>
            <option value="Burning">Burning</option>
            <option value="Printing">Printing</option>
        </select><br><br>

        <label for="start_time">Start Time:</label>
        <input type="datetime-local" id="start_time" name="start_time" required><br><br>

        <label for="end_time">End Time:</label>
        <input type="datetime-local" id="end_time" name="end_time" required><br><br>

        <label for="downloaded_kbytes">Downloaded Kbytes:</label>
        <input type="number" id="downloaded_kbytes" name="downloaded_kbytes"><br><br>

        <label for="dish_number">Dish Number:</label>
        <input type="number" id="dish_number" name="dish_number"><br><br>

        <label for="burning_speed">Burning Speed:</label>
        <select id="burning_speed" name="burning_speed">
            <option value="8x">8x</option>
            <option value="12x">12x</option>
            <option value="16x">16x</option>
            <option value="24x">24x</option>
        </select><br><br>

        <label for="info_amount_mbytes">Information Amount (Mbytes):</label>
        <input type="number" id="info_amount_mbytes" name="info_amount_mbytes"><br><br>

        <!-- Add more fields as needed -->

        <input type="submit" value="Submit">
    </form>
</body>
</html>
