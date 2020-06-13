<html>
<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 15px;
  
}
</style>
<body><table style="width:50%">

<tr>
    <td>NIM</td>
    <td><?= $NIM = (isset($_POST['NIM']) ? $_POST['NIM'] : ''); ?> </td> 
     </tr>
  <tr>
    <td>Nama</td>
    <td><?= $NAMA = (isset($_POST['NAMA']) ? $_POST['NAMA'] : ''); ?></td>
    
    </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><?= $KELAMIN = (isset($_POST['KELAMIN']) ? $_POST['KELAMIN'] : ''); ?></td>
    </tr>
  <tr>
    <td>Program Studi</td>
    <td><?= $PRODI = (isset($_POST['PRODI']) ? $_POST['PRODI'] : ''); ?> </td>
     </tr>
</table>
</body>
</html>