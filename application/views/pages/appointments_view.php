<div class="container-fluid">
    <div class="d-flex flex-column text-center mb-5 pt-5">
        <h4 class="text-secondary mb-3">My Appointments</h4>
        <h1 class="display-4 m-0">List of my <span class="text-primary">Appointments</span></h1>
    </div>
    <!-- Table List Students -->
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table id="my_table" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Agenda</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $appointments_data = $this->model->MOD_GET_APPOINTMENTS_DATA($this->session->userdata("primary_key")); ?>

                        <?php if ($appointments_data) : ?>
                            <?php foreach ($appointments_data as $appointments) : ?>
                                <?php
                                if ($appointments->status == "Pending") {
                                    $status_color = "text-info";
                                } else if ($appointments->status == "Approved") {
                                    $status_color = "text-success";
                                } else {
                                    $status_color = "text-danger";
                                }

                                $timeString = $appointments->time;
                                $formattedTime = date('h:i A', strtotime($timeString));

                                $dateString = $appointments->date;
                                $formattedDate = date('F d, Y', strtotime($dateString));
                                ?>
                                <tr>
                                    <td style="width: 20%;"><?= $formattedDate ?></td>
                                    <td style="width: 10%;"><?= $formattedTime ?></td>
                                    <td style="width: 65%;"><?= $appointments->agenda ?></td>
                                    <td style="width: 5%;" class="<?= $status_color ?>"><?= $appointments->status ?></td>
                                </tr>
                            <?php endforeach ?>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>