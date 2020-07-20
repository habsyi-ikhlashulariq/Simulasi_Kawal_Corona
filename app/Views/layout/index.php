
<?php foreach ($data as $data) : ?>
        <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="small-box <?= $data[0] ?>">
              <div class="inner">
                <h3><?= $data[1] ?><sup style="font-size: 20px"></sup></h3>

                <p><?= $data[2] ?></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
<?php endforeach; ?>
          <div class="col-lg-12 col-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Per Provinsi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="text-center">
                  <tr>
                    <th># No</th>
                    <th>Provinsi</th>
                    <th>Positif</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no =1; foreach ($data_prov as $data_prov): ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data_prov['attributes']['Provinsi']; ?></span></td>
                    <td class="text-center"><span class="badge badge-warning"><?= $data_prov['attributes']['Kasus_Posi']; ?></span></td>
                    <td class="text-center"><span class="badge badge-success"><?= $data_prov['attributes']['Kasus_Semb']; ?></span></td>
                    <td class="text-center"><span class="badge badge-danger"><?= $data_prov['attributes']['Kasus_Meni']; ?></span></td>
                 </tr>
                  <?php endforeach; ?>
                  </tbody>
                  </table>
                </div>
            </div>
            </div>
