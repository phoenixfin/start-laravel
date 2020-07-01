<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Form Sign Up
        </title>
    </head>
    <body>
        <h1>Buat Account Baru</h1>
        <h2>Sign Up Form</h2>
        <form action="/welcome" method="POST">
            @csrf
            <p>First name:</p>
            <input type="text" name="first_name">
            <p>Last name:</p>
            <input type="text" name="last_name">
            <p>Gender:</p>
            <input type="radio" name='gender' value="Male">Male<br>
            <input type="radio" name='gender' value="Female">Female<br>
            <input type="radio" name='gender' value="Other">Other
            <p>Nationality:</p>
            <select name="nationality">
                <option value="Indonesian">Indonesian</option>
                <option value="Non-indonesian">Non-indonesian</option>
            </select>
            <p>Language Spoken</p>
            <input type="checkbox" name="language" value="Indonesian">Bahasa Indonesia <br>
            <input type="checkbox" name="language" value="English">English <br>
            <input type="checkbox" name="language" value="Otherg">Other 
            <p>Bio</p>
            <textarea id="w3review" name="w3review" rows="8">
            </textarea><br>

            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>