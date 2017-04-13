<main ng-app="apps" ng-controller="mahasiswaController">
  <table id="datatable" datatable="ng" class="table table-bordered" cellspacing="0" width="100%">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>Kategori Bebas Tanggungan</th>
          <th>NIM</th>
          <th>Program Studi</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="mhs in mhs">
          <td>{{ $index+1 }}</td>
          <td>{{ mhs.nama_mahasiswa }}</td>
          <td>{{ mhs.NIM }}</td>
          <td>{{ mhs.prodi }}</td>
        </tr>
      </tbody>
  </table>
</main>
