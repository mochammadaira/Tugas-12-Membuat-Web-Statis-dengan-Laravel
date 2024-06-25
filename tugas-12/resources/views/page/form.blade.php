<html>
    <header>
        <title>Form Sign Up</title>
    </header>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    
    <form action="/send">
        @csrf
        <label>First Name:</label><br>
        <p></p>
        <input type="text" name="nama" required><br></br>
        <label>Last Name:</label><br>
        <p></p>
        <input type="text" name="nama-akhir"required><br></br>
        <label>Gender:</label><br>
        <p></p>
        <input type="radio">Male<br>
        <input type="radio">Female<br>
        <input type="radio">Other<br>
        <p></p>
        <label> Nationally:</label><br>
        <p></p>
        <select name="nationally" required>
            <option value="Indo">Indonesian</option>
            <option value="Singapore">Singaporean</option>
            <option value="Malay">Malaysian</option>
            <option value="Australia">Australian</option>
        </select><br>
        <p></p>
        <label>Language Spoken:</label><br>
        <p></p>
        <input type="checkbox">Bahasa Indonesia<br>
        <input type="checkbox">English<br>
        <input type="checkbox">Other<br>
        <p></p>
        <label>Bio:</label><br>
        <textarea name="bio" rows="15" cols="30" required></textarea>
        <br></br>
        <input type="submit" value="Sign Up">
    </form>

</html>