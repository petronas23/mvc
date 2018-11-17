
<table id="customers">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>actions</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td><a href="" class="edit">Edit</a></td>
  </tr>
  <tr>
    <td>Berglunds snabbköp</td>
    <td>Christina Berglund</td>
    <td><a href="" class="edit">Edit</a></td>
  </tr>
</table>


<form action="<?=base_url('/add-storage')?>" method="POST"">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
Storage: <input type="text" name="storage"><br>
Storage: <select name="strategy">
            <option value="database">Database</option>
            <option value="file">file</option>
        </select>

<input type="submit">
</form>

<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 1000px;
    margin: 10% 5% 5% 5%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>