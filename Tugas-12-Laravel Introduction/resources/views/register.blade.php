@extends('master')

@section('content')
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form action="/welcome">
  <!-- nama  -->
  <label for="first">First Name :</label> <br />
  <input type="text" name="first" /> <br /><br />
  <label for="last">Last Name :</label><br />
  <input type="text" name="last" /><br /><br />

  <!-- gender -->
  <label for="">Gender:</label><br /><br />
  <input type="radio" id="male" name="gender" value="male" />
  <label for="male">Male</label><br />
  <input type="radio" id="female" name="gender" value="female" />
  <label for="female">Female</label><br />
  <input type="radio" id="other" name="gender" value="other" />
  <label for="other">Other</label><br /><br />

  <!-- nationality -->
  <label for="national">Nationality</label><br /><br />
  <select name="national" id="">
    <option value="Indonesian">Indonesian</option>
    <option value="Jepang">Singaporean</option>
    <option value="China">Malaysian</option> 
    <option value="China">Australian</option>
    </select><br /><br />

  <!-- laguange spoken -->
  <label for=""></label>
  <label for="">Language Spoken:</label><br /><br />
  <input type="checkbox" id="bahasa" name="language" value="bahasa" />
  <label for="Bahasa">Bahasa Indonesian</label><br />
  <input type="checkbox" id="english" name="language" value="english" />
  <label for="english">English</label><br />
  <input type="checkbox" id="other" name="language" value="other" />
  <label for="other">Other</label><br /><br />

  <!-- bio -->
  <label for="bio">Bio :</label><br /><br />
  <textarea name="bio" id="" cols="30" rows="10"></textarea>
  <br />
  <button type="submit">Sign Up</button>
</form>
@endsection