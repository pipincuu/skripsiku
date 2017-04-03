<main ng-app="apps" ng-controller="mahasiswaController">
  <table class="table table-bordered">
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
