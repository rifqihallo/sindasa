<div class="content">
    <div class="container-fluid">

        <!-- Kotak info brp banyak data -->
        <div class="row">
            <div class="col-md-3">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="purple">
                        <i class="material-icons">child_care</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Data Anak</p>
                        <h3 class="card-title"><?= $this->db->get('anak')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i>
                            <?php if ($this->session->userdata('role') == 'staff') : ?>
                                <a href="<?= base_url('anak2') ?>">Jumlah Anak Terdata</a>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('role') == 'admin') : ?>
                                <a href="<?= base_url('anak') ?>">Jumlah Anak Terdata</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="material-icons">manage_accounts</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Data Akun</p>
                        <h3 class="card-title"><?= $this->db->get('user')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i>
                            <?php if ($this->session->userdata('role') == 'staff') : ?>
                                <a>Jumlah Akun User</a>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('role') == 'admin') : ?>
                                <a href="<?= base_url('user') ?>">Jumlah Akun Staff dan Admin</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="material-icons">home_work</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Posyandu</p>
                        <h3 class="card-title"><?= $this->db->get('posyandu')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i>
                            <?php if ($this->session->userdata('role') == 'staff') : ?>
                                <a>Jumlah Data Posyandu</a>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('role') == 'admin') : ?>
                                <a href="<?= base_url('posyandu') ?>">Jumlah Data Posyandu</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="purple">
                        <i class="material-icons">perm_media</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Galeri</p>
                        <h3 class="card-title"><?= $this->db->get('galeri')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i>
                            <?php if ($this->session->userdata('role') == 'staff') : ?>
                                <a>Jumlah Data Foto Galeri</a>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('role') == 'admin') : ?>
                                <a href="<?= base_url('galeri') ?>">Jumlah Data Foto Galeri</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafiknya -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-chart">
                    <!-- <div class="chartMenu">
                        <p>Grafik Stunting Anak</p>
                    </div> -->
                    <div class="chartBox">
                        <h2 class="text-center">Data Stunting Tahun 2022</h2>
                        <br>
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Grafik Stunting</h4>
                        <p class="category">Status Anak Dalam Bulan</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats"><i class="material-icons">access_time</i> Terakhir tanggal (phpp)</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik bar js -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // setup 
            const data = {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                datasets: [{
                        // 1. Gizi buruk
                        label: 'Gizi Buruk (Severely Wasted)',
                        data: [2, 4, 9, 6, 5, 7, 7, 4, 5, 6, 3, 0],
                        backgroundColor: ['rgba(255, 26, 104, 0.2)'],
                        borderColor: ['rgba(255, 26, 104, 1)'],
                        borderWidth: 1
                    },
                    {
                        label: 'Gizi Kurang (Wasted)',
                        data: [8, 9, 8, 10, 11, 9, 5, 3, 1, 4, 3, 3],
                        backgroundColor: ['rgba(54, 162, 235, 0.2)'],
                        borderColor: ['rgba(54, 162, 235, 1)'],
                        borderWidth: 1
                    }, {
                        label: 'Gizi Baik (Normal)',
                        data: [6, 10, 11, 14, 13, 13, 11, 9, 10, 6, 5, 6],
                        backgroundColor: ['rgba(255, 206, 86, 0.2)'],
                        borderColor: ['rgba(255, 206, 86, 1)'],
                        borderWidth: 1
                    }, {
                        label: 'Beresiko Overweight',
                        data: [2, 12, 10, 19, 16, 14, 15, 11, 10, 6, 3, 0],
                        backgroundColor: ['rgba(75, 192, 192, 0.2)'],
                        borderColor: ['rgba(75, 192, 192, 1)'],
                        borderWidth: 1
                    }, {
                        label: 'Gizi Lebih (Overweight)',
                        data: [8, 9, 10, 13, 10, 9, 8, 8, 10, 6, 4, 2],
                        backgroundColor: ['rgba(153, 102, 255, 0.2)'],
                        borderColor: ['rgba(153, 102, 255, 1)'],
                        borderWidth: 1
                    }, {
                        label: 'Obesitas',
                        data: [2, 12, 10, 19, 16, 15, 15, 11, 10, 6, 3, 0],
                        backgroundColor: [
                            'rgba(255, 159, 64, 0.2)',
                        ],
                        borderColor: ['rgba(255, 159, 64, 1)'],
                        borderWidth: 1
                    }
                ]
            };

            // config 
            const config = {
                type: 'bar',
                data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            // render init block
            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>

    </div>