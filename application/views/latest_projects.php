<div class="col-12 col-lg-8 col-xxl-9 d-flex">
    <div class="card flex-fill">
        <div class="card-header">

            <h5 class="card-title mb-0">Latest Projects</h5>
        </div>
        <table class="table table-hover my-0">
            <thead>
                <tr>
                    <th>Projects</th>
                    <th>Name</th>
                    <th class="d-none d-xl-table-cell">Start Date</th>
                    <th class="d-none d-xl-table-cell">End Date</th>
                    <th>Status</th>
                    <th class="d-none d-md-table-cell">Assignee</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) {
                ?>
                    <tr>
                        <td><?= $row['project'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td class="d-none d-xl-table-cell"><?= $row['Start Date'] ?></td>
                        <td class="d-none d-xl-table-cell"><?= $row['End Date'] ?></td>
                        <td><span class="badge bg-success"><?= $row['status'] ?></span></td>
                        <td class="d-none d-md-table-cell"><?= $row['Assignee'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>